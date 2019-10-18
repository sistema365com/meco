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
include 'moduloML/variaciones/class.variaciones.php';
include 'includes/configuraciones.php';
include 'includes/funciones.php';
include 'moduloML/chonML.php';

switch ($_GET['s']) {
	case 'prepararMasivamente':
		$tituloAdd= ' <div class="btn-group">
                      <button type="button" class="btn btn-warning">Mostrar</button>
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ML-misArticulos.php?s=prepararMasivamente&d='.$_GET['d'].'&h=20"> 20</a></li>
                        <li><a href="ML-misArticulos.php?s=prepararMasivamente&d='.$_GET['d'].'&h=50"> 50</a></li>
                        <li><a href="ML-misArticulos.php?s=prepararMasivamente&d='.$_GET['d'].'&h=100"> 100</a></li>
                      </ul>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success">Ordenar</button>
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ML-misArticulos.php?s=prepararMasivamente&d='.$_GET['d'].'&h='.$_GET['h'].'&orden=ASC">Nº Artículo Ascendente</a></li>
                        <li><a href="ML-misArticulos.php?s=prepararMasivamente&d='.$_GET['d'].'&h='.$_GET['h'].'&orden=DESC">Nº Artículo Descendente</a></li>
                      </ul>
                    </div>';
		break;
	case 'itemsPendientes':
		$tituloAdd= ' <small>Items Pendientes de publicación</small>';
		break;	
	case 'listarItems':
		$tituloAdd= ' <small>Articulos preparados en MercadoConnecting</small>';
		break;	
	case 'verArticuloML':
		$tituloAdd= ' <div class="btn-group">
                      <button type="button" class="btn btn-success">Acciones</button>
                      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ML-misArticulos.php?s=publicarItem&id='.$_GET['id'].'"><i class="fa fa-upload"></i> Publicar en ML</a></li>
                        <li class="divider"></li>
                        <li><a href="moduloML/misArticulos/ac.cambiarEstado.php?e=activar&id='.$_GET['id'].'"><i class="fa fa-play"></i> Re activar</a></li>
                        <li><a href="moduloML/misArticulos/ac.cambiarEstado.php?e=pausa&id='.$_GET['id'].'"><i class="fa fa-pause"></i> Pausar</a></li>
                        <li><a href="moduloML/misArticulos/ac.cambiarEstado.php?e=cerrar&id='.$_GET['id'].'"><i class="fa fa-stop"></i> Finalizar Publicacion</a></li>
                        <li><a href="moduloML/misArticulos/ac.cambiarEstado.php?e=eliminar&id='.$_GET['id'].'"><i class="fa fa-trash"></i> Eliminar Publicacion</a></li>
                      </ul>
                    </div>';
		break;	
	case 'verTicket':
		$tituloAdd= ' / Ticket #'.$_GET['id'];
		break;	
	case 'conStock':
		$tituloAdd= ' / Articulos con Stock Pausados en ML';
		break;	
	case 'sinStock':
		$tituloAdd= ' / Articulos Sin Stock';
		break;	
}



$titulo= 'Mis Articulos'.$tituloAdd;
$scriptFooter= false;

include $templates.'/header.php';

include 'moduloML/alertas.php';


switch ($_GET['s']) {
	case 'prepararMasivamente':
		include 'moduloML/misArticulos/prepararMasivamente.php';
		$Fswitch= true;
		break;
	case 'itemsPendientes':
		include 'moduloML/misArticulos/itemsPendientes.php';
		$Fswitch= true;
		break;
	case 'verArticuloPropio':
		include 'moduloML/misArticulos/verArticuloPropio.php';
		break;
	case 'verArticuloML':
		include 'moduloML/misArticulos/verArticuloML.php';
		break;
	case 'publicarItem':
		include 'moduloML/misArticulos/publicarItem.php';
		break;
	case 'publicarMasiva':
		include 'moduloML/misArticulos/publicarMasiva.php';
		$Fswitch= true;
		break;
	case 'listarItems':
		include 'moduloML/misArticulos/listarItems2.php';
		break;
	case 'sinStock':
		include 'moduloML/misArticulos/sinStock.php';
		$Fswitch= true;
		break;
	case 'conStock':
		include 'moduloML/misArticulos/conStock.php';
		$Fswitch= true;
		break;
	default:
		include 'modulo/ayudaF/listarAyuda.php';
		break;
}



 ?>

 <script type="text/javascript">
 		document.getElementById('iconoHeader').className='fa fa-database';
 </script>





<?php 

include $templates.'/footer.php';


 ?>