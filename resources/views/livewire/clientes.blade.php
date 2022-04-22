<div class="row g-0">
    <div class="col">
        <div class="card" style="margin-right: 25%;margin-left: 25%;margin-top: 25px;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>{{$cliente->nombre}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center"><select wire:model="idSitio">
                            <option value="undefined" selected="">Seleccione un sitio</option>
                            @foreach ($locacionesCliente as $locacion)
                                <option value="{{$locacion->id}}">{{ $locacion->nombre }}</option>
                            @endforeach
                        </select></div>

                    <div class="col"><label class="col-form-label">Contacto:</label>
                    @if ($sitio != null)
                    <label class="col-form-label">{{$sitio->nombre_contacto}}</label>
                    @endif
                    </div>

                </div>

              <div class="row">
                <div class="col"><label class="col-form-label">Dirección:</label>
                    @if ($sitio != null)
                    <label class="col-form-label">{{ $sitio->direccion }}</label>
                    @endif

                </div>
                <div class="col"><label class="col-form-label">N° de Contacto:</label>
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
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">CCTV</h4>
                            <div class="row">
                                <div class="col columnSepararCards"></div>
                            </div>
                            <div class="row">
                                <div class="col"> <label class="col-form-label">Tipo de grabador:</label>
                                    @if ($sitio && $sitio->cctv != null)
                                        <label class="col-form-label">{{ $sitio->cctv->tipo_dvr }}</label>
                                    @endif
                                </div>
                                <div class="col"><label class="col-form-label">Cámaras:</label>
                                    @if ($sitio && $sitio->cctv != null)
                                        <label class="col-form-label">{{ $sitio->cctv->cantidad_camaras }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="col-form-label">Número de Serie:&nbsp;</label>
                                    @if ($sitio && $sitio->cctv != null)
                                        <label class="col-form-label">{{ $sitio->cctv->numero_serie }}</label>
                                    @endif
                                </div>
                                <div class="col"><label class="col-form-label">LabelCamaras</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col columnSepararCards"></div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Alarma</h4>
                            <div class="row">
                                <div class="col columnSepararCards"></div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="col-form-label">Tipo de alarma:</label>
                                    @if ($sitio && $sitio->alarmas)
                                        <label class="col-form-label">{{ $sitio->alarmas->tipoAlarma->nombre }}</label>
                                    @endif
                                </div>
                                <div class="col">

                                    @if ($sitio && $sitio->alarmas != null)
                                        @switch($sitio->tipoAlarma->nombre)
                                            @case("Instrusión GSM")
                                                <label class="col-form-label">Número:&nbsp;</label>
                                                <label class="col-form-label">{{ $sitio->alarmas->get()->id_o_numero}}</label>
                                            @break
                                            @case("Intrusión IP")
                                                <label class="col-form-label">ID:&nbsp;</label>
                                                <label class="col-form-label">{{ $sitio->alarmas->get()->id_o_numero}}</label>
                                            @break
                                        @default

                                    @endswitch

                                    @endif

                                </div>
                            </div>
                            <div class="row">
                                <div class="col"><label class="col-form-label">GSM</label></div>
                                <div class="col"><label class="col-form-label">Número</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>




<div>

    <select name="" id="" wire:model="idSitio">
        <option value="" selected>Seleccione un sitio</option>
    @foreach ($locacionesCliente as $locacion)
        <option value="{{$locacion->id}}">{{ $locacion->nombre }}</option>
    @endforeach
</select>

    @if ($sitio != null)
       <div class="row"><label>Contacto: </label>{{$sitio->nombre_contacto}}</div>
        <div class="row"><label>Número contacto: </label>{{$sitio->contacto_telefono}}</div>
        <div class="row"><label>Dirección: </label>{{$sitio->direccion}}</div>

        @if ($sitio->cctv != null)
        <div class="row">
            <div class="col-6">
                <label>Tipo Grabador</label>{{ $sitio->cctv->tipo_dvr }}
                <label>Número de serie</label>{{ $sitio->cctv->numero_serie }}
                <label>Dirección IP</label>{{ $sitio->cctv->direccion_ip }}
                <label>Cantidad de cámaras</label>{{ $sitio->cctv->cantidad_camaras }}
            </div>
        </div>
        @endif
        @if ($sitio->alarma != null)
        <div class="row">
            <div class="col-6">
                {{ $sitio->alarma }}
            </div>
        </div>
        @endif
    @endif
</div>
