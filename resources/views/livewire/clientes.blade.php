<div class="row g-0">
    <div class="col">
        <div class="card" style="margin-right: 25%;margin-left: 25%;margin-top: 25px;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>CLIENTE</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Sitio</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </div>
                    <div class="col"><label class="col-form-label">Contacto</label></div>
                </div>
                <div class="row">
                    <div class="col"><label class="col-form-label">Direccion</label></div>
                    <div class="col"><label class="col-form-label">N° de Contacto</label></div>
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
                                    <div class="col"><label class="col-form-label">NVR / DVR</label></div>
                                    <div class="col"><label class="col-form-label">Cámaras:</label></div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="col-form-label">Número de Serie:&nbsp;</label></div>
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
                                    <div class="col"><label class="col-form-label">Risco</label></div>
                                    <div class="col"><label class="col-form-label">ID:&nbsp;</label></div>
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
