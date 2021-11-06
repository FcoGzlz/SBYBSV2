@extends('layouts.menu')



@section('content')
<div id="contenidoRowTByCR">
    <div class="col"></div>
    <div class="container-fluid containerTable">
        <div class="table-responsive table-borderless">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th class="text-center">Nombre y apellido</th>
                        <th class="text-center">Rut</th>
                        <th class="text-center">Prioridad</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Responsable</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center" style="width:100px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudesIngresadas as $solicitud)


                            <tr>
                                <td>{{ $solicitud->nombreCliente }}
                                    {{ $solicitud->apellidoCliente }}</td>

                                {{-- <td>{{ $solicitud->apellidoCliente }}</td> --}}
                                <td class="text-center">{{ $solicitud->rut }}</td>
                                @if ($solicitud->prioridad == 1)
                                    <td
                                        class="d-flex justify-content-center align-items-center tdPriori">
                                        <div class="text-center PrioriAlto"><label
                                                class="labelPriori">Alto</label>
                                        </div>
                                    </td>
                                @endif

                                @if ($solicitud->prioridad == 2)
                                    <td
                                        class="d-flex justify-content-center align-items-center tdPriori">
                                        <div class="text-center PrioriMedio"><label
                                                class="labelPriori">Medio</label>
                                        </div>
                                    </td>
                                @endif

                                @if ($solicitud->prioridad == 3)
                                    <td
                                        class="d-flex justify-content-center align-items-center tdPriori">
                                        <div class="text-center PrioriBajo"><label
                                                class="labelPriori">Bajo</label>
                                        </div>
                                    </td>
                                @endif
                                <td class="text-center">{{ $solicitud->telefono }}</td>

                                @if ($solicitud->responsable == "")
                                <td class="text-center">No asignado</td>
                                @else

                                <td class="text-center">{{App\User::findOrFail($solicitud->responsable)->nombre}} {{App\User::findOrFail($solicitud->responsable)->apellido}}</td>
                                @endif

                                <td class="text-center">
                                    {{ Carbon\Carbon::parse($solicitud->fechaIngreso)->isoFormat('dddd, D MMM YYYY - HH:mm') }}
                                    hrs</td>



                                    <td style="width:90px;">
                                        <div class="col">
                                            <div class="row">
                                                <form method="POST" action="{{ route('editarSolicitud')}}">
                                                    @csrf
                                                    <input type="hidden" value="{{$solicitud->id}}" name="id">
                                                <button class="btn btn-primary" id="btnEditarDetalle" type="submit"><i class="fa fa-pencil"></i>
                                                </button>
                                            </form>
                                            <form method="POST" action="{{route('eliminarSolicitud')}}">
                                                @csrf
                                                <input hidden name="id" value="{{$solicitud->id}}">
                                            <button class="btn btn-primary" id="btnEliminarDetalle" type="submit"><i class="fa fa-trash"></i>
                                            </button>
                                            </form>
                                        </div>
                                        </div>

                                    </td>


                                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col"></div>
</div>
@endsection
