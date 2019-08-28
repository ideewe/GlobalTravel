<body>
    <main id="main-container">
        <div class="content">
            <div class="box box solid">
                <div class="col-md-12">
                    <h3 class="block-title">Ingrese los datos de Membresia</h3>
                </div>
                <br />
                <br />
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>mantenimiento/Membership/store/<?php echo $User->IdUser ?>" method="post">
                                <h3>Informacion del Cliente</h3>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <input type="text" class="js-datepicker form-control" id="AffiliationDate" name="AffiliationDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Afiliacion" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                            echo $Info->AffiliationDate;
                                                                                                                                                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="js-datepicker form-control" id="CargoDate" name="CargoDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de cargo" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                            echo $Info->CargoDate;
                                                                                                                                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="js-datepicker form-control" id="ExpirationDate" name="ExpirationDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Expiracion" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                            echo $Info->ExpirationDate;
                                                                                                                                                                                                                                                                                        } ?>">
                                    </div>
                                    <br />
                                </div>
                                <div class="form-group row ">
                                    <div class="input-group col-4">
                                        <input type="text" class="form-control" id="Company" name="Company" placeholder="Compañia donde trabaja.." value="<?php if (!empty($Info)) {
                                                                                                                                                                echo $Info->Company;
                                                                                                                                                            } ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-id-card-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group col-4">
                                        <select class="form-control " id="MembershipId" name="MembershipId">
                                            <option value="<?php if (!empty($Info)) {
                                                                echo $Info->MembershipId;
                                                            } else {
                                                                echo "0";
                                                            } ?>">Elija el tipo de Membresia</option>
                                            <?php foreach ($Memberships as $Membership) : ?>
                                            <option value="<?php echo $Membership->MembershipId; ?>"><?php echo $Membership->MembershipName; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="input-group col-4">
                                        <input type="text" class="form-control" id="Job" name="Job" placeholder="Trabajo que ejerce.." value="<?php if (!empty($Info)) {
                                                                                                                                                    echo $Info->Job;
                                                                                                                                                } ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-id-card-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="input-group col-4">
                                        <select class="form-control " id="IsCompany" name="IsCompany">
                                            <option value="<?php if (!empty($Info)) {
                                                                echo $Info->IsCompany;
                                                            } else {
                                                                echo "0";
                                                            } ?>">Membresia de Compañia?</option>
                                            <option value="0">No</option>
                                            <option value="1">Si</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="js-datepicker form-control" id="Birthdate" name="Birthdate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Nacimiento" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                echo $Info->Birthday;
                                                                                                                                                                                                                                                                            } ?>">
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="js-datepicker form-control" id="Anniversary" name="Anniversary" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Aniversario" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                    echo $Info->Anniversary;
                                                                                                                                                                                                                                                                                } ?>">
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