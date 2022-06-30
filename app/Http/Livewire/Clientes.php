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
    public $menuDispositivos = false;

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

    public $nombreEdit;
    public $nombreContactoEdit;
    public $telefonoContactoEdit;
    public $nombreContacto2Edit;
    public $telefonoContacto2Edit;
    public $nombreContacto3Edit;
    public $telefonoContacto3Edit;
    public $emailEdit;
    public $emailContacto2Edit;
    public $emailContacto3Edit;
    public $ciudadEdit;
    public $direccionEdit;
    public $tipoInstitucionEdit;

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

    protected function resetCamposSitio()
    {
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

    protected function resetCamposSitioEdit()
    {
        $this->reset(
            'nombreEdit',
            'nombreContactoEdit',
            'telefonoContactoEdit',
            'emailEdit',
            'emailContacto2Edit',
            'emailContacto3Edit',
            'ciudadEdit',
            'direccionEdit',
            'tipoInstitucionEdit',
            'nombreContactoEdit',
            'nombreContacto2Edit',
            'nombreContacto3Edit',
            'telefonoContacto2Edit',
            'telefonoContacto3Edit' );
    }

    protected function resetCamposCCTV()
    {
        $this->reset('tipoGrabadorEdit', 'cantidadCamarasEdit', 'numeroSerieEdit');
    }

    protected function resetCamposCCTVAdd()
    {
        $this->reset('tipoGrabador', 'cantidadCamaras', 'numeroSerie');
    }

    protected function resetCamposAlarma()
    {
        $this->reset('tipoAlarma', 'numeroId');
    }

    protected function resetCamposAlarmaEdit()
    {
        $this->reset('tipoAlarmaEdit', 'numeroIdEdit');
    }

    public function menu(){


        if ($this->menu == false) {
            $this->menu = true;
        }
        else{
            $this->menu = false;
        }
    }

    public function agregarDispositivos()
    {
        if ($this->menuDispositivos == false) {
            $this->menuDispositivos = true;
        }
        else{
            $this->menuDispositivos = false;
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

        $this->resetCamposSitio();


    }

    public function eliminarSitio($id){
        $sitio = Locacion::findOrFail($id);
        $sitio->delete();
    }

    public function editarSitio($id){
        $this->edit = true;
        $sitio = Locacion::findOrFail($id);
        $this->nombreEdit = $sitio->nombre;
        $this->nombreContactoEdit = $sitio->nombre_contacto;
        $this->telefonoContactoEdit = $sitio->telefono_contacto;
        $this->nombreContacto2Edit = $sitio->nombre_contacto_2;
        $this->telefonoContacto2Edit = $sitio->telefono_contacto_2;
        $this->nombreContacto3Edit = $sitio->nombre_contacto_3;
        $this->telefonoContacto3Edit = $sitio->telefono_contacto_3;
        $this->emailEdit = $sitio->email;
        $this->emailContacto2Edit = $sitio->email_contacto_2;
        $this->emailContacto3Edit = $sitio->email_contacto_3;
        $this->ciudadEdit = $sitio->ciudad;
        $this->direccionEdit = $sitio->direccion;
        $this->tipoInstitucionEdit = $sitio->tipo_institucion;
    }

    public function guardarCambiosSitio($id){
        $sitio = Locacion::findOrFail($id);

        $sitio->nombre = $this->nombreEdit;
        $sitio->nombre_contacto = $this->nombreContactoEdit;
        $sitio->telefono_contacto = $this->telefonoContactoEdit;
        $sitio->nombre_contacto_2 = $this->nombreContacto2Edit;
        $sitio->telefono_contacto_2 = $this->telefonoContacto2Edit;
        $sitio->nombre_contacto_3 = $this->nombreContacto3Edit;
        $sitio->telefono_contacto_3 = $this->telefonoContacto3Edit;
        $sitio->email = $this->emailEdit;
        $sitio->email_contacto_2 = $this->emailContacto2Edit;
        $sitio->email_contacto_3 = $this->emailContacto3Edit;
        $sitio->ciudad = $this->ciudadEdit;
        $sitio->direccion = $this->direccionEdit;
        $sitio->tipo_institucion = $this->tipoInstitucionEdit;
        $sitio->save();

        $this->resetCamposSitioEdit();

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

        $this->resetCamposCCTVAdd();

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
        $this->resetCamposCCTV();
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

        $this->resetCamposAlarma();
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

        $this->resetCamposAlarmaEdit();
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
