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
                            <form action="<?php echo base_url(); ?>mantenimiento/usuarios/updateuser" method="post">
                                <?php if (!empty($Usuario)) : ?>
                                    <div class="form-group mb-15">
                                        <input type="hidden" name="rol_id" value="<?php echo $Usuario->rol_id ?>">
                                        <input type="hidden" name="id" value="<?php echo $Usuario->Id ?>">
                                        <label for="side-overlay-profile-name">Nombre</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="name" placeholder="Name.." value="<?php echo $Usuario->FullName; ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-name">Nombre de Usuario</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="username" placeholder="Username.." value="<?php echo $Usuario->Username; ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-name">Numero de Identidad</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="identity" placeholder="Identidad.." value="<?php echo $Usuario->IdNumber; ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-email">Correo</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="side-overlay-profile-email" name="email" placeholder="Email.." value="<?php echo $Usuario->Email; ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password">Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password" name="password" placeholder="Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password-confirm">Confirmar Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="confirmpassword" placeholder="Confirm Password..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-12">
                                            <label>Rol de Usuario</label><br>
                                            <input type="radio" name="rol" value="Administrador"> Administrador<br>
                                            <input type="radio" name="rol" value="Vendedor"> Vendedor<br>
                                            <input type="radio" name="rol" value="Cliente"> Cliente <br>
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