<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
            <thead>
            <tr  role="row" class="odd">
                <td>Editar</td>
                <td>Eliminar</td>
                <td>id</td>
                <td>Nombre</td>
                <td>RFC</td>
                <td>CURP</td>
                <td>NSS</td>
                <td>Fecha de ingreso</td>
                <td>Fecha de baja</td>
                <td>Puesto</td>
                <td>Departamento</td>
                <td>Salario diario</td>
                <td>Salario diario integrado</td>
                <td>Dirección</td>
                <td>Tipo de empleado</td>
                <td>Correo electronico</td>
                <td>Periodo de pago</td>

            </tr>
            </thead>



            <?php
            include ('../partials/conexion.php');
            @session_start();
            $conn2=custom($_SESSION['selectbdR']);
            $sql="SELECT * from empleados";
            $result=mysqli_query($conn2, $sql);
            while($ver=mysqli_fetch_row($result)){
                $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7]."||".$ver[8]."||".$ver[9]."||".$ver[10]."||".$ver[11]."||".$ver[12]."||".$ver[13]."||".$ver[14];

                ?>
                <tr>
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#Editar" onclick="agregaform('<?php echo $datos ?>')" ><span></span></button>
                    </td>
                    <td>
                        <button class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal" data-target="#Eliminar" onclick="agregaforme('<?php echo $datos ?>')"></button>
                    </td>
                    <td><?php   echo $ver[0]?></td>
                    <td><?php   echo $ver[1]?></td>
                    <td><?php   echo $ver[2]?></td>
                    <td><?php   echo $ver[3]?></td>
                    <td><?php   echo $ver[4]?></td>
                    <td><?php   echo $ver[5]?></td>
                    <td><?php   echo $ver[6]?></td>
                    <td><?php   echo $ver[7]?></td>
                    <td><?php   echo $ver[8]?></td>
                    <td><?php   echo $ver[9]?></td>
                    <td><?php   echo $ver[10]?></td>
                    <td><?php   echo $ver[11]?></td>
                    <td><?php   echo $ver[12]?></td>
                    <td><?php   echo $ver[13]?></td>
                    <td><?php   echo $ver[14]?></td>




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
