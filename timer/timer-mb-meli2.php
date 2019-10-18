<?php 
session_start();
$_SESSION['empresa']= $_GET['empresa'];
// require '../php-sdk-master/Meli/meli.php';
include '../class/Conexion.php';
include '../moduloML/misArticulos/class.Articulo.php';
include '../moduloML/misArticulos/class.fidelty.php';
include '../moduloML/misArticulos/class.Presta.php';
include '../class/Configuracion.php';
include '../includes/funciones.php';

$presta= Configuracion::verConfigu();

$objBM= new Articulo();
if ($presta['presta']==1) {
	$objArticulo= new Presta();
}
if ($presta['presta']==2) {
    $objArticulo= new Fidelity();
}

$listarItemsML= $objBM->listarArticulosBMC($_SESSION['empresa'],0,20000);
foreach ($listarItemsML as $key) {
	$nuevoArray[]= $key['NUMERO'];
}
$listarStock= $objArticulo->listarArticulosBDC($nuevoArray);
for ($i=0; $i < count($listarItemsML); $i++) { 
    $claveBuscada= buscarEnArray($listarStock,$listarItemsML[$i]['NUMERO'],'NUMERO');
    if ($claveBuscada['NUMERO']!=$listarItemsML[$i]['NUMERO']) {
    	$noSeEncuentra= 'Articulo no disponible en presta';
    	$stock0 = array(
    		'NUMERO' => $listarItemsML[$i]['NUMERO'], 
    		'DESCRIP' => $listarItemsML[$i]['DESCRIP'], 
    		'STOCK' => 0, 
    		'PRECIO' => $listarItemsML[$i]['PRECIO'], 
    		);
    	$cambiosLocos[]= $stock0;
    }
    else {
    	$cambiosLocos[]= $claveBuscada;
    }
}

$campos = array('stock','precio');

$editando= $objArticulo->actualizarArtBM($cambiosLocos,$campos,$_SESSION['empresa']);

echo "todo ok";

session_destroy();

 ?>