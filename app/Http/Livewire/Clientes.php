<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Locacion;
use Livewire\Component;

class Clientes extends Component
{
    public $idCliente;
    public $idSitio;




    public function render()
    {


        return view('livewire.clientes',
        [
            'locacionesCliente' => Locacion::where('id_cliente', '=', $this->idCliente)->get(),
            'sitio' => Locacion::where('id', $this->idSitio)->first(),
            'cliente' => Cliente::findOrFail($this->idCliente),
        ]
    );
    }
}
