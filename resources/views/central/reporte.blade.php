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
    <link rel="stylesheet" type="text/css" media="all" href="{{ public_path('/assetsAdministrador/assets/bootstrap/css/bootstrap2.min.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ public_path('/assetsAdministrador/assets/bootstrap/css/bootstrap.min.css') }}">

    <style>
        .element {
            display: inline-block;
            width: 30%;

            padding: 0px;

        }
        .row0 {

            align-items: flex-end;
        }

        .rd{
            background-color: red;
        }

        .tablePDFMonitors {
            border: 2px;
            font-size: 23px;
        }
        td, th {
            border: 2px;
        }

        h4 {
            color: #009cde;
            width: 1140px;
            margin-left: -30px;
            text-align: center;
            font-weight: bold;
        }



        h3 {
            color: #009cde;
            height: 30px;
            font-size: 25px;
            text-align: center;
            font-weight: bold;
            margin-right: 30px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom-color: #009cde;
        }

        .labelComentario{
            border-bottom-color: #009cde;
            border-bottom: 20px;
            height: 100px;
        }





    </style>
</head>

<body>
    <div class="col-12" style="display: flex; width: 1200px;">
        <div class="col-6" style="margin-right: -200px; float: right;"><img src="assets/img/logologin.png"></div>
        <div class="col-6" style="margin-left: -60px; float: left">

                <div class="col" style="float: left; margin-left: -15px">
                    <label class="col-form-label" style="font-weight: bold">Nombre:  </label> <label class="col-form-label" > {{ $nombreMonitor}} </label>
                </div>

                    <div class="col-12" style="height: 40px"></div>
                <div class="col" style="float: left; margin-left: -15px">
                    <label class="col-form-label" style="font-weight: bold">Turno: </label> <label class="col-form-label" > {{ $turno}} </label>
                </div>
                    <div class="col-12" style="height: 40px"></div>


                <div class="col" style="float: left; margin-left: -15px">
                    <label class="col-form-label" style="font-weight: bold">Fecha:</label> <label class="col-form-label" > {{ $fechaTurno }} </label>
                </div>

        </div>
    </div>

    </div>
    <div class="col-12" style="height: 130px; border-bottom: solid, #009cde; margin-left:-30px; width: 1300px; margin-right:-200px"></div>

    <div class="col-12" style="margin-left: -15px; width: 100%">
        <h4>Monitores</h4>
    </div>

    <div class="col-12" style="display: flex; width: 100%; border-bottom: 20px">
        <div class="col-6" style="float: left; margin-left: -60px">
            <h3>Monitor 1</h3>
            <table class="table-bordered tablePDFMonitors" >
                <thead>
                    <tr>
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
        <div class="col-6" style="float: right; margin-right:-40px">
            <h3>Monitor 2</h3>
            <table class="tablePDFMonitors table-bordered">
                <thead>
                    <tr>
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
                            <td @foreach ($checksM2 as $checkM2)
                                    @if ($checkM2 == $hora->isoFormat('HH:mm') . '-' . $j)
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
    </div>

    <div class="col-12" style="height: 450px">
    </div>

        <div class="col-12" style="display: flex; width: 100%; ">
            <div class="col-6" style="float: left; margin-left: -60px">
                <h3>Monitor 3</h3>
                <table class="table-bordered tablePDFMonitors" >
                    <thead>
                        <tr>
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
                                <td @foreach ($checksM3 as $checkM3)
                                        @if ($checkM3 == $hora->isoFormat('HH:mm') . '-' . $j)
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
            <div class="col-6" style="float: right; margin-right:-40px">
                <h3>Monitor 4</h3>
                <table class="tablePDFMonitors table-bordered">
                    <thead>
                        <tr>
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
                                <td @foreach ($checksM4 as $checkM4)
                                        @if ($checkM4 == $hora->isoFormat('HH:mm') . '-' . $j)
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
        </div>



<div class="col-12" style="height: 450px"></div>

    <div class="col-12" style="display: flex; width: 100%; ">
        <div class="col-6" style="float: left; margin-left: -60px">
            <h3>Monitor 5</h3>
            <table class="table-bordered tablePDFMonitors" >
                <thead>
                    <tr>
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
                            <td @foreach ($checksM5 as $checkM5)
                                    @if ($checkM5 == $hora->isoFormat('HH:mm') . '-' . $j)
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
        <div class="col-6" style="float: right; margin-right:-40px">
            <h3>Monitor 6</h3>
            <table class="tablePDFMonitors table-bordered">
                <thead>
                    <tr>
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
                            <td @foreach ($checksM6 as $checkM6)
                                    @if ($checkM6 == $hora->isoFormat('HH:mm') . '-' . $j)
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


        <div class="col-12" style="height:400px"></div>


        <div class="col-12" style="width: 100%; margin-left: -10px">
            <div class="container containerCard">
                <div class="card cardDetallesSeguridadByB" style="width: 1140px; margin-left: -115px;">
                    <div class="card-body" style="width: 1020px">
                        <h4 class="card-title" style="color: #009cde;">Observaciones</h4>

                            @foreach ($comentarios as $comentario)
                                    <div class="form-row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="form-group">
                                                <div class="form-row align-items-center">
                                                    <div class="col">
                                                        <label style="color: #009cde; font-weight:bold"
                                                            class="col-form-label">{{ explode('-', (string)$comentario)[0] }}

                                                        </label>
                                                    </div>
                                                </div>

                                                <textarea style="border-top: none; border-left:none; border-right:none; border-bottom:#009cde;"
                                                    class="form-control"
                                                    >{{ explode('-', (string)$comentario)[1] }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>


    </div>
</body>
<script src="assetsAdministrador/assets/js/bootstrap.min.js"></script>
</html>
