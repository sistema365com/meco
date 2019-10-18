<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../misArticulos/class.Articulo.php';
include '../misArticulos/class.Presta.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';


$presta= Configuracion::verConfigu();
if ($presta['presta']==1) {
	$objArticulo= new Presta();
}
else {
	$objArticulo= new Articulo();
}



$elegidos= $_POST['elegidos'];
for ($i=0; $i < count($elegidos); $i++) { 
	$verArticuloBD[]= unserialize($elegidos[$i]);
}

if ($_SESSION['empresa']==8) {
	$editando= $objArticulo->actualizarArtBMARCO($verArticuloBD,$_POST['campos'],$_SESSION['empresa']);
}
else{
	$editando= $objArticulo->actualizarArtBM($verArticuloBD,$_POST['campos'],$_SESSION['empresa']);
}

if ($editando>0) {
	header('Location: ../../ML-sincronizado.php?s=mb-meli&alerta=acM&buscar=ok&d='.$_POST['d'].'&h='.$_POST['h'].'&mod='.$editando);
}
else {
	header('Location: ../../ML-sincronizado.php?s=mb-meli&alerta=error&buscar=ok&d='.$_POST['d'].'&h='.$_POST['h']);
}


?>


