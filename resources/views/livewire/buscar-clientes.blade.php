<div class="row g-0">
    <div class="col">
        <div class="card shadow p-3 mb-5 bg-white rounded cardClientes">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h1>Listado de Clientes </h1>
                            </div>
                            <div class="col">
                                <div class="card agregarClienteCard">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" wire:model="nombreCliente"
                                                    class="form-control shadow-none" placeholder="Nombre de cliente">
                                                @error('nombreCliente')
                                                    <span class="warning text-danger font-weight-bold">*
                                                        {{ $message }}</span>
                                                @enderror
                                            </div>
                                            @if ($edit != true)
                                                <div class="col-auto">
                                                    <button class="btn btnSbyb" wire:click="agregarCliente">Añadir
                                                        cliente</button>
                                                </div>
                                            @else
                                                <div class="col-auto">
                                                    <button class="btn btnSbyb" wire:click="guardarCambios">Guardar
                                                        Cambios</button>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Apartado de añadir cliente --}}
                        <div class="row columnSepararCards"></div>
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                        <div class="row columnSepararCards"></div>


                        {{-- Cierrre de añadir cliente --}}


                    </div>
                </div>
                <div class="row g-0">
                    <div class="col">
                        <div class="row height d-flex justify-content-center align-items-center">
                            <div class="col">
                                <div class="search"> <i class="fa fa-search"></i> <input wire:model="buscar"
                                        type="text" class="form-control" placeholder="Buscar clientes"> <button
                                        class="btn btnSbyb">Buscar</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row columnSepararCards"></div>
                <div class="row g-0">
                    <div class="col colTableClientes">


                        <div class="table-responsive tableClientesHead">
                            <table class="table tablaClientes table-striped table-sm">
                                <thead class="tablaClientes">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cantidad de sitios</th>
                                        <th class="text-end tableClientesHead">Detalle</th>
                                    </tr>
                                </thead>
                                <tbody class="tablaClientes">
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive tablaClientes">
                            <table class="table tablaClientes table-striped table-sm">
                                <tbody class="tablaClientes">
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->nombre }}
                                            <td>{{ $cliente->locaciones->count() }}
                                            <td class="text-end">
                                                <div class="row g-0 float-end">

                                                    @if (count($cliente->locaciones) == 0)
                                                    <div class="col-auto">
                                                        <button class="btn btnSbyb btnDetalleCliente" type="submit"
                                                            wire:click="eliminarCliente({{ $cliente->id }})"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </div>
                                                    @endif

                                                    <div class="col-auto">
                                                        <form
                                                            action="{{ url('/cliente_' . $cliente->id . '_locaciones') }}">
                                                            @csrf
                                                            <button class="btn btnSbyb btnDetalleCliente"
                                                                type="submit"><i class="fas fa-eye"></i></button>
                                                        </form>
                                                    </div>

                                                    <div class="col-auto">
                                                        <button class="btn btnSbyb btnDetalleCliente" type="submit"
                                                            wire:click="editarCliente({{ $cliente->id }})"><i
                                                                class="far fa-edit"></i></button>
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
            </div>
        </div>
    </div>
