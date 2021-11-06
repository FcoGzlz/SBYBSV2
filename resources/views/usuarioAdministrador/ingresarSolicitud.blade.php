@extends('layouts.menu')
@section('content')
    <div class="row no-gutters">
        <div class="col">
            <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                <div class="card cardDetallesSeguridadByB">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #009cde;">Solicitud N° {{ $solicitud->id }}</h4>
                        <h6 class="text-muted card-subtitle mb-2">Detalles de solicitud</h6>

                        <div class="form-group"><label class="datoDetalle font-weight-bold">&nbsp;Nombre&nbsp;
                                &nbsp;</label><label>{{ $solicitud->nombreCliente }}</label></div>
                        <div class="form-group"><label class="datoDetalle font-weight-bold">Apellido&nbsp;
                                &nbsp;</label><label>{{ $solicitud->apellidoCliente }}</label></div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label class="datoDetalle font-weight-bold">Rut&nbsp;
                                        &nbsp;</label><label>{{ $solicitud->rut }}</label></div>
                            </div>
                        </div>

                        @if ($solicitud->nombreOrganizacion == '')
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label class="datoDetalle font-weight-bold">Organización &nbsp; &nbsp;</label>
                                        <label>Hogar</label>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label class="datoDetalle font-weight-bold">Nombre de empresa
                                            &nbsp; &nbsp;</label><label>{{ $solicitud->nombreOrganizacion }}</label>
                                    </div>
                                </div>
                            </div>
                        @endif


                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label class="datoDetalle font-weight-bold">Teléfono&nbsp;
                                        &nbsp;</label><label>{{ $solicitud->telefono }}</label></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label class="datoDetalle font-weight-bold">Dirección&nbsp;
                                        &nbsp;</label><label>{{ $solicitud->direccion }}</label></div>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('ingresarSolicitud')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-9 col-xl-10">
                                    <div class="form-group"><label
                                            class="datoDetalle font-weight-bold">Descripción</label><textarea
                                            class="form-control form-colorbyb @error('descripcion') is-invalid

                                            @enderror"
                                            name="descripcion">{{ $solicitud->descripcion }}</textarea>

                                            @error('descripcion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                </div>
                                <div class="col-lg-3 col-xl-2 text-right align-self-center margindropdown @error('prioridad') is-invalid

                                @enderror">
                                    <label for="dropPriori">Definir Prioridad</label><select class="form-control"
                                        name="prioridad">
                                        <optgroup label="Prioridad">
                                            <option value="" selected>Selecciona</option>
                                            <option value="1">Alta</option>
                                            <option value="2">Media</option>
                                            <option value="3">baja</option>
                                        </optgroup>
                                    </select>

                                    @error('prioridad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col text-right">
                                    <input hidden name="id" value="{{ $solicitud->id }}">
                                    <button class="btn btn-primary" id="btnReemplazarDetalle" type="submit">Ingresar
                                        Solicitud
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
