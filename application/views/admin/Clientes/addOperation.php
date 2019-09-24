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
                            <form action="<?php echo base_url(); ?>mantenimiento/Clientes/storeOperation" method="post">
                                <h3> Informacion de la Operacion</h3>
                                <input type="hidden" name="clientid" value="<?php echo $Usuario->IdUser; ?>">
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label>Vendedor</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="seller" name="seller" placeholder="<?php echo $this->session->userdata("nombre"); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="col-6">
                                        <label>Cliente</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="client" name="client" placeholder="Cliente..." value="<?php echo $Usuario->FullName; ?>">
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
                                        <label>Fecha</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="date" name="date" placeholder="<?php echo $Date = date("Y-m-d"); ?>" value="<?php echo $Date = date("Y-m-d"); ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user-circle-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label>Paquete</label>
                                        <div class="col-6">
                                            <select class="form-control " id="paquete" name="paquete">
                                                <?php foreach ($Paquetes as $Paquete) : ?>
                                                    <option value="<?php echo $Paquete->Id;?>"><?php echo $Paquete->Name;?></option>
                                                <?php endforeach; ?>
                                            </select>
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