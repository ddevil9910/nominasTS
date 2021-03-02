<?php

$servername = "localhost";
$database = "nominas";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

function custom($bd_alt)
{
    $config = require __DIR__ . '/../config/app.php';
    $servername = $config['database']['host'];
    $username = $config['database']['username'];
    $password = $config['database']['password'];
    $sql_datos = null;
return $conn2 = mysqli_connect($servername, $username, $password, $bd_alt);
}


?>