
<div class="row g-0">
    <div class="col text-center">

       @if ($turno != 0)
       <div class="row g-0">

        <div class="col text-end col-finalizar-turno"><button class="btn btn-primary btn-lg btnSbyb"
                type="submit" wire:click="finalizarReporte">Finalizar Turno</button></div>
    </div>


    <div class="row g-0">
        <div class="col">
            <div class="row g-0">
                <div class="col col-pills-tab">
                    <ul class="nav nav-pills mb-3 justify-content-center paneles-monitores" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="" type="button" role="tab" aria-controls="pills-1"
                                {{$tab == 1 ? 'active': ''}} wire:click="$set('tab', '1')">1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="" type="button" role="tab" aria-controls="pills-2"
                                aria-selected="true" {{$tab == 2 ? 'active': ''}} wire:click="$set('tab', '2')">2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill"
                                data-bs-target="" type="button" role="tab" aria-controls="pills-3"
                                aria-selected="false" {{$tab == 3 ? 'active': ''}} wire:click="$set('tab', '3')">3</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill"
                                data-bs-target="" type="button" role="tab" aria-controls="pills-4"
                                aria-selected="false" {{$tab == 4 ? 'active': ''}} wire:click="$set('tab', '4')">4</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill"
                                data-bs-target="" type="button" role="tab" aria-controls="pills-5"
                                aria-selected="false" {{$tab == 5 ? 'active': ''}} wire:click="$set('tab', '5')">5</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill"
                                data-bs-target="" type="button" role="tab" aria-controls="pills-6"
                                aria-selected="false" {{$tab == 6 ? 'active': ''}} wire:click="$set('tab', '6')">6</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <div class="row g-0">
            <div class="col">

                <div>
                    <ul class="nav nav-tabs " role="tablist"></ul>
                    <div class="tab-content">
                                @switch($tab)
                                    @case(1)
                                    <div class="tab-pane fade show active" role="tabpanel" id="pills-1"
                                    aria-labelledby="pills-1">
                                    <p> @foreach ($checksM1 as $key=> $checkM1 )
                                        {{$key}} => {{$checkM1}}
                                    @endforeach</p>
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
                                                            $hora = Carbon\Carbon::create('23:00');
                                                        @endphp
                                                    @break

                                                    @case(2)
                                                        @php
                                                            $hora = Carbon\Carbon::create('07:00');
                                                        @endphp
                                                    @break

                                                    @case(3)
                                                        @php
                                                            $hora = Carbon\Carbon::create('15:00');
                                                        @endphp
                                                    @break
                                                @endswitch

                                                @for ($i = 1; $i <= 9; $i++)
                                                    <tr>
                                                        <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                        @for ($j = 1; $j <= 16; $j++)
                                                            <td>
                                                                <input type="checkbox" value="{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM1">
                                                            </td>
                                                        @endfor

                                                    </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                        @break
                                        @case(2)
                                        <div class="tab-pane fade show active" role="tabpanel" id="pills-2"
                                        aria-labelledby="pills-2">
                                        <p> @foreach ($checksM2 as $key=> $checkM2 )
                                            {{$key}} => {{$checkM2}}
                                        @endforeach</p>
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
                                                                $hora = Carbon\Carbon::create('23:00');
                                                            @endphp
                                                        @break

                                                        @case(2)
                                                            @php
                                                                $hora = Carbon\Carbon::create('07:00');
                                                            @endphp
                                                        @break

                                                        @case(3)
                                                            @php
                                                                $hora = Carbon\Carbon::create('15:00');
                                                            @endphp
                                                        @break
                                                    @endswitch

                                                    @for ($i = 1; $i <= 9; $i++)
                                                        <tr>
                                                            <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                            @for ($j = 1; $j <= 16; $j++)
                                                                <td>
                                                                    <input type="checkbox" value="{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM2">
                                                                </td>
                                                            @endfor

                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                        @break
                                        @case(3)
                                        <div class="tab-pane fade show active" role="tabpanel" id="pills-3"
                                        aria-labelledby="pills-3">
                                        <p> @foreach ($checksM3 as $key=> $checkM3 )
                                            {{$key}} => {{$checkM3}}
                                        @endforeach</p>
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
                                                                $hora = Carbon\Carbon::create('23:00');
                                                            @endphp
                                                        @break

                                                        @case(2)
                                                            @php
                                                                $hora = Carbon\Carbon::create('07:00');
                                                            @endphp
                                                        @break

                                                        @case(3)
                                                            @php
                                                                $hora = Carbon\Carbon::create('15:00');
                                                            @endphp
                                                        @break
                                                    @endswitch

                                                    @for ($i = 1; $i <= 9; $i++)
                                                        <tr>
                                                            <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                            @for ($j = 1; $j <= 16; $j++)
                                                                <td>
                                                                    <input type="checkbox" value="{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM3">
                                                                </td>
                                                            @endfor

                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                        @break
                                        @case(4)
                                        <div class="tab-pane fade show active" role="tabpanel" id="pills-4"
                                        aria-labelledby="pills-4">
                                        <p> @foreach ($checksM4 as $key=> $checkM4 )
                                            {{$key}} => {{$checkM4}}
                                        @endforeach</p>
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
                                                                $hora = Carbon\Carbon::create('23:00');
                                                            @endphp
                                                        @break

                                                        @case(2)
                                                            @php
                                                                $hora = Carbon\Carbon::create('07:00');
                                                            @endphp
                                                        @break

                                                        @case(3)
                                                            @php
                                                                $hora = Carbon\Carbon::create('15:00');
                                                            @endphp
                                                        @break
                                                    @endswitch

                                                    @for ($i = 1; $i <= 9; $i++)
                                                        <tr>
                                                            <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                            @for ($j = 1; $j <= 16; $j++)
                                                                <td>
                                                                    <input type="checkbox" value="{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM4">
                                                                </td>
                                                            @endfor

                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                        @break
                                        @case(5)
                                        <div class="tab-pane fade show active" role="tabpanel" id="pills-5"
                                        aria-labelledby="pills-5">
                                        <p> @foreach ($checksM5 as $key=> $checkM5 )
                                            {{$key}} => {{$checkM5}}
                                        @endforeach</p>
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
                                                                $hora = Carbon\Carbon::create('23:00');
                                                            @endphp
                                                        @break

                                                        @case(2)
                                                            @php
                                                                $hora = Carbon\Carbon::create('07:00');
                                                            @endphp
                                                        @break

                                                        @case(3)
                                                            @php
                                                                $hora = Carbon\Carbon::create('15:00');
                                                            @endphp
                                                        @break
                                                    @endswitch

                                                    @for ($i = 1; $i <= 9; $i++)
                                                        <tr>
                                                            <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                            @for ($j = 1; $j <= 16; $j++)
                                                                <td>
                                                                    <input type="checkbox" value="{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM5" name="checksM5">
                                                                </td>
                                                            @endfor

                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                        @break
                                        @case(6)
                                        <div class="tab-pane fade show active" role="tabpanel" id="pills-6"
                                        aria-labelledby="pills-6">
                                        <p> @foreach ($checksM1 as $key=> $checkM6 )
                                            {{$key}} => {{$checkM6}}
                                        @endforeach</p>
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
                                                                $hora = Carbon\Carbon::create('23:00');
                                                            @endphp
                                                        @break

                                                        @case(2)
                                                            @php
                                                                $hora = Carbon\Carbon::create('07:00');
                                                            @endphp
                                                        @break

                                                        @case(3)
                                                            @php
                                                                $hora = Carbon\Carbon::create('15:00');
                                                            @endphp
                                                        @break
                                                    @endswitch

                                                    @for ($i = 1; $i <= 9; $i++)
                                                        <tr>
                                                            <th> {{ $hora->addHour()->isoFormat('HH:mm') }} </th>

                                                            @for ($j = 1; $j <= 16; $j++)
                                                                <td>
                                                                    <input type="checkbox" value="{{ $hora->isoFormat('HH:mm') }}-{{ $j }}" wire:model="checksM6">
                                                                </td>
                                                            @endfor

                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                        @break

                                @endswitch

                    </div>
                </div>
            </div>
        </div>
       @endif

        <div class="row datos-turno">
            <div class="col">
                <div class="row">
                    <div class="col align-self-center"><label
                            class="form-label datos-turno label-turno">Nombre</label><input type="text"
                            class="datos-turno" wire:model="nombreMonitor"></div>
                    <div class="col align-self-center"><label class="form-label datos-turno label-turno">Turno:
                            {{ $turno }}</label>
                        <select class="datos-turno" wire:model="turno">
                            <option value="0">Seleccione Turno</option>
                            <option value="1">De 00:00 a 08:00</option>
                            <option value="2">De 08:00 a 16:00</option>
                            <option value="3">De 16:00 a 00:00</option>
                        </select>
                    </div>

                    <div class="col text-center align-self-center"><label
                            class="col-form-label datos-turno label-turno">{{ $this->fechaTurno = Carbon\Carbon::now()->isoFormat('dddd DD, MMMM YYYY') }}</label>
                    </div>
                    <div class="col datos-turno-invisible"></div>
                </div>
            </div>
        </div>

       @if ($turno != 0)

        <div class="row g-0 justify-content-center align-items-center formulario-comentarios">
            <div class="col d-flex justify-content-center align-self-center">


                    <textarea class="flex-fill" style="font-size:20px;" wire:model="comentario"></textarea>


            </div>
            <div class="col-auto datos-turno">
                @if ($edit != true)
                    <button class="btn btn-lg btnSbyb" type="button" wire:click="uptdComentarios"
                        style="width: 100%;">Agregar Comentario</button>
                @else
                    <button class="btn btn-lg btnSbyb" type="button" wire:click="guardarComentario"
                        style="width: 100%;">Guardar Cambios</button>
                @endif

            </div>
        </div>
        <div class="row g-0">
            <div class="col">
                <div class="table-responsive tabla-comentarios">
                    <table class="table table-striped table-borderless tabla-comentarios">
                        <thead>
                            <tr>
                                <th class="th-hora">Hora de emision</th>
                                <th class="th-comentario">Comentario</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($comentarios as $key => $comentario)
                                <tr>
                                    <th> {{ explode('-', (string)$comentario)[0] }} </th>
                                    <td>
                                        <div class="row g-0">
                                            <div class="col align-self-center"><label
                                                    class="col-form-label label-comentario"> {{ explode('-', (string)$comentario)[1] }}
                                                    </label></div>
                                            <div class="col-auto align-self-center ms-auto">
                                                <div class="row g-0">
                                                    <div class="col-auto"><button class="btn btn-primary btnSbyb"
                                                            type="button"
                                                            wire:click="editarComentario({{ $key }})"><i
                                                                class="far fa-edit"></i></button></div>
                                                    <div class="col-auto"><button class="btn btn-primary btnSbyb"
                                                            type="button"
                                                            wire:click="eliminarComentario({{ $key }})"><i
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


