
<div>
    <div class="row"></div>
    <div class="input-group d-flex"><input wire:model="buscar" class="form-control buscaTicketinput" type="text"
        placeholder="Buscar por nombre, apellido o RUT" name="busqueda">
    <div class="input-group-append"><button class="btn btn-link" type="submit"
            id="btnBuscaTicket"><i class="fa fa-search"></i></button></div>
</div>
    <div id="contenidoRowTByCR">
    <div class="col"></div>
    <div class="container-fluid containerTable">
        <div class="table-responsive table-borderless">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th class="text-center">Nombre y apellido</th>
                        <th class="text-center">Rut</th>
                        <th class="text-center">Contacto</th>
                        <th class="text-center">ciudad</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">CCTV</th>
                        <th class="text-center">Nat CCTV</th>
                        <th class="text-center">Alarmas</th>
                        <th class="text-center">Nat CCTV Alarma</th>
                        <th class="text-center" style="width:100px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }}
                                {{ $cliente->apellido }}</td>
                            <td>{{ $cliente->rut }}</td>
                            <td>{{ $cliente->contacto }}</td>
                            <td>{{ $cliente->ciudad }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>
                            <ul>
                            @foreach ($cliente->cctv as $cctv )
                                <li>{{ $cctv->tipoCamara->nombre }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @foreach ($cliente->alarmas as $alarma )
                                <li>{{ $alarma->tipoAlarma->nombre }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <ul>
                    @foreach ($cliente->cctv as $cctv )
                                <li>{{ $cctv->natCctv->nombre }}</li>
                            @endforeach
                        </ul>
                    </td>
                            <td>
                                <ul>
                            @foreach ($cliente->alarmas as $alarma )
                                <li>{{ $alarma->NatCctvAlarma->nombre }}</li>
                            @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
