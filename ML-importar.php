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



$titulo= 'Importación';
$scriptFooter= false;
$siteML= Configuracion::verConfigu();

include $templates.'/header.php';


include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'unico':
		include 'moduloML/importar/unico.php';
		break;
	case 'listar':
		include 'moduloML/importar/importar.php';
		break;
	
	default:
		include 'moduloML/importar/importar.php';
		break;
}



 ?>



 <script type="text/javascript">
 		document.getElementById('iconoHeader').className='fa fa-upload';
 </script>




<?php 

include $templates.'/footer.php';


 ?>