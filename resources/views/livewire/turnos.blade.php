<div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col">
        </div>
    </div>

    <div class="row">
        <div class="row">
            <select wire:model="turno">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <input type="text" placeholder="Ingrese su nombre" wire:model="nombreMonitor">



        <div class="col">
            <div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel" id="pills-1" aria-labelledby="pills-1">
                        <p>Tabla 1</p>
                        <div class="table-responsive">
                            <table class="table table-bordered tableMonitor">
                                <thead>
                                    <tr>
                                        <th>Hora Turno: {{ $turno }} Monitor: {{ $nombreMonitor }}</th>
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
                                        $hora = Carbon\Carbon::create('03:00');
                                    @endphp
                                @break

                                @case(2)
                                    @php
                                        $hora = Carbon\Carbon::create('11:00');
                                    @endphp
                                @break

                                @case(3)
                                    @php
                                        $hora = Carbon\Carbon::create('19:00');
                                    @endphp
                                @break
                                @endswitch
                                @for($i = 1; $i <= 9; $i++)
                                <tr>
                                    <th>
                                        {{ $hora->addHour()->isoFormat('HH:mm')}}
                                    </th>

                                    @for ($j = 1; $j <= 16; $j++ )
                                        <td>
                                            <input type="checkbox"  wire:model="checksM1" value=" {{ $hora->isoFormat('HH:mm') }}-{{ $j }} ">
                                        </td>
                                    @endfor
                                </tr>
                                @endfor

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="pills-2" aria-labelledby="pills-2">
                    <p>Tabla 2</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
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
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="pills-3" aria-labelledby="pills-3">
                    <p>Tabla 3</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
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
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="pills-4" aria-labelledby="pills-4">
                    <p>Tabla 4</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
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
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="pills-5" aria-labelledby="pills-5">
                    <p>Tabla 5</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
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
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" role="tabpanel" id="pills-6" aria-labelledby="pills-6">
                    <p>Tabla 6</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
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
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                                <tr>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 3</td>
                                    <td>Cell 4</td>
                                    <td>Cell 5</td>
                                    <td>Cell 6</td>
                                    <td>Cell 7</td>
                                    <td>Cell 8</td>
                                    <td>Cell 9</td>
                                    <td>Cell 10</td>
                                    <td>Cell 11</td>
                                    <td>Cell 12</td>
                                    <td>Cell 13</td>
                                    <td>Cell 14</td>
                                    <td>Cell 15</td>
                                    <td>Cell 16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col align-self-center">
        <div class="row">
            <div class="col col-pills-tab">
                <ul class="nav nav-pills mb-3 justify-content-center paneles-monitores" id="pills-tab"
                    role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-1-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                            aria-selected="true">1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                            aria-selected="false">2</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3"
                            aria-selected="false">3</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4"
                            aria-selected="false">4</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5"
                            aria-selected="false">5</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6"
                            aria-selected="false">6</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    Previsualización de comentario:
    @if (strlen($comentario) > 0)
        {{ $horaPrev }} - {{ $comentario }}
    @endif
    @foreach ($comentarios as $key => $comentario)
        {{ $key }}: {{ $comentario }} <button type="button"
            wire:click="eliminarComentario({{ $key }})">-</button><button type="button"
            wire:click="editarComentario({{ $key }})">editar</button>
    @endforeach
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-1"><label class="form-check-label" for="formCheck-1">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-4"><label class="form-check-label" for="formCheck-4">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-3"><label class="form-check-label" for="formCheck-3">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-5"><label class="form-check-label" for="formCheck-5">4</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-2"><label class="form-check-label" for="formCheck-2">5</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-8"><label class="form-check-label" for="formCheck-8">6</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-7"><label class="form-check-label" for="formCheck-7">7</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-6"><label class="form-check-label" for="formCheck-6">8</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-13"><label class="form-check-label" for="formCheck-13">9</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-14"><label class="form-check-label" for="formCheck-14">10</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-15"><label class="form-check-label" for="formCheck-15">11</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-16"><label class="form-check-label" for="formCheck-16">12</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-9"><label class="form-check-label" for="formCheck-9">13</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-10"><label class="form-check-label" for="formCheck-10">14</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-11"><label class="form-check-label" for="formCheck-11">15</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check"><input class="form-check-input" type="checkbox"
                                    id="formCheck-12"><label class="form-check-label" for="formCheck-12">16</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="row">
            <span wire:click="uptdHora">
                <input type="textarea" name="comentario" wire:model="comentario"
                    placeholder="Ingrese un comentario...">
            </span>
            <span wire:click="borrarDatos">
                @if ($comentario != null)
                    @if ($edit != true)
                        <button type="button" wire:click="uptdComentarios"> Agregar comentario
                        @else
                            <button type="button" wire:click="guardarComentario"> Guardar comentario
                    @endif
                @endif
            </span>
            </button>
            <button type="button" wire:click="finalizarReporte">Finalizar reporte</button>
        </div>

        @foreach ($checksM1 as $key => $checkM1)
            {{ $checkM1 }}
        @endforeach
    </div>
</div>

</div>
