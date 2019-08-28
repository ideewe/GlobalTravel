<body>
    <main id="main-container">
        <div class="content">
            <div class="box box solid">
                <div class="col-md-12">
                    <h3 class="block-title">Ingrese sus datos</h3>
                </div>
                <br />
                <br />
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>mantenimiento/Address/store" method="post">
                                <h3> Su Informacion de Localidad</h3>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Su direccion</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Su direccion..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="col-6">
                                        <label>Su direccion</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-id-card-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-6">
                                        <label>Departamento</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="department" name="department" placeholder="Departamento..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user-circle-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Numeros Telefonicos del Cliente</h3>
                                <div class="form-group row ">
                                    <div class="col-6">
                                        <label>Su Telefono de Casa</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="homephone" name="homephone" placeholder="Telefono de casa..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Su Telefono de Oficina</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="officephone" name="officephone" placeholder="Telefono de Oficina..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-group row ">
                                    <div class="col-6">
                                        <label>Otro Telefono</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="otherphone" name="otherphone" placeholder="otro telefono..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
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