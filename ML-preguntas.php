<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
require 'moduloML/php-sdk-master/Meli/meli.php';
include 'class/Autocarga.php';
include 'includes/configuraciones.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'includes/funciones.php';
include 'moduloML/chonML.php';
include 'moduloML/plantillas/class.plantilla.php';
include 'moduloML/informes/class.informes.php';

$timerRefre=true;

$titulo= 'Preguntas (<b id="tituloSeccion"></b>)';
$scriptFooter= false;
$siteML= Configuracion::verConfigu();




include $templates.'/header.php';

if ($_GET['leido']=='1') {
	$marcarLeidas= $objNotificaciones->preguntaLeida($_SESSION['empresa']);
}


include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'listarPreguntas':
		include 'moduloML/preguntas/listarPreguntas.php';
		break;
	
	default:
		include 'moduloML/preguntas/index.php';
		break;
}



 ?>


 <script type="text/javascript">
 		document.getElementById('iconoHeader').className='fa fa-question';
 </script>





<?php 

include $templates.'/footer.php';


 ?>