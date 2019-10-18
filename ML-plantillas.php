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
include 'moduloML/plantillas/class.plantilla.php';


$titulo= 'Plantillas';
$scriptFooter= false;
$siteML= Configuracion::verConfigu();

include $templates.'/header.php';

include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'respuestasPre':
		include 'moduloML/plantillas/respuestasPre.php';
		break;
	case 'mensajesPre':
		include 'moduloML/plantillas/mensajesPre.php';
		break;
	case 'otrasPlantillas':
		include 'moduloML/plantillas/otrasPlantillas.php';
		$Fswitch= true;
		break;
	
	default:
		include 'ordenes/index.php';
		break;
}



 ?>



 <script type="text/javascript">
        document.getElementById('iconoHeader').className='fa fa-gears';
 </script>




<?php 

include $templates.'/footer.php';


 ?>