{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Tecnico Operativo Seguridad ByB</title>
    <link rel="stylesheet" href="\assetsOperativo/detalle/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="\assetsOperativo/detalle/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="\assetsOperativo/detalle/css/styles.min.css">
</head>
<body>
    <div class="row no-gutters">
        <div class="col-md-12 col-lg-12 col-xl-12">

            </div>

            <table>
                <thead>
                    <tr>
                        <th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 9; $i++)

                        <tr>
                            <td><input type="checkbox"
                                @foreach ($checksM1 as $checkM1)
                                    @if ($checkM1 == $i)
                                        checked
                                    @endif
                                @endforeach
                                ></td>
                        </tr>

                    @endfor

                </tbody>
            </table>

            <div class="row no-gutters">
                <div class="col">
                    <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                        <div class="card cardDetallesSeguridadByB">
                            <div class="card-body">
                                <h4 class="card-title" style="color: #46a24a;">Detalles de
                                    operaciones y Retroalimentacion</h4>

                                    @foreach ($comentarios as $comentario)
                                            <div class="form-row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="form-group">
                                                        <div class="form-row align-items-center">
                                                            <div class="col">
                                                                <label
                                                                    class="col-form-label">

                                                                </label>
                                                            </div>
                                                        </div>

                                                        <textarea
                                                            class="form-control @error('detalleEdit') is-invalid @enderror"
                                                            name='detalleEdit'> {{ $comentario }} </textarea>
                                                        @error('detalleEdit')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="\assetsOperativo/detalle/js/jquery.min.js"></script>
    <script src="\assetsOperativo/detalle/bootstrap/js/bootstrap.min.js"></script>
    <script src="\assetsOperativo/detalle/js/script.min.js"></script>
</body>

</html> --}}

{{-- */<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vista Reportes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/reporteDeTurno.css">
    {{-- <link rel="stylesheet" href="assets/css/styles.css">
</head>
 */
<body> --}}

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Vista Reportes</title>
    <link rel="stylesheet" type="text/css" media="all" href="assetsAdministrador/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="assetsAdministrador/assets/bootstrap/css/bootstrap2.min.css">
    <link rel="stylesheet" href="assetsAdministrador/assets/fonts/roboto/">
    <link rel="stylesheet" type="text/css" media="all" href="{{ base_path().'assetsAdministrador/assets/fonts/font-awesome.min.css' }}">
    <link rel="stylesheet" type="text/css" media="all" href="assetsAdministrador/assets/css/styles.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="assetsAdministrador/assets/css/reporteDeTurno.css">
    <link rel="stylesheet" type="text/css" media="all" href="{{ base_path().'assetsAdministrador/assets/fonts/fontawesome-all.min.css'}}">
</head>

<body>

    <div class="row g-0">
        <div class="col text-center">



                <div class="row g-0">
                    <div class="col">

                        <div>
                            <ul class="nav nav-tabs " role="tablist"></ul>
                            <div class="tab-content">

                                            <div class="tab-pane fade show active" role="tabpanel" id="pills-1"
                                            aria-labelledby="pills-1">
                                            <p> @foreach ($checksM1 as $key => $checkM1)
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
                                                                        <input type="checkbox"
                                                                            @foreach ($checksM1 as $checkM1)
                                                                            @if ($checkM1 == $hora->isoFormat('HH:mm') . '-' . $j)
                                                                            checked
                                                                            @endif
                                                                            @endforeach
                                                                        >
                                                                    </td>
                                                                @endfor

                                                            </tr>
                                                        @endfor
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                            </div>
                        </div>
                    </div>
                </div>

            <div class="row datos-turno">
                <div class="col">
                    <div class="row">
                        <div class="col align-self-center"><label
                            class="form-label datos-turno label-turno">Nombre</label><input type="text"
                            class="datos-turno" wire:model="nombreMonitor">
                        </div>
                    <div class="col align-self-center"><label class="form-label datos-turno label-turno">Turno:
                            {{ $turno }}</label>

                            <option value="0">Seleccione Turno</option>
                            <option value="1">De 00:00 a 08:00</option>
                            <option value="2">De 08:00 a 16:00</option>
                            <option value="3">De 16:00 a 00:00</option>

                    </div>

                    </div>
                    <div class="row">

                        <div class="col text-center align-self-center"><label
                                class="col-form-label datos-turno label-turno">{{ Carbon\Carbon::now()->isoFormat('dddd DD, MMMM YYYY') }}</label>
                        </div>
                        <div class="col datos-turno-invisible"></div>
                    </div>
                </div>
            </div>

            <div class="row g-0">
                <div class="col">
                    <div class="table-responsive">
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

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assetsAdministrador/assets/js/navbar_principal.js"></script>
    <script src="assetsAdministrador/assets/js/jquery.min.js"></script>
    <script src="assetsAdministrador/assets/js/script.min.js"></script>
    <script src="assetsAdministrador/assets/js/bootstrap.min.js"></script>
</body>

</html> --}}


<!DOCTYPE html>

<head>
    <style>
        .element {
            display: inline-block;
            width: 50%;

            padding: 0px;

        }
        .row0 {

            align-items: flex-end;
        }

        .rd{
            background-color: red;
        }

        .tablePDFMonitors{
            font-size: 23px;
        }



    </style>
</head>

<body>
    <div class="row g-0">
        <div class="col align-self-center"><img src="assets/img/logologin.png"></div>
        <div class="col text-end">
            <div class="row g-0">
                <div class="col"><label class="col-form-label">Nombre</label></div>
            </div>
            <div class="row g-0">
                <div class="col"><label class="col-form-label">Turno</label></div>
            </div>
            <div class="row g-0">
                <div class="col"><label class="col-form-label">Fecha</label></div>
            </div>
        </div>
    </div>
   
    <div class="row0">
        <div class="element" style="margin-left: -60px">
            <table border="solid" class="table tablePDFMonitors" >
                <thead>
                    <tr style="width: 500px">
                        <th>Hora</th>
                        <th>01</th>
                        <th>02</th>
                        <th>03</th>
                        <th>04</th>
                        <th>05</th>
                        <th>06</th>
                        <th>07</th>
                        <th>08</th>
                        <th>09</th>
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
                        <th> {{ $hora->addHour()->isoFormat('HH:mm') }}  </th>
                        @for ($j = 1; $j <= 16; $j ++)
                            <td @foreach ($checksM1 as $checkM1)
                                    @if ($checkM1 == $hora->isoFormat('HH:mm') . '-' . $j)
                                        class="rd"
                                    @endif
                                @endforeach
                            >
                            </td>
                        @endfor
                    </tr>
                    @endfor

                </tbody>

            </table>
        </div>
        <div class="element" >
            <table border="solid" class="table tablePDFMonitors" style="margin-left: 50px;">
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th style="background-color: red">01</th>
                        <th>02</th>
                        <th>03</th>
                        <th>04</th>
                        <th>05</th>
                        <th>06</th>
                        <th>07</th>
                        <th>08</th>
                        <th>09</th>
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
                        <td >hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>hr</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>
