<?php

namespace App\Http\Livewire;

use App\Mail\TestMail;
use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\App as FacadesApp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Turnos extends Component
{
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
    public $comentario = "";
    public $comentarios = [];
    public $edit = false;
    public $editKey = "";
    public $nombrePDF = "";
    public $fechaTurno = "";
    public $finalizando = 0;


    protected $rules = [
        'nombreMonitor' => 'required',
    ];

    protected $messages = [
        'nombreMonitor.required' => 'Debe ingresar su nombre',
    ];


    public function updatedTurno($turn)
    {
        $this->turno = $turn;
    }

    public function uptdHora(){
        $this->horaPrev = Carbon::now()->isoFormat('HH:mm');
    }

    public function updatedComentarios()
    {
        dd($this->comentario);
        $this->comentarios = $this->comentario;
    }
    public function uptdComentarios()
    {
        if ($this->comentario != null) {
            $this->comentarios[] = Carbon::now()->isoFormat('HH:mm')."-".$this->comentario;
        }
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

    public function eliminarComentario($key)
    {
        unset($this->comentarios[$key]);
    }

    public function editarComentario($key)
    {
        $this->comentario = $this->comentarios[$key];
        $this->edit = true;
        $this->editKey = $key;
    }

    public function guardarComentario()
    {
        $this->comentarios[$this->editKey] = $this->comentario;
        $this->edit = false;
        $this->reset('comentario');
    }

    public function render()
    {
        return view('livewire.reportev2');
    }

    public function finalizarReporte()
    {
        $this->validate();


        $fechaPDF = Carbon::now()->isoFormat('DD_MM_YYYY_HH_mm');
        $this->nombrePDF = $this->turno . "_" . $this->nombreMonitor . "_" . $fechaPDF . ".pdf";
        $pdf = PDF::loadView('central.reporte', [
            'comentarios' => $this->comentarios,
            "nombreMonitor" => $this->nombreMonitor,
            "turno" => $this->turno,
            'fechaTurno' => $this->fechaTurno,
            'checksM1' => $this->checksM1,
            'checksM2' => $this->checksM2,
            'checksM3' => $this->checksM3,
            'checksM4' => $this->checksM4,
            'checksM5' => $this->checksM5,
            'checksM6' => $this->checksM6,
        ]);

        $pdf->save('../public/archivos/' . $this->nombrePDF);

        Mail::send('central.mail_test', [
            'comentarios' => $this->comentarios,
            'nombreMonitor' => $this->nombreMonitor,
            'turno' => $this->turno,
            'fechaTurno' => $this->fechaTurno
        ], function ($message) {
            $message->from('centralmonitoreo@seguridadbyb.cl', 'Central de monitoreo, Seguridad ByB');
            $message->sender('centralmonitoreo@seguridadbyb.cl', 'Central de monitoreo, Seguridad ByB');
            $message->to('dolivos@seguridadbyb.cl', 'Diego Olivos:');
            $message->cc('jbalboa@seguridadbyb.cl', 'Joel Balboa');
            $message->cc('gabriel.pelle25@gmail.com', 'Gabriel Pelle');
            $message->cc('franciscogzlz533@gmail.com', 'Francisco González');
            $message->subject('Reporte de monitoreo'.'-'. $this->fechaTurno);
            $message->attach('../public/archivos/' .$this->nombrePDF);
        });

        return redirect(url('/'));
    }


}
