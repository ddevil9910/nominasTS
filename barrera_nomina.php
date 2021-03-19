<?php
$page_title = "Generar Nómina";
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
    <!--/ page content -->





<?php }else if ($_SESSION['tipoR']==2 && is_numeric($_SESSION['selectidR'])){ ?>

    <!--contenido de la pagina-->
    <div class="right_col" role="main">
        <div class="">
            <!--/<div class="page-title">
              <div class="title_left">
                <h3>Nómina</h3>
              </div>-->
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div>
                        <h2 align="center">¿Qué tipo de périodo desea generar?</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        <form id="formBarerraPeriodo" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-4">Seleccione el periodo </label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <select id="barerraperiodo" class="form-control" name="barerraperiodo">
                                        <option value="permanente">Semanal </option>
                                        <option value="a_prueba">Quincenal </option>
                                        <option value="eventual">Mensual </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success" id="btnAceptar" name="btnAceptar">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/contenido de la pagina-->


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
</body>
</html>