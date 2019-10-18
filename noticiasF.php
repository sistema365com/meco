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
// include 'modulo/noticiasFront/class.noticiasF.php';



$titulo= 'Novedades';
$scriptFooter= false;

include $templates.'/header.php';



switch ($_GET['s']) {
	case 'listar':
		include 'modulo/noticiasFront/listarNoticias.php';
		break;
	case 'ver':
		include 'modulo/noticiasFront/ver.php';
		break;	
	default:
		include 'modulo/noticiasFront/listarNoticias.php';
		break;
}



 ?>







<?php 

include $templates.'/footer.php';


 ?>