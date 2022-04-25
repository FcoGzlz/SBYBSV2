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
                    <div class="col">
                        <div class="row height d-flex justify-content-center align-items-center">


                        </div>
                    </div>
                </div>
                <div class="row columnSepararCards"></div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive tablaClientes">
                            <table class="table table-striped table-sm tablaClientes">
                                <thead class="tablaClientes">
                                    <tr>
                                        <th>
                                            <div class="col tablaHeadReportes">
                                                Reponsable
                                            </div>
                                            <div class="col">

                                                <select class="form-select selectByB shadow-none" wire:model="buscar">


                                                    <option selected value="">Filtrar por responsable</option>
                                                    @foreach ($monitores as $monitor)
                                                        <option value="{{ $monitor->nombre }}">{{ $monitor->nombre }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="col">
                                                Fecha => {{ $buscarFecha }}
                                            </div>
                                            <div class="col">
                                                <input type="date" wire:model="buscarFecha" placeholder="Hola">
                                            </div>
                                        </th>
                                        <th>
                                            <div class="col">
                                                Turno
                                            </div>

                                            <div class="col">
                                            <select class="form-select selectByB shadow-none" wire:model="buscarTurno">
                                                <option selected value="">Filtrar por turno</option>
                                                <option value="1">Noche, de 00:00 a 08:00 hrs</option>
                                                <option value="2">Mañana, de 08:00 a 16:00</option>
                                                <option value="3">Tarde, de 16:00 a 00:00</option>
                                            </select>


                                            </div>
                                    </th>
                                        <th class="text-end">Acciones</th>
                                        </th>
                                    </tr>

                                </thead>
                                <tbody class="tablaClientes">
                                    @foreach ($reportes as $reporte)
                                        <tr>
                                            <td>{{ $reporte->responsable }}
                                            <td>{{ $reporte->fecha }}
                                            <td>
                                                @switch($reporte->turno)
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

                                                @if ($repo != null)

                                                    @if ($repo == $reporte->id)
                                                        <button class="btn btn-info" type="button"
                                                        wire:click="renderPDF({{ $reporte->id }})">Visualizando</button>
                                                    @else
                                                    <button class="btn btn-info" type="button"
                                                        wire:click="renderPDF({{ $reporte->id }})">Ver PDF</button>
                                                    @endif
                                                @else
                                                    <button class="btn btn-info" type="button"
                                                    wire:click="renderPDF({{ $reporte->id }})">Ver PDF</button>

                                                @endif



                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $reportes->onEachSide(2)->links() }}

                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>




    @if ($repo != null)
    <div class="col">
        <div class="card" style="margin-right: 5%;margin-left: 5%;margin-top: 25px;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1> <button class="btn btn-info" type="button"
                            wire:click="cerrarVisualizador">Cerrar</button></h1>
                            {{$repo}}
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col">
                        <div class="row height d-flex justify-content-center align-items-center">


                        </div>
                    </div>
                </div>
                <div class="row columnSepararCards"></div>
                <div class="row">
                    <div class="col">
                       @if ($repo != null)
                       @livewire('pdf-render',[
                        'reporte' => $repo,
                        ])
                       @else
                       @livewire('pdf-render',[
                        'reporte' => $repo,
                        ])
                       @endif
                    </div>

                </div>

            </div>
        </div>


    </div>
@endif
</div>
</div>
