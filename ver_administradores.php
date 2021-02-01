<?php
$page_title = "Ver administradores - Control de usuarios";
require_once  'partials/headers.php';
require_once  'partials/parseVisualAdmin.php';
?>
<!--contenido de la pagina-->

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ver administradores - Control de usuarios</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Todos los administradores</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <table class="table table-striped projects">
                     <thead>
                        <tr>
                          <th style="width: 1%"></th>
                          <th style="width: 47%">Nombre del admistrador</th>
                          <th style="width: 47%">Empresa asociada</th>
                          <th style="width: 47%">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td></td>
                          <td>
                            <a>Andres Sanchez Pérez</a>
                            <br>
                            <small>Fecha de creación 01.01.2015</small>
                          </td>
                          <td>
                            <a>Dulce vida</a>
                            <br>
                            <small>......</small>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-toggle-on"></i> Habilitado </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                          </td>
                        </tr>

                        <tr>
                          <td></td>
                          <td>
                            <a>Ana Flores Castillo</a>
                            <br>
                            <small>Fecha de creación 01.01.2015</small>
                          </td>
                          <td>
                            <a>Cafeteria "Gusto bueno"</a>
                            <br>
                            <small>********</small>
                          </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-toggle-on"></i> Habilitado </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
                          </td>
                        </tr> 

                      </tbody>
                    </table>
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
</html>