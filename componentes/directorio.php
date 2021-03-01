
<?php @session_start();
if ($_SESSION['tipoR']==2){ ?>
<div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr  role="row" class="odd">
                    <th>id</th>
                    <th>Nombre / Razon Social</th>
                    <th>base de Datos</th>
                    <th>id del Admin</th>
                    <th>Admin</th>
                    <th>Seleccionar</th>
                </tr>
                </thead>

                <?php
                    @session_start();
                    $id_peticion=$_SESSION['idusuarioR'];
                    include ('../partials/conexion.php');
                    $sql="SELECT id_registro, nombre_empresa, bd_empresa, id_admin, admin from directorio where id_admin=$id_peticion";
                    $result=mysqli_query($conn, $sql);
                    while($ver=mysqli_fetch_row($result)){
                        $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4];
                    
                ?>
                <tr>
                    <td><?php   echo $ver[0]?></td>
                    <td><?php   echo $ver[1]?></td>
                    <td><?php   echo $ver[2]?></td>
                    <td><?php   echo $ver[3]?></td>
                    <td><?php   echo $ver[4]?></td>
                    <td>
                        <button class="btn btn-primary glyphicon glyphicon-arrow-right" data-toggle="modal" data-target="#select" onclick="agregaforme('<?php echo $datos ?>')"></button>
                 
                    </td>
                </tr>
                <?php
                    }
                    
                ?>
            </table>
            <?php
            include ('../partials/cerrar_conexion.php');
            ?>
        </div>
    </div>

<?php @session_start();
}if ($_SESSION['tipoR']==1){ ?>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                <thead>
                <tr  role="row" class="odd">
                    <th>id</th>
                    <th>Nombre / Razon Social</th>
                    <th>id del Admin</th>
                    <th>Admin</th>

                </tr>
                </thead>

                <?php
                @session_start();
                $id_peticion=$_SESSION['idusuarioR'];
                include ('../partials/conexion.php');
                $sql="SELECT id_registro, nombre_empresa,  id_admin, admin from directorio";
                $result=mysqli_query($conn, $sql);
                while($ver=mysqli_fetch_row($result)){
                    $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3];

                    ?>
                    <tr>
                        <td><?php   echo $ver[0]?></td>
                        <td><?php   echo $ver[1]?></td>
                        <td><?php   echo $ver[2]?></td>
                        <td><?php   echo $ver[3]?></td>

                    </tr>
                    <?php
                }

                ?>
            </table>
            <?php
            include ('../partials/cerrar_conexion.php');
            ?>
        </div>
    </div>
<?php } ?>