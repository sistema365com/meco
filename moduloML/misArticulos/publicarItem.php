<?php


$objArticulo= new Articulo();

$plantilla= Configuracion::verConfigu();
$h= $plantilla['header'];
$f= $plantilla['footer'];

	$params = array('access_token' => $_SESSION['access_token']);
	$usuarioML= $meli->get('/users/me',$params);
	$idUserML= $usuarioML['body']->id;
	$nombreML= $usuarioML['body']->first_name;
	$nickML= $usuarioML['body']->nickname;



$verART=$objArticulo->verArticuloBM($_GET['id'],$_SESSION['empresa']);

if ($verART['estado']==1) {
	echo "<script>alert('error al registrar, el articulo ya se encuentra publicado'); document.location=('ML-misArticulos.php?s=verArticuloML&alerta=art-yapublicado&id=".$_GET['id']."')</script>";
}
else{
	// si no esta publicado entonces

$detallesART = array(
	'title' => $verART['title'], 
	'category_id'=> $verART['category_id'],
	'price'=> $verART['price'],
	'currency_id'=> $verART['currency_id'],
	'available_quantity'=> $verART['available_quantity'],
	'buying_mode'=> $verART['buying_mode'],
	'listing_type_id'=> $verART['listing_type_id'],
	'seller_custom_field'=> $verART['seller_custom_field'],
	'condition'=> $verART['condition_buy'],
	'video_id'=> $verART['video_id'],
	'warranty'=> $verART['warranty'],
	);
$imagenes= explode(";", $verART['pictures']);
foreach ($imagenes as $pic) {
    $detallesART['pictures'][] = array (  
        'source' => $pic,  
    );
}
if ($plantilla['fotoGeneralURL']!='') {
	$detallesART['pictures'][]= array('source'=>$plantilla['fotoGeneralURL']);
}
$envios= explode(';', $verART['envios']);
if ($envios[0]=='me2') {
	$detallesART['shipping']= array(
		'mode' => $envios[0], 
		);
	if ($envios[1]=='true') {
		$detallesART['shipping']['local_pick_up']=true;
	}
	elseif ($envios[1]=='false') {
		$detallesART['shipping']['local_pick_up']=false;
	}
	if ($envios[2]=='false') {
		$detallesART['shipping']['free_shipping']=false;
	}
}
// atributos
$objVariaciones= new Variaciones();
$verAtributo= $objVariaciones->verAtributos($_GET['id']);
$verVariacion= $objVariaciones->verVariaciones($_GET['id']);
if ($verAtributo) {
	$detallesART['attributes']= $verAtributo;
}
// variaciones
if ($verVariacion) {
	$detallesART['variations']= $verVariacion;
}
// probar(json_encode($detallesART));
 ?>


	<div class="col-lg-12">
<?php echo $linkConector; ?>
	</div>
<?php 
if ($usuarioML) {
// si esta logueado entonces
	// verifico autorizacion
	$autBD= Configuracion::verConfigu();
	if ($autBD['userML']!=$nickML) {
		echo '<hr><div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Atención!</h4>
                    El usuario de mercadolibre con el que esta logueado, no se encuentra autorizado por nuestra aplicación, <a href="checkAPI.php">Chequea tu conexion!</a>
                  </div>';
	}
	else{
		if ($envios[2]=='true') {
			$parametroEnvio = array('category_id' => $verART['category_id']);
			$metodosEnvio2= $meli->post('/users/'.$idUserML.'/shipping_modes', $parametroEnvio, $params);
			$metodosEnvio=json_decode(json_encode($metodosEnvio2['body']), true);
			foreach ($metodosEnvio as $key) {
				if ($key['mode']=='me2') {
					$metodoME= $key;
				}
			}
			$detallesART['shipping']['free_methods']= array(array(
											'id' => $metodoME['logistic_types'][0]['attributes']['free']['accepted_methods'][0],
											'rule'=>array(
												'free_mode' => 'country', 
												'value' => 'null', 
										)
										));
		}
		$crearPublicacionM= $meli->post('/items', $detallesART, $params);
		$crearPublicacion=json_decode(json_encode($crearPublicacionM), true);
		if ($crearPublicacion['body']['permalink']) {
			$jsonDescrip = array('plain_text' => $h.$verART['description'].$f);
			// echo '<pre>'.json_encode($jsonDescrip).'</pre>';
			$cargaDescri= $meli->put('/items/'.$crearPublicacion['body']['id'].'/description', $jsonDescrip, $params);
			echo '<hr><div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>	<i class="icon fa fa-check"></i> Articulo Publicado!</h4>
                    Se publico su articulo correctamente en MercadoLibre.
                  </div>';
			echo '<a class="btn btn-block btn-warning btn-lg" href="'.$crearPublicacion['body']['permalink'].'" target="_blank">Ver articulo en ML</a>';
			echo '<a class="btn btn-block btn-info btn-lg" href="ML-misArticulos.php?s=verArticuloML&id='.$_GET['id'].'">Ver articulo en Mi Base de datos</a>';
			$linkML= $crearPublicacion['body']['permalink'];
			$idML= $crearPublicacion['body']['id'];
			$stopTime= $crearPublicacion['body']['expiration_time'];
			$cargaBDM=$objArticulo->cargarPublicacion($_GET['id'],$idML,$linkML,$stopTime,$_SESSION['empresa']);
				if ($crearPublicacion['body']['variations']) {
					$eliminaVariacion= $objVariaciones->eliminaVariacion($_GET['id']);
					$guardadoVariacion= $objVariaciones->addVariacion($_GET['id'],$crearPublicacion['body']['variations']);
				}
			}
		if (!$crearPublicacion['body']['permalink']) {
			$msjError= $crearPublicacion['body']['error'];
			echo $msjError;
		}
	}
?>





<?php
// fin de llave si esta logueado
}

else{
echo "No se encuentra registrado en mercadolibre, contacte con nosotros! ";
}	



}
// cierre if si no esta publicado
 ?>

