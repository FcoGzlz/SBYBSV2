<?php

namespace App\Http\Livewire;

use App\Models\Alarma;
use App\Models\Cctv;
use App\Models\Cliente;
use App\Models\Locacion;
use App\Models\TipoAlarma;
use Livewire\Component;


class Clientes extends Component
{
    public $idCliente;
    public $idSitio;
    public $edit;
    public $editCCTV = false;
    public $editAlarma = false;
    public $menu = false;

    public $nombre;
    public $nombreContacto;
    public $telefonoContacto;
    public $nombreContacto2;
    public $telefonoContacto2;
    public $nombreContacto3;
    public $telefonoContacto3;
    public $email;
    public $emailContacto2;
    public $emailContacto3;
    public $ciudad;
    public $direccion;
    public $tipoInstitucion;

    public $tipoGrabador;
    public $cantidadCamaras;
    public $numeroSerie;

    public $tipoGrabadorEdit;
    public $cantidadCamarasEdit;
    public $numeroSerieEdit;

    public $tipoAlarma;
    public $numeroId;

    public $tipoAlarmaEdit;
    public $numeroIdEdit;




    protected $rules = [
        'nombre' => 'required',

    ];

    public function menu(){


        if ($this->menu == false) {
            $this->menu = true;
        }
        else{
            $this->menu = false;
        }
    }

    public function updatedNombre($nombre)
    {
        $this->validateOnly($nombre);


        // $this->validateOnly($email);
        // $this->validateOnly($ciudad);
        // $this->validateOnly($direccion);
    }

    public function updatedNombreContacto($nombreContacto){
        $this->validateOnly($nombreContacto);
    }
    public function updatedContactoTelefono($contactoTelefono){
        $this->validateOnly($contactoTelefono);
    }

    public function agregarSitio(){
        $this->validate();

        $sitio = Locacion::create([
            'nombre' => $this->nombre,
            'nombre_contacto' => $this->nombreContacto,
            'telefono_contacto' => $this->telefonoContacto,
            'nombre_contacto_2' => $this->nombreContacto2,
            'telefono_contacto_2' => $this->telefonoContacto2,
            'nombre_contacto_3' => $this->nombreContacto3,
            'telefono_contacto_3' => $this->telefonoContacto3,
            'email' => $this->email,
            'email_contacto_2' => $this->emailContacto2,
            'email_contacto_3' => $this->emailContacto3,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'tipo_institucion' => $this->tipoInstitucion,
            'id_cliente' => $this->idCliente,
        ]);
        $sitio->save();

        $this->reset(
            'nombre',
            'nombreContacto',
            'telefonoContacto',
            'email',
            'emailContacto2',
            'emailContacto3',
            'ciudad',
            'direccion',
            'tipoInstitucion',
            'nombreContacto',
            'nombreContacto2',
            'nombreContacto3',
            'telefonoContacto2',
            'telefonoContacto3' );


    }

    public function eliminarSitio($id){
        $sitio = Locacion::findOrFail($id);
        $sitio->delete();
    }

    public function editarSitio($id){
        $this->edit = true;
        $this->menu = true;
        $sitio = Locacion::findOrFail($id);
        $this->nombre = $sitio->nombre;
        $this->nombreContacto = $sitio->nombre_contacto;
        $this->telefonoContacto = $sitio->telefono_contacto;
        $this->nombreContacto2 = $sitio->nombre_contacto_2;
        $this->telefonoContacto2 = $sitio->telefono_contacto_2;
        $this->nombreContacto3 = $sitio->nombre_contacto_3;
        $this->telefonoContacto3 = $sitio->telefono_contacto_3;
        $this->email = $sitio->email;
        $this->emailContacto2 = $sitio->email_contacto_2;
        $this->emailContacto3 = $sitio->email_contacto_3;
        $this->ciudad = $sitio->ciudad;
        $this->direccion = $sitio->direccion;
        $this->tipoInstitucion = $sitio->tipo_institucion;
    }

    public function guardarCambiosSitio($id){
        $sitio = Locacion::findOrFail($id);

        $sitio->nombre = $this->nombre;
        $sitio->nombre_contacto = $this->nombreContacto;
        $sitio->telefono_contacto = $this->telefonoContacto;
        $sitio->nombre_contacto_2 = $this->nombreContacto2;
        $sitio->telefono_contacto_2 = $this->telefonoContacto2;
        $sitio->nombre_contacto_3 = $this->nombreContacto3;
        $sitio->telefono_contacto_3 = $this->telefonoContacto3;
        $sitio->email = $this->email;
        $sitio->email_contacto_2 = $this->emailContacto2;
        $sitio->email_contacto_3 = $this->emailContacto3;
        $sitio->ciudad = $this->ciudad;
        $sitio->direccion = $this->direccion;
        $sitio->tipo_institucion = $this->tipoInstitucion;
        $sitio->save();

        $this->reset(
            'nombre',
            'nombreContacto',
            'telefonoContacto',
            'email',
            'emailContacto2',
            'emailContacto3',
            'ciudad',
            'direccion',
            'tipoInstitucion',
            'nombreContacto',
            'nombreContacto2',
            'nombreContacto3',
            'telefonoContacto2',
            'telefonoContacto3' );

        $this->edit = false;

    }



    public function agregarCCTV(){
        $this->validate([
            'tipoGrabador' => 'required',
            'cantidadCamaras' => 'required',
        ]);

        $cctv = Cctv::create([
            'tipo_dvr' => $this->tipoGrabador,
            'cantidad_camaras' => $this->cantidadCamaras,
            'numero_serie' => $this->numeroSerie,
            'id_locacion' => $this->idSitio,
        ]);
        $cctv->save();


    }

    public function editarCCTV($id)
    {
        $this->editCCTV = true;
        $cctv = Cctv::findOrFail($id);
        $this->tipoGrabadorEdit = $cctv->tipo_dvr;
        $this->numeroSerieEdit = $cctv->numero_serie;
        $this->cantidadCamarasEdit = $cctv->cantidad_camaras;
    }

    public function guardarCambiosCCTV($id)
    {
        $cctv = Cctv::findOrFail($id);
        $cctv->tipo_dvr = $this->tipoGrabadorEdit;
        $cctv->numero_serie = $this->numeroSerieEdit;
        $cctv->cantidad_camaras= $this->cantidadCamarasEdit;

        $cctv->save();
        $this->reset('tipoGrabadorEdit', 'cantidadCamarasEdit', 'numeroSerieEdit');
        $this->editCCTV = false;

    }

    public function eliminarCCTV($id){
        $cctv = Cctv::findOrFail($id);
        $cctv->delete();

    }

    public function agregarAlarma(){
        $this->validate([
            'tipoAlarma' => 'required',
        ]);

        $alarma = Alarma::create([
            'id_tipo_alarma' => $this->tipoAlarma,
            'id_o_numero' => $this->numeroId,
            'id_locacion' => $this->idSitio,
        ]);

        $alarma->save();

        $this->reset('tipoAlarma', 'numeroId');
    }

    public function editarAlarma($id)
    {
        $this->editAlarma = true;
        $alarma = Alarma::findOrFail($id);
        $this->tipoAlarmaEdit = $alarma->id_tipo_alarma;
        $this->numeroIdEdit = $alarma->id_o_numero;
    }

    public function guardarCambiosAlarma($id)
    {
        $alarma = Alarma::findOrFail($id);
        $alarma->id_tipo_alarma = $this->tipoAlarmaEdit;
        $alarma->id_o_numero = $this->numeroIdEdit;
        $alarma->save();

        $this->reset('tipoAlarmaEdit', 'numeroIdEdit');
        $this->editAlarma = false;
    }

    public function eliminarAlarma($id)
    {
        $alarma = Alarma::findOrFail($id);
        $alarma->delete();

    }

    public function render()
    {


        return view(
            'livewire.clientes',
            [
                'locacionesCliente' => Locacion::where('id_cliente', '=', $this->idCliente)->get(),
                'sitio' => Locacion::where('id', $this->idSitio)->first(),
                'cliente' => Cliente::findOrFail($this->idCliente),
                'tiposAlarma' => TipoAlarma::all(),
            ]
        );
    }
}
