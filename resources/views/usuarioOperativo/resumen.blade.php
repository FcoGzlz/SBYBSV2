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

                                    <form method="POST" action=" {{ url('/emitir_reporte/'.$solicitud->id) }} ">
                                        @csrf
                                        <button class="btn btn-primary border rounded d-flex float-right"
                                            id="btnGenerarReporteTO" type="submit">Emitir Reporte
                                        </button>
                                    </form>
                                    </div>
                                </div>




                                <h6 class="text-muted card-subtitle mb-2">Detalles de solicitud</h6>

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
                                        <div class="col">
                                            <div class="form-group"><label
                                                    class="labelDetalleSolicitud">Descripción&nbsp;
                                                    &nbsp;</label><p>{{ $solicitud->descripcion }}</p>
                                            </div>
                                        </div>
                                    </div>

                            </div>
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
