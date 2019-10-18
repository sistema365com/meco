<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../misArticulos/class.Articulo.php';
include '../misArticulos/class.Presta.php';
include '../misArticulos/class.fidelty.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';


$presta= Configuracion::verConfigu();
if ($presta['presta']==0) {
    $objArticulo= new Articulo();
}
if ($presta['presta']==1) {
    $objArticulo= new Presta();
}
if ($presta['presta']==2) {
    $objArticulo= new Fidelity();
}

$campos = array('texto','nada');

$verArticuloBD= $objArticulo->listarArticulosBDC($_POST['elegidos']);



if ($_SESSION['empresa']==8) {
    $editando= $objArticulo->actualizarArtDescripcionBMARCO($verArticuloBD,$campos,$_SESSION['empresa']);
}
else{
    $editando= $objArticulo->actualizarArtDescripcionBM($verArticuloBD,$campos,$_SESSION['empresa']);
}

if ($editando>0) {
	header('Location: ../../ML-sincronizado.php?s=desc-mb-meli&alerta=acM&buscar=ok&d='.$_POST['d'].'&h='.$_POST['h'].'&mod='.$editando);
}
else {
	header('Location: ../../ML-sincronizado.php?s=desc-mb-meli&alerta=error&buscar=ok&d='.$_POST['d'].'&h='.$_POST['h']);
}


?>


