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
