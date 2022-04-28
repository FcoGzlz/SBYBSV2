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

    public function renderPDF($reporte){
        $this->reset('repo');
        $this->repo = $reporte;
        $this->emit('render', ['reporte' => $reporte]);
    }


    public function cerrarVisualizador(){
        $this->reset('repo');
    }


    public function render()
    {


            return view('livewire.buscar-reporte', [
                'reportes' => Turno::where('responsable', 'like', '%'.$this->buscar.'%')
                ->where('turno', "like", '%'.$this->buscarTurno.'%')
                ->where('fecha', '=', Carbon::parse($this->buscarFecha)->isoFormat('dddd DD MMMM YYYY'))
                ->where('nombre_pdf', '!=', null)->get(),
                'monitores' => Monitor::all(),

            ]);


    }
}
