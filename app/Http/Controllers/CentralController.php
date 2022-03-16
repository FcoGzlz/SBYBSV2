<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CentralController extends Controller
{
    public function index()
    {

        Mail::to('franciscogzlz533@gmail.com')->send(new TestMail);
    }

    public function reporteTurno(Request $request)
    {
        return view('central.reporte_diario');
    }

    public function clientes()
    {
        $clientes = Cliente::all();
        return view('central.clientes', compact("clientes"));
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
