<?php

namespace App\Http\Controllers;
use App\Http\Requests\SolicitudFormRequest;
use App\Models\Categoria;
use App\Models\Solicitud;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class UAdministradorController extends Controller
{
    public function SolicitudesClientes(Request $request)
    {
        $busqueda = $request->get('busqueda');
        $separado = explode(" ", $busqueda, 4);

        if (count($separado) > 1) {
            // $nombre= "$separado[0] $separado[1]";
            // $apellido= "$separado[2] $separado[3]";

            if (count($separado) == 4) {
                $nombre = "$separado[0] $separado[1]";
                $apellido = "$separado[2] $separado[3]";
                $solicitudesClientes = Solicitud::nombre($nombre)->apellido($apellido)->where('estado', 0)->orderBy('fechaIngreso', 'DESC')->get();
            } else {
                $solicitudesClientes = Solicitud::nombre($separado[0])->apellido($separado[1])->where('estado', 0)->orderBy('fechaIngreso', 'DESC')->get();
            }
        } else {
            $solicitudesClientes = Solicitud::busqueda($busqueda)->where('estado', 0)->orderBy('fechaIngreso', 'DESC')->get();
        }
        return view('usuarioAdministrador/solicitudesClientes', compact("solicitudesClientes", 'busqueda'));
    }

    public function ingresarSolicitud(Request $request)
    {

        $request->validate(
            [
                'descripcion' => 'required',
                'prioridad' => 'required',
            ]
        );

        $solicitud = Solicitud::findOrFail($request->get('id'));
        $solicitud->descripcion = $request->get('descripcion');
        $solicitud->prioridad = $request->get('prioridad');
        $solicitud->estado = 1;
        $solicitud->save();
        return redirect()->action([UAdministradorController::class, 'solicitudesClientes']);
    }

    public function definirPrioridad(Request $request)
    {
        $solicitud = Solicitud::findOrFail($request->get('id'));
        $busqueda = "0";
        return view('usuarioAdministrador/ingresarSolicitud', compact("solicitud", "busqueda"));
    }

    public function solicitudesIngresadas(Request $request)
    {
        $busqueda = $request->get('busqueda');
        $separado = explode(" ", $busqueda, 4);
        $responsable = User::all();

        if (count($separado) > 1) {

            if (count($separado) == 4) {
                $nombre = "$separado[0] $separado[1]";
                $apellido = "$separado[2] $separado[3]";
                $solicitudesClientes = Solicitud::nombre($nombre)->apellido($apellido)->where('estado', 1)->orderBy('fechaIngreso', 'DESC')->get();
            } else {
                $solicitudesIngresadas = Solicitud::nombre($separado[0])->apellido($separado[1])->where('estado', 1)->orderBy('fechaIngreso', 'DESC')->get();
            }
        } else {
            $solicitudesIngresadas = Solicitud::busqueda($busqueda)->where('estado', 1)->orderBy('fechaIngreso', 'DESC')->get();
        }


        return view('usuarioAdministrador.solicitudesIngresadas', compact("solicitudesIngresadas", 'busqueda', 'responsable'));
    }

    public function nuevaSolicitud()
    {
        $busqueda = "0";
        $categorias = Categoria::all();
        return view('usuarioAdministrador.agregarSolicitud', compact('busqueda', 'categorias',));
    }


    public function agregarSolicitud(SolicitudFormRequest $request)
    {

        $solicitud = Solicitud::create(
            [
                'rut' => $request->get('rut'),
                'nombreCliente' => $request->get('nombreCliente'),
                'apellidoCliente' => $request->get('apellidoCliente'),
                'telefono' => $request->get('telefono'),
                'tipoOrganizacion' => $request->get('tipoOrganizacion'),
                'nombreOrganizacion' => $request->get('nombreOrganizacion'),
                'direccion' => $request->get('direccion'),
                'descripcion' => $request->get('descripcion'),
                'prioridad' => $request->get('prioridad'),
                'categoria' => $request->get('categoria'),
                'fechaIngreso' => Carbon::now(),
                'estado' => (1),

            ]

        );
        $solicitud->save();

        return redirect()->action([UAdministradorController::class, 'solicitudesIngresadas']);
    }

    public function guardarSolicitud(SolicitudFormRequest $request, $id)
    {

        $solicitud = Solicitud::findOrFail($id);
        $solicitud->rut = $request->get('rut');
        $solicitud->nombreCliente = $request->get('nombreCliente');
        $solicitud->apellidoCliente = $request->get('apellidoCliente');
        $solicitud->telefono = $request->get('telefono');
        $solicitud->tipoOrganizacion = $request->get('tipoOrganizacion');
        $solicitud->nombreOrganizacion = $request->get('nombreOrganizacion');
        $solicitud->direccion = $request->get('direccion');
        $solicitud->descripcion = $request->get('descripcion');
        $solicitud->prioridad = $request->get('prioridad');
        $solicitud->categoria = $request->get('categoria');
        $solicitud->responsable = $request->get('responsable');
        $solicitud->estado = (1);
        $solicitud->save();

        return redirect()->action([UAdministradorController::class, 'solicitudesIngresadas']);
    }

    public function eliminarSolicitud(Request $request)
    {
        $solicitud = Solicitud::findOrFail($request->get('id'));
        $solicitud->delete();
        return redirect()->action([UAdministradorController::class, 'solicitudesIngresadas']);
    }

    public function detalleSolicitud(Request $request){
        $solicitud = Solicitud::findOrFail($request->get('detalle'));
        $busqueda = "0";
        return view('usuarioAdministrador.prueba', compact("solicitud", "busqueda"));

    }

    public function editarSolicitud($id){
        $solicitud = Solicitud::findOrFail($id);
        $busqueda = "0";
        $categoriaActual =  $solicitud->categoria();
        // dd($categoriaActual);
        $categorias = Categoria::All();
        $tecnicosOperativos = User::role('UOperativo')->get();
        return view('usuarioAdministrador.editarSolicitud', compact("solicitud", "busqueda", "tecnicosOperativos", "categorias"));
    }

    public function reporte()
    {
        $fechaHoy = Carbon::now()->isoFormat('YYYY-MM-DD');
        $solicitudes = Solicitud::reporteDiario($fechaHoy)->get();
        $categorias = Categoria::all();


        // $prioridadAlta = $solicitudes->where('prioridad', '=', 1)->get();
        // $prioridadMedia = $solicitudes->where('prioridad', '=', 2)->get();
        // $prioridadBaja = $solicitudes->where('prioridad', '=', 3)->get();

        // dd(Carbon::now()->isoFormat('YYYY-MM-DD'));
        // dd($solicitudes->where('prioridad', '=', 2)->count());
        return view('usuarioAdministrador.reporte', compact("solicitudes", "categorias"));
    }
}
