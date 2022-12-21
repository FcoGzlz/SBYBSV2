<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalidadTurnos extends Component
{
    public $monitores;

    public $turnoDoble = false;
    public $monitor1;
    public $monitor2;
    public $turno;

    public function modalidadTurno(){
        if ($this->turnoDoble == false)
        {
            $this->turnoDoble = true;
        }
        else
        {
            $this->turnoDoble = false;
            $this->reset('monitor1', 'monitor2');
        }
    }

    public function render()
    {
        return view('livewire.modalidad-turnos');
    }
}
