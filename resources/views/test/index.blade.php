<!DOCTYPE html>
<html lang="en" style="height: 100%; min-height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Administrador Seguridad ByB</title>
    <link rel="stylesheet" href="/assetsAdministrador/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="/assetsAdministrador/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assetsAdministrador/assets/css/styles.min.css">
</head>

<body style="height: 100%;min-height: 100%;">
    <div class="row no-gutters">
        <div class="col">
            <div class="row no-gutters navbarFull" id="NavbarFullsBYB">
                <div class="col-5 col-md-9 col-lg-1 col-xl-auto d-block"><a class="btn btn-link" role="button"
                        id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a></div>
                <div class="col-7 col-md-3 col-lg-3 col-xl-2 text-right text-sm-right text-md-right text-lg-left">
                    <div>
                        <h5 class="Ndusuario"></h5>
                    </div>
                </div>
                {{-- <div
                    class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-3 offset-1 offset-sm-1 offset-md-1 offset-lg-0 offset-xl-0 order-sm-2 order-lg-1 orderBuscaTicket">
                    <form class="d-inline search-form">

                       @if ($busqueda != '0')
                       @if ($busqueda == '')
                       <div class="input-group d-flex"><input class="form-control buscaTicketinput" type="text"
                               placeholder="Buscar Opor nombre, apellido o RUT" name="busqueda">
                           <div class="input-group-append"><button class="btn btn-link" type="submit"
                                   id="btnBuscaTicket"><i class="fa fa-search"></i></button></div>
                       </div>
                   @else
                       <div class="input-group d-flex"><input class="form-control buscaTicketinput" type="text"
                               value="{{ $busqueda }}" name="busqueda">
                           <div class="input-group-append"><button class="btn btn-link" type="submit"
                                   id="btnBuscaTicket"><i class="fa fa-search"></i></button></div>
                       </div>
                   @endif
                       @endif




                    </form>
                </div> --}}
                <div
                    class="col-md-8 col-lg-4 col-xl-4 offset-md-2 offset-lg-0 offset-xl-0 order-sm-1 order-lg-2 orderLabelTitulo">
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
                        <div id="sidebar-wrapper">
                            <div class="row no-gutters align-items-start itemssidebar" style="z-index:1;">
                                <div class="col">
                                    <ol class="sidebar-nav">
                                        <li class="sidebar-brand"> <a class="btnEmitirTicket"
                                                href="{{ route('nuevaSolicitud') }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 16 16" fill="currentColor"
                                                    class="bi bi-pencil-square IconTicket">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                    </path>
                                                </svg>Enviar Nueva Solicitud<br></a></li>
                                        <li> <a class="solbtn" href="{{ route('solicitudesClientes') }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 16 16" fill="currentColor"
                                                    class="bi bi-box-arrow-in-down boxIcon">
                                                    <path fill-rule="evenodd"
                                                        d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z">
                                                    </path>
                                                </svg>Solicitudes de Clientes</a></li>
                                        <li> <a class="solbtn" href="{{ route('solicitudesIngresadas') }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    viewBox="0 0 16 16" fill="currentColor"
                                                    class="bi bi-box-arrow-in-up boxIconup">
                                                    <path fill-rule="evenodd"
                                                        d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z">
                                                    </path>
                                                </svg>Solicitudes Ingresadas</a></li>

                                        <li><a class="solbtn" href="{{ route('reporte') }}"><svg
                                                    class="bi bi-file-earmark-text boxIconup"
                                                    style="margin-bottom:10px;" xmlns="http://www.w3.org/2000/svg"
                                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z">
                                                    </path>
                                                    <path
                                                        d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z">
                                                    </path>
                                                </svg>Reporte</a></li>

                                        <li id="liCerrarSesion">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button class="text-center" id="btnCerrarSesion" role="button"
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
                        <div id="contenidoRowTByCR">
                            <div class="col"></div>
                            <div class="container-fluid containerTable">
                                <div class="table-responsive table-borderless">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nombre y apellido</th>
                                                <th class="text-center">Rut</th>
                                                <th class="text-center">Contacto</th>
                                                <th class="text-center">ciudad</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">CCTV</th>
                                                <th class="text-center">Nat CCTV</th>
                                                <th class="text-center">Alarmas</th>
                                                <th class="text-center">Nat CCTV Alarma</th>
                                                <th class="text-center" style="width:100px">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clientes as $cliente)
                                                <tr>
                                                    <td>{{ $cliente->nombre }}
                                                        {{ $cliente->apellido }}</td>
                                                    <td>{{ $cliente->rut }}</td>
                                                    <td>{{ $cliente->contacto }}</td>
                                                    <td>{{ $cliente->ciudad }}</td>
                                                    <td>{{ $cliente->email }}</td>
                                                    <td>
                                                    <ul>
                                                    @foreach ($cliente->cctv as $cctv )
                                                        <li>{{ $cctv->tipoCamara->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach ($cliente->alarmas as $alarma )
                                                        <li>{{ $alarma->tipoAlarma->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                            @foreach ($cliente->cctv as $cctv )
                                                        <li>{{ $cctv->natCctv->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                                    <td>
                                                        <ul>
                                                    @foreach ($cliente->alarmas as $alarma )
                                                        <li>{{ $alarma->NatCctvAlarma->nombre }}</li>
                                                    @endforeach
                                                        </ul>
                                                    </td>
                                                    {{-- <td>{{ $solicitud->apellidoCliente }}</td> --}}

                                                </tr>
                                            @endforeach
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
    <script src="assetsAdministrador/assets/js/jquery.min.js"></script>
    <script src="assetsAdministrador/assets/js/script.min.js"></script>
</body>

</html>
















