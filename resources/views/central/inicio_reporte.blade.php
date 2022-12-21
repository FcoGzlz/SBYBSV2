@extends('layouts.navbar_principal')
@section('content')
@include('sweetalert::alert')

@livewire('modalidad-turno',[
    'monitores' => $monitores,

])

@endsection
