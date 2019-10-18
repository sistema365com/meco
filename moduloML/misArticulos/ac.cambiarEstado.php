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



$objArticulo= new Articulo();

$verART=$objArticulo->verArticuloBM($_GET['id'],$_SESSION['empresa']);

if ($verART['estado']==0) {
	echo "<script>alert('error al registrar, el articulo no esta publicado'); document.location=('../../ML-misArticulos.php?s=verArticuloML&alerta=art-yapublicado&id=".$_GET['id']."')</script>";
}
else{
	// si no esta publicado entonces

// testear json
// echo '<pre>'.json_encode($detallesART).'</pre>';

if ($usuarioML) {
// si esta logueado entonces
	// verifico autorizacion
	$autBD= Configuracion::verConfigu();
	if ($autBD['userML']!=$nickML) {
	echo "<script>alert('El usuario con el que se encuentra logueado en mercadolibre no esta habilitado, inicie sesión con un usuario autorizado de ML'); document.location=('../../checkAPI.php')</script>";
	}
	else{
		if ($_GET['e']=='pausa') {
			$estado = array('status' => "paused", );
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->cambiarEstado($_GET['id'],$verART['idML'],3,$_SESSION['empresa']);
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-editado');
			}
			if (!$pausar['body']['permalink']) {
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-error');
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
		if ($_GET['e']=='activar') {
			$estado = array('status' => "active", );
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->cambiarEstado($_GET['id'],$verART['idML'],1,$_SESSION['empresa']);
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-editado');
			}
			if (!$pausar['body']['permalink']) {
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-error');
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
		if ($_GET['e']=='cerrar') {
			$estado = array('status' => "closed", );
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->cambiarEstado($_GET['id'],$verART['idML'],4,$_SESSION['empresa']);
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-editado');
			}
			if (!$pausar['body']['permalink']) {
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-error');
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
		if ($_GET['e']=='eliminar') {
			$estado = array('deleted' => "true", );
			$pausarM= $meli->put('/items/'.$verART['idML'], $estado, $params);
			$pausar=json_decode(json_encode($pausarM), true);
			if ($pausar['body']['permalink']) {
				$cargaBDM=$objArticulo->eliminarPublicacion($_GET['id'],$verART['idML'],0,$_SESSION['empresa']);
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-editado');
			}
			if (!$pausar['body']['permalink']) {
				header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=art-error');
				$msjError= $pausar['body']['error'];
				echo $msjError;
			}
		}
	}
?>





<?php
// fin de llave si esta logueado
}

else{
	echo "<script>alert('comproba tu conexion con ML'); document.location=('../checkAPI.php')</script>";
}	



}
// cierre if si no esta publicado
 ?>






<?php 

include $templates.'/footer.php';


 ?>