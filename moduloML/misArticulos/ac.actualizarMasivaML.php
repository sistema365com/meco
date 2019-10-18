<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: ../index.php");
    }
require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.Articulo.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';
include '../chonML.php';



$params = array('access_token' => $_SESSION['access_token']);


$elegidos= $_POST['elegidos'];
for ($i=0; $i < count($elegidos); $i++) {


$objArticulo= new Articulo();
$plantilla= Configuracion::verConfigu();
$h= $plantilla['header'];
$f= $plantilla['footer'];
$verArticulo=unserialize($elegidos[$i]);
// $verArticulo=$objArticulo->verArticuloBM($elegidos[$i],$_SESSION['empresa']);
$datoMLM= $meli->get('/items/'.$verArticulo['idML']);
$datoML=json_decode(json_encode($datoMLM), true);

if ($verArticulo['title']!=$datoML['body']['title']) {
	$titulo = array('title' => $verArticulo['title'], );
	$meli->put('/items/'.$verArticulo['idML'], $titulo, $params);
}
if ($verArticulo['price']!=$datoML['body']['price']) {
	$precio = array('price' => $verArticulo['price'], );
	$meli->put('/items/'.$verArticulo['idML'], $precio, $params);
}
if ($verArticulo['available_quantity']!=$datoML['body']['available_quantity']) {
	$stock = array('available_quantity' => $verArticulo['available_quantity'], );
	$meli->put('/items/'.$verArticulo['idML'], $stock, $params);
}
if ($verArticulo['listing_type_id']!=$datoML['body']['listing_type_id']) {
	$listingType = array('listing_type_id' => $verArticulo['listing_type_id'], );
	$meli->put('/items/'.$verArticulo['idML'], $listingType, $params);
}
if ($verArticulo['video_id']!=$datoML['body']['video_id']) {
	$listingType = array('video_id' => $verArticulo['video_id'], );
	$meli->put('/items/'.$verArticulo['idML'], $listingType, $params);
}
if ($verArticulo['warranty']!=$datoML['body']['warranty']) {
	$garantia = array('warranty' => $verArticulo['warranty'], );
	$meli->put('/items/'.$verArticulo['idML'], $garantia, $params);
}

	// $descrip = array('text' => html_entity_decode($verArticulo['description']), );
	// 		$descrip = array('plain_text' => $h.$verArticulo['description'].$f);
	// $ac=$meli->put('/items/'.$verArticulo['idML'].'/description', $descrip, $params);

}

header('Location: ../../ML-misArticulos.php?s=listarItems&alerta=ac');
	// echo "<pre>".json_encode($editar)."</pre>";


?>


