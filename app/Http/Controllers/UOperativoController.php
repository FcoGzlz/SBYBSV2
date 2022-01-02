<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetalleEditFormRequest;
use App\Http\Requests\DetalleFormRequest;
use App\Models\DetalleSolicitud;
use App\Models\Solicitud;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UOperativoController extends Controller
{
    public function solicitudesPendientes()
    {
        $usuario = Auth::user();
        $solicitudes = $usuario->solicitudes->where('estado', '=', 1);
        // $solicitudes = Solicitud::where('responsable', '=', $usuario->id)->where('estado', '=', 1)->get();

        return view('usuarioOperativo.solicitudesPendientes', compact('solicitudes'));
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

    public function finalizarSolicitud(Request $request)
    {
        $solicitud = Solicitud::findOrFail($request->get('id'));

        $solicitud->estado = 2;

        $solicitud->save();
        return redirect()->action([UOperativoController::class, 'solicitudesFinalizadas']);
    }

    public function solicitudesFinalizadas()
    {
        $usuario = Auth::user();
        $solicitudes = Solicitud::where('responsable', '=', $usuario->id)->where('estado', '=', 2)->get();
        return view("usuarioOperativo.solicitudesFInalizadas", compact('solicitudes'));
    }

    public function resumenSolicitud($id)
    {
        $solicitud = Solicitud::findOrFail($id);

        return view('usuarioOperativo.resumen', compact('solicitud'));
    }

}
