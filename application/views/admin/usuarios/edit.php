<body>
    <main id="main-container">
        <div class="content">
            <div class="box box solid">
                <div class="col-md-12">
                    <h3 class="block-title">Editar Usuario</h3>
                </div>
                <br />
                <?php if ($this->session->flashdata("error")) : ?>
                    <div class="alert alert-danger">
                        <p><?php echo $this->session->flashdata("error") ?></p>
                    </div>
                <?php endif; ?>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>mantenimiento/usuarios/updateuser/<?php echo $Usuario->IdUser; ?>" method="post">
                                <?php if (!empty($Usuario)) : ?>
                                    <input type="hidden" name="Controller" value="0">
                                    <input type="hidden" name="RealPassword" value="<?php echo $Usuario->password; ?>">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Nombre</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="AddUsername" name="name" placeholder="Nombre.." value="<?php echo $Usuario->FullName ?>">
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
                                                <input type="text" class="form-control" id="AddUseridentity" name="identity" placeholder="Identidad.." value="<?php echo $Usuario->IdNumber ?>">
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
                                                <input type="text" class="form-control" id="AddUserUsername" name="username" placeholder="Nombre de Usuario.." value="<?php echo $Usuario->Username ?>">
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
                                                <option value="<?php echo $Usuario->CivilStatusId ?>"><?php if ($Usuario->CivilStatusId == "1") : ?>Casado/a
                                                    <?php elseif ($Usuario->CivilStatusId == "2") : ?>Soltero/a
                                                    <?php elseif ($Usuario->CivilStatusId == "3") : ?>Divorciado/a
                                                    <?php elseif ($Usuario->CivilStatusId == "4") : ?>Viudo/a
                                                <?php endif ?></option>
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
                                                <input type="email" class="form-control" id="AddUseremail" name="email" placeholder="Correo.." value="<?php echo $Usuario->Email ?>">
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
                                                <input type="text" class="form-control" id="AddUserCellPhoneNumber" name="CellPhoneNumber" placeholder="Numero Celular.." value="<?php echo $Usuario->CellPhoneNumber ?>">
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
                                                <option value="<?php echo $Usuario->rol_id ?>"><?php if ($Usuario->rol_id == "2") : ?>Administrador
                                                    <?php elseif ($Usuario->rol_id == "3") : ?>Vendedor
                                                    <?php elseif ($Usuario->rol_id == "4") : ?>Cliente
                                                <?php endif ?></option>
                                                <option value="2">Administrador</option>
                                                <option value="3">Vendedor</option>
                                                <option value="4">Cliente</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>Genero</label>
                                            <select class="form-control " id="AddUserGenderId" name="GenderId">
                                                <option value="<?php echo $Usuario->GenderId ?>"><?php if ($Usuario->GenderId == "2") : ?>Femenino
                                                    <?php elseif ($Usuario->GenderId == "3") : ?>Otro
                                                    <?php elseif ($Usuario->GenderId == "1") : ?>Masculino
                                                <?php endif ?></option>
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
                                                <input type="password" class="form-control" id="AddUserpassword" name="password" placeholder="Dejar en blanco si no desea modificar">
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
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-refresh mr-5"></i> Guardar
                                            </button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>