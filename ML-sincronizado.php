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
include 'includes/configuraciones.php';
include 'includes/funciones.php';
include 'moduloML/chonML.php';

switch ($_GET['s']) {
	case 'mb-meli':
		$tituloAdd= ' <small>Sincronizar mi base con MercadoConnecting</small>';
		break;	
	case 'desc-mb-meli':
		$tituloAdd= ' <small>Sincronizar Descripciones MercadoConnecting</small>';
		break;	
	case 'mc-ml':
		$tituloAdd= ' <small>Sincronizar MercadoConnecting con Mercadolibre</small>';
		break;	
	case 'purgarLista':
		$tituloAdd= ' <small>Purgar Eliminados Presta</small>';
		break;	
	case 'verTicket':
		$tituloAdd= ' / Ticket #'.$_GET['id'];
		break;	
}



$titulo= 'Sincronizado'.$tituloAdd;
$scriptFooter= false;

include $templates.'/header.php';

include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'mb-meli':
		include 'moduloML/sincronizado/mb-meli.php';
		$Fswitch= true;
		break;
	case 'errores':
		include 'moduloML/sincronizado/errores.php';
		break;
	case 'desc-mb-meli':
		include 'moduloML/sincronizado/desc-mb-meli.php';
		$Fswitch= true;
		break;
	case 'mc-ml':
		include 'moduloML/sincronizado/mc-ml.php';
		break;
	case 'purgarLista':
		include 'moduloML/sincronizado/purgarLista.php';
		break;
	default:
		include 'modulo/ayudaF/listarAyuda.php';
		break;
}



 ?>







<?php 

include $templates.'/footer.php';


 ?>