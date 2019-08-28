<p><strong>Id:</strong> <?php echo $Usuario->IdUser; ?></p>
<p><strong>Nombre:</strong> <?php echo $Usuario->FullName; ?></p>
<p><strong>Numero de Identidad:</strong> <?php echo $Usuario->IdNumber; ?></p>
<p><strong>Nombre de Usuario:</strong> <?php echo $Usuario->Username; ?></p>
<p><strong>Numero de Celular:</strong> <?php echo $Usuario->FullName; ?></p>
<p><strong>Genero:</strong> <?php if ($Usuario->GenderId == "1") {
                                echo "Casado/a";
                            } elseif ($Usuario->GenderId == "2") {
                                echo "Soltero/a";
                            } elseif ($Usuario->GenderId == "3") {
                                echo "Divorciado/a";
                            } elseif ($Usuario->GenderId == "4") {
                                echo "Viudo/a";
                            } ?></p>
<p><strong>Estado Civil:</strong> <?php if ($Usuario->CivilStatusId == "4") {
                                        echo "Cliente";
                                    } elseif ($Usuario->CivilStatusId == "3") {
                                        echo "Vendedor";
                                    } elseif ($Usuario->CivilStatusId == "2") {
                                        echo "Administrador";
                                    } ?></p>
<p><strong>Email:</strong> <?php echo $Usuario->Email; ?></p>
<p><strong>Rol:</strong> <?php if ($Usuario->rol_id == "4") {
                                echo "Cliente";
                            } elseif ($Usuario->rol_id == "3") {
                                echo "Vendedor";
                            } elseif ($Usuario->rol_id == "2") {
                                echo "Administrador";
                            } ?></p>
<?php if (!empty($Observaciones)) : ?>
<input type="hidden" name="date" value="<?php echo date("Y") . "-" . date("m") . "-" . date("d") ?>">
<div class="col-12">
    <form action="<?php echo base_url(); ?>mantenimiento/Observations/store/<?php echo $Usuario->IdUser; ?>" method="post" onsubmit="return false;">
        <div class="form-group row">
            <div class="col-12">
                <div class="form-material">
                    <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags3" name="ObservationDescription" value="<?php foreach ($Observaciones as $Observacion) : ?>
                                                                                                                                <?php echo $Observacion->ObservationDescription . ","; ?><?php endforeach; ?>">
                    <label for="example-tags3">Observaciones</label>
                </div>
            </div>
        </div>
    </form>
</div>
<?php endif; ?>
<script>
    jQuery(function() {
        Codebase.helpers(['tags-inputs']);
    });
</script>