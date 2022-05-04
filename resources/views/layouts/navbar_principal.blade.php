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


                    <a href="{{ route('historial_reportes') }}" class="nav_link"> 
                        <i class='bx bx-file-find nav_icon'></i> 
                            <span class="nav_name">Registro de reportes</span> </a>
                </div>
                
                <div class="row g-0" style="height:100%">
                    <div class="col mt-auto" style="padding-bottom: 300px">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button style="background: none; border:none" href="" class="nav_link LogOut"> 
                                <i class='bx bx-log-out nav_icon LogOut'></i> 
                                <span class="nav_name LogOut">Cerrar Sesión</span> </button>
                        </form>
                    </div>

                    
                </div>
                    
                

                
            </div>

           
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
<div id="modalAgregarCliente" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="row">
                <div class="col ">
                    {{-- @if ($edit == false) --}}
                    {{-- <h1>Agregar sitio a {{$cliente->nombre}}</h1> --}}
                    {{-- @else --}}
                    {{-- <h1>Modificar datos de {{$sitio->nombre}}</h1> --}}
                    {{-- @endif --}}

                </div>
            </div>
            <div class="row">
                <div class="row form-group">
                 <div class="col">
                     <input class="form-control" type="text" wire:model="nombre" class="form-control" placeholder="Nombre de sitio">
                     @error('nombre') <span class="warning">{{ $message }}</span> @enderror
                   </div>

                   <div class="col">
                     <input class="form-control" type="text" wire:model="direccion" class="form-control" placeholder="Dirección">
                     @error('direccion') <span class="warning">{{ $message }}</span> @enderror
                   </div>

                </div>

              <div class="row form-group">
                 <div class="col">
                     <input class="form-control" type="text" wire:model="email" class="form-control" placeholder="Email">
                     @error('email') <span class="warning">{{ $message }}</span> @enderror
                   </div>
                   <div class="col">
                     <input class="form-control" type="text" wire:model="ciudad" class="form-control" placeholder="Ciudad">
                     @error('ciudad') <span class="warning">{{ $message }}</span> @enderror
                   </div>
              </div>

                <div class="row form-group">
                 <div class="col">
                     <input class="form-control" type="text" wire:model="nombreContacto" class="form-control" placeholder="Nombre de contacto">
                     @error('nombreContacto') <span class="warning">{{ $message }}</span> @enderror
                   </div>
                 <div class="col">
                     <input class="form-control" type="text" wire:model="telefonoContacto" class="form-control" placeholder="Número de contacto">
                     @error('contactoTelefono') <span class="warning">{{ $message }}</span> @enderror
                   </div>

                </div>

                <div class="row form-group">
                 <div class="col">
                     <input class="form-control" type="text" wire:model="nombreContacto2" class="form-control" placeholder="Nombre de contacto 2">
                     @error('nombreContacto2') <span class="warning">{{ $message }}</span> @enderror
                   </div>
                 <div class="col">
                     <input class="form-control" type="text" wire:model="telefonoContacto2" class="form-control" placeholder="Número de contacto 2">
                     @error('telefonoContacto2') <span class="warning">{{ $message }}</span> @enderror
                   </div>

                </div>
                <div class="row form-group">
                 <div class="col">
                     <input class="form-control" type="text" wire:model="nombreContacto3" class="form-control" placeholder="Nombre de contacto 3">
                     @error('nombreContacto3') <span class="warning">{{ $message }}</span> @enderror
                   </div>
                 <div class="col">
                     <input class="form-control" type="text" wire:model="telefonoContacto3" class="form-control" placeholder="Número de contacto 3">
                     @error('telefonoContacto3') <span class="warning">{{ $message }}</span> @enderror
                   </div>

                </div>
                <div class="row form-group">
                 <div class="col">
                     <input class="form-control" type="text" wire:model="tipoInstitucion" class="form-control" placeholder="Tipo de insitución (opcional)">
                     @error('tipoInstitucion') <span class="warning">{{ $message }}</span> @enderror
                 </div>
                 </div>

                 <div class="col 12">
                     {{-- @if ($edit == null) --}}
                     <button class="btn btnSbyb" wire:click="agregarSitio">Añadir sitio</button>
                     {{-- @else --}}
                     {{-- <button class="btn btnSbyb" wire:click="guardarCambiosSitio({{$sitio->id}})">Guardar cambios</button> --}}
                     {{-- @endif --}}

                 </div>
               </div>
            <div class="modal-header">
                <h4 class="modal-title">Modal 1</h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The content of your modal.</p>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
       
        </div>
    </div>
</div>
</html>
