<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">

            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"> Operaciones realizadas con <?php echo $Cliente->FullName; ?></h3>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Paquete</th>
                                <th class="d-none d-sm-table-cell">Precio</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Fecha</th>
                                <th class="text-center">Observaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Operaciones as $Operacion) : ?>
                                <?php if ($Operacion->ClientId == $Cliente->IdUser and $Operacion->SellerId == $Vendedor) : ?>
                                    <?php foreach ($Paquetes as $Paquete) : ?>
                                        <?php if ($Paquete->Id == $Operacion->PackageId) : ?>
                                            <tr>
                                                <td class="text-center"><?php echo $Operacion->Id; ?></td>
                                                <td class="font-w600"><?php echo $Paquete->Name; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $Paquete->Price; ?></td>
                                                <td class="d-none d-sm-table-cell"><?php echo $Operacion->Date; ?></td>
                                                <td class="text-center">
                                                    <?php if (!empty($Paquete->Observations)) : ?>
                                                        <div class="form-group row">
                                                            <div class="col-lg-10">
                                                                <div class="form-material">
                                                                    <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags3" name="example-tags3" value="<?php echo $Paquete->Observations; ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php else : ?>
                                                        Sin datos que mostrar
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12>">
                <a href="<?php echo base_url(); ?>mantenimiento/clientes/UserClients" class="btn btn-primary btn-flat"><span class="fa fa-arrow-left">
                    </span> Volver</a>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->