<div>
    <div class="container container-datos shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col">
                <div class="row">
                    <form method="GET" action="{{ route('reporte_turno') }}">

                        <div class="col text-center align-self-center">
                            <label
                            class="form-label datos-turno label-turno">Modalidad Turno</label>
                            <div class="col text-center align-self-center">

                                <input class="form-label datos-turno label-turno" type="checkbox" value="true" name="modalidadTurno" wire:model="turnoDoble">Turno Doble


                            </div>
                        </div>


                  <div class="col text-center align-self-center"><label
                    class="form-label datos-turno label-turno">Nombre Monitor</label>
                    <select class="datos-turno" name="nombreMonitor" wire:model="monitor1"  style="padding-right: 8px;">
                        @if ($turnoDoble)
                        <option>Seleccione Monitor 1</option>
                            @foreach ($monitores as $monitor)

                            @if ($monitor->nombre != $monitor2)
                                <option value="{{ $monitor->nombre }}">{{ $monitor->nombre }}</option>
                            @endif

                            @endforeach
                        @else
                            <option>Seleccione Monitor</option>
                            @foreach ($monitores as $monitor)
                                <option value="{{ $monitor->nombre }}">{{ $monitor->nombre }}</option>

                            @endforeach
                        @endif

                    </select>


                </div>

                @if ($turnoDoble)
                    <div class="col text-center align-self-center"><label
                        class="form-label datos-turno label-turno">Nombre Monitor 2</label>
                        <select class="datos-turno" name="nombreMonitor2" wire:model="monitor2"   style="padding-right: 8px;">

                                <option selected>Seleccione Monitor 2</option>
                                @foreach ($monitores as $monitor)
                                    @if ($monitor->nombre != $monitor1)
                                        <option value="{{ $monitor->nombre }}">{{ $monitor->nombre }}</option>
                                    @endif

                                @endforeach

                        </select>
                    </div>
                @endif


                    <div class="col text-center align-self-center"><label
                            class="form-label datos-turno label-turno">Turno</label><select class="datos-turno" name="turnoSeleccionado">
                                <option value="1">De 23:00 a 07:00</option>
                                <option value="2">De 07:00 a 15:00</option>
                                <option value="3">De 15:00 a 23:00</option>
                        </select></div>

                        <div class="col text-center align-self-center"><input class="datos-turno"
                            type="text" name="fechaT" value="{{ Carbon\Carbon::now()->isoFormat('dddd DD MMMM YYYY') }}" hidden></div>

                        <div class="col text-center align-self-center">

                            <button class="btn btn-primary btn-lg btnSbyb" type="submit"
                        style="margin-top: 15px; margin-bottom:10px; padding-right: 80px; padding-left: 80px;">Ingresar</button>
                        </div>


                    </form>

{{--
            <div class="container container-loading">
                <div class="row align-items-center">
                    <div class="col-3 justify-content-center">
                        <img class="loadingSbyb" src=assetsAdministrador\assets\img\LogologinSoloAzul.png alt="" width="100" height="100">
                    </div>
                    <div class="col-9">
                        <label class="form-label" style="font-size: 18px;">Guardando datos, por favor espere...</label>
                    </div>
                </div>
            </div> --}}


                </div>
            </div>
        </div>
    </div>
</div>
