<?php

$pass='Adriel2021';
$clave='Adriel2021';

$hpas=password_hash($clave, PASSWORD_DEFAULT);

if(password_verify($pass,$hpas)){
    echo ('paswword valido');
}else{
    echo('error');
}


?>