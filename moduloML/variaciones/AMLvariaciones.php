<?php 
session_start();
require '../php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../chonML.php';
include 'class.variaciones.php';
include '../../includes/funciones.php';

$params = array('access_token' => $_SESSION['access_token']);

$idML= $_POST['idML'];
$objVariaciones= new Variaciones();
$verVariacionCreado= $objVariaciones->verVariaciones($_POST['idART']);
// probar($verVariacionCreado);
// SI HAY variaciones
if ($verVariacionCreado) {
	for ($i=0; $i < count($verVariacionCreado); $i++) {
		if ($verVariacionCreado[$i]['id']!='') {
		 	$IDvariacionExistente = array(
		 		'id' => $verVariacionCreado[$i]['id'], 
		 		);
		 	$IMGvariacionExistente = array(
		 		'id' => $verVariacionCreado[$i]['picture_ids'][$i], 
		 		);
		 } 
		if ($verVariacionCreado[$i]['id']=='') {
					$postVariacion['pictures'][]['source']= $verVariacionCreado[$i]['picture_ids'][0];
					for ($i=0; $i < count($IDvariacionExistente); $i++) { 
						$postVariacion['pictures'][]['id']= $IMGvariacionExistente['id'];
					}
					$postVariacion['variations'][]['id']= $IDvariacionExistente['id'];
					$postVariacion['variations'][] = array(
		              'attribute_combinations'=> array(array(
			                  'name' => $verVariacionCreado[$i]['attribute_combinations'][0]['name'], 
			                  'value_id' => $verVariacionCreado[$i]['attribute_combinations'][0]['value_id'], 
			                  'value_name' => $verVariacionCreado[$i]['attribute_combinations'][0]['value_name'], 
	                  	)), 
	                  'price'=>$verVariacionCreado[$i]['price'], 
	                  'available_quantity'=>$verVariacionCreado[$i]['available_quantity'], 
	                  'sold_quantity'=>$verVariacionCreado[$i]['available_quantity'], 
	                  'picture_ids'=> array($verVariacionCreado[$i]['picture_ids'][0]), 
	                  );
		}
		else {
				// unset($verVariacionCreado[$i]['picture_ids']);
				// $putVariacion['variations'][]= $verVariacionCreado[$i];
				// chequeo contra ML
				$variacionML= $meli->get('/items/'.$idML.'?attributes=variations');
				$variacionMLjson=json_decode(json_encode($variacionML['body']), true);
				$idsML= array_column($variacionMLjson['variations'], 'id');
				$idsBase= array_column($verVariacionCreado, 'id');
				$variacionesBorrar= array_values(array_diff($idsML, $idsBase));
				// probar($variacionesBorrar);
				for ($i=0; $i < count($variacionesBorrar); $i++) { 
					$delete= $meli->delete('/items/'.$idML.'/variations/'.$variacionesBorrar[$i],$params);
					// probar($delete);
				}
		}
	}
	// envios a ML
	if ($postVariacion) {
		$agregar= $meli->put('/items/'.$idML, $postVariacion, $params);
		$crearPublicacion=json_decode(json_encode($agregar), true);
		$eliminaVariacion= $objVariaciones->eliminaVariacion($_POST['idART']);
		$guardadoVariacion= $objVariaciones->addVariacion($_POST['idART'],$crearPublicacion['body']['variations']);
	}
	if ($putVariacion) {
		// $editar= $meli->put('/items/'.$idML, $putVariacion, $params);
		// probar($editar);
	}

}
// NO HOY variaciones
else{
	echo 'Error, no configuraste ninguna variación';
}



// $editar= $meli->put('/items/'.$idML, $detallesART, $params);
echo "<h5>Borrados</h5>Se borrarron las siguientes variaciones: ".implode(' / ', $variacionesBorrar).'<hr>';

if ($editar['httpCode']==200) {
	echo "<h5>Editados</h5>Variaciones actualizados en Mercadolibre Correctamente<hr>";
}
else {
	echo "<h5>Editados</h5>Error al actualizar variaciones<hr>";
}

if ($agregar['httpCode']==200) {
	echo "<h5>Agregados</h5>Variaciones agregadas en Mercadolibre Correctamente<hr>";
}
else {
	echo "<h5>Agregados</h5>Error al agregar variaciones<hr>";
}

// $crearPublicacionM= $meli->get('/items/'.$idML);
// $crearPublicacion=json_decode(json_encode($crearPublicacionM), true);
// if ($crearPublicacion['body']['variations']) {
// 	$eliminaVariacion= $objVariaciones->eliminaVariacion($_POST['idART']);
// 	$guardadoVariacion= $objVariaciones->addVariacion($_POST['idART'],$crearPublicacion['body']['variations']);
// }



?>
