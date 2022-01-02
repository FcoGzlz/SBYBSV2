
    <div class="row no-gutters">
        <div class="col">
            <div class="container containerCard" style="margin-top: 25px;margin-bottom: 25px;">
                <div class="card cardDetallesSeguridadByB">
                    <div class="card-body">
                        <h4 class="card-title" style="color: #009cde;">Enviar nueva solicitud</h4>
                        <h6 class="text-muted card-subtitle mb-2">Por favor ingrese los datos
                            correctamente</h6>
                        <form method="POST" action="{{ route('agregarSolicitud') }}">
                            @csrf
                            <div class="form-group"><label>Nombre</label><input
                                    class="form-control form-colorbyb @error('nombreCliente') is-invalid @enderror"
                                    type="text" name="nombreCliente" value="{{ old('nombreCliente') }}">
                                @error('nombreCliente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group"><label>Apellido</label><input
                                    class="form-control form-colorbyb @error('apellidoCliente') is-invalid @enderror"
                                    type="text" name="apellidoCliente" value="{{ old('apellidoCliente') }}">
                                @error('apellidoCliente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label>Rut</label><input
                                            class="form-control form-colorbyb @error('rut') is-invalid @enderror"
                                            type="text" name="rut" value="{{ old('rut') }}">
                                        @error('rut')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label>Telefono</label><input
                                            class="form-control form-colorbyb @error('telefono') is-invalid
                                        @enderror"
                                            type="text" name="telefono" value="{{ old('telefono') }}">
                                        @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
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

                                        @enderror"
                                            id="selectEoP" name="tipoOrganizacion">
                                            <optgroup label="Tipo de organización">
                                                <option value="Hogar" selected="" id="persona">
                                                    Hogar</option>
                                                <option value="Empresa" id="empresa">Empresa
                                                </option>
                                            </optgroup>
                                        </select>
                                        @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group"><label>Nombre de Organización</label><input
                                            class="form-control form-colorbyb @error('nombreOrganizacion') is-invalid

                                        @enderror"
                                            type="text" id="TextInputEmpresa" name="nombreOrganizacion"
                                            value="{{ old('nombreOrganizacion') }}">
                                        @error('nombreOrganizacion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group"><label>Direccion</label><input
                                            class="form-control form-colorbyb @error('direccion') is-invalid

                                        @enderror"
                                            type="text" name="direccion" value="{{ old('direccion') }}">
                                        @error('direccion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-9 col-xl-12">
                                    <div class="form-group"><label>Descripcion</label><textarea
                                            class="form-control form-colorbyb @error('descripcion') is-invalid
                                        @enderror"
                                            name="descripcion" value=""></textarea>
                                        @error('descripcion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col text-right"><button class="btn btn-primary" id="btnEnviarDetalles"
                                        type="submit">Enviar</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

