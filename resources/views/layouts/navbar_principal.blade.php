<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assetsAdministrador/assets/css/navbar_principal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="assetsAdministrador/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetsAdministrador/assets/bootstrap/css/bootstrap2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assetsAdministrador/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assetsAdministrador/assets/css/styles.min.css">
    <link rel="stylesheet" href="assetsAdministrador/assets/css/reporteDeTurno.css">
    <link rel="stylesheet" href="assetsAdministrador/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assetsAdministrador/assets/css/buscadorClientes.css">

    @livewireStyles
    @include('sweetalert::alert')

    <title>Reporte de Turno</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="assetsAdministrador/assets/img/LogologinSolo.png"
                        width="25px" height="25px"></i> <span class="nav_logo-name">Seguridad ByB</span> </a>
                <div class="nav_list">

                    {{-- <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i>

                        <span class="nav_name">Dashboard</span> </a>

                        <a href="{{ route('clientes') }}"
                        class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                            class="nav_name">Clientes</span> </a>

                            <a href="{{ route('enviar_mail') }}"
                        class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i>

                        <span class="nav_name">Messages</span> </a> --}}

                    <a href="{{ route('inicio_reporte') }}" class="nav_link"> <i class='bx bx-file nav_icon'></i>

                        <span class="nav_name">Reporte Turno</span> </a>

                    <a href="{{ route('clientes') }}" class="nav_link"> <i class='bx bx-user nav_icon'></i>

                        <span class="nav_name">Clientes</span> </a>


                    <a href="{{ route('historial_reportes') }}" class="nav_link"> <i
                            class='bx bx-file-find nav_icon'></i> <span class="nav_name">Registro de
                            reportes</span> </a>
                </div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button style="background: none; border:none" href="" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">Cerrar Sesión</span> </button>
            </form>
        </nav>
    </div>
    <!--Container Main start-->

    <div style="transform: translateY(70px)!important; height:100%">
        @yield('content')
    </div>


    <script src="assetsAdministrador/assets/js/navbar_principal.js"></script>
    <script src="assetsAdministrador/assets/js/jquery.min.js"></script>
    <script src="assetsAdministrador/assets/js/script.min.js"></script>
    <script src="assetsAdministrador/assets/js/bootstrap.min.js"></script>
    <script src="assetsAdministrador/assets/js/jquery.rut.js"></script>
    <script>
        $(function() {
            $("#rut").rut().on('rutValido', function(e, rut, dv) {
                alert("El rut " + rut + "-" + dv + " es correcto");
            }, {
                minimumLength: 7
            });
            $("input#rut").rut({
                formatOn: 'keyup',
                minimumLength: 8, // validar largo mínimo; default: 2
                validateOn: 'change' // si no se quiere validar, pasar null
            });
        })
    </script>
    @livewireScripts
</body>

</html>
