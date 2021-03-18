<?php
$page_title = "Configuración - Nómina";
require_once  'partials/headers.php';
?>

<!--contenido de la pagina-->



<div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Insidencias</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar Insidencias</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="tabla_in" class="table-responsive"></div>
                    </div>
                  

                   
                     <!-- Modal Faltas -->
                     <div class="modal fade" id="faltas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Registrar faltas</h4>
                          </div>
                          <div class="modal-body">
                            <label>Id Trabajdor</label>
                            <input type="Text" class="form-control"  placeholder="Id de ejemplo" >
                            <label>trabajador</label>
                            <input type="Text" class="form-control"  placeholder="Trabajador Ejemplo" >
                            <label>Ingresa el numero de faltas</label>
                            <input type="Text" class="form-control"  placeholder="5" >
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="seleccionar">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                     <!-- Modal Bajas -->
                     <div class="modal fade" id="bajas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Baja de trabajador</h4>
                          </div>
                          <div class="modal-body">
                          <label>Baja de Trabajdor</label>
                            <label>Id Trabajador</label>
                            <input type="Text" class="form-control"  placeholder="ID ejemplo" >
                            <label>Trabajdor</label>
                            <input type="Text" class="form-control"  placeholder="Trabajador ejemplo" >
                            <label>Fecha de la baja</label>
                            
                            <div class='input-group date' id='myDatepicker2'>
                                <input id="fechai" name="fechai" type='text' class="form-control" />
                                    <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                            </div>
                            <label>Si registras la baja este trabajador no aparecera en la proxima nomina</label>
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
    $("#tabla_in").load("componentes/tabla_incidencias.php");
  });
</script>
</body>
</html>