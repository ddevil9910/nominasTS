<?php
$page_title = "Configuración - Nómina";
require_once  'partials/headers.php';
?>

<!--contenido de la pagina-->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Configuración de nómina</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-6 col-sm-12">                
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Deducciones</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form id="formConfigPercep" data-parsley-validate class="form-horizontal form-label-left">
                      <!--Clave-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Clave <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="clavePercep" name="clavePercep" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>
                      <!--Clave SAT-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Clave de SAT <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="claveSat" name="claveSat" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>
                      <!--Concepto-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Concepto <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="conceptoPercep" name="conceptoPercep" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                      <!--Tipo-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione el tipo <span class="required">*</span>
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <select id="tipoPercep" class="form-control" name="tipoPercep">
                                            <option value="permanente">Fijo</option>
                                            <option value="a_prueba">Porcentual %</option>
                                            <option value="eventual"> Multiplicativo </option>
                                        </select>
                                    </div>
                      <!--Monto-->
                                
                                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="first-name">Monto <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" id="montoPercep" name="montoPercep" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->                                   
                                </div>
                                </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
                          <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </form>

                  </div>
                  </div>
              </div>


              <div class="col-md-6 col-sm-12">                
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Percepciones</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form id="formConfigPercep" data-parsley-validate class="form-horizontal form-label-left">
                      <!--Clave-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Clave <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="clavePercep" name="clavePercep" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>
                      <!--Clave SAT-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Clave de SAT <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="claveSat" name="claveSat" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>
                      <!--Concepto-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Concepto <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="conceptoPercep" name="conceptoPercep" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->
                                    </div>
                                </div>

                      <!--Tipo-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-6">Seleccione el tipo <span class="required">*</span>
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <select id="tipoPercep" class="form-control">
                                            <option value="permanente">Fijo</option>
                                            <option value="a_prueba">Porcentual %</option>
                                            <option value="eventual"> Multiplicativo </option>
                                        </select>
                                    </div>
                      <!--Monto-->                                
                                    <label class="control-label col-md-2 col-sm-2 col-xs-2" for="first-name">Monto <span class="required">*</span>
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="text" id="montoPercep" name="montoPercep" required="required" class="form-control col-md-7 col-xs-12">
                                        <!--las alertas permiten verificar al usuario si se escriben el en formato correcto los campos-->
                                        <div id="alerta1" class="col-lg-8"></div> <!--alerta-->                                   
                                </div>
                                </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
                          <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </form>
                </div>
                  
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