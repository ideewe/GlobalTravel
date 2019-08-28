<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>ideewe</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/codebase.min.css">
    <!-- END Stylesheets -->
</head>

<body>
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('<?php echo base_url(); ?>assets/media/photos/photo34@2x.jpg');">
                <div class="row mx-0 bg-earth-op">
                    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                        <div class="p-30 invisible" data-toggle="appear">
                            <p class="font-size-h3 font-w600 text-white mb-5">
                                Nos alegra que seas parte de nuestra comunidad!
                            </p>
                            <p class="font-size-h5 text-white">
                                <i class="fa fa-angles-right"></i> Crea tu cuenta y recibe 50% de descuento.
                            </p>
                            <p class="font-italic text-white-op">
                                Copyright &copy; <span class="js-year-copy">2017</span>
                            </p>
                        </div>
                    </div>
                    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                        <div class="content content-full">
                            <!-- Header -->
                            <div class="px-30 py-10">
                                <a class="link-effect font-w700" href="index.html">
                                    <i class="si si-fire"></i>
                                    <span class="font-size-xl text-primary-dark">ideewe</span>
                                </a>
                                <h1 class="h3 font-w700 mt-30 mb-10">Crear cuenta nueva</h1>
                                <h2 class="h5 font-w400 text-muted mb-0">Por favor ingrese sus detalles</h2>
                            </div>
                            <!-- END Header -->

                            <?php if ($this->session->flashdata("error")) : ?>
                            <div class="alert alert-danger">
                                <p><?php echo $this->session->flashdata("error") ?></p>
                            </div>
                            <?php endif; ?>

                            <!-- Sign Up Form -->
                            <form class="js-validation-signup px-30" action="<?php echo base_url(); ?>signup/selfstore" method="post">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="signup-name" name="name" value="<?php echo set_value("name"); ?>">
                                            <label for="signup-name">Nombre Completo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="signup-username" name="username" value="<?php echo set_value("username"); ?>">
                                            <label for="signup-username">Nombre de Usuario</label>
                                            <?php echo form_error("username", "<span class = 'help-block'>", "</span>"); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="signup-identity" name="identity" value="<?php echo set_value("identity"); ?>">
                                            <label for="signup-identity">Numero de Identidad</label>
                                            <?php echo form_error("identity", "<span class = 'help-block'>", "</span>"); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <select class="form-control " id="CivilStatusId" name="CivilStatusId">
                                            <option value="0">Estado Civil</option>
                                            <option value="1">Casado/a</option>
                                            <option value="2">Soltero/a</option>
                                            <option value="2">Divorciado/a</option>
                                            <option value="4">Viudo/a </option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select class="form-control " id="GenderId" name="GenderId">
                                            <option value="0">Genero</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                            <option value="3">Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email" class="form-control" id="signup-email" name="email" value="<?php echo set_value("email"); ?>">
                                            <label for="signup-email">Correo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="signup-password" name="password">
                                            <label for="signup-password">Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="signup-password-confirm" name="confirmpassword">
                                            <label for="signup-password-confirm">Confirmar Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                            <label class="custom-control-label" for="signup-terms">Acepto los Terminos y &amp; Condiciones</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-hero btn-alt-success">
                                        <i class="fa fa-plus mr-10"></i> Crear Cuenta
                                    </button>
                                    <div class="mt-30">
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                            <i class="fa fa-book text-muted mr-5"></i> Lee Terminos
                                        </a>
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="<?php echo base_url() ?>">
                                            <i class="fa fa-user text-muted mr-5"></i> Volver e Ingresar
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Perfect
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->
    <script src="<?php echo base_url(); ?>assets/js/codebase.core.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/codebase.app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/op_auth_signup.min.js"></script>
</body>

</html>