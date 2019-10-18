<?php 
include '../php-sdk-master/Meli/meli.php';
include '../class/Conexion.php';
include '../class/Configuracion.php';
include '../ordenes/class.ordenes.php';
include '../class/Useradmin.php';
include '../includes/configuraciones.php';
include '../includes/funciones.php';
include 'class.notificaciones.php';


$objNotificaciones= new Notificaciones();
$objOrdenes= new Ordenes();



// $url= 'https://api.mercadolibre.com/myfeeds?app_id=4282773055253235';
// $json = file_get_contents($url);
// $array = json_decode($json,true);

$archivoAnt = file_get_contents('../form/notifica2.json');
$array = json_decode('['.$archivoAnt.']',true);

probar($array);

for ($i=0; $i < count($array); $i++) {
	// $verNoti= $objNotificaciones->verNoti($array[$i]['_id']);
	// $verNoti2= $objNotificaciones->verNoti2($array[$i]['resource']);
	// if (!$verNoti && !$verNoti2) {
	// 	$contador ++;
	// 	$guardar= $objNotificaciones->altaNoti($array[$i]);
// es una orden?
		if ($array[$i]['topic']=='orders') {
			$contador++;
			// busco la orden
			$numeroDeOrden= explode('/', $array[$i]['resource']);
			$buscarOrden= $objOrdenes->verOrden($numeroDeOrden[2]);
			// si no existe la creo:
			if ($buscarOrden['idOrden']=='') {
				// buscar orden en mercadolibre
				$user_id= $array[$i]['user_id']; 
				include 'mercadolibre.php';
				$params = array(
					'access_token' => $token,
					);
				$ordenM= $meli->get($array[$i]['resource'],$params);
				$ordenMercadolibre=json_decode(json_encode($ordenM['body']), true);
				$crearOrden= $objOrdenes->altaOrden($ordenMercadolibre);
			}
			// si existe comparo
			if ($buscarOrden['idOrden']!='') {
				$user_id= $array[$i]['user_id']; 
				include 'mercadolibre.php';
				$params = array(
					'access_token' => $token,
					);
				$ordenM= $meli->get($array[$i]['resource'],$params);
				$ordenMercadolibre=json_decode(json_encode($ordenM['body']), true);
				if ($buscarOrden['envio']=='ready_to_ship' && $ordenMercadolibre['shipping']['status']=='shipped') {
					$cambioEnvio= $objOrdenes->cambiarEnvio($buscarOrden['idOrden'],$ordenMercadolibre['shipping']['status']);
					$configMensaje= explode(';', $todosLosToken['mensajesAutomaticos']);
					if (in_array('enCamino', $configMensaje)) {
								// enviar mensaje
								$body['from'] = array(
									'user_id' => $todosLosToken['mlUserId'], 
									);
								$body['to'] = array(
									array(
									'user_id' => $ordenMercadolibre['buyer']['id'], 
									'resource' => 'orders', 
									'resource_id' => $buscarOrden['idOrden'], 
									'site_id' => $todosLosToken['siteML'], 
									)
									);
								$body['text'] = array('plain' => 'Tu pedido ya esta en camino!', );
								$enviaMensajeDeAviso= $meli->post('/messages',$body,$params);
								// fin enviar mensaje
						}
				}
				if ($buscarOrden['envio']=='shipped' && $ordenMercadolibre['shipping']['status']=='delivered') {
					$cambioEnvio= $objOrdenes->cambiarEnvio($buscarOrden['idOrden'],$ordenMercadolibre['shipping']['status']);
					$configMensaje= explode(';', $todosLosToken['mensajesAutomaticos']);
					if (in_array('enCamino', $configMensaje)) {
								// enviar mensaje
								$body['from'] = array(
									'user_id' => $todosLosToken['mlUserId'], 
									);
								$body['to'] = array(
									array(
									'user_id' => $ordenMercadolibre['buyer']['id'], 
									'resource' => 'orders', 
									'resource_id' => $buscarOrden['idOrden'], 
									'site_id' => $todosLosToken['siteML'], 
									)
									);
								$body['text'] = array('plain' => 'Tu producto ya fue entregado, esperamos que lo disfrutes, no olvides calificarnos!', );
								$enviaMensajeDeAviso= $meli->post('/messages',$body,$params);
								// fin enviar mensaje
						}
				}
			}


		}
// fin es una orden?

	// }
}

echo $contador;
echo "<hr>todo ok";

 ?>