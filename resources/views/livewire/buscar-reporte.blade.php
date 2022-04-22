
<div class="row g-0">
    <div class="col">
        <div class="card" style="margin-right: 5%;margin-left: 5%;margin-top: 25px;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>Listado de reportes</h1>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col">    <div class="row height d-flex justify-content-center align-items-center">


</div>
</div>
                </div>
                <div class="row columnSepararCards"></div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive tablaClientes">
                            <table class="table table-striped table-sm">
                                <thead class="tablaClientes">
                                    <tr>
                                        <th>
                                            <div class="col">
                                                Reponsable
                                            </div>
                                            <div class="col">
                                                <select wire:model="buscar">
                                                    <option selected value="">Todos</option>
                                                    @foreach ($monitores as $monitor)
                                                    <option value="{{ $monitor->nombre }}">{{$monitor->nombre}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </th>
                                        <th>Fecha</th>
                                        <th>
                                            <div class="col">
                                                Turno
                                            </div>

                                            <div class="col">

                                            <select wire:model="buscarTurno">
                                                <option selected value="">Todos</option>
                                                <option value="1">Noche, de 00:00 a 08:00 hrs</option>
                                                <option value="2">Mañana, de 08:00 a 16:00</option>
                                                <option value="3">Tarde, de 16:00 a 00:00</option>
                                            </select>
                                        </div></th>
                                        <th>Acciones</th>
                                    </tr>

                                </thead>
                                <tbody class="tablaClientes">
                                    @foreach ($reportes as $reporte)
                        <tr>
                            <td>{{ $reporte->responsable }}
                            <td>{{ $reporte->fecha }}
                            <td>@switch($reporte->turno)
                                @case(1)
                                        Noche, de 00:00 a 08:00 hrs
                                    @break
                                @case(2)
                                        Mañana, de 08:00 a 16:00 hrs
                                    @break
                                @case(3)
                                        Tarde, de 16:00 a 00:00 hrs
                                    @break

                                @default

                            @endswitch
                           <td>
                            <form action="{{ url('/reporte_'.$reporte->id) }}">
                                @csrf
                                <button class="btn btn-info" type="submit">Ver PDF</button>
                            </form>
                           </td>

                        </tr>
                    @endforeach
                                </tbody>
                            </table>
                            {{ $reportes->onEachSide(2)->links()}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
