@extends('layouts.menu_reporte')
@section('content')
<div class="row no-gutters">
    <div class="col">
        <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
            <div class="card cardDetallesSeguridadByB">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="text-center" id="tituloCardtotales" style="color: #009cde;">Solicitudes del Día</h4>
                            <h5 class="text-center">{{ Carbon\Carbon::now()->isoFormat('dddd, D') }} de {{ Carbon\Carbon::now()->isoFormat('MMMM YYYY') }}</h5>
                        </div>
                        <div class="col">
                            <div class="card" id="cardTotal">
                                <div class="card-body">
                                    <h4 class="card-title tituloSolicitud">Solicitudes Totales</h4>
                                    <p class="text-right card-text textSolicitudes"> {{$solicitudes->count()}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="card" id="cardAlto">
                                        <div class="card-body">
                                            <h4 class="card-title tituloSolicitud">Solicitudes</h4>
                                            <h6 class="card-subtitle mb-2 sub">Nivel Alto</h6>
                                            <p class="text-right card-text textSolicitudes"> {{$solicitudes->where('prioridad', '=', 1)->count()}} </p>
                                        </div>
                                    </div>
                                    <div class="card marginBottomLabelCard" id="catCardAlto">
                                        <div class="card-body" style="border: 2px solid #eb0038 ;">
                                            @foreach ($categorias as $categoria)
                                            <div class="row">
                                                <div class="col"><label class="col-form-label">{{ $categoria->nombre }}: {{ $solicitudes->where('prioridad', '=', 1)->where('categoria', '=', $categoria->id)->count() }} </label></div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="card" id="cardMedio">
                                        <div class="card-body">
                                            <h4 class="card-title tituloSolicitud" style="color:#757575">Solicitudes</h4>
                                            <h6 class="text-muted card-subtitle mb-2">Nivel Medio</h6>
                                            <p class="text-right card-text textSolicitudes" style="color:#757575">{{$solicitudes->where('prioridad', '=', 2)->count()}}</p>
                                        </div>
                                    </div>
                                    <div class="card marginBottomLabelCard" id="catCardMedio">
                                        <div class="card-body">
                                            @foreach ($categorias as $categoria)
                                            <div class="row">
                                                <div class="col"><label class="col-form-label">{{ $categoria->nombre }}: {{ $solicitudes->where('prioridad', '=', 2)->where('categoria', '=', $categoria->id)->count() }} </label></div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="card" id="cardBajo">
                                        <div class="card-body">
                                            <h4 class="card-title tituloSolicitud">Solicitudes</h4>
                                            <h6 class="text-muted card-subtitle mb-2">Nivel Bajo</h6>
                                            <p class="text-right card-text textSolicitudes">{{$solicitudes->where('prioridad', '=', 3)->count()}}</p>
                                        </div>
                                    </div>
                                    <div class="card marginBottomLabelCard" id="catCardBajo">
                                        <div class="card-body">
                                            @foreach ($categorias as $categoria)
                                            <div class="row">
                                                <div class="col"><label class="col-form-label">{{ $categoria->nombre }}: {{ $solicitudes->where('prioridad', '=', 3)->where('categoria', '=', $categoria->id)->count() }} </label></div>
                                            </div>
                                            @endforeach
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
</div>
@endsection
