@extends('layouts.navbar_principal')
@section('content')
@livewire('turnos',[
    'nombreMonitor' => $nombreMonitor,
    'turno' => $selecTurno,
])
@endsection
