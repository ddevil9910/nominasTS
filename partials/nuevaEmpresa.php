<?php

$config = require __DIR__ . '/../config/app.php';
$host = $config['database']['host'];
$db_username = $config['database']['username'];
$db_password = $config['database']['password'];



$RazonSocial=$_POST['razon'];
$RFC=$_POST['rfc'];
$CURP=$_POST['curp'];
$Direccion=$_POST['direccion'];
$Giro=$_POST['giro'];
$NombreRep=$_POST['representante'];
$RFCRep=$_POST['rfcr'];
$CorreoElec=$_POST['email'];

/*pendiente: variables de sesion*/
$id_admin=1;//////////////////////
/*pendiente: variables de sesion*/

$errores=1;
$length = 10;
$nombreDB=$RFC.(substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length));


$conn2 = new mysqli($host, $db_username, $db_password);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $nombreDB";
$sql_tabla="CREATE TABLE `datos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rfc` varchar(12) NOT NULL,
  `curp` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `giro` varchar(50) NOT NULL,
  `representante` varchar(100) NOT NULL,
  `rfc_representante` varchar(15) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `fecha` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$sql_datos="INSERT INTO datos (id,nombre, rfc,curp,direccion,giro,representante,rfc_representante,correo) VALUES (
                                                                                                               '',
                                                                                                               '$RazonSocial',
                                                                                                               '$RFC',
                                                                                                               '$CURP',
                                                                                                               '$Direccion',
                                                                                                               '$Giro',
                                                                                                               '$NombreRep',
                                                                                                               '$RFCRep',
                                                                                                               '$CorreoElec')";
if ($conn2->query($sql) === TRUE) {
   /* echo json_encode("Base de datos creada");*/
    $errores=0;
    $conn2->query("USE $nombreDB");
    $conn2->query($sql_tabla);
    $conn2->query($sql_datos);
} else {
    echo json_encode("Error al crear la base de datos: " . $conn2->error);
}
$conn2->close();


/*guardar datos en el directorio*/
include ('conexion.php');
$sql2 = "INSERT INTO directorio (id_registro,nombre_empresa, id_admin,bd_empresa) VALUES ('', '$RazonSocial', '$id_admin ','$nombreDB')";
mysqli_query($conn, $sql2);
include ('cerrar_conexion.php');
if($errores===0){
    echo json_encode('los datos ingresados son '.$RazonSocial.' '.$id_admin.' '.$nombreDB);

}else{
    echo json_encode('error');
}

