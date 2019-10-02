<body>
    <main id="main-container">
        <div class="content">
            <div class="box box solid">
                <div class="col-md-12">
                    <h3 class="block-title">Agregando Paquete</h3>
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
                            <form action="<?php echo base_url(); ?>mantenimiento/Packages/storepackage" method="post">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Nombre</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="Addname" name="name" placeholder="Nombre.." >
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col-6">
                                            <label>Precio</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="AddPrice" name="price" placeholder="Precio.." >
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
                                            <label>Observaciones</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="AddObservations" name="observations" placeholder="Observaciones.." >
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user-circle-o"></i>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>