<?php

namespace App\Http\Livewire;

use Livewire\Component;



class ModalidadTurno extends Component
{
    public $monitores;
    public $turnoDB;

    public $monitor1;
    public $monitor2;

    public $turnoDoble = false;
    public function render()
    {
        return view('livewire.modalidad-turno');
    }
}
