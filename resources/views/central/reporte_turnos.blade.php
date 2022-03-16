@extends('layouts.navbar_principal')
@section('content')
    {{-- <div class="m-4">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
                <a href="#tabMonitor1" class="nav-link active" data-bs-toggle="tab">Monitor 1</a>
            </li>
            <li class="nav-item">
                <a href="#tabMonitor2" class="nav-link active" data-bs-toggle="tab">Monitor 2</a>
            </li>
            <li class="nav-item">
                <a href="#tabMonitor3" class="nav-link active" data-bs-toggle="tab">Monitor 3</a>
            </li>
            <li class="nav-item">
                <a href="#tabMonitor4" class="nav-link active" data-bs-toggle="tab">Monitor 4</a>
            </li>
            <li class="nav-item">
                <a href="#tabMonitor5" class="nav-link active" data-bs-toggle="tab">Monitor 5</a>
            </li>
            <li class="nav-item">
                <a href="#tabMonitor6" class="nav-link active" data-bs-toggle="tab">Monitor 6</a>
            </li>
        </ul>

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

                                    <form>
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
                                                        wire:click="tst"
                                                            wire:model="checks.{{ $y }}-{{ $hora->isoFormat('hh:mm') }}" id="{{ $y }}"
                                                            value="{{ $y }}-{{ $hora->isoFormat('hh:mm') }}" id="{{ $y }}" name="checks">
                                                    </td>
                                                @endfor
                                            </tr>
                                        @endfor

                                        <button type="submit">Guardar</button>
                                        </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col">
                        <livewire:tst-check />
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <livewire:tst-check />
    <livewire:counter />
@endsection
