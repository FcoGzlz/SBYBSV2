
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
</div>
