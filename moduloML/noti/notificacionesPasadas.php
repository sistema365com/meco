<?php 
include '../class/Conexion.php';
include '../class/Configuracion.php';
include '../includes/configuraciones.php';
include '../includes/funciones.php';
include 'class.notificaciones.php';


$objNotificaciones= new Notificaciones();



// $url= 'https://api.mercadolibre.com/myfeeds?app_id=4282773055253235';
// $json = file_get_contents($url);
// $array = json_decode($json,true);

$archivoAnt = file_get_contents('../form/notifica2.json');
$array = json_decode('['.$archivoAnt.']',true);

// echo "<pre>";
// print_r($array['messages']);
// echo "</pre>";

for ($i=0; $i < count($array); $i++) { 
	$verNoti= $objNotificaciones->verNoti($array[$i]['user_id'].'$$'.$array[$i]['resource']);
	$verNoti2= $objNotificaciones->verNoti2($array[$i]['resource']);
	if (!$verNoti && !$verNoti2) {
		$contador ++;
		$guardar= $objNotificaciones->altaNoti($array[$i],$array[$i]['user_id'].'$$'.$array[$i]['resource']);
	}
}

echo $contador;

 ?>