<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuario = Auth::user();
        $rol = $usuario->roles->implode('name', ', ');

        // switch ($rol) {
        //     case 'superAdmin':
        //         # code...
        //         break;

        //     case 'UAdministrador':
        //         return redirect()->route('solicitudesClientes');
        //         break;
        //     case 'UOperativo':
        //         return redirect()->route('solicitudesPendientes');
        //         break;

        // }
        return view('test.index');
    }
}
