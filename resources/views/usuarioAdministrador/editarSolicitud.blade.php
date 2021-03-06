@extends('layouts.menu')
@section('content')
<div class="row no-gutters">
    <div class="col">
        <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
            <div class="card cardDetallesSeguridadByB">
                <div class="card-body">
                    <h4 class="card-title" style="color: #009cde;">Editar Solicitud N° {{$solicitud->id}}</h4>
                    <h6 class="text-muted card-subtitle mb-2">Por favor ingrese los datos
                        correctamente</h6>
                    <form method="POST" action="{{ url('/guardar_solicitud/'.$solicitud->id) }}">
                        @csrf
                        {{ method_field('POST') }}
                        {{-- <input hidden name="id" value="{{$solicitud->id}}"> --}}
                        <div class="form-group"><label>Nombre</label><input
                                class="form-control form-colorbyb @error('nombreCliente') is-invalid @enderror" type="text" name="nombreCliente" value="{{$solicitud->nombreCliente}}">
                                @error('nombreCliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        <div class="form-group"><label>Apellido</label><input
                                class="form-control form-colorbyb @error('apellidoCliente') is-invalid @enderror" type="text" name="apellidoCliente" value="{{$solicitud->apellidoCliente}}">
                                @error('apellidoCliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label>Rut</label><input
                                        class="form-control form-colorbyb @error('rut') is-invalid @enderror" type="text" name="rut" value="{{$solicitud->rut}}">
                                        @error('rut')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                    </div>
                            </div>
                            <div class="col">
                                <div class="form-group"><label>Telefono</label><input
                                        class="form-control form-colorbyb @error('telefono') is-invalid
                                        @enderror" type="text" name="telefono" value="{{$solicitud->telefono}}">
                                        @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label>Tipo
                                    de
                                    organización</label><select
                                        class="form-control form-colorbyb @error('tipoOrganziacion') is-invalid

                                        @enderror" id="selectEoP"
                                        name="tipoOrganizacion">
                                        <optgroup label="Tipo de organización">
                                          @if ($solicitud->tipoOrganizacion == "Hogar")
                                                  <option value="Hogar" selected id="hogar">
                                                Hogar</option>
                                            <option value="Empresa" id="empresa">Empresa
                                            </option>
                                          @endif

                                          @if ($solicitud->tipoOrganizacion == "Empresa")
                                          <option value="Hogar" id="hogar">
                                        Hogar</option>
                                    <option value="Empresa" id="empresa" selected>Empresa
                                    </option>
                                  @endif
                                        </optgroup>
                                    </select>
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                @if ($solicitud->tipoOrganizacion == "Empresa")
                                <div class="form-group"><label>Nombre de Organización</label><input
                                    class="form-control form-colorbyb" type="text"
                                    id="TextInputEmpresa" name="nombreOrganizacion" enabled value="{{$solicitud->nombreOrganizacion}}"></div>
                                @else
                                <div class="form-group"><label>Nombre de Organización</label><input
                                    class="form-control form-colorbyb" type="text"
                                    id=TextInputEmpresa" name="nombreOrganizacion" disabled value=""></div>
                                @endif

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group"><label>Direccion</label><input
                                        class="form-control form-colorbyb @error('direccion') is-invalid

                                        @enderror" type="text" name="direccion" value="{{$solicitud->direccion}}">
                                        @error('direccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9 col-xl-12">
                                <div class="form-group"><label>Descripción</label><textarea
                                        class="form-control form-colorbyb @error('descripcion') is-invalid
                                        @enderror" name="descripcion" value="dasdsd">{{$solicitud->descripcion}}</textarea>
                                        @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror</div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label>Categoría del problema</label><select
                                        class="form-control form-colorbyb @error('categoria') is-invalid
                                @enderror" name="categoria">
                                        <optgroup label="Categoría">
                                            <option value="{{ $solicitud->categoria}}">{{App\Models\Categoria::findOrFail($solicitud->categoria)->nombre }}</option>

                                            @foreach ($categorias->except($solicitud->categoria) as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                    @error('categoria')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label>Prioridad</label>
                                    <select
                                        class="form-control form-colorbyb @error('prioridad') is-invalid
                                @enderror" name="prioridad">
                                        @if ($solicitud->prioridad == 1)
                                <optgroup label="Prioridad">
                                    <option value="">Selecciona</option>
                                    <option value="1" selected>Alta</option>
                                    <option value="2">Media</option>
                                    <option value="3">Baja</option>
                                </optgroup>
                                @endif

                                @if ($solicitud->prioridad == 2)
                                <optgroup label="Prioridad">
                                    <option value="">Selecciona</option>
                                    <option value="1" >Alta</option>
                                    <option value="2" selected>Media</option>
                                    <option value="3">Baja</option>
                                </optgroup>
                                @endif

                                @if ($solicitud->prioridad == 3)
                                <optgroup label="Prioridad">
                                    <option value="">Selecciona</option>
                                    <option value="1" >Alta</option>
                                    <option value="2" >Media</option>
                                    <option value="3"selected>Baja</option>
                                </optgroup>
                                @endif
                                    </select>
                                    @error('prioridad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col">

                                <div class="form-group"><label>Responsable
                                    </label><select
                                        class="form-control form-colorbyb @error('responsable') is-invalid
                                        @enderror" id="selectEoP"
                                        name="responsable">
                                            <optgroup>
                                                @if ($solicitud->responsable == null)
                                                <option value="" selected>
                                                   Selecione un responsable</option>
                                                @else
                                                  <option value="{{ $solicitud->responsable }}" selected>
                                                {{ App\Models\User::findOrFail($solicitud->responsable)->nombre }} {{ App\Models\User::findOrFail($solicitud->responsable)->apellido }}</option>
                                                @endif
                                            </option>
                                            @foreach ($tecnicosOperativos->except($solicitud->responsable) as $tecnico)
                                            <option value="{{$tecnico->id}}" id="empresa">{{$tecnico->nombre}} {{$tecnico->apellido}}
                                            </option>
                                            @endforeach

                                        </optgroup>
                                    </select>
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col text-right"><button class="btn btn-primary"
                                    id="btnEnviarDetalles" type="submit">Guardar</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
