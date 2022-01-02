<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CCOntroller extends Controller
{
    public function index()
    {
        return view('usuarioAdministrador.formularioCliente');
    }
}
