<?php 
session_start();


require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../../class/Articulo.php';
include '../includes/configuraciones.php';
include '../includes/funciones.php';
include '../chonML.php';
include '../informes/class.informes.php';



$body['from'] = array(
	'user_id' => $_POST['from'], 
	);
$body['to'] = array(
	array(
	'user_id' => $_POST['to'], 
	'resource' => 'orders', 
	'resource_id' => $_POST['resource_id'], 
	'site_id' => $_POST['site_id'], 
	)
	);

$body['text'] = array('plain' => $_POST['text'], );


$params = array(
	'access_token' => $_SESSION['access_token'],
	);
$enviaMensaje= $meli->post('/messages',$body,$params);
$enviaMensajeOK=json_decode(json_encode($enviaMensaje), true);

if ($enviaMensajeOK['httpCode']=='200') {
	$objInformes= new Informes();
	$guardarInfo= $objInformes->guardarMensaje($_SESSION['empresa'],$_SESSION['usuario_logueado'],$_POST['idML'],$_POST['resource_id'],$_POST['id'],$_POST['text']);
	header('Location: ../../ML-ordenes.php?s=verorden&alerta=creado&id='.$_POST['resource_id']);
}
else {
	header('Location: ../../ML-ordenes.php?s=verorden&alerta=error&id='.$_POST['resource_id']);
}


 ?>