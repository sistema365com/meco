<?php 
session_start();

require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../../class/Articulo.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';
include '../chonML.php';

$contenidoNota= $_POST['text'].' [Escrito por: '.$_SESSION['nombre'].']';

if ($_POST['add']==1) {
	$body = array('note' => $contenidoNota, );
	$params = array('access_token' => $_SESSION['access_token'], );
	$guardarNota= $meli->post('/orders/'.$_POST['order_id'].'/notes',$body,$params);
	header('Location: ../../ML-ordenes.php?s=verorden&alerta=creado&id='.$_POST['order_id']);
}

if (isset($_GET['delete'])) {
	$params = array('access_token' => $_SESSION['access_token'], );
	$guardarNota= $meli->delete('/orders/'.$_GET['order_id'].'/notes/'.$_GET['delete'],$params);
	header('Location: ../../ML-ordenes.php?s=verorden&alerta=borrar&id='.$_GET['order_id']);
}



 ?>