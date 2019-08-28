<body>
    <main id="main-container">
        <div class="content">
            <div class="box box solid">
                <div class="col-md-12>">
                    <a href="<?php echo base_url(); ?>mantenimiento/Membership/HisMembership/<?php echo $User->IdUser ?>" class="btn btn-primary btn-flat"><span class="fa fa-vcard-o">
                        </span> Membresia del cliente</a>
                </div>
                <br />
                <br />
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>mantenimiento/CardInfo/store/<?php echo $User->IdUser ?>" method="post">
                                <h3>Tarjeta de Credito de <?php echo $User->FullName ?></h3>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="ExpirationDate">Fecha de Expiracion</label>
                                        <input type="text" class="js-datepicker form-control" id="ExpirationDate" name="ExpirationDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Expiracion" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                            echo $Info->ExpirationDate;
                                                                                                                                                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="Digits">Digitos de la Tarjeta </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Digits" name="Digits" placeholder="Digitos de su tarjeta.." value="<?php if (!empty($Info)) {
                                                                                                                                                                /*$log = substr($Info->Digits, 0, 4) . str_repeat('*', strlen($Info->Digits) - 4);
                                                                                                                                                                echo $log;*/
                                                                                                                                                                echo $Info->Digits;
                                                                                                                                                            } ?>">
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
                                        <label for="BankId">Banco de la Tarjeta </label>
                                        <div class="input-group ">
                                            <select class="form-control " id="BankId" name="BankId">
                                                <option value="<?php if (!empty($Info)) {
                                                                    echo $Info->BankId;
                                                                } else {
                                                                    echo "0";
                                                                } ?>">Elija el Banco de su tarjeta</option>
                                                <?php foreach ($Banks as $Bank) : ?>
                                                <option value="<?php echo $Bank->BankId; ?>"><?php echo $Bank->BankName; ?></option>
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