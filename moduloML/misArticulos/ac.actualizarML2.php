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



$objArticulo= new Articulo();
$verArticulo=$objArticulo->verArticuloBM($_POST['idART'],$_SESSION['empresa']);
$datoML2= $meli->get('/items/'.$verArticulo['idML']);
$datoML=json_decode(json_encode($datoML2), true);
$encabezado= Configuracion::verConfigu();
// probar($datoML);

if (!$verArticulo) {
	header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_POST['idART'].'&alerta=art-error');
}
if ($verArticulo['title']!=$datoML['json']['title']) {
	$titulo = array('title' => $verArticulo['title'], );
	$meli->put('/items/'.$verArticulo['idML'], $titulo, $params);
}
if ($verArticulo['price']!=$datoML['json']['price']) {
	$precio = array('price' => $verArticulo['price'], );
	$comida=$meli->put('/items/'.$verArticulo['idML'], $precio, $params);
	// echo "precio";
	// probar($comida);
}
if ($verArticulo['available_quantity']!=$datoML['json']['available_quantity']) {
	$stock = array('available_quantity' => $verArticulo['available_quantity'], );
	$meli->put('/items/'.$verArticulo['idML'], $stock, $params);
	if ($verArticulo['available_quantity']==0) {
		$pausar=$objArticulo->cambiarEstado($_POST['idART'],$verArticulo['idML'],3,$_SESSION['empresa']);
	}
}
if ($verArticulo['listing_type_id']!=$datoML['json']['listing_type_id']) {
	$listingType = array('listing_type_id' => $verArticulo['listing_type_id'], );
	$meli->put('/items/'.$verArticulo['idML'], $listingType, $params);
}
if ($verArticulo['video_id']!=$datoML['json']['video_id']) {
	$listingType = array('video_id' => $verArticulo['video_id'], );
	$meli->put('/items/'.$verArticulo['idML'], $listingType, $params);
}
if ($verArticulo['warranty']!=$datoML['json']['warranty']) {
	$garantia = array('warranty' => $verArticulo['warranty'], );
	$meli->put('/items/'.$verArticulo['idML'], $garantia, $params);
}
			$descrip = array('plain_text' => $encabezado['header'].$verArticulo['description'].$encabezado['footer']);

// if (file_exists('../modulo/variaciones/A'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json')) {
// 	$archivoAnt = file_get_contents('../modulo/variaciones/A'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json');
// 	$datoAtr= json_decode($archivoAnt);
// 	$atributes['attributes']= $datoAtr;

// }
// if (file_exists('../modulo/variaciones/B'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json')) {
// 	$archivoAntV = file_get_contents('../modulo/variaciones/B'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json');
// 	$datoAtrV= json_decode($archivoAntV);
// 	$atributes['variations']= $datoAtrV;

// }

	// $descrip = array('text' => html_entity_decode($verArticulo['description']), );
	$acText= $meli->put('/items/'.$verArticulo['idML'].'/description', $descrip, $params);



header('Location: ../../ML-misArticulos.php?s=verArticuloML&alerta=ac&id='.$_POST['idART']);
	// echo "<pre>".json_encode($editar)."</pre>";


?>


