<?php

namespace App\Http\Livewire;

use App\Models\Monitor;
use App\Models\Turno;
use Livewire\Component;

class BuscarReporte extends Component
{
    public $buscar;
    public $buscarFecha;
    public $buscarTurno;
    public function render()
    {


            return view('livewire.buscar-reporte', [
                'reportes' => Turno::where('responsable', 'like', '%'.$this->buscar.'%')->where('turno', "like", '%'.$this->buscarTurno.'%')->simplePaginate(10),
                'monitores' => Monitor::all(),
            ]);


    }
}
