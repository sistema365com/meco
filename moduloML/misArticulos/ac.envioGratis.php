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
		if ($_GET['ac']==2) {
	        $params = array('access_token' => $_SESSION['access_token']);
	            $body['shipping'] = [
	                'mode' => 'me2',
	                'local_pick_up' => false,
	                'free_shipping' => false,
	                'free_methods' => array(),
	                'logistic_type' => 'drop_off',
	            ];

	        $sacar= $meli->put('items/'.$verART['idML'], $body, $params, true);

			header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=envio-desactivado');
		}
		else {
			$parametroEnvio = array('category_id' => $verART['category_id']);
			$metodosEnvio2= $meli->post('/users/'.$idUserML.'/shipping_modes', $parametroEnvio, $params);
			$metodosEnvio=json_decode(json_encode($metodosEnvio2['body']), true);
			foreach ($metodosEnvio as $key) {
				if ($key['mode']=='me2') {
					$metodoME= $key;
				}
			}
			$body['shipping']['free_methods']= array(array(
				'id' => $metodoME['logistic_types'][0]['attributes']['free']['accepted_methods'][0],
				'rule'=>array(
					'free_mode' => 'country', 
					'value' => 'null', 
			)
			));
	        $sacar= $meli->put('items/'.$verART['idML'], $body, $params, true);

			header('Location: ../../ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'&alerta=envio-activado');
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