<div class="row g-0">
    <div class="col">
        <div class="card cardClientes shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <div class="row">
                    <div class="col text-uppercase">
                        <h1>{{$cliente->nombre}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center"><select class="form-select selectByB shadow-none" wire:model="idSitio">
                            <option class="selectByB" value="undefined" selected="">Seleccione un sitio</option>
                            @foreach ($locacionesCliente as $locacion)
                                <option class="selectByB" value="{{$locacion->id}}">{{ $locacion->nombre }}</option>
                            @endforeach
                        </select></div>

                    <div class="col"><label class="col-form-label labelCardClientes">Contacto:</label>
                    @if ($sitio != null)
                    <label class="col-form-label">{{$sitio->nombre_contacto}}</label>
                    @endif
                    </div>

                </div>

              <div class="row">
                <div class="col"><label class="col-form-label labelCardClientes">Dirección:</label>
                    @if ($sitio != null)
                    <label class="col-form-label">{{ $sitio->direccion }}</label>
                    @endif

                </div>
                <div class="col"><label class="col-form-label labelCardClientes">N° de Contacto:</label>
                    @if ($sitio != null)
                        <label class="col-form-label">{{ $sitio->contacto_telefono }}</label>
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
                            <h4 class="card-title subtitulosCard">CCTV</h4>
                            <div class="row">
                                <div class="col columnSepararCards"></div>
                            </div>
                            <div class="row">
                                <div class="col"> <label class="col-form-label labelCardClientes">Tipo de grabador:</label>
                                    @if ($sitio && $sitio->cctv != null)
                                        <label class="col-form-label">{{ $sitio->cctv->tipo_dvr }}</label>
                                    @endif
                                </div>
                                <div class="col"><label class="col-form-label labelCardClientes">Cantidad de cámaras:</label>
                                    @if ($sitio && $sitio->cctv != null)
                                        <label class="col-form-label">{{ $sitio->cctv->cantidad_camaras }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="col-form-label labelCardClientes">Número de Serie:&nbsp;</label>
                                    @if ($sitio && $sitio->cctv != null)
                                        <label class="col-form-label">{{ $sitio->cctv->numero_serie }}</label>
                                    @endif
                                </div>
                                {{-- <div class="col"><label class="col-form-label ">LabelCamaras</label></div> --}}
                            </div>
                        </div>
                    </div>
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
                                <h4 class="card-title subtitulosCard">Alarma</h4>
                                <div class="row">
                                    <div class="col columnSepararCards"></div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="col-form-label labelCardClientes">Tipo de alarma:</label>
                                        @if ($sitio && $sitio->alarma != null)

                                            <label class="col-form-label">{{ $sitio->alarma->tipoAlarma->nombre }}</label>
                                        @endif
                                    </div>
                                    <div class="col">

                                        @if ($sitio && $sitio->alarma != null)
                                            @switch($sitio->alarma->tipoAlarma->nombre)
                                                @case("Intrusión GSM")
                                                    <label class="col-form-label labelCardClientes">Número:&nbsp;</label>
                                                    <label class="col-form-label">{{ $sitio->alarma->id_o_numero}}</label>
                                                @break
                                                @case("Intrusión IP")
                                                    <label class="col-form-label labelCardClientes">ID:&nbsp;</label>
                                                    <label class="col-form-label">{{ $sitio->alarma->id_o_numero}}</label>
                                                @break
                                            @default

                                        @endswitch

                                        @endif

                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col"><label class="col-form-label">GSM</label></div>
                                    <div class="col"><label class="col-form-label">Número</label></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    {{--Inicio de formulario--}}
    <div class="col">
        <div class="card cardClientes shadow p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col ">
                    <h1>Agregar sitio a {{$cliente->nombre}}</h1>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                      <input type="text" wire:model="nombre" class="form-control" placeholder="Nombre de sitio">
                      @error('nombre') <span class="warning">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                      <input type="text" wire:model="nombreContacto" class="form-control" placeholder="Nombre de contacto">
                      @error('nombreContacto') <span class="warning">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                      <input type="text" wire:model="email" class="form-control" placeholder="Email">
                      @error('email') <span class="warning">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                      <input type="text" wire:model="ciudad" class="form-control" placeholder="Ciudad">
                      @error('ciudad') <span class="warning">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                      <input type="text" wire:model="contactoTelefono" class="form-control" placeholder="Ciudad">
                      @error('contactoTelefono') <span class="warning">{{ $message }}</span> @enderror
                    </div>
                    <div class="col">
                      <input type="text" wire:model="direccion" class="form-control" placeholder="Direccion">
                      @error('direccion') <span class="warning">{{ $message }}</span> @enderror
                    </div>

                    <div class="col 12">
                      <button class="btn btnSbyb" wire:click="agregarSitio">Añadir sitio</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    {{--Fin de formulario--}}

</div>






