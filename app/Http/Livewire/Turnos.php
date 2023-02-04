<?php

namespace App\Http\Livewire;

use App\Mail\TestMail;
use App\Models\Comentario;
use App\Models\Reporte;
use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Dompdf\Dompdf;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\App as FacadesApp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;



class Turnos extends Component
{
    public $turnoBD;
    public $checksM1 = [];
    public $checksM2 = [];
    public $checksM3 = [];
    public $checksM4 = [];
    public $checksM5 = [];
    public $checksM6 = [];
    public $tabMonitor = "1";
    public $turno = 1;
    public $horaPrev = "";
    public $nombreMonitor;
    public $comentario;
    // public $comentarios = [];
    public $edit = false;
    public $editKey = "";
    public $nombrePDF = "";
    public $fechaTurno = "";
    public $finalizando = 0;


    protected $rules = [
        'comentario' => 'required',
    ];

    protected $messages = [
        'comentario.required' => 'No puede agregar un comentario vacío',
    ];


    public function updatedTurno($turn)
    {
        $this->turno = $turn;
    }

    public function uptdHora()
    {
        $this->horaPrev = Carbon::now()->isoFormat('HH:mm');
    }

    public function agregarComentario()
    {
        $this->validate();

        $comen = Comentario::create([
            'comentario' => $this->comentario,
            'hora' => Carbon::now()->isoFormat('HH:mm'),
            'turno' => $this->turnoBD->id,

        ]);

        $comen->save();

        $this->reset('comentario');
    }


    public function updatedNombreMonitor($nombre)
    {
        $this->nombreMonitor = $nombre;
    }

    public function borrarDatos()
    {
        $this->reset('comentario');
    }

    public function eliminarComentario($id)
    {
        $comen = Comentario::findOrFail($id);
        $comen->delete();
    }

    public function editarComentario($id)
    {
        $this->comentario = Comentario::findOrFail($id)->comentario;
        $this->edit = true;
        $this->editKey = $id;
    }

    public function guardarComentario()
    {
        $comen = Comentario::findOrFail($this->editKey);
        $comen->comentario =$this->comentario;
        $comen->save();
        $this->edit = false;
        $this->reset('comentario');
    }

    public function render()
    {
        return view('livewire.reportev2',
        [
            // 'comentarios' => Comentario::where('turno', '=', $this->turnoBD->id),
        ]
    );
    }

    public function finalizarReporte()
    {



        $fechaPDF = Carbon::now()->isoFormat('DD-MM-YYYY');
        $this->nombrePDF = $fechaPDF . "_" . $this->turnoBD->responsable . "_" . $this->turnoBD->turno . ".pdf";
        $pdf = PDF::loadView('central.reporte', [
            'comentarios' => $this->turnoBD->comentarios,
            "nombreMonitor" => $this->turnoBD->responsable,
            "turno" => $this->turnoBD->turno,
            'fechaTurno' => $this->fechaTurno,
            'checksM1' => $this->checksM1,
            'checksM2' => $this->checksM2,
            'checksM3' => $this->checksM3,
            'checksM4' => $this->checksM4,
            'checksM5' => $this->checksM5,
            'checksM6' => $this->checksM6,
        ]);

        $pdf->save('../public/archivos/'.$this->nombrePDF);

        Mail::send('central.mail_test', [
            'comentarios' => $this->turnoBD->comentarios,
            'nombreMonitor' => $this->turnoBD->responsable,
            'turno' => $this->turnoBD->turno,
            'fechaTurno' => $this->fechaTurno
        ], function ($message) {
            $message->from('centralmonitoreo@seguridadbyb.cl', 'Central de monitoreo, Seguridad ByB');
            $message->sender('centralmonitoreo@seguridadbyb.cl', 'Central de monitoreo, Seguridad ByB');
            $message->to('dolivos@seguridadbyb.cl', 'Diego Olivos:');
            $message->cc('jbalboa@seguridadbyb.cl', 'Joel Balboa');
            $message->subject('Reporte de monitoreo' . '-' . $this->fechaTurno);
            $message->attach('../public/archivos/' . $this->nombrePDF);
        });

        $this->turnoBD->get();
        $this->turnoBD->nombre_pdf = $this->nombrePDF;
        $this->turnoBD->finalizado = true;
        $this->turnoBD->save();

        toast('Los datos han sido guardados exitosamente', 'success')->position('bottom-right');



        return redirect(url('/'));
    }
}
