<?php

namespace App\Http\Livewire;

use App\Models\Monitor;
use App\Models\Turno;
use Carbon\Carbon;
use Livewire\Component;

class BuscarReporte extends Component
{
    public $buscar;
    public $buscarFecha;
    public $buscarTurno;
    public $repo;
    public $rep;

    public function updatedBuscarFecha(){
        // $this->buscarFecha = Carbon::parse($this->buscarFecha)->isoFormat('dddd DD MMMM YYYY');
    }

    public function renderPDF($reporte){
        $this->reset('rep');
        $this->reset('repo');
        $this->repo = $reporte;
        // if ($this->repo != null) {
        //     $this->repo = $reporte;
        //     $this->rep = $reporte;

        // }
        // else{
        //     $this->repo = $reporte;
        //     $this->rep = $reporte;
        // }

        $this->emit('render', ['reporte' => $reporte]);

        // if ($this->repo != null) {

        //     $this->repo = $reporte;
        // }
        // else{
        //     $this->repo = $reporte;
        // }







    }


    public function cerrarVisualizador(){
        $this->reset('repo');
    }

    // public function renPDF(){
    //     return view('livewire.pdf-render',[

    //     ]);
    // }

    public function render()
    {


            return view('livewire.buscar-reporte', [
                'reportes' => Turno::where('responsable', 'like', '%'.$this->buscar.'%')
                ->where('turno', "like", '%'.$this->buscarTurno.'%')
                ->where('fecha', '=', Carbon::parse($this->buscarFecha)->isoFormat('dddd DD MMMM YYYY'))->simplePaginate(10),
                'monitores' => Monitor::all(),

            ]);


    }
}
