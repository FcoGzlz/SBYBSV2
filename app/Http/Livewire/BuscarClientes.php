<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class BuscarClientes extends Component
{
    public $buscar;

    public function render()
    {


        if (strpos($this->buscar, " ") == false) {
            return view('livewire.buscar-clientes', [
                'clientes' => Cliente::where('nombre', 'like', '%'.$this->buscar. '%')
                ->orWhere('rut_cliente', 'like', '%'.$this->buscar.'%')->get(),
            ]);
        }

    }
}
