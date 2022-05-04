@extends('layouts.navbar_principal')
@section('content')
@include('sweetalert::alert')

@livewire('clientes',[
    'idCliente' => $idCliente,
])

@endsection
