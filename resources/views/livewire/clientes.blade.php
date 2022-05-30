@extends('sweetalert::alert')

<div class="row g-0">
    <div class="col">
        <div class="card cardClientes shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <div class="row align-middle">
                    <div class="col text-uppercase">
                        <h1>{{ $cliente->nombre }}
                    </div>
                    <div class="col text-uppercase">
                        @if ($menu == false)
                            <button class="btn btnSbyb" wire:click="menu">Gestionar sitios</button>
                        @else
                            <button class="btn btnSbyb" wire:click="menu">Cerrar gestión de sitios</button>
                        @endif
                    </div>
                    {{-- <div class="col agregarClienteButton">
                        <button class="btn btnSbyb" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregarCliente">
                            Agregar Sitio
                        </button>
                    </div> --}}
                </div>
                <div class="row">

                        <div class="col d-flex align-items-center"><select @if ($edit == true) disabled @endif
                            class="form-select selectByB shadow-none" wire:model="idSitio">
                            <option class="selectByB" value="undefined" selected="">Seleccione un sitio</option>
                            @foreach ($locacionesCliente as $locacion)
                                <option class="selectByB" value="{{ $locacion->id }}">{{ $locacion->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @if ($sitio != null && $edit == false)
                    <div class="col-auto g-0"><button class="btn btnSbyb" type="button"
                            wire:click="eliminarSitio({{ $sitio->id }})"><i
                                class="fas fa-trash-alt"></i></button>
                    </div>

                    <div class="col-auto">
                        <button class="btn btnSbyb" type="submit"
                            wire:click="editarSitio({{ $sitio->id }})"><i class="far fa-edit"></i></button>
                    </div>
                    @endif

                </div>

                <div class="row">

                    <div class="col"><label class="col-form-label labelCardClientes">Ciudad:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->ciudad }}</label>
                        @endif
                    </div>

                    <div class="col"><label class="col-form-label labelCardClientes">Dirección:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->direccion }}</label>
                        @endif

                    </div>
                </div>

                <div class="row">

                    <div class="col"><label class="col-form-label labelCardClientes">Contacto:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->nombre_contacto }}</label>
                        @endif
                    </div>

                    <div class="col"><label class="col-form-label labelCardClientes">N° de Contacto:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->telefono_contacto }}</label>
                        @endif
                    </div>

                     <div class="col"><label class="col-form-label labelCardClientes">Email:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->email }}</label>
                        @endif
                    </div>

                </div>

                <div class="row">

                    <div class="col"><label class="col-form-label labelCardClientes">Contacto 2:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->nombre_contacto_2 }}</label>
                        @endif
                    </div>

                    <div class="col"><label class="col-form-label labelCardClientes">N° de Contacto
                            2:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->telefono_contacto_2 }}</label>
                        @endif
                    </div>

                    <div class="col"><label class="col-form-label labelCardClientes">Email 2:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->email_contacto_2 }}</label>
                        @endif
                    </div>
                </div>


                <div class="row">

                    <div class="col"><label class="col-form-label labelCardClientes">Contacto 3:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->nombre_contacto_3 }}</label>
                        @endif
                    </div>

                    <div class="col"><label class="col-form-label labelCardClientes">N° de Contacto
                            3:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->telefono_contacto_3 }}</label>
                        @endif
                    </div>

                    <div class="col"><label class="col-form-label labelCardClientes">Email 3:</label>
                        @if ($sitio != null)
                            <label class="col-form-label">{{ $sitio->email_contacto_3 }}</label>
                        @endif
                    </div>
                </div>





                <div class="row">
                    <div class="col columnSepararCards"></div>
                </div>
                <div class="row">
                    <div class="col">

                        @if ($sitio == null)
                            <div class="card">
                            @else
                                @if ($sitio->cctv == null)
                                    <div class="card" style="display: none">
                                    @else
                                        <div class="card">
                                @endif

                        @endif

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title subtitulosCard">CCTV</h4>
                                </div>

                                @if ($sitio != null)
                                    <div class="col-auto">
                                    <div class="btn-edit-background">
                                        <button class="btn btnSbyb" type="button"
                                        wire:click="eliminarCCTV({{ $sitio->cctv->id }})"><i
                                            class="fas fa-trash-alt"></i></button>



                                    <button class="btn btnSbyb" type="submit"
                                        wire:click="editarCCTV({{ $sitio->cctv->id }})"><i
                                            class="far fa-edit"></i></button>
                                    </div>


                                    </div>
                                @endif

                            </div>



                            <div class="row">
                                <div class="col columnSepararCards"></div>
                            </div>
                            <div class="row cardLabelCCTV">
                            @if ($editCCTV == false)
                            <div class="col">
                                <div class="row">
                                    <div class="col"> <label class="col-form-label labelCardClientes">Tipo de
                                            grabador:</label>
                                        @if ($sitio && $sitio->cctv != null)
                                            <label class="col-form-label">{{ $sitio->cctv->tipo_dvr }}</label>
                                        @endif
                                    </div>
                                    <div class="col"><label class="col-form-label labelCardClientes">Cantidad de
                                            cámaras:</label>
                                        @if ($sitio && $sitio->cctv != null)
                                            <label class="col-form-label">{{ $sitio->cctv->cantidad_camaras }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="col-form-label labelCardClientes">Número de
                                            Serie:&nbsp;</label>
                                        @if ($sitio && $sitio->cctv != null)
                                            <label class="col-form-label">{{ $sitio->cctv->numero_serie }}</label>
                                        @endif
                                    </div>
                                    {{-- <div class="col"><label class="col-form-label ">LabelCamaras</label></div> --}}
                                </div>
                            </div>

                            @else
                            <div class="col">
                                <div class="card-body">
                                    <div class="row align-items-center">

                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="tipoGrabadorInput" class="form-label">Tipo Grabador</label>
                                                    <input type="text" class="form-control" id="tipoGrabadorInput" wire:model="tipoGrabador">
                                                    @error('tipoGrabador')
                                                    <span class="warning">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="cantidadCamarasInput" class="form-label">Cantidad de cámaras</label>
                                                    <input type="text" class="form-control" id="contidadCamarasInput" wire:model="cantidadCamaras">
                                                    @error('cantidadCamaras')
                                                    <span class="warning">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label for="numeroDeSerieInput" class="form-label">Número de Serie</label>
                                                    <input type="text" class="form-control" id="numeroDeSerieInput" wire:model="numeroSerie">
                                                    @error('numeroSerie')
                                                    <span class="warning">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label class="form-label"> </label>
                                                        @if ($editCCTV == false)
                                                        <button class="btn btnSbyb form-control" wire:click="agregarCCTV">Añadir CCTV</button>
                                                        @else
                                                        <button class="btn btnSbyb form-control" wire:click="guardarCambiosCCTV({{$sitio->cctv->id}})">Guardar Cambios</button>
                                                        @endif
                                                </div>
                                            </div>
                        </div>
                    </div>
                </div>
                            @endif




                </div>
            </div>
            <div class="row">
                <div class="col columnSepararCards"></div>
            </div>


            <div class="row  none">
                <div class="col">
                    @if ($sitio == null)
                        <div class="card">
                        @else
                            @if ($sitio->alarma == null)
                                <div class="card" style="display: none">
                                @else
                                    <div class="card">
                            @endif

                    @endif
                    <div class="card-body">


                        <div class="row">
                            <div class="col">
                                <h4 class="card-title subtitulosCard">Alarma</h4>
                            </div>
                            @if ($sitio != null)
                            <div class="col-auto">
                                <div class="btn-edit-background">
                                    <button class="btn btnSbyb" type="button"
                                    wire:click="eliminarAlarma({{ $sitio->alarma->id }})"><i
                                        class="fas fa-trash-alt"></i></button>

                                <button class="btn btnSbyb" type="submit"
                                    wire:click="editarAlarma({{ $sitio->alarma->id }})"><i
                                        class="far fa-edit"></i></button>
                                </div>
                            </div>
                        @endif
                        </div>

                        <div class="row">
                            <div class="col columnSepararCards"></div>
                        </div>

                        <div class="row">

                            @if ($editAlarma == false)
                            <div class="col"><label class="col-form-label labelCardClientes">Tipo de
                                alarma:</label>
                            @if ($sitio && $sitio->alarma != null)
                                <label class="col-form-label">{{ $sitio->alarma->tipoAlarma->nombre }}</label>
                            @endif
                        </div>
                        <div class="col">

                            @if ($sitio && $sitio->alarma != null)
                                @switch($sitio->alarma->tipoAlarma->nombre)
                                    @case('Intrusión GSM')
                                        <label class="col-form-label labelCardClientes">Número:&nbsp;</label>
                                        <label class="col-form-label">{{ $sitio->alarma->id_o_numero }}</label>
                                    @break

                                    @case('Intrusión RISCO')
                                        <label class="col-form-label labelCardClientes">ID:&nbsp;</label>
                                        <label class="col-form-label">{{ $sitio->alarma->id_o_numero }}</label>
                                    @break

                                    @default
                                @endswitch
                            @endif

                        </div>
                            @else
                            <div class="card-body">
                                <div class="row">

                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="tipoAlarmaInput" class="form-label">Seleccione tipo de alarma</label>
                                                <select class="form-select selectByB shadow-none" id="tipoAlarmaInput"  wire:model="tipoAlarma">
                                                    <option value="">Seleccione tipo de alarma</option>
                                                    @foreach ($tiposAlarma as $tipoAlarma)
                                                        <option value="{{ $tipoAlarma->id }}">{{ $tipoAlarma->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('tipoAlarma')
                                                <span class="warning">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="numeroIdInput" class="form-label">Número de Serie</label>
                                                <input type="text" class="form-control" id="numeroIdInput" wire:model="numeroId">
                                                @error('numeroId')
                                                <span class="warning">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div>
                                                @if ($editAlarma == false)
                                                <button class="btn btnSbyb form-control" wire:click="agregarAlarma">Añadir
                                                    Alarma</button>
                                                @else
                                                <button class="btn btnSbyb form-control" wire:click="guardarCambiosAlarma({{$sitio->alarma->id}})">Guardar Cambios</button>
                                                @endif
                                        </div>
                                </div>
                            </div>
                            @endif




                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

</div>




@if ($menu == true || $editCCTV == true || $editAlarma == true)
    {{-- Inicio de formulario --}}
<div class="col">
    <div class="card cardClientes shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col ">
                @if ($edit == false)
                    <h1>Agregar sitio a {{ $cliente->nombre }}</h1>
                @else
                    <h1>Modificar datos de {{ $sitio->nombre }}</h1>
                @endif

            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="row mb-3">
                    <div class="col">
                        <input class="form-control" type="text" wire:model="nombre" class="form-control"
                            placeholder="Nombre de sitio">
                        @error('nombre')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col">
                        <input class="form-control" type="text" wire:model="direccion" class="form-control"
                            placeholder="Dirección">
                        @error('direccion')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input class="form-control" type="text" wire:model="ciudad" class="form-control"
                            placeholder="Ciudad">
                        @error('ciudad')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input class="form-control" type="text" wire:model="nombreContacto" class="form-control"
                            placeholder="Nombre de contacto">
                        @error('nombreContacto')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" wire:model="telefonoContacto" class="form-control"
                            placeholder="Número de contacto">
                        @error('contactoTelefono')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" wire:model="email" class="form-control"
                            placeholder="Email">
                        @error('email')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input class="form-control" type="text" wire:model="nombreContacto2" class="form-control"
                            placeholder="Nombre de contacto 2">
                        @error('nombreContacto2')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" wire:model="telefonoContacto2"
                            class="form-control" placeholder="Número de contacto 2">
                        @error('telefonoContacto2')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" wire:model="emailContacto2" class="form-control"
                            placeholder="Email 2">
                        @error('emailContacto2')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input class="form-control" type="text" wire:model="nombreContacto3" class="form-control"
                            placeholder="Nombre de contacto 3">
                        @error('nombreContacto3')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" wire:model="telefonoContacto3"
                            class="form-control" placeholder="Número de contacto 3">
                        @error('telefonoContacto3')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" wire:model="emailContacto3" class="form-control"
                            placeholder="Email 3">
                        @error('emailContacto3')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input class="form-control" type="text" wire:model="tipoInstitucion" class="form-control"
                            placeholder="Tipo de insitución (opcional)">
                        @error('tipoInstitucion')
                            <span class="warning">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col 12">
                    @if ($edit == null)
                        <button class="btn btnSbyb" wire:click="agregarSitio">Añadir sitio</button>
                    @else
                        <button class="btn btnSbyb" wire:click="guardarCambiosSitio({{ $sitio->id }})">Guardar
                            cambios</button>
                    @endif

                </div>
            </div>
        </div>
    </div>

    @if ($sitio != null)
        {{-- INICIO formulario CCTV --}}
        <div class="row g-0">

            @if ($sitio->cctv == null || $editCCTV == true)
                <div class="col g-0">
                    <div class="card cardClientes shadow p-3 mb-5 bg-white rounded">
                        <div class="row">
                            <div class="col ">
                                @if ($editCCTV == false)
                                <h4>Agregar CCTV a {{ $sitio->nombre }}</h4>
                                @else
                                <h4>Modificar datos de CCTV</h4>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control" type="text" wire:model="tipoGrabador"
                                                class="form-control" placeholder="Tipo Grabador">
                                            @error('tipoGrabador')
                                                <span class="warning">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control" type="text" wire:model="cantidadCamaras"
                                                class="form-control" placeholder="Cantidad de cámaras">
                                            @error('cantidadCamaras')
                                                <span class="warning">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control" type="text" wire:model="numeroSerie"
                                                class="form-control" placeholder="Número de serie">
                                            @error('numeroSerie')
                                                <span class="warning">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            @if ($editCCTV == false)
                                            <button class="btn btnSbyb form-control" wire:click="agregarCCTV">Añadir
                                                CCTV</button>
                                            @else
                                            <button class="btn btnSbyb form-control" wire:click="guardarCambiosCCTV({{$sitio->cctv->id}})">Guardar Cambios</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


            @if ($sitio->alarma == null || $editAlarma == true)
                <div class="col">
                    <div class="card cardClientes shadow p-3 mb-5 bg-white rounded">
                        <div class="row">
                            <div class="col ">
                               @if ($editAlarma == false)
                               <h4>Agregar alarma a {{ $sitio->nombre }}</h4>
                               @else
                               <h4>Guardar cambios de Alarma</h4>
                               @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <select class="form-control" wire:model="tipoAlarma" id="">
                                                <option value="">Seleccione tipo de alarma</option>
                                                @foreach ($tiposAlarma as $tipoAlarma)
                                                    <option value="{{ $tipoAlarma->id }}">{{ $tipoAlarma->nombre }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('tipoAlarma')
                                                <span class="warning">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col">
                                            <input class="form-control" type="text" wire:model="numeroId"
                                                class="form-control" placeholder="Número de serie">
                                            @error('numeroId')
                                                <span class="warning">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col">
                                            @if ($editAlarma == false)
                                            <button class="btn btnSbyb form-control" wire:click="agregarAlarma">Añadir
                                                Alarma</button>
                                            @else
                                            <button class="btn btnSbyb form-control" wire:click="guardarCambiosAlarma({{$sitio->alarma->id}})">Guardar Cambios</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
        {{-- FIN formulario CCTV --}}
    @endif



</div>


@endif



