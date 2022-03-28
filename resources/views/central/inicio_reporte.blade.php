@extends('layouts.navbar_principal')
@section('content')
    <div class="container container-datos">
        <div class="row datos-turno">
            <div class="col">
                <div class="row">
                    <form method="GET" action="{{ route('reporte_turno') }}">
                        @csrf
                        <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">Nombre</label><input class="datos-turno"
                            type="text" name="nombreMonitor"></div>
                    <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">Turno</label><select class="datos-turno" name="turnoSeleccionado">
                                <option value="1">De 00:00 a 08:00</option>
                                <option value="2">De 08:00 a 16:00</option>
                                <option value="3">De 16:00 a 00:00</option>
                        </select></div>
                        <div class="col text-center align-self-center">

                            <button class="btn btn-primary btn-lg btnSbyb" type="submit"
                        style="margin-top: 15px; margin-bottom:10px; padding-right: 80px; padding-left: 80px;">Ingresar</button>
                        </div>


                    </form>

{{--
            <div class="container container-datos" style="align-selft:center; color:black;">
                <div style="align-self: center">
                    <div class="col">
                        <label class="form-label datos-turno label-turno">Guardando datos, por favor espere...</label>
                    </div>
                    <div class="col">
                        <img class="loadingSbyb" src=assetsAdministrador\assets\img\LogologinSoloAzul.png alt="" width="120" height="120">
                    </div>


                </div>
            </div> --}}


                </div>
            </div>
        </div>
    </div>
@endsection
