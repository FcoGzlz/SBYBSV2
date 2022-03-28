

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
            font-size: 21px;
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
                    <label class="col-form-label" style="font-weight: bold">Responsable de monitoreo:  </label> <label class="col-form-label" > {{ $nombreMonitor}} </label>
                </div>

                    <div class="col-12" style="height: 40px"></div>
                <div class="col" style="float: left; margin-left: -15px">
                    <label class="col-form-label" style="font-weight: bold">Turno: </label> <label class="col-form-label" > @switch($turno)
                        @case(1)
                            Noche, de 00:00 hasta las 08:00 hrs.
                            @break
                        @case(2)
                            Mañana, de 08:00 hasta las 16:00 hrs.
                        @break
                        @case(3)
                            Tarde, de 16:00 hasta las 00:00 hrs.
                        @break

                    @endswitch </label>
                </div>
                    <div class="col-12" style="height: 40px"></div>


                <div class="col" style="float: left; margin-left: -15px">
                    <label class="col-form-label" style="font-weight: bold">Fecha: </label> <label class="col-form-label" > {{ $fechaTurno }} </label>
                </div>

        </div>
    </div>

    </div>
    <div class="col-12" style="height: 130px; border-bottom: solid, #009cde; margin-left:-30px; width: 1300px; margin-right:-200px"></div>

    <div class="col-12" style="margin-left: -15px; width: 100%">
        <h4>Monitores</h4>
    </div>
    <div class="col-12" style="height: 30px"></div>
    <div class="col-12" style="margin-left: -15px">
        <label class="col-form-label" style="font-weight: bold; margin: -20px">Los recuadros marcados indican la hora y la cámara que presentaron alguna fallla.</label>
    </div>
    <div class="col-12" style="height: 40px"></div>

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
