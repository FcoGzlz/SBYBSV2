<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Facade\FlareClient\Http\Client;
use Livewire\Component;

class BuscarClientes extends Component
{
    public $buscar;
    public $buscarFecha;
    public $buscarTurno;
    public $edit = false;
    public $editId;

    public $nombreCliente;
    public $rutCliente;


    protected $rules = [
        'nombreCliente' => 'required',
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
        $this->reset('nombreCliente', 'rutCliente');
    }

    public function eliminarCliente($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
    }

    public function editarCliente($id){
        $cliente = Cliente::findOrFail($id);
        $this->nombreCliente = $cliente->nombre;
        $this->rutCliente = $cliente->rut_cliente;

        $this->edit = true;
        $this->editId = $id;
    }

    public function guardarCambios(){
        $cliente = Cliente::findOrFail($this->editId);
        $cliente->nombre = $this->nombreCliente;
        $cliente->rut_cliente = $this->rutCliente;
        $cliente->save();

        $this->reset('nombreCliente', 'rutCliente');
        $this->edit = false;
        $this->editId = 0;

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
