<?php

$usuario=$_POST['usuario'];
$pass=$_POST['pwd'];
$tipo=$_POST['tipo'];
$nombre=$_POST['us_nom'];
$id_tipo=0;
$errores=1;


switch ($tipo) {
    case 'ROOT':
        $id_tipo=1;
        $errores=0;
        break;
    case 'Administrador':
        $id_tipo=2;
        $errores=0;
        break;
    case 'Cliente':
        $id_tipo=3;
        $errores=0;
        break;
};

include ('conexion.php');



$sql = "INSERT INTO usuarios (id,usuario,nombre, password,id_tipo,estado) VALUES ('', '$usuario', '$nombre', MD5('$pass'),'$id_tipo','Activo')";
 mysqli_query($conn, $sql); 
 include ('cerrar_conexion.php');




if($errores===0){
    echo json_encode('los datos ingresados son '.$usuario.' '.$password.' '.$id_tipo.' '.$tipo);
}else{
    
    echo json_encode('error');
}




?>