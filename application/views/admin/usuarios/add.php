<body>
    <main id="main-container">
        <div class="content">
            <div class="box box solid">
                <div class="col-md-12">
                    <h5>Nuevo Usuario</h5>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>mantenimiento/usuarios/store" method="post">
                                <h3>Informacion del Cliente</h3>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Nombre</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="AddUsername" name="name" placeholder="Nombre.." value="<?php echo set_value("name"); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="col-6">
                                        <label>Numero de Identidad</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="AddUseridentity" name="identity" placeholder="Identidad.." value="<?php echo set_value("identity"); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-id-card-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row <?php echo !empty(form_error("username")) ? 'has-error' : ''; ?>">
                                    <div class="col-6">
                                        <label>Nombre de Usuario</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="AddUserUsername" name="username" placeholder="Nombre de Usuario.." value="<?php echo set_value("username"); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user-circle-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Estado Civil</label>
                                        <select class="form-control " id="AddUserCivilStatusId" name="CivilStatusId">
                                            <option value="0">Estado Civil</option>
                                            <option value="1">Casado/a</option>
                                            <option value="2">Soltero/a</option>
                                            <option value="2">Divorciado/a</option>
                                            <option value="4">Viudo/a </option>
                                        </select>
                                    </div>
                                    <?php echo form_error("username", "<span class = 'help-block'>", "</span>"); ?>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-6">
                                        <label>Correo</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="AddUseremail" name="email" placeholder="Correo.." value="<?php echo set_value("email"); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Telefono Celular</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="AddUserCellPhoneNumber" name="CellPhoneNumber" placeholder="Numero Celular.." value="<?php echo set_value("CellPhoneNumber"); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Rol de Usuario</label>
                                        <select class="form-control " id="AddUserrol" name="rol">
                                            <option value="0">Rol de Usuario</option>
                                            <option value="2">Administrador</option>
                                            <option value="3">Vendedor</option>
                                            <option value="4">Cliente</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label>Genero</label>
                                        <select class="form-control " id="AddUserGenderId" name="GenderId">
                                            <option value="0">Genero</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                            <option value="3">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="AddUserpassword" name="password" placeholder="Contraseña...">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Confirmar Contraseña</label>
                                        <div class="input-group ">
                                            <input type="password" class="form-control" id="AddUserconfirmpassword" name="confirmpassword" placeholder="Confirmar Contraseña..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group row">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-refresh mr-5"></i> Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>