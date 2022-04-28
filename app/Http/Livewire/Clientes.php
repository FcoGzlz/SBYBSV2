<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Locacion;
use Livewire\Component;

class Clientes extends Component
{
    public $idCliente;
    public $idSitio;

    public $nombre;
    public $nombreContacto;
    public $contactoTelefono;
    public $email;
    public $ciudad;
    public $direccion;
    public $tipoInstitucion;




    protected $rules = [
        'nombre' => 'required',
        'nombreContacto' => 'required',
        'email' => 'required|email',
        'ciudad' => 'required',
        'direccion' => 'required',
        'contactoTelefono' => 'required',

    ];

    public function updated($nombre, $nombreContacto, $contactoTelefono, $email, $ciudad, $direccion)
    {
        $this->validateOnly($nombre);
        $this->validateOnly($nombreContacto);
        $this->validateOnly($contactoTelefono);
        $this->validateOnly($email);
        $this->validateOnly($ciudad);
        $this->validateOnly($direccion);
    }

    public function agregarSitio(){
        $this->validate();
    }

    public function render()
    {


        return view(
            'livewire.clientes',
            [
                'locacionesCliente' => Locacion::where('id_cliente', '=', $this->idCliente)->get(),
                'sitio' => Locacion::where('id', $this->idSitio)->first(),
                'cliente' => Cliente::findOrFail($this->idCliente),
            ]
        );
    }
}
