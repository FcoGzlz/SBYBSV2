<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Tecnico Operativo Seguridad ByB</title>
    <link rel="stylesheet" href="\assetsOperativo/detalle/bootstrap/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> --}}
    <link rel="stylesheet" href="\assetsOperativo/detalle/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="\assetsOperativo/detalle/css/styles.min.css">
</head>
<body>
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
                                        <div class="col coldetallesoperacion">
                                            <div class="form-group"><label
                                                    class="labelDetalleSolicitud">Descripción&nbsp;
                                                    &nbsp;</label><label>{{ $solicitud->descripcion }}</label>
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

    <script src="\assetsOperativo/detalle/js/jquery.min.js"></script>
    <script src="\assetsOperativo/detalle/bootstrap/js/bootstrap.min.js"></script>
    <script src="\assetsOperativo/detalle/js/script.min.js"></script>
</body>

</html>
