<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detalle Tecnico Operativo - final</title>
    <link rel="stylesheet" href="assetsOperativo/detalle/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assetsOperativo/detalle/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assetsOperativo/detalle/css/styles.min.css">
</head>

<body>
    <div class="row no-gutters">
        <div class="col">
            <div class="row no-gutters navbarFullTO" id="NavbarFullsBYB">
                <div class="col-5 col-md-9 col-lg-1 col-xl-auto d-block"><a class="btn btn-link" role="button" id="menu-toggleTO" href="#menu-toggle"><i class="fa fa-bars"></i></a></div>
                <div class="col-7 col-md-3 col-lg-3 col-xl-2 text-right text-sm-right text-md-right text-lg-left">
                    <div>
                        <h5 class="Ndusuario">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h5>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-3 offset-1 offset-sm-1 offset-md-1 offset-lg-0 offset-xl-0 order-sm-2 order-lg-1 orderBuscaTicket">
                    <form class="d-inline search-form">
                        <div class="input-group d-flex"><input class="form-control buscaTicketinput" type="text" placeholder="Buscar...">
                            <div class="input-group-append"><a class="btn btn-link" role="button" id="btnBuscaTicketTO" href="#"><i class="fa fa-search"></i></a></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 col-lg-4 col-xl-4 offset-md-2 offset-lg-0 offset-xl-0 order-sm-1 order-lg-2 orderLabelTitulo">
                    <h6 class="LabelTitulo">Gestion de Ingreso de Solicitudes</h6>
                </div>
                <div class="col-10 col-xl-1 offset-1 offset-xl-1 order-4 LogiHidden">
                    <nav class="navbar navbar-light navbar-expand-md d-inline-block float-right LogoNavbar">
                        <div class="container-fluid"><a class="navbar-brand LogoNavbar" href="#"></a></div>
                    </nav>
                </div>
            </div>
            <div class="row no-gutters" id="rowContent">
                <div class="col">
                    <div id="wrapper">
                        <div id="sidebar-wrapperTO">
                            <div class="row no-gutters align-items-start itemssidebar">
                                <div class="col">
                                    <ol class="sidebar-navTO">
                                        <li> <a class="solbtn" href="{{ route('solicitudesPendientes') }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 16 16" fill="currentColor"
                                                    class="bi bi-box-arrow-in-down boxIcon">
                                                    <path fill-rule="evenodd"
                                                        d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                    </path>
                                                </svg>Solicitudes Asignadas</a></li>
                                        <li> <a class="solbtn" href="{{ route('solicitudesFinalizadas') }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 16 16" fill="currentColor"
                                                    class="bi bi-check boxIconup">
                                                    <path fill-rule="evenodd"
                                                        d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z">
                                                    </path>
                                                </svg>Solicitudes Finalizadas</a></li>
                                        <li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button class="btn btn-primary" id="btnCerrarSesionTO"
                                                    type="submit">Cerrar Sesión</button>
                                            </form>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row no-gutters rowSidebarLogo">
                                <div class="col align-self-end Sidebar-logo SidebarHidden">
                                    <ol class="sidebar-nav"></ol>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-12 col-lg-6">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                                            <div class="card cardDetallesSeguridadByB">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color: #46a24a;">Solicitud N° {{$solicitud->id}}</h4>
                                                    <h6 class="text-muted card-subtitle mb-2">Detalles de solicitud</h6>
                                                    <form>
                                                        <div class="form-group"><label>&nbsp;Nombre&nbsp; &nbsp;</label><label>{{$solicitud->nombreCliente}}</label></div>
                                                        <div class="form-group"><label>Apellido&nbsp; &nbsp;</label><label>{{$solicitud->apellidoCliente}}</label></div>
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group"><label>Rut&nbsp; &nbsp;</label><label>{{$solicitud->rut}}</label></div>
                                                            </div>
                                                        </div>
                                                        @if ($solicitud->tipoOrganizacion == "Empresa")
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <div class="form-group"><label>Nombre de empresa &nbsp; &nbsp;</label><label>{{$solicitud->nombreOrganizacion}}</label></div>
                                                                </div>
                                                            </div>
                                                        @else
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group"><label>Tipo de instalación &nbsp; &nbsp;</label><label>{{$solicitud->tipoOrganizacion}}</label></div>
                                                            </div>
                                                        </div>
                                                        @endif

                                                        <div class="form-row">
                                                            <div class="col">
                                                                <div class="form-group"><label>Dirección&nbsp; &nbsp;</label><label>{{$solicitud->direccion}}</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-lg-12 col-xl-10">
                                                                <div class="form-group"><label>Prioridad&nbsp; &nbsp;</label><label>
                                                                    @if ($solicitud->prioridad == 1)
                                                                    <td
                                                                        class="d-flex justify-content-center align-items-center tdPriori">
                                                                        <div class="text-center PrioriAlto"><label
                                                                                class="labelPriori">Alto</label>
                                                                        </div>
                                                                    </td>
                                                                @endif

                                                                @if ($solicitud->prioridad == 2)
                                                                    <td
                                                                        class="d-flex justify-content-center align-items-center tdPriori">
                                                                        <div class="text-center PrioriMedio"><label
                                                                                class="labelPriori">Medio</label>
                                                                        </div>
                                                                    </td>
                                                                @endif

                                                                @if ($solicitud->prioridad == 3)
                                                                    <td
                                                                        class="d-flex justify-content-center align-items-center tdPriori">
                                                                        <div class="text-center PrioriBajo"><label
                                                                                class="labelPriori">Bajo</label>
                                                                        </div>
                                                                    </td>
                                                                @endif
                                                                </label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-lg-12 col-xl-10">
                                                                <div class="form-group"><label>Descripción&nbsp; &nbsp;</label><label>{{$solicitud->descripcion}}</label></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row no-gutters">
                                    <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                                        <div class="card cardDetallesSeguridadByB">
                                            <div class="card-body">
                                                <h4 class="card-title" style="color: #46a24a;">Agregar nuevo detalle de operación</h4>
                                                <form method="POST" action="{{route('agregarDetalle')}}">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="form-group"><label>{{Carbon\Carbon::now()->isoFormat('dddd, D MMMM, YYYY')}}</label><textarea class="form-control @error('detalle') is-invalid

                                                            @enderror" id="TextInputRetro" name="detalle"></textarea>
                                                                @error('detalle')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </span>
                                                                @enderror</div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col text-right"><button class="btn btn-primary" id="btnEnviarDetallesTO" type="submit">Agregar</button></div>
                                                    </div>
                                                    <input hidden name="solicitud" value="{{$solicitud->id}}">
                                                    <input hidden name="id" value="{{$solicitud->id}}">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col">

                                    {{-- <form metho="POST" action="{{route('finalizarSolicitud')}}">
                                        @csrf
                                        <div class="row no-gutters">
                                        <div class="col text-right"><button class="btn btn-primary" id="btnFinalizarSolicitudTO" type="submit">Finalizar Solicitud</button></div>
                                        <input hidden name="id" value="{{$solicitud->id}}">
                                    </div>
                                    </form> --}}

                                <div class="row no-gutters">
                                    <div class="col">
                                        <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                                            <div class="card cardDetallesSeguridadByB">
                                                <div class="card-body">
                                                    <h4 class="card-title" style="color: #46a24a;">Detalles de operaciones y Retroalimentacion</h4>
                                                    @if ($solicitud->detalles == null)

                                                    @else
                                                    @foreach ($solicitud->detalles->get() as $detalle)
                                                    <form method="POST" action="{{route('guardarDetalle')}}">
                                                     @csrf
                                                     <div class="form-row">
                                                         <div class="col-lg-12 col-xl-12">
                                                             <div class="form-group">
                                                                 <div class="form-row">
                                                                     <div class="col-xl-12"><label class="col-form-label">{{Carbon\Carbon::parse($detalle->fecha)->isoFormat('dddd, D MMMM, YYYY, HH:mm')}}</label></div>
                                                                 </div><textarea disabled class="form-control @error('detalleEdit') is-invalid

                                                                 @enderror" name="detalleEdit">{{$detalle->detalle}}</textarea>
                                                                 @error('detalleEdit')
                                                                 <span class="invalid-feedback" role="alert">
                                                                     <strong>{{$message}}</strong>
                                                                 </span>
                                                                 @enderror
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <input hidden name="idDetalle" value="{{$detalle->id}}">
                                                     <input hidden name="id" value="{{$solicitud->id}}">
                                                 </form>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assetsOperativo/detalle/js/jquery.min.js"></script>
    <script src="assetsOperativo/detalle/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetsOperativo/detalle/js/script.min.js"></script>

</body>

</html>
