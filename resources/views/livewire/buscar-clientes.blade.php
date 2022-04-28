
<div class="row g-0">
    <div class="col">
        <div class="card shadow p-3 mb-5 bg-white rounded cardClientes">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>Listado de Clientes <button class="btn btnSbyb" wire:model="add" value='true'>Añadir cliente</button> </h1>


                         {{-- Apartado de añadir cliente --}}
<div class="row columnSepararCards"></div>
<div class="row">
    <div class="col">
        <div class="card innershadow">
            <div class="card-body">

                <div class="row">
                  <div class="col">
                    <input type="text" wire:model="nombreCliente" class="form-control" placeholder="Nombre de entidad">
                    @error('nombreCliente') <span class="warning">{{ $message }}</span> @enderror
                  </div>

                  {{-- <form id="formato-live" class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputEmail">RUT</label>
                      <div class="controls">
                        <input type="text" id="rut" name="rut" placeholder="14.569.484-1">
                      </div>
                    </div>
                  </form> --}}

                  <div class="col">
                    <input type="text" id="rut" name="rut" wire:model="rutCliente" class="form-control" placeholder="Rut de entidad">
                    @error('rutCliente') <span class="warning">{{ $message }}</span> @enderror
                  </div>

                  <div class="col-auto">
                    <button class="btn btnSbyb" wire:click="agregarCliente">Añadir cliente</button>
                  </div>
                </div>

        </div>
        </div>
    </div>
</div>
<div class="row columnSepararCards"></div>
    

{{-- Cierrre de añadir cliente --}}


                    </div>
                </div>
                <div class="row g-0">
                    <div class="col">    <div class="row height d-flex justify-content-center align-items-center">
    <div class="col">
        <div class="search"> <i class="fa fa-search"></i> <input wire:model="buscar" type="text" class="form-control" placeholder="Buscar clientes"> <button class="btn btnSbyb">Buscar</button> </div>
    </div>
</div>
</div>
                </div>
                <div class="row columnSepararCards"></div>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive overflow-auto tablaClientes">
                            <table class="table tablaClientes table-striped table-sm">
                                <thead class="tablaClientes">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>RUT</th>
                                        <th>Cantidad de sitios</th>
                                        <th class="text-end">Detalle</th>
                                    </tr>
                                </thead>
                                <tbody class="tablaClientes">
                                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombre }}
                            <td>{{ $cliente->rut_cliente }}
                            <td>{{ $cliente->locaciones->count() }}
                            <td class="text-end">
                                <form action="{{ url('/cliente_'.$cliente->id.'_locaciones') }}">
                                    @csrf
                                <button class="btn btnSbyb btnDetalleCliente" type="submit"><i class="fas fa-eye"></i></button>
                            </form>
                            </td>

                           {{-- <td>
                            <form action="{{ url('/cliente_'.$cliente->id.'_locaciones') }}">
                                @csrf
                                <button class="btn btn-info" type="submit">Ver Sitios</button>
                            </form>
                           </td> --}}

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

   


