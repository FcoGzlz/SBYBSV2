<?php

namespace App\Http\Livewire;

use App\Models\Monitor;
use App\Models\Reporte;
use App\Models\Turno;
use Carbon\Carbon;
use Livewire\Component;

class BuscarReporte extends Component
{
    public $buscar;
    public $buscarFecha;
    public $buscarTurno;
    public $repo;

    public function updatedBuscarFecha(){
        // $this->buscarFecha = Carbon::parse($this->buscarFecha)->isoFormat('dddd DD MMMM YYYY');
    }

    public function renderPDF($reporte){
        if ($this->repo != null) {
            $this->reset('repo');

            $this->repo = $reporte;

        }
        else{
            $this->repo = $reporte;
        }
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
