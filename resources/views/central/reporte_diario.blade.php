@extends('layouts.navbar_principal')
@section('content')
@livewire('turnos',[
    'turnoBD' => $turnoBD,
    'nombreMonitor' => $turnoBD->responsable,
    'turno' => $turnoBD->turno,
])
@endsection
