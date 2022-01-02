<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vista general - Mejorado</title>
    <link rel="stylesheet" href="\assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="\assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="\assets/css/styles.min.css">
</head>

<body>
    <div class="row no-gutters">
        <div class="col">
            <div class="row no-gutters navbarFull" id="NavbarFullsBYB">
                <div class="col-5 col-md-9 col-lg-1 col-xl-auto d-block"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i></a></div>
                <div class="col-7 col-md-3 col-lg-3 col-xl-2 text-right text-sm-right text-md-right text-lg-left">
                    <div>
                        <h5 class="Ndusuario">Nombre De Usuario</h5>
                    </div>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-3 offset-1 offset-sm-1 offset-md-1 offset-lg-0 offset-xl-0 order-sm-2 order-lg-1 orderBuscaTicket">
                    <!-- Start: Pretty Search Form -->
                    <form class="d-inline search-form">
                        <div class="input-group d-flex"><input class="form-control buscaTicketinput" type="text" placeholder="Buscar...">
                            <div class="input-group-append"><a class="btn btn-link" role="button" id="btnBuscaTicket" href="#"><i class="fa fa-search"></i></a></div>
                        </div>
                    </form><!-- End: Pretty Search Form -->
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
                    <!-- Start: Sidebar Menu -->
                    <div id="wrapper">
                        <div id="sidebar-wrapper">
                            <div class="row no-gutters align-items-start itemssidebar">
                                <div class="col">
                                    <ol class="sidebar-nav">
                                        <li class="sidebar-brand"> <a class="btnEmitirTicket" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pencil-square IconTicket">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                                </svg>Enviar Nueva Solicitud<br></a></li>
                                        <li> <a class="solbtn" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-in-down boxIcon">
                                                    <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                                </svg>Solicitudes Recibidas</a></li>
                                        <li> <a class="solbtn" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-box-arrow-in-up boxIconup">
                                                    <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"></path>
                                                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"></path>
                                                </svg>Solicitudes Enviadas</a></li>
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
                            <div class="col">
                                <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                                    <div class="card cardDetallesSeguridadByB">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h4 class="text-center" id="tituloCardtotales" style="color: #009cde;">Solicitudes del Dia</h4>
                                                </div>
                                                <div class="col">
                                                    <div class="card" id="cardTotal">
                                                        <div class="card-body">
                                                            <h4 class="card-title tituloSolicitud">Solicitudes Totales</h4>
                                                            <p class="text-right card-text textSolicitudes">9999</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="card" id="cardAlto">
                                                        <div class="card-body">
                                                            <h4 class="card-title tituloSolicitud">Solicitudes</h4>
                                                            <h6 class="card-subtitle mb-2 sub">Nivel Alto</h6>
                                                            <p class="text-right card-text textSolicitudes">9999</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card" id="cardMedio">
                                                        <div class="card-body">
                                                            <h4 class="card-title tituloSolicitud">Solicitudes</h4>
                                                            <h6 class="text-muted card-subtitle mb-2">Nivel Medio</h6>
                                                            <p class="text-right card-text textSolicitudes">9999</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card" id="cardBajo">
                                                        <div class="card-body">
                                                            <h4 class="card-title tituloSolicitud">Solicitudes</h4>
                                                            <h6 class="text-muted card-subtitle mb-2">Nivel Bajo</h6>
                                                            <p class="text-right card-text textSolicitudes">9999</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="card" id="catCardAlto">
                                                        <div class="card-body" style="border: 2px solid #eb0038 ;">
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card" id="catCardMedio">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card" id="catCardBajo">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="col-form-label">Label</label></div>
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
                    </div><!-- End: Sidebar Menu -->
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
