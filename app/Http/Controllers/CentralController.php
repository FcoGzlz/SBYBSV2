<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Cliente;
use App\Models\Locacion;
use App\Models\Monitor;
use App\Models\Turno;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;

class CentralController extends Controller
{
    public function index()
    {
        $turnoBD = Turno::where('finalizado', '=', false)->first();

        if ($turnoBD != null) {
            return view('central.reporte_diario', compact("turnoBD"));
        } else {
            $monitores = Monitor::where('activo', '=', true)->get();
            return view('central.inicio_reporte', compact("monitores"));
        }

    }

    public function reporteTurno(Request $request)
    {
        $nombreMonitor = "";
        $nombreMonitor1 = $request->get("nombreMonitor");
        $nombreMonitor2 = $request->get("nombreMonitor2");
        $selecTurno = $request->get("turnoSeleccionado");
        $fechaT = $request->get("fechaT");
        $modalidadTurno = $request->get("modalidadTurno");
        $turnoB = Turno::where('finalizado', '=', false);
        if($modalidadTurno != null){
            $nombreMonitor = $nombreMonitor1." - ".$nombreMonitor2;
        }
        else{
            $nombreMonitor = $nombreMonitor1;
        }

        if ($turnoB->first() == null) {
            $turno = Turno::create([
                'responsable' => $nombreMonitor,
                'turno' => $selecTurno,
                'fecha' => $fechaT,
                'identificador' => $fechaT."_".$nombreMonitor."_".$selecTurno,
                'finalizado' => false,
            ]);

        }
        $turnoBD = Turno::where('finalizado', '=', false)->first();

        return view('central.reporte_diario', compact("nombreMonitor","selecTurno", "turnoBD" ));
    }

    public function clientes()
    {

        $clientes = Cliente::all();
        return view('central.clientes', compact("clientes"));
    }

    public function sitiosCliente($id) {
        $idCliente = $id;

        return view('central.detalle_locacion', compact("idCliente"));
    }

    public function historialReportes(){

        $reportes = Turno::all();

        return view('central.historiaL_reportes', compact("reportes"));
    }

    public function reporte($id)
    {
        $reporte = Turno::findOrFail($id);

        // $pdf = PDF::load('../public/archivos/'.$reporte->nombre_pdf);
        return response()->file('../public/archivos/'.$reporte->nombre_pdf);


    }
}
