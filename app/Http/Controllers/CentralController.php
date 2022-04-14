<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Cliente;
use App\Models\Locacion;
use App\Models\Monitor;
use App\Models\Turno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CentralController extends Controller
{
    public function index()
    {
        $turnoBD = Turno::where('finalizado', '=', false)->first();

        if ($turnoBD != null) {
            return view('central.reporte_diario', compact("turnoBD"));
        } else {
            $monitores = Monitor::all();
            return view('central.inicio_reporte', compact("monitores"));
        }

    }

    public function reporteTurno(Request $request)
    {

        $nombreMonitor = $request->get("nombreMonitor");
        $selecTurno = $request->get("turnoSeleccionado");
        $fechaT = $request->get("fechaT");
        $turnoB = Turno::where('finalizado', '=', false);

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

    public function datosReporte(Request $request)
    {
        // $sep = explode("-", $request->get('check[]'));
        for ($i=0; $i < count($request->get('check')) ; $i++) {
            $tst = explode('-', $request->get('check')[$i]);
            echo $tst[0];
        }
        // dd($request->get('check')[1]);


    }
}
