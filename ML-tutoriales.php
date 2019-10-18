<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
include 'class/Autocarga.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'includes/configuraciones.php';
include 'includes/funciones.php';

switch ($_GET['s']) {
	case 'listar':
		$tituloAdd= ' ';
		break;
	case 'ver':
		$tituloAdd= ' / Crear Ticket';
		break;	
	case 'verTicket':
		$tituloAdd= ' / Ticket #'.$_GET['id'];
		break;	
}



$titulo= 'Tutoriales'.$tituloAdd;
$scriptFooter= true;

include $templates.'/header.php';

include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'listar':
		include 'moduloML/tutoriales/listar.php';
		$Ftutoriales=true;
		break;
	case 'ver':
		include 'moduloML/tutoriales/ver.php';
		$Ftutoriales=true;
		break;	
	case 'verTicket':
		include 'moduloML/tutoriales/verTicket.php';
		$Ftutoriales=true;
		break;	
	default:
		include 'moduloML/tutoriales/listarAyuda.php';
		$Ftutoriales=true;
		break;
}



 ?>

 <script type="text/javascript">
 		document.getElementById('iconoHeader').className='fa fa-question';
 </script>







<?php 

include $templates.'/footer.php';


 ?>