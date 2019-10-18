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
include 'moduloML/ordenes/class.ordenes.php';
include 'moduloML/informes/class.informes.php';

$mesesDelAno = array(
	'Ini', 
	'Enero', 
	'Febrero', 
	'Marzo', 
	'Abril', 
	'Mayo', 
	'Junio', 
	'Julio', 
	'Agosto', 
	'Septiembre', 
	'Octubre', 
	'Noviembre', 
	'Diciembre', 
	);

$titulo= 'Informes';
$scriptFooter= false;
$siteML= Configuracion::verConfigu();

include $templates.'/header.php';

include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'CrearOrdenesMensual':
		include 'moduloML/informes/CrearOrdenesMensual.php';
		break;
	case 'crearVisitasMensual':
		include 'moduloML/informes/crearVisitasMensual.php';
		break;
	case 'panelInformes':
		include 'moduloML/informes/panelInformes.php';
		$Finformes=true;
		break;
	
	default:
		include 'moduloML/informes/'.$_GET['s'].'.php';
		break;
}



 ?>


 <script type="text/javascript">
 		document.getElementById('iconoHeader').className='fa fa-line-chart';
 </script>





<?php 

include $templates.'/footer.php';


 ?>