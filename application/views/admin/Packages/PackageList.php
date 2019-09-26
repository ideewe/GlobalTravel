<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"> Paquetes</h3>
                </div>
                <input type="hidden" name="ClientId" value="2">
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Nombre</th>
                                <th class="d-none d-sm-table-cell">Precio</th>
                                <th class="d-none d-sm-table-cell" >Observaciones</th>
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
                                        <td class="d-none d-sm-table-cell">
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
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo base_url() ?>mantenimiento/Packages/edit/<?php echo $Paquete->Id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                <?php if ($Paquete->State == 1) : ?>
                                                    <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                                    <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                                                <?php else : ?>
                                                    <a href="<?php echo base_url() ?>#<?php echo $Paquete->Id; ?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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