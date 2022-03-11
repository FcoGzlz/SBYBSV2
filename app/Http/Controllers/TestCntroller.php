<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestCntroller extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        Mail::to('franciscogzlz533@gmail.com')->send(new TestMail);
        return view('test.mail_test', compact('clientes'));
    }
}
