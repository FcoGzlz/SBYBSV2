<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class BuscarClientes extends Component
{
    public $buscar;
    public $buscarFecha;
    public $buscarTurno;
    public $add = true;

    public $nombreCliente;
    public $rutCliente;


    protected $rules = [
        'nombreCliente' => 'required',
        'rutCliente' => 'required',
    ];

    public function updated($nombreCliente, $rutCliente){
        $this->validateOnly($nombreCliente);
        $this->validateOnly($rutCliente);
    }


    public function agregarCliente(){

        $this->validate();

        $cliente = Cliente::create([
            'nombre' => $this->nombreCliente,
            'rut_cliente' => $this->rutCliente,
        ]);
        $cliente->save();

        $this->add = false;
    }

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
