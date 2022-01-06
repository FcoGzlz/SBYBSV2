<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetalleEditFormRequest;
use App\Http\Requests\DetalleFormRequest;
use App\Models\DetalleSolicitud;
use App\Models\Solicitud;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;
use Illuminate\Support\Facades\App as FacadesApp;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;

class UOperativoController extends Controller
{
    public function solicitudesPendientes(Request $request)
    {

        $busqueda = $request->get('busqueda');
        $separado = explode(" ", $busqueda, 4);
        $usuario = Auth::user();
        $sol = Solicitud::where('responsable');

        if (count($separado) > 1) {
            // $nombre= "$separado[0] $separado[1]";
            // $apellido= "$separado[2] $separado[3]";

            if (count($separado) == 4) {
                $nombre = "$separado[0] $separado[1]";
                $apellido = "$separado[2] $separado[3]";
                $solicitudes = $usuario->solicitudes->nombre($nombre)->apellido($apellido)->where('estado', 0)->orderBy('fechaIngreso', 'DESC')->get();
            } else {
                $solicitudes = $usuario->solicitudes->nombre($separado[0])->apellido($separado[1])->where('estado', 0)->orderBy('fechaIngreso', 'DESC')->get();
            }
        } else {
            // $solicitudes = $usuario->solicitudes->busqueda($busqueda)->where('estado', 1)->orderBy('fechaIngreso', 'DESC')->get();
        }




        $solicitudes = $usuario->solicitudes->where('estado', '=', 1);
        // $solicitudes = Solicitud::where('responsable', '=', $usuario->id)->where('estado', '=', 1)->get();

        return view('usuarioOperativo.solicitudesPendientes', compact('solicitudes', 'busqueda'));
    }

    public function detalleSolicitud($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        return view('usuarioOperativo.detalleSolicitud', compact('solicitud'));
    }

    public function agregarDetalle(DetalleFormRequest $request, $id)
    {
        // dd($request->get('detalle'));
        $detalle = DetalleSolicitud::create(
            [
                'detalle' => $request->get('detalle'),
                'fecha' => Carbon::now(),
                'solicitud' => $id,
            ]
        );
        $detalle->save();
        // $id1 = $id;
        return redirect(url('/detalle_solicitud/' . $id));
    }

    public function guardarDetalle(DetalleEditFormRequest $request, $idS, $idD)
    {
        // dd($idD);
        $detalle = DetalleSolicitud::findOrFail($idD);
        $detalle->detalle = $request->get('detalleEdit' . $idD);

        $detalle->save();
        // $id = $request->get('id');

        return redirect(url('/detalle_solicitud/' . $idS));
    }

    public function eliminarDetalle($idS, $idD)
    {
        $detalle = DetalleSolicitud::findOrFail($idD);
        $detalle->delete();

        return redirect(url('/detalle_solicitud/'. $idS));
    }

    public function finalizarSolicitud($id)
    {
        $solicitud = Solicitud::findOrFail($id);

        $solicitud->estado = 2;

        $solicitud->save();
        return redirect(url('/solicitudes_pendientes/'));
    }

    public function solicitudesFinalizadas(Request $request)
    {

        $busqueda = $request->get('busqueda');
        $separado = explode(" ", $busqueda, 4);
        $usuario = Auth::user();

        $sol = Solicitud::where('responsable', '=', $usuario->id)->where('estado', '=', 2);

        if (count($separado) > 1) {

            if (count($separado) == 4) {
                $nombre = "$separado[0] $separado[1]";
                $apellido = "$separado[2] $separado[3]";
                $solicitudes = $sol->nombre($nombre)->apellido($apellido)->orderBy('fechaIngreso', 'DESC')->get();
            } else {
                $solicitudes = $sol->nombre($separado[0])->apellido($separado[1])->orderBy('fechaIngreso', 'DESC')->get();
            }
        } else {
            $solicitudes = $sol->busqueda($busqueda)->orderBy('fechaIngreso', 'DESC')->get();
        }

        // $solicitudes = $sol->busqueda("20317")->get();
        return view("usuarioOperativo.solicitudesFInalizadas", compact('solicitudes', 'busqueda'));
    }

    public function resumenSolicitud($id)
    {
        $solicitud = Solicitud::findOrFail($id);

        return view('usuarioOperativo.resumen', compact('solicitud'));
    }

    public function generarReporte($id){

        $solicitud = Solicitud::findOrFail($id);
        $pdf = FacadesApp::make('dompdf.wrapper');
        $pdf->loadView('UsuarioOperativo.index', ['solicitud' => $solicitud])->setPaper('A4');
        $pdf->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream();




    }

}
