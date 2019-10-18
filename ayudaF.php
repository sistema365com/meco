<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
include 'class/Autocarga.php';
include 'includes/configuraciones.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'includes/funciones.php';
include 'modulo/ayudaF/class.ayuda.php';

switch ($_GET['s']) {
	case 'listar':
		$tituloAdd= ' / Tus tickets';
		break;
	case 'ver':
		$tituloAdd= ' / Crear Ticket';
		break;	
	case 'verTicket':
		$tituloAdd= ' / Ticket #'.$_GET['id'];
		break;	
}



$titulo= 'Ayuda'.$tituloAdd;
$scriptFooter= true;

include $templates.'/header.php';

include 'includes/alertas.php';


switch ($_GET['s']) {
	case 'listar':
		include 'modulo/ayudaF/listarAyuda.php';
		break;
	case 'ver':
		include 'modulo/ayudaF/ver.php';
		break;	
	case 'verTicket':
		include 'modulo/ayudaF/verTicket.php';
		break;	
	default:
		include 'modulo/ayudaF/listarAyuda.php';
		break;
}



 ?>



 <script type="text/javascript">
        document.getElementById('iconoHeader').className='fa fa-ticket';
 </script>




<?php 

include $templates.'/footer.php';


 ?>