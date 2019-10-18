<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.Articulo.php';
include '../variaciones/class.variaciones.php';
include '../../includes/funciones.php';

$objBaseMeli= new Articulo();
$objVariaciones= new Variaciones();


$objVariaciones= new Variaciones();
$verVariacion= $objVariaciones->verVariaciones($_POST['idART']);

if ($verVariacion) {
	for ($i=0; $i < count($verVariacion); $i++) { 
		$verVariacion[$i]['available_quantity']= $_POST[$verVariacion[$i]['id'].'_available_quantity'];
	}
	$eliminarVariacion= $objVariaciones->eliminaVariacion($_POST['idART']);
	$guardarVariacion= $objVariaciones->addVariacion($_POST['idART'],$verVariacion);
}


$cargarArticulo= $objBaseMeli->editaBM($_SESSION['empresa']);

if ($cargarArticulo) {
	header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_POST['idART'].'&alerta=art-editado');
}
elseif (!$cargarArticulo) {
	header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_POST['idART'].'&alerta=art-error');
}

 ?>


