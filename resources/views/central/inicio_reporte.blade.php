@extends('layouts.navbar_principal')
@section('content')
@include('sweetalert::alert')

    <div class="container container-datos shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col">
                <div class="row">
                    <form method="GET" action="{{ route('reporte_turno') }}">

                        <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">Nombre</label>
                            <select class="datos-turno" name="nombreMonitor" id="" style="padding-right: 8px;">
                                @foreach ($monitores as $monitor)
                                    <option value="{{ $monitor->nombre }}">{{ $monitor->nombre }}</option>
                                @endforeach
                            </select>
                            </div>
                    <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">Turno</label><select class="datos-turno" name="turnoSeleccionado">
                                <option value="1">De 23:00 a 07:00</option>
                                <option value="2">De 07:00 a 15:00</option>
                                <option value="3">De 15:00 a 23:00</option>
                        </select></div>

                        <div class="col text-center align-self-center"><input class="datos-turno"
                            type="text" name="fechaT" value="{{ Carbon\Carbon::now()->isoFormat('dddd DD MMMM YYYY') }}" hidden></div>

                        <div class="col text-center align-self-center">

                            <button class="btn btn-primary btn-lg btnSbyb" type="submit"
                        style="margin-top: 15px; margin-bottom:10px; padding-right: 80px; padding-left: 80px;">Ingresar</button>
                        </div>


                    </form>

{{--
            <div class="container container-loading">
                <div class="row align-items-center">
                    <div class="col-3 justify-content-center">
                        <img class="loadingSbyb" src=assetsAdministrador\assets\img\LogologinSoloAzul.png alt="" width="100" height="100">
                    </div>
                    <div class="col-9">
                        <label class="form-label" style="font-size: 18px;">Guardando datos, por favor espere...</label>
                    </div>
                </div>
            </div> --}}


                </div>
            </div>
        </div>
    </div>
@endsection
