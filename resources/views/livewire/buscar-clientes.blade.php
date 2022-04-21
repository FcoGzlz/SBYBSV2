
<div class="row g-0">
    <div class="col">
        <div class="card" style="margin-right: 5%;margin-left: 5%;margin-top: 25px;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>Listado de Clientes</h1>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col">    <div class="row height d-flex justify-content-center align-items-center">
    <div class="col">
        <div class="search"> <i class="fa fa-search"></i> <input wire:model="buscar" type="text" class="form-control" placeholder="Buscar clientes"> <button class="btn btn-primary">Buscar</button> </div>
    </div>
</div>
</div>
                </div>
                <div class="row columnSepararCards"></div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive tablaClientes">
                            <table class="table table-striped table-sm">
                                <thead class="tablaClientes">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>RUT</th>
                                        <th>Cantidad de sitios</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="tablaClientes">
                                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }}
                            <td>{{ $cliente->rut_cliente }}
                            <td>{{ $cliente->locaciones->count() }}
                           <td>
                            <form action="{{ url('/cliente_'.$cliente->id.'_locaciones') }}">
                                @csrf
                                <button class="btn btn-info" type="submit">Ver Sitios</button>
                            </form>
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
    </div>
</div>


{{--
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
                        <th class="text-center">Nombre de cliente</th>
                        <th class="text-center">Rut</th>
                        <th class="text-center">Número de sitios</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }}
                            <td>{{ $cliente->rut_cliente }}
                            <td>{{ $cliente->locaciones->count() }}
                           <td>
                            <form action="{{ url('/cliente_'.$cliente->id.'_locaciones') }}">
                                @csrf
                                <button class="btn btn-info" type="submit">Ver Sitios</button>
                            </form>
                           </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
