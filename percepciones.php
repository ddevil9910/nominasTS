<?php
$page_title = "Configuración - Nómina";
require_once  'partials/headers.php';
?>

<!--contenido de la pagina-->



<div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Percepciones</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar Percepciones</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="d-grid gap-2 col-6 mx-auto">
                      <button class="btn btn-primary" id="porc" type="button" data-toggle="modal" data-target="#porce">Porcentuales</button>
                      <button class="btn btn-primary" id="mult" type="button" data-toggle="modal" data-target="#multi" >Multiplicativas</button>
                    </div>
                    <h2>Percepciones Porcentuales</h2>
                    <div id="tabla" class="table-responsive"></div>
                    </div>
                    
                  

                    <h2>Percepciones Multiplicativas</h2>
                    <div id="tabla2" class="table-responsive"></div>
                    </div>
                  

                   
                     <!-- Modal Multiplicativas -->
                     <div class="modal fade" id="multi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Percepcion Multiplicativa</h4>
                          </div>
                          <div class="modal-body">
                            <label>Clave SAT</label>
                            <input type="Text" class="form-control"  placeholder="Ingresa la Clave SAT" >
                            <label>Concepto</label>
                            <input type="Text" class="form-control"  placeholder="Ingresa el Concepto" >
                            <label>Campo 1</label>
                            <select class="form-control" >
                              <option>Dias trabajados</option>
                              <option>Salario Diario</option>
                              <option>etc</option>
                            </select>
                            <label>Operador</label>
                            <select class="form-control" >
                              <option>Multiplicar</option>
                              <option>Dividir</option>
                              <option>Sumar</option>
                              <option>Restar</option>
                            </select>
                            <label>Campo2</label>
                            <select class="form-control" >
                              <option>Dias trabajados</option>
                              <option>Salario Diario</option>
                              <option>etc</option>
                            </select>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="seleccionar">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                     <!-- Modal Porcentuales -->
                     <div class="modal fade" id="porce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Agregar Percepcion Porcentual</h4>
                          </div>
                          <div class="modal-body">
                          <label>Clave SAT</label>
                            <input type="Text" class="form-control"  placeholder="Ingresa la Clave SAT" >
                            <label>Concepto</label>
                            <input type="Text" class="form-control"  placeholder="Ingresa el Concepto" >
                            <label>Porcentaje</label>
                            <input type="Text" class="form-control"  placeholder="Ingresa el Porcentaje a aplicar" >
                            <label>Aplicar a..</label>
                            <select class="form-control" >
                              <option>Dias trabajados</option>
                              <option>Salario Diario</option>
                              <option>etc</option>
                            </select>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="seleccionar">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>





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
<script type="text/javascript">
  $(document).ready(function(){
    $("#tabla").load("componentes/per_por.php");
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#tabla2").load("componentes/per_mul.php");
  });
</script>
</body>
</html>