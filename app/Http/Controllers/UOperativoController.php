<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetalleFormRequest;
use App\Models\DetalleSolicitud;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UOperativoController extends Controller
{
    public function solicitudesPendientes()
    {
        $usuario = Auth::user();

        $solicitudes = Solicitud::where('responsable', '=', $usuario->id)->where('estado', '=', 1)->get();

        return view('usuarioOperativo.solicitudesPendientes', compact('solicitudes'));
    }

    public function detalleSolicitud(Request $request)
    {
        $solicitud = Solicitud::findOrFail($request->id);

        return view('usuarioOperativo.detalleSolicitud', compact('solicitud'));
    }

    public function agregarDetalle(DetalleFormRequest $request)
    {
        $detalle = DetalleSolicitud::create(
            [
                'detalle' => $request->get('detalle'),
                'solicitud' => $request->get('solicitud'),
            ]
        );
        $detalle->save();
        $id = $request->get('id');
        return redirect()->action('UOperativoController@detalleSolicitud', compact('id'));
    }

    public function guardarDetalle(DetalleFormRequest $request)
    {
        $detalle = DetalleSolicitud::findOrFail($request->get('idDetalle'));
        $detalle->detalle = $request->get('detalleEdit');
        $detalle->save();
        $id = $request->get('id');

        return redirect()->action('UOperativoController@detalleSolicitud', compact('id'));
    }

    public function finalizarSolicitud(Request $request)
    {
        $solicitud = Solicitud::findOrFail($request->get('id'));

        $solicitud->estado = 2;

        $solicitud->save();
        return redirect()->action('UOperativoController@solicitudesFinalizadas');
    }

    public function solicitudesFinalizadas()
    {
        $usuario = Auth::user();
        $solicitudes = Solicitud::where('responsable', '=', $usuario->id)->where('estado', '=', 2)->get();
        return view("usuarioOperativo.solicitudesFInalizadas", compact('solicitudes'));
    }

    public function resumenSolicitud(Request $request)
    {
        $solicitud = Solicitud::findOrFail($request->get('id'));

        return view('usuarioOperativo.resumen', compact('solicitud'));
    }
}
