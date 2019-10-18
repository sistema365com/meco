<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.Articulo.php';

$objBaseMeli= new Articulo();
$siteML= Configuracion::verConfigu();

$cargarArticulo= $objBaseMeli->altaBM($_SESSION['empresa'],$siteML['siteML'],$siteML['presta']);

if ($cargarArticulo) {
	header('Location: ../../ML-misArticulos.php?s=verArticuloPropio&t=PRESTA&id='.$_POST['idART'].'&alerta=art-cargado');
}
elseif (!$cargarArticulo) {
	header('Location: ../../ML-misArticulos.php?s=verArticuloPropio&t=PRESTA&id='.$_POST['idART'].'&alerta=art-error');
}

 ?>


