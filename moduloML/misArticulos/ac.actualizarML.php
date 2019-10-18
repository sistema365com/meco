<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: ../index.php");
    }
require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.Articulo.php';
include '../variaciones/class.variaciones.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';
include '../chonML.php';

	$params = array('access_token' => $_SESSION['access_token']);



$objArticulo= new Articulo();
$objVariaciones= new Variaciones();
$verArticulo=$objArticulo->verArticuloBM($_POST['idART'],$_SESSION['empresa']);
$verVariacion= $objVariaciones->verVariaciones($_POST['idART']);
$datoML2= $meli->get('/items/'.$verArticulo['idML']);
$datoML=json_decode(json_encode($datoML2), true);
$encabezado= Configuracion::verConfigu();
// probar($datoML);
// exit();

// chequeo si hay variacion
if($datoML['body']['variations'][0]['id']!=''){
	for ($i=0; $i < count($datoML['body']['variations']); $i++) { 
		$verVariacion2[] = array(
			'id' => $datoML['body']['variations'][$i]['id'], 
			'available_quantity' => $verArticulo['available_quantity'], 
			'price' => $verArticulo['price'], 
		);
		$objArticulo->agregaVariacion($_POST['idART'],$datoML['body']['variations'][$i]['id']);
	}
	$stock['variations'] = $verVariacion2;
	$editoVariacion=$meli->put('/items/'.$verArticulo['idML'], $stock, $params);
	if ($editoVariacion['httpCode']==200) {
		header('Location: ../../ML-misArticulos.php?s=verArticuloML&alerta=ac&id='.$_POST['idART']);
	}
	else {
		$mensajeError= $editoVariacion['body']['message'];
		echo "<script>alert('Error en variación: ".$mensajeError."'); document.location=('../../ML-misArticulos.php?s=verArticuloML&alerta=error&id=".$_POST['idART']."')</script>";
	}
}
else{
if (!$verArticulo) {
	header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_POST['idART'].'&alerta=art-error');
}
if ($verArticulo['title']!=$datoML['json']['title']) {
	$modificacion['title']=$verArticulo['title'];
	$titulo = array('title' => $verArticulo['title'], );
	// $meli->put('/items/'.$verArticulo['idML'], $titulo, $params);
}
// CANTIDADES y PRECIO
if ($verVariacion) {
	for ($i=0; $i < count($verVariacion); $i++) { 
		$verVariacion2[] = array(
			'id' => $verVariacion[$i]['id'], 
			'available_quantity' => $verVariacion[$i]['available_quantity'], 
			'price' => $verArticulo['price'], 
		);
	}
	$stock['variations'] = $verVariacion2;
	$editoVariacion=$meli->put('/items/'.$verArticulo['idML'], $stock, $params);
}
elseif ($verArticulo['available_quantity']!=$datoML['json']['available_quantity']) {
	$modificacion['available_quantity']=$verArticulo['available_quantity'];
	// $stock = array('available_quantity' => $verArticulo['available_quantity'], );
	// $meli->put('/items/'.$verArticulo['idML'], $stock, $params);
	if ($verArticulo['available_quantity']==0) {
		$pausar=$objArticulo->cambiarEstado($_POST['idART'],$verArticulo['idML'],3,$_SESSION['empresa']);
	}
	if ($verArticulo['price']!=$datoML['json']['price']) {
		$modificacion['price']=$verArticulo['price'];
		$precio = array('price' => $verArticulo['price'], );
	}
}
} //fin del primer if donde chequeo si hay una variacion
// FIN CANTIDADES y PRECIO
if ($verArticulo['listing_type_id']!=$datoML['json']['listing_type_id']) {
	// $modificacion['listing_type_id']=$verArticulo['listing_type_id'];
	$listingType = array('id' => $verArticulo['listing_type_id'], );
	$edit_list=$meli->post('/items/'.$verArticulo['idML'].'/listing_type', $listingType, $params);
}
if ($verArticulo['video_id']!=$datoML['json']['video_id']) {
	$modificacion['video_id']=$verArticulo['video_id'];
	$listingType = array('video_id' => $verArticulo['video_id'], );
	// $meli->put('/items/'.$verArticulo['idML'], $listingType, $params);
}
if ($verArticulo['warranty']!=$datoML['json']['warranty']) {
	$modificacion['warranty']=$verArticulo['warranty'];
	$garantia = array('warranty' => $verArticulo['warranty'], );
	// $meli->put('/items/'.$verArticulo['idML'], $garantia, $params);
}

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
	$resul=$meli->put('/items/'.$verArticulo['idML'], $modificacion, $params);
	$descrip = array('plain_text' => $encabezado['header'].$verArticulo['description'].$encabezado['footer']);
	$acText= $meli->put('/items/'.$verArticulo['idML'].'/description', $descrip, $params);

$resultado=json_decode(json_encode($resul), true);

// echo $verArticulo['idML'];
// probar(json_encode($modificacion));
// probar(json_encode($resultado));
// exit();


if ($resultado['httpCode']==200) {
	header('Location: ../../ML-misArticulos.php?s=verArticuloML&alerta=ac&id='.$_POST['idART']);
}
else {
	$mensajeError= $resultado['body']['message'];
	echo "<script>alert('Mercadolibre nos envia este codigo de Error: ".$mensajeError."'); document.location=('../../ML-misArticulos.php?s=verArticuloML&alerta=error&id=".$_POST['idART']."')</script>";
}

// header('Location: ../../ML-misArticulos.php?s=verArticuloML&alerta=ac&id='.$_POST['idART']);
	// echo "<pre>".json_encode($editar)."</pre>";


?>


