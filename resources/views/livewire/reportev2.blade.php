
            <div class="row g-0">
                <div class="col text-center">

                    <div wire:loading wire:target="finalizarReporte">
                        <livewire:loading />
                        </div>
                        <div wire:loading.remove wire:target="finalizarReporte">

                    <div class="my-3 p-3 bg-white rounded box-shadow border-3">
                        <div class="row g-0">
                            <div class="col">
                                <div class="row text-start">
                                    <div class="col-auto"><label
                                            class="">Nombre: {{ $nombreMonitor }}</label>
                                    </div>

                                    <div class="col-auto"><label class="">Turno:
                                        </label>
                                        <label class="">
                                            @switch($turno)
                                                @case(1)
                                                    Noche de 23:00 a 07:00 hrs.
                                                @break

                                                @case(2)
                                                    Mañana de 07:00 a 15:00 hrs.
                                                @break

                                                @case(3)
                                                    Tarde de 15:00 a 23:00 hrs.
                                                @break
                                            @endswitch
                                        </label>
                                    </div>

                                    <div class="col-auto"><label
                                            class="">{{ $this->fechaTurno = $turnoBD->fecha }}</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col text-center h1Reporte"><h1>Reporte de Turno</h1></div>
                            <div class="col text-end col-finalizar-turno"><button class="btn btn-lg btnSbyb" type="submit"
                                    wire:click="finalizarReporte" >Finalizar Turno</button></div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <div class="row g-0">
                                    <div class="col col-pills-tab">
                                        <ul class="nav nav-pills mb-1 justify-content-center paneles-monitores" id="pills-tab" role="tablist">

                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link {{ $tabMonitor == 1 ? 'active' : '' }}" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true"   wire:click="$set('tabMonitor', '1')">1</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link {{ $tabMonitor == 2 ? 'active' : '' }}" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="true"  wire:click="$set('tabMonitor', '2')">2</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link {{ $tabMonitor == 3 ? 'active' : '' }}" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false"  wire:click="$set('tabMonitor', '3')">3</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link {{ $tabMonitor == 4 ? 'active' : '' }}" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false"  wire:click="$set('tabMonitor', '4')">4</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link {{ $tabMonitor == 5 ? 'active' : '' }} " id="pills-5-tab" data-bs-toggle="pill" data-bs-target="pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false" wire:click="$set('tabMonitor', '5')">5</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link {{ $tabMonitor == 6 ? 'active' : '' }}" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false"  wire:click="$set('tabMonitor', '6')">6</button>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row g-0">
                        <div class="col">

                            <div>
                                <ul class="nav nav-tabs " role="tablist"></ul>
                                <div class="tab-content">
                                    @switch($tabMonitor)
                                        @case(1)
                                            <div class="tab-pane fade show active" role="tabpanel" id="pills-1" aria-labelledby="pills-1-tab">
                                                {{-- <h4 style="background-color: #009cde; color:white">MONITOR {{ $tabMonitor }}</h4> --}}
                                                <div class="p-3 bg-white rounded box-shadow border-3" style="border: 3px solid #009cde!important;">
                                                    <h4 style="color:#009cde">MONITOR {{ $tabMonitor }}</h4>
                                                    <div class="table-responsive tableMonitor">
                                                        <table class="table table-bordered">
                                                            <thead class="">
                                                                <tr>
                                                                    <th>Hora</th>
                                                                    <th>1&nbsp;</th>
                                                                    <th>2&nbsp;</th>
                                                                    <th>3&nbsp;</th>
                                                                    <th>4&nbsp;</th>
                                                                    <th>5&nbsp;</th>
                                                                    <th>6&nbsp;</th>
                                                                    <th>7&nbsp;</th>
                                                                    <th>8&nbsp;</th>
                                                                    <th>9&nbsp;</th>
                                                                    <th>10</th>
                                                                    <th>11</th>
                                                                    <th>12</th>
                                                                    <th>13</th>
                                                                    <th>14</th>
                                                                    <th>15</th>
                                                                    <th>16</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @switch($turno)
                                                                    @case(1)
                                                                        @php
                                                                            $hora = Carbon\Carbon::create('22:00');
                                                                        @endphp
                                                                    @break

                                                                    @case(2)
                                                                        @php
                                                                            $hora = Carbon\Carbon::create('06:00');
                                                                        @endphp
                                                                    @break

                                                                    @case(3)
                                                                        @php
                                                                            $hora = Carbon\Carbon::create('14:00');
                                                                        @endphp
                                                                    @break
                                                                @endswitch

                                                                @for ($i = 1; $i <= 9; $i++)
                                                                    <tr>
                                                                        <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                                        @for ($j = 1; $j <= 16; $j++)
                                                                            <td>
                                                                                <div class="position-relative">
                                                                                    <input type="checkbox" class="ExtendedCheck" value = "{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM1">
                                                                                </div>
                                                                            </td>
                                                                        @endfor

                                                                    </tr>
                                                                @endfor
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                            </div>
                                        @break

                                        @case(2)
                                            <div class="tab-pane fade show active" role="tabpanel" id="pills-2" aria-labelledby="pills-2-tab">
                                                {{-- <h4 style="background-color: #009cde; color:white">MONITOR {{ $tabMonitor }}</h4> --}}
                                                <div class="p-3 bg-white rounded box-shadow border-3" style="border: 3px solid #009cde!important;">
                                                    <h4 style="color:#009cde">MONITOR {{ $tabMonitor }}</h4>
                                                <div class="table-responsive tableMonitor">
                                                    <table class="table table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th>Hora</th>
                                                                <th>1&nbsp;</th>
                                                                <th>2&nbsp;</th>
                                                                <th>3&nbsp;</th>
                                                                <th>4&nbsp;</th>
                                                                <th>5&nbsp;</th>
                                                                <th>6&nbsp;</th>
                                                                <th>7&nbsp;</th>
                                                                <th>8&nbsp;</th>
                                                                <th>9&nbsp;</th>
                                                                <th>10</th>
                                                                <th>11</th>
                                                                <th>12</th>
                                                                <th>13</th>
                                                                <th>14</th>
                                                                <th>15</th>
                                                                <th>16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @switch($turno)
                                                                @case(1)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('22:00');
                                                                    @endphp
                                                                @break

                                                                @case(2)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('06:00');
                                                                    @endphp
                                                                @break

                                                                @case(3)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('14:00');
                                                                    @endphp
                                                                @break
                                                            @endswitch

                                                            @for ($i = 1; $i <= 9; $i++)
                                                                <tr>
                                                                    <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                                    @for ($j = 1; $j <= 16; $j++)
                                                                        <td>
                                                                            <div class="position-relative">
                                                                                <input type="checkbox" class="ExtendedCheck" value = "{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM2">
                                                                            </div>
                                                                        </td>
                                                                    @endfor

                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        @break

                                        @case(3)
                                            <div class="tab-pane fade show active" role="tabpanel" id="pills-3" aria-labelledby="pills-3-tab">
                                                {{-- <h4 style="background-color: #009cde; color:white">MONITOR {{ $tabMonitor }}</h4> --}}
                                                <div class="p-3 bg-white rounded box-shadow border-3" style="border: 3px solid #009cde!important;">
                                                    <h4 style="color:#009cde">MONITOR {{ $tabMonitor }}</h4>
                                                <div class="table-responsive tableMonitor">
                                                    <table class="table table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th>Hora</th>
                                                                <th>1&nbsp;</th>
                                                                <th>2&nbsp;</th>
                                                                <th>3&nbsp;</th>
                                                                <th>4&nbsp;</th>
                                                                <th>5&nbsp;</th>
                                                                <th>6&nbsp;</th>
                                                                <th>7&nbsp;</th>
                                                                <th>8&nbsp;</th>
                                                                <th>9&nbsp;</th>
                                                                <th>10</th>
                                                                <th>11</th>
                                                                <th>12</th>
                                                                <th>13</th>
                                                                <th>14</th>
                                                                <th>15</th>
                                                                <th>16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @switch($turno)
                                                                @case(1)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('22:00');
                                                                    @endphp
                                                                @break

                                                                @case(2)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('06:00');
                                                                    @endphp
                                                                @break

                                                                @case(3)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('14:00');
                                                                    @endphp
                                                                @break
                                                            @endswitch

                                                            @for ($i = 1; $i <= 9; $i++)
                                                                <tr>
                                                                    <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                                    @for ($j = 1; $j <= 16; $j++)
                                                                        <td>
                                                                            <div class="position-relative">
                                                                                <input type="checkbox" class="ExtendedCheck" value = "{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM3">
                                                                            </div>
                                                                        </td>
                                                                    @endfor

                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        @break

                                        @case(4)
                                            <div class="tab-pane fade show active" role="tabpanel" id="pills-4" aria-labelledby="pills-4-tab">
                                                {{-- <h4 style="background-color: #009cde; color:white">MONITOR {{ $tabMonitor}}</h4> --}}
                                                <div class="p-3 bg-white rounded box-shadow border-3" style="border: 3px solid #009cde!important;">
                                                    <h4 style="color:#009cde">MONITOR {{ $tabMonitor }}</h4>
                                                <div class="table-responsive tableMonitor">
                                                    <table class="table table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th>Hora</th>
                                                                <th>1&nbsp;</th>
                                                                <th>2&nbsp;</th>
                                                                <th>3&nbsp;</th>
                                                                <th>4&nbsp;</th>
                                                                <th>5&nbsp;</th>
                                                                <th>6&nbsp;</th>
                                                                <th>7&nbsp;</th>
                                                                <th>8&nbsp;</th>
                                                                <th>9&nbsp;</th>
                                                                <th>10</th>
                                                                <th>11</th>
                                                                <th>12</th>
                                                                <th>13</th>
                                                                <th>14</th>
                                                                <th>15</th>
                                                                <th>16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @switch($turno)
                                                                @case(1)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('22:00');
                                                                    @endphp
                                                                @break

                                                                @case(2)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('06:00');
                                                                    @endphp
                                                                @break

                                                                @case(3)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('14:00');
                                                                    @endphp
                                                                @break
                                                            @endswitch

                                                            @for ($i = 1; $i <= 9; $i++)
                                                                <tr>
                                                                    <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                                    @for ($j = 1; $j <= 16; $j++)
                                                                        <td>
                                                                            <div class="position-relative">
                                                                                <input type="checkbox" class="ExtendedCheck" value = "{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM4">
                                                                            </div>
                                                                        </td>
                                                                    @endfor

                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        @break

                                        @case(5)
                                            <div class="tab-pane fade show active" role="tabpanel" id="pills-5" aria-labelledby="pills-5-tab">
                                                {{-- <h4 style="background-color: #009cde; color:white">MONITOR {{ $tabMonitor }}</h4> --}}
                                                <div class="p-3 bg-white rounded box-shadow border-3" style="border: 3px solid #009cde!important;">
                                                    <h4 style="color:#009cde">MONITOR {{ $tabMonitor }}</h4>
                                                <div class="table-responsive tableMonitor">
                                                    <table class="table table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th>Hora</th>
                                                                <th>1&nbsp;</th>
                                                                <th>2&nbsp;</th>
                                                                <th>3&nbsp;</th>
                                                                <th>4&nbsp;</th>
                                                                <th>5&nbsp;</th>
                                                                <th>6&nbsp;</th>
                                                                <th>7&nbsp;</th>
                                                                <th>8&nbsp;</th>
                                                                <th>9&nbsp;</th>
                                                                <th>10</th>
                                                                <th>11</th>
                                                                <th>12</th>
                                                                <th>13</th>
                                                                <th>14</th>
                                                                <th>15</th>
                                                                <th>16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @switch($turno)
                                                                @case(1)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('22:00');
                                                                    @endphp
                                                                @break

                                                                @case(2)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('06:00');
                                                                    @endphp
                                                                @break

                                                                @case(3)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('14:00');
                                                                    @endphp
                                                                @break
                                                            @endswitch

                                                            @for ($i = 1; $i <= 9; $i++)
                                                                <tr>
                                                                    <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                                    @for ($j = 1; $j <= 16; $j++)
                                                                        <td>
                                                                            <div class="position-relative">
                                                                                <input type="checkbox" class="ExtendedCheck" value = "{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM5">
                                                                            </div>
                                                                        </td>
                                                                    @endfor

                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        @break

                                        @case(6)
                                            <div class="tab-pane fade show active" role="tabpanel" id="pills-6" aria-labelledby="pills-6-tab">
                                                {{-- <h4 style="background-color: #009cde; color:white">MONITOR {{$tabMonitor}}</h4> --}}
                                                <div class="p-3 bg-white rounded box-shadow border-3" style="border: 3px solid #009cde!important;">
                                                    <h4 style="color:#009cde">MONITOR {{ $tabMonitor }}</h4>
                                                <div class="table-responsive tableMonitor">
                                                    <table class="table table-bordered ">
                                                        <thead>
                                                            <tr>
                                                                <th>Hora</th>
                                                                <th>1&nbsp;</th>
                                                                <th>2&nbsp;</th>
                                                                <th>3&nbsp;</th>
                                                                <th>4&nbsp;</th>
                                                                <th>5&nbsp;</th>
                                                                <th>6&nbsp;</th>
                                                                <th>7&nbsp;</th>
                                                                <th>8&nbsp;</th>
                                                                <th>9&nbsp;</th>
                                                                <th>10</th>
                                                                <th>11</th>
                                                                <th>12</th>
                                                                <th>13</th>
                                                                <th>14</th>
                                                                <th>15</th>
                                                                <th>16</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @switch($turno)
                                                                @case(1)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('22:00');
                                                                    @endphp
                                                                @break

                                                                @case(2)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('06:00');
                                                                    @endphp
                                                                @break

                                                                @case(3)
                                                                    @php
                                                                        $hora = Carbon\Carbon::create('14:00');
                                                                    @endphp
                                                                @break
                                                            @endswitch

                                                            @for ($i = 1; $i <= 9; $i++)
                                                                <tr>
                                                                    <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                                    @for ($j = 1; $j <= 16; $j++)
                                                                        <td>
                                                                            <div class="position-relative">
                                                                                <input type="checkbox" class="ExtendedCheck" value = "{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM6">
                                                                            </div>
                                                                        </td>
                                                                    @endfor

                                                                </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                            </div>
                                        @break

                                    @endswitch

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="container" style="width: ">
                        <div class="row datos-turno">
                            <div class="col">
                                <div class="row">
                                    <div class="col align-self-center"><label
                                            class="form-label datos-turno label-turno">Nombre:</label>{{ $nombreMonitor }}
                                    </div>

                                    <div class="col align-self-center">

                                        <label class="form-label datos-turno label-turno">Turno:
                                        </label>
                                        <label class="form-label datos-turno label-turno">
                                            @switch($turno)
                                                @case(1)
                                                    Noche de 00:00 a 08:00 hrs.
                                                @break

                                                @case(2)
                                                    Mañana de 08:00 a 16:00 hrs.
                                                @break

                                                @case(3)
                                                    Tarde de 16:00 a 00:00 hrs.
                                                @break
                                            @endswitch
                                        </label>
                                    </div>

                                    <div class="col text-center align-self-center"><label
                                            class="col-form-label datos-turno label-turno">{{ $this->fechaTurno = $turnoBD->fecha }}</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="my-3 p-3 bg-white rounded box-shadow border-3">
                        @if ($turno != 0)
                        <h4 class="text-start h4Comentario">Comentarios</h4>
                        <div class="row g-0 justify-content-center align-items-center formulario-comentarios">


                            <div class="col-auto datos-turno">
                                @if ($edit != true)
                                    <button class="btn btn-lg btnSbyb" type="button" wire:click="agregarComentario"
                                        style="width: 100%;">Agregar Comentario</button>
                                @else
                                    <button class="btn btn-lg btnSbyb" type="button" wire:click="guardarComentario"
                                        style="width: 100%;">Guardar Cambios</button>
                                @endif

                            </div>
                            <div class="col d-flex justify-content-center align-self-center">
                                <textarea class="flex-fill" style="font-size:20px;" wire:model="comentario"></textarea>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col">
                                <div class="table-responsive tabla-comentarios">
                                    <table class="table table-striped tabla-comentarios">
                                        <thead>
                                            <tr>
                                                <th class="th-hora">Hora de emisión</th>
                                                <th class="th-comentario">Comentario</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach (App\Models\Comentario::where('turno', '=', $turnoBD->id)->get() as $comentario)
                                            <tr>
                                                <th> {{ $comentario->hora}} </th>
                                                <td>
                                                    <div class="row">
                                                        <div class="col align-self-center"><label
                                                                class="col-form-label label-comentario">
                                                                {{ $comentario->comentario}}
                                                            </label></div>
                                                        <div class="col-auto align-self-center ms-auto">
                                                            <div class="row g-0">
                                                                <div class="col-auto"><button
                                                                        class="btn btnSbyb" type="button"
                                                                        wire:click="editarComentario({{ $comentario->id }})"><i
                                                                            class="far fa-edit"></i></button></div>
                                                                <div class="col-auto"><button
                                                                        class="btn btnSbyb" type="button"
                                                                        wire:click="eliminarComentario({{ $comentario->id }})"><i
                                                                            class="fas fa-trash-alt"></i></button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>


                </div>
                </div>
            </div>
