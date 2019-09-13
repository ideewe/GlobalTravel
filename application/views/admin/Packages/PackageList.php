<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="block">
                <div class="block-header block-header-default">
                    <?php if (!empty($id)) : ?>
                        <h5 class="block-title"> Que paquete desea venderle a <?php echo $Usuario->FullName ?>?</h5>
                    <?php else : ?>
                        <h3 class="block-title"> Paquetes</h3>
                    <?php endif; ?>
                </div>
                <input type="hidden" name="ClientId" value="2">
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Nombre</th>
                                <th class="d-none d-sm-table-cell">Precio</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Observaciones</th>
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($Paquetes)) : ?>
                                <?php foreach ($Paquetes as $Paquete) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $Paquete->Id; ?></td>
                                        <td class="font-w600"><?php echo $Paquete->Name; ?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $Paquete->Price; ?></td>
                                        <td class="d-none d-sm-table-cell"><?php echo $Paquete->Observations; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <?php if (!empty($id)) : ?>
                                                    <a href="<?php echo base_url() ?>mantenimiento/Clientes/storeOperation/<?php echo 1; ?>" class="btn btn-primary"><span class="fa fa-plus"></span></a>
                                                <?php endif; ?>
                                                <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                <?php if (empty($id)) : ?>
                                                    <?php if ($Paquete->State == 1) : ?>
                                                        <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                        <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-success btn-remove"><span class="fa fa-plus"></span></a>
                                                    <?php else : ?>
                                                        <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
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