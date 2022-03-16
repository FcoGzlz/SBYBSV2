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
                ->orWhere('apellido', 'like', '%'.$this->buscar. '%')
                ->orWhere('rut', 'like', '%'.$this->buscar.'%')->get(),
            ]);
        }
        else
        {
            $busqueda = explode(" ", $this->buscar, 2);
            return view('livewire.buscar-clientes', [
                'clientes' => Cliente::where('nombre', 'like', '%'.$busqueda[0]. '%')
                ->where('apellido', 'like', '%'.$busqueda[1]. '%')->get(),
            ]);
        }


    }
}
