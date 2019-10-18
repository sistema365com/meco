<?php 
session_start();

require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../../class/Articulo.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';
include '../chonML.php';
include '../informes/class.informes.php';


// echo "ok";


$params = array(
	'access_token' => $_SESSION['access_token'],
	);

$body = array(
	'question_id' => $_POST['id'], 
	'text' => $_POST['saludoInicial'].$_POST['text'].$_POST['firma'], 
	);

$enviaMensaje= $meli->post('/answers',$body,$params);
$enviaMensajeOK=json_decode(json_encode($enviaMensaje), true);

if ($enviaMensajeOK['httpCode']=='200') {
	$objInformes= new Informes();
	$guardarInfo= $objInformes->guardarRespuesta($_SESSION['empresa'],$_SESSION['usuario_logueado'],$_POST['idML'],$_POST['articulo'],$_POST['id'],$_POST['text'],$_POST['fechaRealizada']);
	echo "ok";
}
else {
	echo "error";
}


 ?>