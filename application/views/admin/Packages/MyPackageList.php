<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div>
                <?php if ($this->session->flashdata("error")) : ?>
                <div class="alert alert-danger">
                    <p><?php echo $this->session->flashdata("error") ?></p>
                </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata("update")) : ?>
                <div class="alert alert-success">
                    <p><?php echo $this->session->flashdata("update") ?></p>
                </div>
                <?php endif; ?>
                <div class="col-md-12>">
                    <a href="<?php echo base_url(); ?>mantenimiento/address" class="btn btn-primary btn-flat"><span class="fa fa-plus">
                        </span> Actualizar mis datos</a>
                </div>
            </div><br />
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Mis Paquetes</h3>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Paquete</th>
                                <th>Vendedor</th>
                                <th class="d-none d-sm-table-cell">Precio</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Fecha</th>
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($Paquetes)) : ?>
                            <?php foreach ($MisPaquetes as $MiPaquete) : ?>
                            <?php foreach ($Paquetes as $Paquete) : ?>
                            <?php if ($MiPaquete->PackageId == $Paquete->Id) : ?>
                            <?php foreach ($Vendedores as $Vendedor) : ?>
                            <?php if ($MiPaquete->SellerId == $Vendedor->IdUser) : ?>
                            <tr>
                                <td class="text-center"><?php echo $MiPaquete->Id; ?></td>
                                <td class="font-w600"><?php echo $Paquete->Name; ?></td>
                                <td class="font-w600"><?php echo $Vendedor->FullName; ?></td>
                                <td class="d-none d-sm-table-cell"><?php echo $Paquete->Price; ?></td>
                                <td class="d-none d-sm-table-cell"><?php echo $MiPaquete->Date; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-popin" value="<?php echo $Paquete->Id; ?>"><span class="fa fa-eye"></span></button>
                                        <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Informacion del Paquete</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body block-content">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Perfecto
                    </button>
                </div>
            </div>
        </div>
    </div>