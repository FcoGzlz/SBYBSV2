@extends('layouts.navbar_principal')
@section('content')

@livewire('clientes',[
    'idCliente' => $idCliente,
])

@endsection
