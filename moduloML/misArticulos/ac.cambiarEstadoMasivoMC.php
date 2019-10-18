<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: ../index.php");
    }


require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.Articulo.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';
include '../chonML.php';


	$params = array('access_token' => $_SESSION['access_token']);
	$usuarioML= $meli->get('/users/me',$params);
	$idUserML= $usuarioML['body']->id;
	$nombreML= $usuarioML['body']->first_name;
	$nickML= $usuarioML['body']->nickname;




// testear json
// echo '<pre>'.json_encode($detallesART).'</pre>';

if ($usuarioML) {
// si esta logueado entonces
	// verifico autorizacion
	$autBD= Configuracion::verConfigu();
	if ($autBD['userML']!=$nickML) {
	echo "<script>alert('El usuario con el que se encuentra logueado en mercadolibre no esta habilitado, Contactese con nosotros'); document.location=('../checkAPI.php')</script>";
	}
	else{

$elegidos= $_POST['elegidos'];
for ($i=0; $i < count($elegidos); $i++) { 
$objArticulo= new Articulo();
$verART=unserialize($elegidos[$i]);

// $verART=$objArticulo->verArticuloBM($elegidos[$i],$_SESSION['empresa']);

		if ($_GET['e']=='pausa') {
			$estado = array(
				'status' => "paused", 
				);
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->cambiarEstado($verART['idART'],$verART['idML'],3,$_SESSION['empresa']);
			}
			if (!$pausar['body']['permalink']) {
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
		if ($_GET['e']=='activar') {
			$estado = array(
				'status' => "active",
				);
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->cambiarEstado($verART['idART'],$verART['idML'],1,$_SESSION['empresa']);
			}
			if (!$pausar['body']['permalink']) {
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
		if ($_GET['e']=='cerrar') {
			$estado = array(
				'status' => "closed",
				);
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->cambiarEstado($verART['idART'],$verART['idML'],4,$_SESSION['empresa']);
				if ($_GET['eliminarMC']==1) {
					$estadoB = array(
						'deleted' => "true",
						);
					$borrando= $meli->put('/items/'.$verART['idML'], $estadoB, $params);
					$borrar= $objArticulo->borrarArticuloMC($verART['idART'],$_SESSION['empresa']);
				}
			}
			if (!$pausar['body']['permalink']) {
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
		if ($_GET['e']=='eliminar') {
			$estado = array(
				'deleted' => "true",
				);
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->eliminarPublicacion($verART['idART'],$verART['idML'],0,$_SESSION['empresa']);
			}
			if (!$pausar['body']['permalink']) {
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
		if ($_GET['e']=='republicar') {
			$estado = array(
				"price"=> round($verART['price']),
				"quantity"=> round($verART['available_quantity']),
				"listing_type_id"=> $verART['listing_type_id'],
				);
			$pausarM= $meli->post('/items/'.$verART['idML'].'/relist', $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->cambiarEstado($verART['idART'],$pausar['body']['id'],1,$_SESSION['empresa']);
			}
			if (!$pausar['body']['permalink']) {
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}

		} //fin elegidos
		if ($_GET['eliminarMC']==1) {
			header('Location: ../../'.$_POST['devuelta'].'&alerta=eliminados');
		}
		else {
			header('Location: ../../'.$_POST['devuelta'].'&alerta=acM');
		}
	} //fin else
?>





<?php
// fin de llave si esta logueado
}

else{
	echo "<script>alert('comproba tu conexion con ML'); document.location=('../checkAPI.php')</script>";
}	



 ?>






<?php 

include $templates.'/footer.php';


 ?>