<?php
$page_title = "Alta - Empresa";
require_once  'partials/headers.php';
?>
<!--contenido de pagina-->

<div class="right_col" role="main">
    <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Alta de Empresas</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="text-center">
                    <h2>Empresa - Nueva Empresa</h2>
                   <hr class="divider">
                  </div>
                  <div class="x_content">
                    <br />
                      <!--Formulario de alta de empresa-->
                    <form id="demo-form2" data-parsley-validate class="form-horizontal ">

                        <!--Nombre o razon social-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre o Razon Social <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="razon" name="razon" required class="form-control col-md-7 col-xs-12"  >
                        </div>
                      </div>
                        <!--RFC-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">RFC <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="rfc" name="rfc" required class="form-control col-md-7 col-xs-12"  >
                        </div>
                      </div>
                        <!--CURP-->
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">CURP</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="curp" class="form-control col-md-7 col-xs-12" type="text" name="curp"  >
                        </div>
                      </div>
                        <!--Direccion fiscal-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Dirección Fiscal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="direccion" name="direccion" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                        </div>
                      </div>
                        <!--Giro de la empresa-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Giro de la Empresa <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="giro" name="giro" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                        </div>
                      </div>
                        <!--Representante legal-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Representante Legal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="reprecentante" name="reprecentante" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                        </div>
                      </div>
                        <!--RFC representante legal-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">RFC del Reprecentante legal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="rfcr" name="rfcr" class="date-picker form-control col-md-7 col-xs-12" required type="text"  >
                        </div>
                      </div>
                        <!--Correo electronico-->
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo Electronico <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" name="email" class="date-picker form-control col-md-7 col-xs-12" required type="email">
                        </div>
                      </div>
                        <hr class="ln_solid">

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button">Cancelar</button>
                                <button class="btn btn-primary" type="reset">Limpiar</button>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>

                    </form>
                  </div>
                  <!--/contenido de pagina-->

                 <?php
                    include_once 'partials/footers.php';
                    ?>
                </div>
              </div>
            </div>
</div>

</html>