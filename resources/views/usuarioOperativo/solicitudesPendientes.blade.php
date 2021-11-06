<!DOCTYPE html>
<html lang="en" style="height: 100%; min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Tecnico Operativo Seguridad ByB</title>
    <link rel="stylesheet" href="assetsOperativo\assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assetsOperativo\assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assetsOperativo\assets/css/styles.min.css">
</head>

<body style="height: 100%;min-height: 100%;">
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
                    <h6 class="LabelTituloTO">Gestion de Ingreso de Solicitudes</h6>
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
                                        <li> <a class="solbtn" href="{{route('solicitudesPendientes')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-box-arrow-in-down boxIcon">
                                                    <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                                </svg>Solicitudes Asignadas</a></li>
                                        <li> <a class="solbtn" href="{{route('solicitudesFinalizadas')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-check boxIconup">
                                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                                </svg>Solicitudes Finalizadas</a></li>

                                                <li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-primary" id="btnCerrarSesionTO" type="submit">Cerrar Sesión</button>
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
                        <div id="contenidoRowTByCR">
                            <div class="col"></div><div class="container-fluid containerTable">
    <div class="table-responsiveTO table-borderless">
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th class="text-center">Nombre y apellido</th>
                    <th class="text-center">RUT</th>
                    <th class="text-center">Prioridad</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Detalle</th>
                </tr>
            </thead>
            <tbody>

                @if ($solicitudes == null)

                @else
                @foreach ($solicitudes as $solicitud)


                <tr>
                    <td>{{ $solicitud->nombreCliente }}
                        {{ $solicitud->apellidoCliente }}</td>

                    {{-- <td>{{ $solicitud->apellidoCliente }}</td> --}}
                    <td class="text-center">{{ $solicitud->rut }}</td>

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

                    <td class="text-center">{{ $solicitud->telefono }}</td>
                    <td class="text-center">
                        {{ Carbon\Carbon::parse($solicitud->fechaIngreso)->isoFormat('dddd, D MMMM, YYYY, HH:MM') }}
                        hrs</td>



                        <td style="width:90px;">
                            <div class="col">
                                <div class="row">
                                    <form method="POST" action="{{ route('detalle')}}">
                                        @csrf
                                        <input type="hidden" value="{{$solicitud->id}}" name="id">
                                    <button class="btn btn-primary" id="btnEditarDetalle" type="submit"><i class="fa fa-pencil"></i>
                                    </button>
                                </form>
                            </div>
                            </div>

                        </td>


                    </tr>
        @endforeach
                @endif


            </tbody>
        </table>
    </div>
</div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assetsOperativo\assets/js/jquery.min.js"></script>
    <script src="assetsOperativo\assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assetsOperativo\assets/js/script.min.js"></script>
</body>

</html>
