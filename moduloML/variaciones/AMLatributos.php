<?php 
session_start();
require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../chonML.php';
include 'class.variaciones.php';
include '../../includes/funciones.php';

$params = array('access_token' => $_SESSION['access_token']);

$idML= $_POST['idML'];
$objVariaciones= new Variaciones();
$verAtributoCreado= $objVariaciones->verAtributos($_POST['idART']);

if ($verAtributoCreado) {
	$detallesART['attributes']= $verAtributoCreado;
}
// variaciones
// if ($verVariacionCreado) {
// 	$detallesART['variations']= $verVariacionCreado;
// }



$editar= $meli->put('/items/'.$idML, $detallesART, $params);

if ($editar['httpCode']==200) {
	echo "Atributos Actualizados en Mercadolibre Correctamente";
}
else {
	echo "Error al actualizar atributos";
}




?>
