@extends('layouts.navbar_principal')
@section('content')
@include('sweetalert::alert')
    @livewire('modalidad-turnos',
        [
            'monitores' => $monitores,
        ]
    )
@endsection
