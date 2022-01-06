<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reporte Informe Solicitud Plantilla Seguridad ByB</title>
    <link rel="stylesheet" href={{ public_path('public/assetsOperativo/fonts/nunito-regular') }}>
    {{-- <link rel="stylesheet" href={{ public_path('public/assetsOperativo/detalle/bootstrap/css/bootstrap.min.css') }}> --}}
    {{-- <link rel="stylesheet" href={{ public_path('public/assetsOperativo/detalle/css/styles.css') }}> --}}
</head>
<style type="text/css">
    .card {
position: relative;
display: -ms-flexbox;
display: flex;
-ms-flex-direction: column;
flex-direction: column;
min-width: 0;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border: 1px solid rgba(0,0,0,.125);
border-radius: .25rem;
}
</style>
<body>
    <div class="card" style="margin: 53px;">
        <div class="card-body" style="border-color: #1d86ef;">
            <div class="row">
                <div class="col">
                    <h2 style="color: #009cde;">Reporte de Solicitud</h2>
                    <h3 class="mb-2" style="color: #009cded4;">Solicitud N° {{ $solicitud->id }} </h3>
                </div>
                <div class="col">
                    {{-- <div class="row">
                        <div class="col text-right"><img src="assets/img/logologin.png"></div>
                    </div> --}}
                    <div class="row">
                        <div class="col text"><label class="col-form-label">Fecha de emisión de reporte: {{ Carbon\Carbon::now()->isoFormat('DD') }} de {{ Carbon\Carbon::now()->isoFormat('MMMM') }} de {{ Carbon\Carbon::now()->isoFormat('YYYY') }}</label></div>
                    </div>
                </div>
                <br>
            </div>
            <div class="row no-gutters">
                <div class="col" style="background: #009cde;text-align: center;"><label class="col-form-label" style="color: #ffffff; font-weight:bold; font-size:17px">Detalles de Solicitud</label></div><br>
            </div>
            <div class="row" style="display: flex">
                <div class="column" style="width: 50%">
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Nombre:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;"> {{ $solicitud->nombreCliente }} </label></div>
                    </div>
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Apellido:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">{{ $solicitud->apellidoCliente }}</label></div>
                    </div>
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Rut:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">{{ $solicitud->rut }}</label></div>
                    </div>
                    @if ($solicitud->tipoOrganizacion == "Empresa")
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Nombre de Organización:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">{{ $solicitud->nombreOrganizacion }}</label></div>
                    </div>
                    @else
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Tipo de instalación:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">Particular</label></div>
                    </div>
                    @endif
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Dirección:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">{{ $solicitud->direccion }}</label></div>
                    </div>



                </div>
                <div class="column" style="width: 50%; float:right">
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Fecha de Ingreso:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">{{Carbon\Carbon::parse($solicitud->fechaIngreso)->isoFormat('DD, MM, YYYY - HH:MM')}}</label></div>
                    </div>
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Fecha de cierre:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">{{Carbon\Carbon::parse($solicitud->fechaCierre)->isoFormat('DD, MM, YYYY - HH:MM')}}</label></div>
                    </div>

                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Prioridad:</label></div>
                        @if ($solicitud->prioridad == 1)
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">Alta</label></div>
                        @endif
                        @if ($solicitud->prioridad == 2)
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">Media</label></div>
                        @endif
                        @if ($solicitud->prioridad == 3)
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">Baja</label></div>
                        @endif
                    </div>
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Categoria:</label></div>
                        <div class="col" style="margin-bottom: 5px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;">{{App\Models\Categoria::findOrFail($solicitud->categoria)->nombre}}</label></div>
                    </div>
                    <div class="row no-gutters justify-content-center" style="border-bottom: 1,5px solid #97cbff ;">
                        <div class="col-md-5"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;"><br></label></div>
                        <div class="col" style="margin-bottom: 6px;"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;"> </label><br></div>
                    </div>


                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="row no-gutters">
                                        <div class="col"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">Descripción:</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" style="margin-top:-15px">
                                    <p>{{$solicitud->descripcion}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col" style="background: #009cde;text-align: center;"><label class="col-form-label" style="color: #ffffff; font-weight:bold; font-size:17px">Detalle de Operaciones y Retroalimentacion</label></div>
            </div>

          @foreach ($solicitud->detalles as $detalle)
          <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col" style="height: 10px; margin-top:10px"><label class="col-form-label" style="height: 25px;padding: 0px;padding-top: 0px;padding-bottom: 0px;color: #009cde;font-weight: bold;">{{ Carbon\Carbon::parse($detalle->fecha)->isoFormat('dddd') }} {{ Carbon\Carbon::parse($detalle->fecha)->isoFormat('DD') }} de {{ Carbon\Carbon::parse($detalle->fecha)->isoFormat('MMMM') }} de {{ Carbon\Carbon::parse($detalle->fecha)->isoFormat('YYYY') }} {{ Carbon\Carbon::parse($detalle->fecha)->isoFormat('HH:MM') }} hrs </label></div>
                </div>
                <div class="row" style="border-bottom: 1,5px solid #97cbff ;">
                    <div class="col" >
                        <p>{{ $detalle->detalle }}</p>
                    </div>
                </div>
            </div>
        </div>
          @endforeach
        </div>
    </div>
    <script src= {{ public_path('assets/js/jquery.min.js') }}></script>
    <script src={{ public_path('assets/bootstrap/js/bootstrap.min.js') }}></script>
</body>

</html>
