<?php 
session_start();


require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../misArticulos/class.Articulo.php';
include '../misArticulos/class.Presta.php';
include '../../class/Plantilla.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';
include '../chonML.php';

$mensajePositivo= Configuracion::verConfigu();
$mensajesAutomaticos= explode(';', $mensajePositivo['mensajesAutomaticos']);

if ($_GET['o']!='') {

if ($_GET['c']=='positive') {
	$params = array('access_token' => $_SESSION['access_token'], );
	$body = array(
		'fulfilled' => true, 
		'rating' => $_GET['c'], 
		'message' => $mensajePositivo['mensajePositivo'], 
		);
	$calificar= $meli->post('/orders/'.$_GET['o'].'/feedback',$body,$params);
// enviar mensaje
if (in_array('yaCalificamos', $mensajesAutomaticos)) {
$body['from'] = array(
	'user_id' => $mensajePositivo['mlUserId'], 
	);
$body['to'] = array(
	array(
	'user_id' => $_GET['comprador'], 
	'resource' => 'orders', 
	'resource_id' => $_GET['o'], 
	'site_id' => $mensajePositivo['siteML'], 
	)
	);
$body['text'] = array('plain' => 'Esperamos que disfrutes el producto, ya te calificamos por tu compra, aguardamos tu calificación!', );
$params = array(
	'access_token' => $_SESSION['access_token'],
	);
$enviaMensajeDeAviso= $meli->post('/messages',$body,$params);
}
// fin enviar mensaje
	$enviaMensajeOK=json_decode(json_encode($calificar), true);
	if ($enviaMensajeOK['httpCode']=='201') {
		header('Location: ../../ML-ordenes.php?s=calificarM&filtro=1&tipo=recent&estado=&calif=pending&envio=delivered&alerta=calificado');
	}
	else {
		header('Location: ../../ML-ordenes.php?s=calificarM&filtro=1&tipo=recent&estado=&calif=pending&envio=delivered&alerta=noCalificado');
	}
}

}

else {
	$elegidos= explode(',', $_POST['elegidos']);
	for ($i=0; $i < count($elegidos); $i++) { 

if ($_POST['c']=='positive') {
	$params = array('access_token' => $_SESSION['access_token'], );
	$body = array(
		'fulfilled' => true, 
		'rating' => $_POST['c'], 
		'message' => $_POST['texto'], 
		);
	$calificar= $meli->post('/orders/'.$elegidos[$i].'/feedback',$body,$params);
	$enviaMensajeOK=json_decode(json_encode($calificar), true);
		if (in_array('yaCalificamos', $mensajesAutomaticos)) {
				// enviar mensaje
				$MSJordenM= $meli->get('/orders/'.$elegidos[$i],$params);
				$MSJordenes=json_decode(json_encode($MSJordenM['body']), true);
				if (in_array('yaCalificamos', $mensajesAutomaticos)) {
				$bodyMSJ['from'] = array(
					'user_id' => $mensajePositivo['mlUserId'], 
					);
				$bodyMSJ['to'] = array(
					array(
					'user_id' => $MSJordenes['buyer']['id'], 
					'resource' => 'orders', 
					'resource_id' => $elegidos[$i], 
					'site_id' => $mensajePositivo['siteML'], 
					)
					);
				$bodyMSJ['text'] = array('plain' => 'Esperamos que disfrutes el producto, ya te calificamos por tu compra, aguardamos tu calificación!', );
				$enviaMensajeDeAviso= $meli->post('/messages',$bodyMSJ,$params);
				}
				// fin enviar mensaje
		}
	}
if ($_POST['c']=='neutral') {
	if ($_POST['concreto']=='si') {
		$body['fulfilled']= true;
	}
	else {
		$body['fulfilled']= false;
	}
	$params = array('access_token' => $_SESSION['access_token'], );
	$body = array(
		'rating' => $_POST['c'], 
		'reason' => $_POST['reasons'], 
		'message' => $_POST['texto'], 
		);
	$calificar= $meli->post('/orders/'.$elegidos[$i].'/feedback',$body,$params);
	$enviaMensajeOK=json_decode(json_encode($calificar), true);
	}
if ($_POST['c']=='negative') {
	if ($_POST['concreto']=='si') {
		$body['fulfilled']= true;
	}
	else {
		$body['fulfilled']= false;
	}
	$params = array('access_token' => $_SESSION['access_token'], );
	$body = array(
		'rating' => $_POST['c'], 
		'reason' => $_POST['reasons'], 
		'message' => $_POST['texto'], 
		);
	$calificar= $meli->post('/orders/'.$elegidos[$i].'/feedback',$body,$params);
	$enviaMensajeOK=json_decode(json_encode($calificar), true);
	}





}


header('Location: ../../ML-ordenes.php?s=calificarM&filtro=1&tipo=recent&estado=&calif=pending&envio=delivered&alerta=calificado');

}

	// curl -X POST -H "Content-Type: application/json" -d
// '{
//   "fulfilled": false,
//   "rating": "neutral",
//   "message": "Operation not completed",
//   "reason": "THEY_DIDNT_ANSWER",
//   "restock_item": false,
//   "has_seller_refunded_money": true
// }'

// "https://api.mercadolibre.com/orders/{order_Id}/feedback&access_token=$ACCESS_TOKEN
    
    // SELLER_REGRETS
    // THEY_DIDNT_ANSWER
    // BUYER_REGRETS
    // SELLER_OUT_OF_STOCK
    // SELLER_DIDNT_TRY_TO_CONTACT_BUYER
    // BUYER_NOT_ENOUGH_MONEY
    // THEY_NOT_HONORING_POLICIES
    // OTHER_MY_RESPONSIBILITY
    // OTHER_THEIR_RESPONSIBILITY

 ?>