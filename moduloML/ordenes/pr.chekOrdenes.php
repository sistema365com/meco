<?php 
session_start();

require '../php-sdk-master/Meli/meli.php';
include '../class/Conexion.php';
include '../class/Configuracion.php';
include 'class.ordenes.php';
include '../includes/configuraciones.php';
include '../includes/funciones.php';

$aplicacion = array(
	'ID' => '5059930275300953',
	'KEY' => 'l69NZmS44dQfsDTHSNxYxmqzlTXtG8rP',
	'URL' => 'http://localhost:8888/3-PublicadorML/checkAPI.php',
 );
// $aplicacion = array(
// 	'ID' => '3661330296299812',
//     'KEY' => 'TQRNCA9hj3L6hB1PNEPD62iF6Sf50S8Q',
// 	'URL' => 'https://pruebas.kenshopublicidad.com/publicador/checkAPI.php',
//  );
$_SESSION['ID']= $aplicacion['ID'];
$_SESSION['KEY']= $aplicacion['KER'];
$_SESSION['URL']= $aplicacion['URL'];
// $meli = new Meli($aplicacion['ID'],$aplicacion['KEY'],$_SESSION['access_token'], $_SESSION['refresh_token']);



$objOrdenes= new Ordenes();
$listarClientes= $objOrdenes->listarClientes();


foreach ($listarClientes as $key) {
	$listarOrdenes= $objOrdenes->listarOrdenes($key['id_admin']);
	$ord= end($listarOrdenes);
	$meli = new Meli($aplicacion['ID'],$aplicacion['KEY'],$key['ac_token'], $key['re_token']);
	$params = array(
		'access_token' => $key['ac_token'],
		);
	$usuarioML= $meli->get('/users/me',$params);
	$idUserML= $usuarioML['body']->id;
	$body = array('seller' => $idUserML, );
	$paramsOrder = array(
		'access_token' => $key['ac_token'],
		'seller' => $idUserML,
		);
	$paramsOrder['order.date_created.from']= $ord['date_created'];
	$paramsOrder['sort']= 'date_desc';
	$ordenesM= $meli->get('/orders/search/recent',$paramsOrder);
	$ordenes=json_decode(json_encode($ordenesM['body']->results), true);
	$ordenesF1= array_reverse($ordenes);
	foreach ($ordenesF1 as $keyOrd) {
		$ordenML=$keyOrd['id'];
		if ($ordenML != $ord['idOrden']) {
		$contador ++;
			$ingresar= $objOrdenes->altaOrden($key['id_admin'],$keyOrd);
		}
	}

}

echo $contador;

// echo '<pre>';
// print_r($ordenesF1);
// echo '</pre>';
	// $params = array(
	// 	'access_token' => $access_token,
	// 	);
	// $usuarioML= $meli->get('/users/me',$params);
	// $idUserML= $usuarioML['body']->id;
	// $body = array('seller' => $idUserML, );
	// $paramsOrder = array(
	// 	'access_token' => $_SESSION['access_token'],
	// 	'seller' => $idUserML,
	// 	);
	// $paramsOrder['order.date_created.from']= $_GET['dateFrom'].'T00:00:00.000-00:00';
	// $paramsOrder['order.date_created.from']= $_GET['dateTo'].'T00:00:00.000-00:00';
	// $paramsOrder['sort']= 'date_desc';
	// $ordenesM= $meli->get('/orders/search/'.$_GET['tipo'],$paramsOrder);
	// $ordenes=json_decode(json_encode($ordenesM['body']->results), true);




 ?>