<?php
$page_title = "Alta - Trabajador";
require_once  'partials/headers.php';
?>


<?php
@session_start();
if ( ($_SESSION['tipoR']==2) && !(is_numeric($_SESSION['selectidR'])) ) { ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Acceso denegado</h2>

                            <div class="clearfix"></div>
                        </div>
                        <h5>
                            <P>No has activado ninguna empresa,  <strong><a href="index2.php" style="color: coral">da clic aquí</a></strong>  para activar una.</P>
                        </h5>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- page content -->





<?php }else if ($_SESSION['tipoR']==2 && is_numeric($_SESSION['selectidR'])){ ?>

    <!--contenido de la pagina-->


    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Alta de Trabajadores</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="text-center">
                            <h2>Empresa - Nuevo Empleado</h2>
                            <hr class="divider">
                        </div>
                        <div class="x_content">
                            <br />
                            <!--Formulario de alta de empleado-->
                            <form id="formAltaTrbj" data-parsley-validate class="form-horizontal form-label-left">

                                <!--Nombre-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre Completo <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--RFC-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RFC <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="rfc" name="rfc" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta2" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--CURP-->
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">CURP</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="curp" class="form-control col-md-7 col-xs-12" type="text" name="curp">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta3" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--Numero de seguridad social-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">NSS <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="nss" name="nss" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta4" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--Fecha de ingreso-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de ingreso <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input id="fechai" name="fechai" type='text' class="form-control" />
                                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                        </div>
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta5" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--Puesto-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Puesto <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="puesto" name="puesto" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta6" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--Departamento-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Departamento <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="departamento" name="departamento" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta7" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--Salario Diario-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Salario Diario <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="salario" name="salario" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta8" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--Salario diario integrado-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Salario Diario Integrado<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="salariodi" name="salariodi" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta9" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--Direccion-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Direccion <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="direccion" name="direccion" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta10" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                                <!--tipo empleado-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Empleado <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="tipoemp" class="form-control" name="tipoemp">
                                            <option value="permanente">Permanente</option>
                                            <option value="a_prueba">A prueba</option>
                                            <option value="eventual">Eventual</option>
                                        </select>
                                    </div>
                                </div>

                                <!--periodo de pago-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Periodo de pago <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="periodo" class="form-control" name="periodo">
                                            <option value="semanal">Semanal</option>
                                            <option value="quincenal">Quincenal</option>
                                            <option value="mensual">Mensual</option>
                                        </select>
                                    </div>
                                </div>

                                <!--Correo electronico-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo Electronico <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta11" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>









                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button">Cancelar</button>
                                        <button class="btn btn-primary" type="reset">Limpiar</button>
                                        <button type="submit" class="btn btn-success" id="btnGuardar" name="btnGuardar" disabled>Guardar</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!--/contenido de pagina-->

                    </div>
                </div>

            </div>
        </div>
    </div>

<?php }else{ ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Acceso denegado</h2>

                            <div class="clearfix"></div>
                        </div>
                        <h5>
                            <P>Tu cuenta no tiene permisos para ver esta pagina.</P>
                        </h5>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- page content -->

<?php } ?>








    <?php
    include_once 'partials/footers.php';
    ?>

<?php if ($_SESSION['tipoR']==2 && is_numeric($_SESSION['selectidR'])){ ?>
<script src="js/empleadoAlta.js"></script>
<?php } ?>
</body>

</html>