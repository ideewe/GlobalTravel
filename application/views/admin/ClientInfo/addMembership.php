<body>
    <main id="main-container">
        <div class="content">
            <div class="box box solid">
                <br />
                <br />
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>mantenimiento/Membership/store/<?php echo $User->IdUser ?>" method="post">
                                <?php if (!empty($Info)) : ?>
                                <h3>Informacion de la Membresia del Cliente <?php echo $User->FullName ?></h3>
                                <?php else : ?>
                                <h3>Ingrese la informacion para la  nueva Membresia del Cliente <?php echo $User->FullName ?></h3>
                                <?php endif; ?>
                                <br>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Fecha de Afiliacion</label>
                                        <input type="text" class="js-datepicker form-control" id="AffiliationDate" name="AffiliationDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Afiliacion" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                            echo $Info->AffiliationDate;
                                                                                                                                                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Fecha de Cargo</label>
                                        <input type="text" class="js-datepicker form-control" id="CargoDate" name="CargoDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de cargo" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                            echo $Info->CargoDate;
                                                                                                                                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Fecha de Expiracion</label>
                                        <input type="text" class="js-datepicker form-control" id="ExpirationDate" name="ExpirationDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Expiracion" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                            echo $Info->ExpirationDate;
                                                                                                                                                                                                                                                                                        } ?>">
                                    </div>
                                    <br />
                                </div>
                                <div class="form-group row ">
                                    <div class="col-4">
                                        <label>Donde Trabaja?</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" id="Company" name="Company" placeholder="Compañia donde trabaja.." value="<?php if (!empty($Info)) {
                                                                                                                                                                    echo $Info->Company;
                                                                                                                                                                } ?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-id-card-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label>Tipo de Membresia</label>
                                        <div class="input-group">
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
                                    </div>
                                    <div class="col-4">
                                        <label>Puesto de Trabajo</label>
                                        <div class="input-group ">
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
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Membresia de Compañia?</label>
                                        <div class="input-group">
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
                                    </div>
                                    <div class="col-4">
                                        <label>Fecha de Nacimiento</label>
                                        <input type="text" class="js-datepicker form-control" id="Birthdate" name="Birthdate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" placeholder="Fecha de Nacimiento" value="<?php if (!empty($Info)) {
                                                                                                                                                                                                                                                                                echo $Info->Birthday;
                                                                                                                                                                                                                                                                            } ?>">
                                    </div>
                                    <div class="col-4">
                                        <label>Fecha de Aniversario</label>
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