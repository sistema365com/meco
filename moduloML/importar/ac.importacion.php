<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: ../../index.php");
    }
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
$verArticulo=$objArticulo->verArticuloBM($_POST['idART'],$_SESSION['empresa']);
$siteML= configuracion::verConfigu();

if ($verArticulo['idART']==$_POST['idART']) {
	header('Location: ../../ML-importar.php?s=unico&alerta=impo-existe');
}
else {


$datosArticulo= $meli->get('/items/'.$siteML['siteML'].$_POST['idML']);
$pipi=json_decode(json_encode($datosArticulo), true);
$desc= $meli->get('/items/'.$siteML['siteML'].$_POST['idML'].'/descriptions');



if ($datosArticulo['body']->title!='') {
	$importar= $objArticulo->importar($_POST['idART'],$pipi,$desc['body']['text'],$_SESSION['empresa']);
	if ($importar) {
		header('Location: ../../ML-importar.php?s=unico&alerta=impo-ok');
	}
	else {
		header('Location: ../../ML-importar.php?s=unico&alerta=impo-error2');
	}

}
else {
	header('Location: ../../ML-importar.php?s=unico&alerta=impo-error');
}


}

?>


