<?php
//UPDATE `empleados` SET `numero_empleado` = '20210000' WHERE `empleados`.`id_empleado` = 1
//Comprobar si las variables estan vacias

$Nombre= !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$RFCE= !empty($_POST['rfc']) ? $_POST['rfc'] : '';
$CURP= !empty($_POST['curp']) ? $_POST['curp'] : '';
$NSS= !empty($_POST['nss']) ? $_POST['nss'] : '';
$RFecha= !empty($_POST['fechai']) ? $_POST['fechai'] : '';
$Puesto= !empty($_POST['puesto']) ? $_POST['puesto'] : '';
$Departamento= !empty($_POST['departamento']) ? $_POST['departamento'] : '';
$SalarioD= !empty($_POST['salario']) ? $_POST['salario'] : '';
$SalarioDI= !empty($_POST['salariodi']) ? $_POST['salariodi'] : '';
$Direccion= !empty($_POST['direccion']) ? $_POST['direccion'] : '';
$TipoEmpleado= !empty($_POST['tipoemp']) ? $_POST['tipoemp'] : '';
$CorreoElec= !empty($_POST['email']) ? $_POST['email'] : '';
$PeriodoPago = !empty($_POST['periodo']) ? $_POST['periodo'] : '';
//Evitar un acceso directo por URL o un campo vacio enviado por un inspector de codigo
if(empty($Nombre) || empty($RFCE) || empty($CURP) || empty($Direccion) || empty($CorreoElec) || empty($TipoEmpleado)) {
    die('Direct access not permitted');
}

//Conversion de la fecha a formato compatible con MySQL
$parts = explode('/', $RFecha);
$Fecha  = "$parts[2]-$parts[1]-$parts[0]";


//inicializar variables para acceder a la base de datos
$config = require __DIR__ . '/../config/app.php';
$host = $config['database']['host'];
$db_username = $config['database']['username'];
$db_password = $config['database']['password'];
$sql_datos = null;

@session_start();
$baseActual=$_SESSION['selectbdR'];

$conn = mysqli_connect($host, $db_username, $db_password, $baseActual);

$sql_datos="INSERT INTO `empleados` (`id_empleado`, `nombre_empleado`, `rfc_empleado`, `curp_empleado`, `nss_empleado`, `fecha_ingr`, `fecha_baja`, `puesto`, `departamento`, `salario_diario`, `salario_inte`, `direccion_empleado`, `tipo_empleado`, `correo_empleado`, periodo_pago) VALUES (
 '',
 '$Nombre',
 '$RFCE',
 '$CURP',
 '$NSS',
 '$Fecha',
 '',
 '$Puesto',
 '$Departamento',
 '$SalarioD',
 '$SalarioDI',
 '$Direccion',
 '$TipoEmpleado',
 '$CorreoElec',
 '$PeriodoPago')";



if ($conn->query($sql_datos) === TRUE) {
    /* echo json_encode("Base de datos creada");*/
    $errores=0;

} else {
    echo json_encode("Error al crear la base de datos: " . $conn->error);
    $conn->close();
    die();
}
$conn->close();

if($errores===0){
    echo json_encode('los datos ingresados son '.$Nombre.' '.$NSS.' '.$baseActual);

}else{
    echo json_encode('error');
}


