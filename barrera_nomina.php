<?php
$page_title = "Generar Nómina";
require_once  'partials/headers.php';
?>

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

<?php
include_once 'partials/footers.php';
?>
</body>
</html>