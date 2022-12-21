
    <div class="container container-datos shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col">
                <div class="row">
                    <form method="GET" action="{{ route('reporte_turno') }}">

                        <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">  <input type="checkbox" name="turnoDoble" value="true" wire:click="modalidadTurno"> Turno Doble</label>
                            {{ $turnoDoble }}
                        </div>

                        <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">Nombre Monitor</label>
                            <select class="datos-turno" name="nombreMonitor" id="" style="padding-right: 8px;" wire:model="monitor1">
                                @foreach ($monitores as $monitor)
                                    <option value="{{ $monitor->nombre }}">{{ $monitor->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        @if ($turnoDoble == true)
                            <div class="col text-center align-self-center"><label
                                class="form-label datos-turno label-turno">Nombre Monitor 2</label>
                                <select class="datos-turno" name="nombreMonitor1" id="" style="padding-right: 8px;" wire:model="monitor2">
                                    @foreach ($monitores as $monitor)
                                            <option value="{{ $monitor->nombre }}">{{ $monitor->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">Turno</label>
                            <select class="datos-turno" name="turnoSeleccionado" wire:model="turno">
                                <option value="1">De 23:00 a 07:00</option>
                                <option value="2">De 07:00 a 15:00</option>
                                <option value="3">De 15:00 a 23:00</option>
                            </select>
                        </div>

                        <div class="col text-center align-self-center"><input class="datos-turno"
                            type="text" name="fechaT" value="{{ Carbon\Carbon::now()->isoFormat('dddd DD MMMM YYYY') }}" hidden></div>

                        <div class="col text-center align-self-center">

                            <button class="btn btn-primary btn-lg btnSbyb" type="submit"
                        style="margin-top: 15px; margin-bottom:10px; padding-right: 80px; padding-left: 80px;">Ingresar</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
