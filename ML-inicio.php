<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
require 'moduloML/php-sdk-master/Meli/meli.php';
include 'class/Autocarga.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'moduloML/misArticulos/class.fidelty.php';
include 'moduloML/informes/class.informes.php';
include 'includes/configuraciones.php';
include 'includes/funciones.php';
include 'moduloML/chonML.php';



$titulo= 'Inicio';
$scriptFooter=false;

$ocultar= 'hidden';


include $templates.'/header.php';



switch ($_GET['s']) {
  case 'mb-meli':
    include 'moduloML/sincronizado/mb-meli.php';
    break;
  default:
    include 'moduloML/inicioPanel.php';
    $FpanelInicio= true;
    break;
}

include $templates.'/footer.php';


 ?>