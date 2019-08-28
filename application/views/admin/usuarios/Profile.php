<br>
<div class="col-6">
    <h3>Datos del Usuario <?php echo $Usuario->FullName; ?></h3>
</div>
<div class="block">
    <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#Informacion"> Su Informacion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Tarjeta">Su Tarjeta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Contacto">Datos de Contacto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Membresia">Su Membresia</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Operaciones">Operaciones Hechas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#Observaciones">Observaciones</a>
        </li>
        <li class="nav-item ml-auto">
            <a class="nav-link" href="#settings"><i class="si si-settings"></i></a>
        </li>
    </ul>
    <div class="block-content tab-content overflow-hidden">
        <div class="tab-pane fade fade-left show active" id="Informacion" role="tabpanel">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url(); ?>mantenimiento/usuarios/updateuser" method="post">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Nombre</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="AddUsername" name="name" placeholder="Nombre.." value="<?php echo $Usuario->FullName ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="col-6">
                                    <label>Numero de Identidad</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="AddUseridentity" name="identity" placeholder="Identidad.." value="<?php echo $Usuario->IdNumber ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-id-card-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row <?php echo !empty(form_error("username")) ? 'has-error' : ''; ?>">
                                <div class="col-6">
                                    <label>Nombre de Usuario</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="AddUserUsername" name="username" placeholder="Nombre de Usuario.." value="<?php echo $Usuario->Username ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-circle-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Estado Civil</label>
                                    <select class="form-control " id="AddUserCivilStatusId" name="CivilStatusId">
                                        <option value="<?php echo $Usuario->CivilStatusId ?>"><?php if ($Usuario->CivilStatusId == "1") : ?>Casado/a
                                            <?php elseif ($Usuario->CivilStatusId == "2") : ?>Soltero/a
                                            <?php elseif ($Usuario->CivilStatusId == "3") : ?>Divorciado/a
                                            <?php elseif ($Usuario->CivilStatusId == "4") : ?>Viudo/a
                                            <?php endif ?></option>
                                        <option value="1">Casado/a</option>
                                        <option value="2">Soltero/a</option>
                                        <option value="2">Divorciado/a</option>
                                        <option value="4">Viudo/a </option>
                                    </select>
                                </div>
                                <?php echo form_error("username", "<span class = 'help-block'>", "</span>"); ?>
                            </div>
                            <div class="form-group row ">
                                <div class="col-6">
                                    <label>Correo</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="AddUseremail" name="email" placeholder="Correo.." value="<?php echo $Usuario->Email ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Telefono Celular</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="AddUserCellPhoneNumber" name="CellPhoneNumber" placeholder="Numero Celular.." value="<?php echo $Usuario->CellPhoneNumber ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Rol de Usuario</label>
                                    <select class="form-control " id="AddUserrol" name="rol">
                                        <option value="<?php echo $Usuario->rol_id ?>"><?php if ($Usuario->rol_id == "2") : ?>Administrador
                                            <?php elseif ($Usuario->rol_id == "3") : ?>Vendedor
                                            <?php elseif ($Usuario->rol_id == "4") : ?>Cliente
                                            <?php endif ?></option>
                                        <option value="2">Administrador</option>
                                        <option value="3">Vendedor</option>
                                        <option value="4">Cliente</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label>Genero</label>
                                    <select class="form-control " id="AddUserGenderId" name="GenderId">
                                        <option value="<?php echo $Usuario->GenderId ?>"><?php if ($Usuario->GenderId == "2") : ?>Femenino
                                            <?php elseif ($Usuario->GenderId == "3") : ?>Otro
                                            <?php elseif ($Usuario->GenderId == "1") : ?>Masculino
                                            <?php endif ?></option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                        <option value="3">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Contraseña</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="AddUserpassword" name="password" placeholder="Dejar en blanco si no desea modificar">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Confirmar Contraseña</label>
                                    <div class="input-group ">
                                        <input type="password" class="form-control" id="AddUserconfirmpassword" name="confirmpassword" placeholder="Confirmar Contraseña..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
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
        <div class="tab-pane fade fade-left" id="Tarjeta" role="tabpanel">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Banco</th>
                        <th class="d-none d-sm-table-cell">Digitos</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Fecha/Expiracion</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($Tarjeta)) : ?>
                    <?php foreach ($Tarjeta as $Tar) : ?>
                    <tr>
                        <td class="text-center"><?php echo $Tar->Id; ?></td>
                        <td class="font-w600"><?php foreach ($Bancos as $Banco) : if ($Banco->BankId == $Tar->BankId) echo $Banco->BankName;
                                                        endforeach; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $Tar->Digits; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $Tar->ExpirationDate ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                <a href="#" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade fade-left" id="Contacto" role="tabpanel">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url(); ?>mantenimiento/Address/store" method="post">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Su direccion</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="address" name="address" value="<?php echo $Direccion->Address ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="col-6">
                                    <label>Su direccion</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="city" name="city" value="<?php echo $Direccion->City ?>">
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
                                    <label>Departamento</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="department" name="department" value="<?php echo $Direccion->Department ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user-circle-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5>Numeros Telefonicos del Cliente</h5>
                            <div class="form-group row ">
                                <div class="col-6">
                                    <label>Su Telefono de Casa</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="homephone" name="homephone" value="<?php echo $Direccion->HomePhoneNumber ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label>Su Telefono de Oficina</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="officephone" name="officephone" value="<?php echo $Direccion->OfficePhoneNumber ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-group row ">
                                <div class="col-6">
                                    <label>Otro Telefono</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="otherphone" name="otherphone" value="<?php echo $Direccion->OtherPhoneNumber ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
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
        <div class="tab-pane fade fade-left" id="Membresia" role="tabpanel">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url(); ?>mantenimiento/Membership/store/<?php echo $Usuario->IdUser ?>" method="post">
                            <div class="form-group row">
                                <div class="col-4">
                                    <label>Fecha de Afiliacion</label>
                                    <input type="text" class="js-datepicker form-control" id="AffiliationDate" name="AffiliationDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" value="<?php echo $Membresia->AffiliationDate;?>">
                                </div>
                                <div class="col-4">
                                    <label>Fecha de Cargo</label>
                                    <input type="text" class="js-datepicker form-control" id="CargoDate" name="CargoDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd"  value="<?php echo $Membresia->CargoDate; ?>">
                                </div>
                                <div class="col-4">
                                    <label>Fecha de Expiracion</label>
                                    <input type="text" class="js-datepicker form-control" id="ExpirationDate" name="ExpirationDate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" value="<?php echo $Membresia->ExpirationDate;?>">
                                </div>
                                <br />
                            </div>
                            <div class="form-group row ">
                                <div class="col-4">
                                    <label>Donde Trabaja?</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="Company" name="Company" value="<?php echo $Membresia->Company;?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-building"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Tipo de Membresia</label>
                                    <div class="input-group">
                                        <select class="form-control " id="MembershipId" name="MembershipId">
                                            <option value="<?php echo $Membresia->MembershipId?>"><?php foreach ($Membresias as $Mem) : if ($Membresia->MembershipId == $Mem->MembershipId) echo $Mem->MembershipName; endforeach; ?></option>
                                            <?php foreach ($Membresias as $Membership) : ?>
                                            <option value="<?php echo $Membership->MembershipId; ?>"><?php echo $Membership->MembershipName; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Puesto de Trabajo</label>
                                    <div class="input-group ">
                                        <input type="text" class="form-control" id="Job" name="Job"  value="<?php echo $Membresia->Job;?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-briefcase"></i>
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
                                            <option value="<?php echo $Membresia->IsCompany ?>"><?php if ($Membresia->IsCompany == "0") : ?>No
                                            <?php elseif ($Membresia->IsCompany == "1") : ?>Si
                                            <?php endif ?></option>
                                            <option value="0">No</option>
                                            <option value="1">Si</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="text" class="js-datepicker form-control" id="Birthdate" name="Birthdate" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" value="<?php echo $Membresia->Birthday;?>">
                                </div>
                                <div class="col-4">
                                    <label>Fecha de Aniversario</label>
                                    <input type="text" class="js-datepicker form-control" id="Anniversary" name="Anniversary" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy/mm/dd" value="<?php echo $Membresia->Anniversary;?>">
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
        <div class="tab-pane fade fade-left" id="Observaciones" role="tabpanel">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Descripcion</th>
                        <th class="d-none d-sm-table-cell">Fecha</th>
                        
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($Observacion)) : ?>
                    <?php foreach ($Observacion as $Ob) : ?>
                    <tr>
                        <td class="text-center"><?php echo $Ob->ObservationId; ?></td>
                        <td class="font-w600"><?php echo $Ob->ObservationDescription; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $Ob->Date; ?></td>
                        
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                <a href="#" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade fade-left show active" id="Operaciones" role="tabpanel">
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
        <div class="tab-pane fade fade-left" id="settings" role="tabpanel">
            <h4 class="font-w400">Settings </h4>
            <p>Content slides in t</p>
        </div>
    </div>
</div>
