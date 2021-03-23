<?php
@session_start();
$periodo=$_POST['barerraperiodo'];
$dias=0;


if($periodo===''){
	echo json_encode('llena todos los campos');
}else{
	switch ($periodo) {
		case 'Semanal':
			$dias=7;
			break;

			case 'Quincenal':
			$dias=15;
			break;

			case 'Mensual':
			$dias=30;
			break;
	}
	$_SESSION['diasLaboradosR']=$dias;
	$varDef=$_SESSION['diasLaboradosR'];

	echo json_encode('correctisimo'.$dias.'dias '.$varDef);
}


?>