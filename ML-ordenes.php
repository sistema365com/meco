<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
require 'moduloML/php-sdk-master/Meli/meli.php';
include 'class/Autocarga.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'includes/configuraciones.php';
include 'includes/funciones.php';
include 'moduloML/chonML.php';
include 'moduloML/plantillas/class.plantilla.php';
include 'moduloML/ordenes/class.ordenes.php';



$titulo= 'Ordenes';
$scriptFooter= false;
$siteML= Configuracion::verConfigu();

include $templates.'/header.php';

include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'etiqueta':
		include 'moduloML/ordenes/etiqueta.php';
		break;
	case 'etiquetas':
		include 'moduloML/ordenes/etiquetas.php';
		$Fswitch=true;
		break;
	case 'verorden':
		include 'moduloML/ordenes/verOrden.php';
		break;
	case 'verordenM':
		include 'moduloML/ordenes/verOrdenM.php';
		break;
	case 'listarOrdenes':
		include 'moduloML/ordenes/listarOrdenes.php';
		break;
	case 'ordenesPendientes':
		include 'moduloML/ordenes/ordenesPendientes.php';
		break;
	case 'calificarM':
		include 'moduloML/ordenes/calificarM.php';
		break;
	case 'ordenesMensual':
		include 'moduloML/ordenes/ordenesMensual.php';
		break;
	
	default:
		include 'moduloML/ordenes/'.$_GET['s'].'.php';
		break;
}



 ?>

 <script type="text/javascript">
 		document.getElementById('iconoHeader').className='fa fa-shopping-cart';
 </script>






<?php 

include $templates.'/footer.php';


 ?>