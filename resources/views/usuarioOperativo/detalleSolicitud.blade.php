@extends('layouts.menu_uoperativo')
@section('content')
    <div class="row no-gutters">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="row no-gutters">
                <div class="col">
                    <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                        <div class="card cardDetallesSeguridadByB">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <h2 style="color: #46a24a;">Solicitud N°
                                            {{ $solicitud->id }}</h2>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 offset-lg-0">

                                        <form method="POST" action="{{ url('/finalizar_solicitud/' . $solicitud->id) }}">
                                            @csrf
                                            <button class="btn btn-primary d-flex float-right" id="btnFinalizarSolicitudTO"
                                                type="submit">Finalizar Solicitud
                                            </button>
                                        </form>

                                    </div>
                                </div>




                                <h6 class="text-muted card-subtitle mb-2">Detalles de solicitud</h6>
                                <form>
                                    <div class="form-row">
                                        <div class="col coldetallesoperacion">
                                            <div class="form-group"><label class="labelDetalleSolicitud">Nombre&nbsp;
                                                    &nbsp;</label><label>{{ $solicitud->nombreCliente }}</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col coldetallesoperacion">
                                            <div class="form-group"><label class="labelDetalleSolicitud">Apellido&nbsp;
                                                    &nbsp;</label><label>{{ $solicitud->apellidoCliente }}</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col coldetallesoperacion">
                                            <div class="form-group"><label class="labelDetalleSolicitud">Rut&nbsp;
                                                    &nbsp;</label><label>{{ $solicitud->rut }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($solicitud->tipoOrganizacion == 'Empresa')
                                        <div class="form-row">
                                            <div class="col coldetallesoperacion">
                                                <div class="form-group"><label class="labelDetalleSolicitud">Nombre de
                                                        empresa
                                                        &nbsp;
                                                        &nbsp;</label><label>{{ $solicitud->nombreOrganizacion }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="form-row">
                                            <div class="col coldetallesoperacion">
                                                <div class="form-group"><label class="labelDetalleSolicitud">Tipo de
                                                        instalación &nbsp;
                                                        &nbsp;</label><label>{{ $solicitud->tipoOrganizacion }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-row">
                                        <div class="col coldetallesoperacion">
                                            <div class="form-group"><label class="labelDetalleSolicitud">Dirección&nbsp;
                                                    &nbsp;</label><label>{{ $solicitud->direccion }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col coldetallesoperacion">
                                            <div class="form-group"><label class="labelDetalleSolicitud">Prioridad&nbsp;
                                                    &nbsp;</label><label>
                                                    @if ($solicitud->prioridad == 1)
                                                        <td
                                                            class="d-flex justify-content-center align-items-center tdPriori">
                                                            <div class="text-center PrioriAlto">
                                                                <label class="labelPriori">Alto</label>
                                                            </div>
                                                        </td>
                                                    @endif

                                                    @if ($solicitud->prioridad == 2)
                                                        <td
                                                            class="d-flex justify-content-center align-items-center tdPriori">
                                                            <div class="text-center PrioriMedio">
                                                                <label class="labelPriori">Medio</label>
                                                            </div>
                                                        </td>
                                                    @endif

                                                    @if ($solicitud->prioridad == 3)
                                                        <td
                                                            class="d-flex justify-content-center align-items-center tdPriori">
                                                            <div class="text-center PrioriBajo">
                                                                <label class="labelPriori">Bajo</label>
                                                            </div>
                                                        </td>
                                                    @endif
                                                </label></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col coldetallesoperacion">
                                            <div class="form-group"><label
                                                    class="labelDetalleSolicitud">Descripción&nbsp;
                                                    &nbsp;</label><label>{{ $solicitud->descripcion }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                    <div class="card cardDetallesSeguridadByB">
                        <div class="card-body">
                            <h4 class="card-title" style="color: #46a24a;">Agregar nuevo detalle
                                de operación</h4>
                            <form method="POST"
                                action="{{ url('/detalle_solicitud/' . $solicitud->id . '/agregar_detalle') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="form-group">
                                            <label>{{ Carbon\Carbon::now()->isoFormat('dddd, D MMMM, YYYY') }}</label>
                                            <textarea
                                                class="form-control @error('detalle') is-invalid

                                    @enderror"
                                                id="TextInputRetro" name="detalle"></textarea>
                                            @error('detalle')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col text-right"><button class="btn btn-primary" id="btnEnviarDetallesTO"
                                            type="submit">Agregar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>







            </div>
            <div class="row no-gutters">
                <div class="col">
                    <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                        <div class="card cardDetallesSeguridadByB">
                            <div class="card-body">
                                <h4 class="card-title" style="color: #46a24a;">Detalles de
                                    operaciones y Retroalimentacion</h4>
                                @if ($solicitud->detalles == null)

                                @else
                                    @foreach ($solicitud->detalles as $detalle)
                                            <div class="form-row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="form-group">
                                                        <div class="form-row align-items-center">
                                                            <div class="col">
                                                                <label
                                                                    class="col-form-label">{{ Carbon\Carbon::parse($detalle->fecha)->isoFormat('dddd, D MMMM, YYYY, HH:mm') }}

                                                                </label>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <div class="col-12 d-flex justify-content-end">
                                                                        <form method="POST"
                                                                        action="{{ url('/detalle_solicitud/' . $solicitud->id . '/eliminar_detalle/' . $detalle->id) }}">
                                                                        @csrf
                                                                        {{ method_field('DELETE') }}
                                                                        <button class="btn btn-primary" id="btnEliminarRetroTO"
                                                                            type="submit"
                                                                            style="background: var(--red);border-color: var(--red);">Eliminar
                                                                        </button>
                                                                    </form>
                                                                    <form method="POST" action="{{ url('/detalle_solicitud/' . $solicitud->id . '/guardar_detalle/' . $detalle->id) }}">
                                                                        @csrf
                                                                        {{ method_field('PATCH') }}
                                                                        <button class="btn btn-primary" id="btnGuardarRetroTO"
                                                                            type="submit">Guardar
                                                                            Cambios
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <textarea
                                                            class="form-control @error('detalleEdit' . $detalle->id) is-invalid @enderror"
                                                            name='detalleEdit{{ $detalle->id }}'>{{ $detalle->detalle }}</textarea>
                                                        @error('detalleEdit' . $detalle->id)
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
