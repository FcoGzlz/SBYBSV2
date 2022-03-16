<div class="tab-content">
    <div class="tab-pane fade show active" id="tabMonitor1">
        <div id="contenidoRowTByCR">
            <div class="col"></div>
            <div class="container-fluid containerTable">
                <div class="table-responsive table-borderless">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Horario/Cámara</th>
                                @for ($i = 1; $i <= 16; $i++)
                                    <th class="text-center">{{ $i }}</th>
                                @endfor
                            </tr>
                        </thead>
                        <tbody>
                            <form method="POST" action="{{ route('datos_reporte') }}">
                                @csrf
                                @php
                                    $hora = Carbon\Carbon::create('03:00');
                                    $countCamaras = 0;
                                @endphp
                                @for ($i = 4; $i <= 12; $i++)
                                    <tr>
                                        <td>{{ $hora->addHour()->isoFormat('hh:mm') }}
                                        </td>
                                        @for ($y = 1; $y <= 16; $y++)
                                            <td>

                                                <input type="checkbox"
                                                    wire:model="checks.{{ $y }}-{{ $hora->isoFormat('hh:mm') }}"
                                                    wire:click="hora"
                                                    name="check[]"
                                                    value="{{ $y }}-{{ $hora->isoFormat('hh:mm') }}">
                                            </td>
                                        @endfor
                                    </tr>
                                @endfor

                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                @foreach ($checks as $check)
                    {{ $hora }}{{ $check }}
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane fade show active" id="tabMonitor2">
        <div id="contenidoRowTByCR">
            <div class="col"></div>


            <div class="container-fluid containerTable">
                <div class="table-responsive table-borderless">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th>Horario/Cámara</th>
                                @for ($i = 1; $i <= 16; $i++)
                                    <th class="text-center">{{ $i }}</th>
                                @endfor
                            </tr>
                        </thead>
                        <tbody>
                            <form method="POST" action="{{ route('datos_reporte') }}">
                                @csrf
                                @php
                                    $hora = Carbon\Carbon::create('03:00');
                                    $countCamaras = 0;
                                @endphp
                                @for ($i = 4; $i <= 12; $i++)
                                    <tr>
                                        <td>{{ $hora->addHour()->isoFormat('hh:mm') }}
                                        </td>
                                        @php
                                            $var = count($checks);
                                        @endphp
                                        @for ($y = 1; $y <= 16; $y++)

                                            @for ($j = 0; $j <= $var; $j++)
                                            @endfor
                                        @endfor
                                    </tr>
                                @endfor

                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</div>
