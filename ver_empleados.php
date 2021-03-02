<?php
$page_title = "Empleados";
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
                    <h3>Ver Empleados - Control de usuarios</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Todos los empleados</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="tabla" class="table-responsive"></div>


                            <!-- Modal Editar -->
                            <div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                            <label>Id del usuario</label>
                                            <input type="Text" class="form-control" id="idac" placeholder="este es tu id" disabled>
                                            <label>Nombre de usuario</label>
                                            <input type="Text" class="form-control" id="usac" placeholder="Nuevo Nombre de Usuario">
                                            <label>Estado</label>
                                            <select class="form-control" id="esac">
                                                <option>Activo</option>
                                                <option>Inactivo</option>
                                            </select>
                                            <label>Tipo de usuario</label>
                                            <select class="form-control" id="tiac">
                                                <option>ROOT</option>
                                                <option>Administrador</option>
                                                <option>Cliente</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary" id="actualizar">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Eliminar -->
                            <div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                            <label>¿Estás seguro de eliminar este usuario?</label>
                                            <label>Id del usuario</label>
                                            <input type="Text" class="form-control" id="ide" placeholder="este es tu id" disabled>
                                            <label>Nombre de usuario</label>
                                            <input type="Text" class="form-control" id="use" placeholder="Nuevo Nombre de Usuario" disabled>
                                            <label>Estado</label>
                                            <select class="form-control" id="ese" disabled>
                                                <option>Activo</option>
                                                <option>Inactivo</option>
                                            </select>
                                            <label>Tipo de usuario</label>
                                            <select class="form-control" id="tie" disabled>
                                                <option>ROOT</option>
                                                <option>Administrador</option>
                                                <option>Cliente</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary" id="eliminar">Confirmar</button>
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




    <!--/contenido de pagina-->

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
    <script src="js/funciones_us.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tabla").load("componentes/tabla_empl.php");
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#actualizar').click(function(){
                actualiza();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#eliminar').click(function(){
                eliminar_usuario();
            });
        });
    </script>
<?php } ?>
</body>

</html>
