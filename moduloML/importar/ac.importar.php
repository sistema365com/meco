<?php 
session_start();


require '../php-sdk-master/Meli/meli.php';
// Create our Application instance (replace this with your appId and secret).
$meli = new Meli($_SESSION['ID'],$_SESSION['KEY'],$_SESSION['access_token'], $_SESSION['refresh_token']);

include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../misArticulos/class.Articulo.php';
include '../misArticulos/class.Presta.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';



$objArticulo= new Articulo();
$objPresta= new Presta();
$siteML= configuracion::verConfigu();

$nada= unserialize($_POST['array']);
$pipi=json_decode(json_encode($nada), true);
$desc2= $meli->get('/items/'.$pipi['id'].'/descriptions');
$desc=json_decode(json_encode($desc2['body']), true);
$texto= str_replace('"', "''", $desc[0]['text']);

$verArticuloPropio= $objArticulo->verArticuloBM($_POST['articulo'],$_SESSION['empresa']);

if ($siteML['presta']==1) {
	$articuloPresta= $objPresta->verArticuloBD($_POST['articulo']);
	$campoNumero= $objPresta->getIdART();
}
else {
	$articuloPresta= $objArticulo->verArticuloBD($_POST['articulo']);
	$campoNumero= $objArticulo->getIdART();
}


if ($verArticuloPropio['idART']==$_POST['articulo']) {
	echo "Error1";
	exit();
}
if ($articuloPresta[$campoNumero]!=$_POST['articulo']) {
	echo "Error2";
	exit();
}
else{

$importar= $objArticulo->importandoProducto($_POST['articulo'],$pipi,$desc[0]['text'],$_SESSION['empresa']);


	if ($importar) {
		echo "GUARDADO";
	}
	else {
		echo "Error";
	}

}

 ?>