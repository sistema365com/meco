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


// solo para miguel manzo
// cuando se sume arco revisar que mando a clavebuscada
      if ($_SESSION['empresa']==9 || $_SESSION['empresa']==11 || $_SESSION['empresa']==20) {
        foreach ($listarStock as $key) {
            if ($key['PRECIO']>549 && $key['PRECIO']<2000) {
              $key['PRECIO']=ceil($key['PRECIO']+50);
            }
            else {
              $key['PRECIO']=ceil($key['PRECIO']);
            }
            $listarStock2[]= $key;
        }
      }
      else {
          $listarStock2=$listarStock;
      }
// solo para miguel manzo



for ($i=0; $i < count($listarItemsML); $i++) { 
    $claveBuscada= buscarEnArray($listarStock2,$listarItemsML[$i]['NUMERO'],'NUMERO');
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

$campos = array('stock','precio','tit');

$editando= $objArticulo->actualizarArtBM($cambiosLocos,$campos,$_SESSION['empresa']);

echo "todo ok";

session_destroy();

 ?>