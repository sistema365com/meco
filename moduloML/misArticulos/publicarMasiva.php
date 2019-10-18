<?php

$presta= Configuracion::verConfigu();
$h= $presta['header'];
$f= $presta['footer'];


$objArticulo= new Articulo();

	$params = array('access_token' => $_SESSION['access_token']);
	$usuarioML= $meli->get('/users/me',$params);
	$idUserML= $usuarioML['body']->id;
	$nombreML= $usuarioML['body']->first_name;
	$nickML= $usuarioML['body']->nickname;
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
$elegidos= $_POST['elegidos'];
$verART2= $objArticulo->listarVariosArticulosBM($elegidos);
foreach ($verART2 as $verART) {
$params = array('access_token' => $_SESSION['access_token']);
// $verART=$objArticulo->verArticuloBM($elegidos[$i],$_SESSION['empresa']);
if ($autBD['siteML']=='MCO') {
	$precio= round($verART['price']);
}
else {
	$precio= $verART['price'];
}
$detallesART = array(
	'title' => $verART['title'], 
	'category_id'=> $verART['category_id'],
	'price'=> $precio,
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
if ($presta['fotoGeneralURL']!='') {
	$detallesART['pictures'][]= array('source'=>$presta['fotoGeneralURL']);
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
}
// atributos
$objVariaciones= new Variaciones();
$verAtributo= $objVariaciones->verAtributos($verART['idART']);
// $verVariacion= $objVariaciones->verVariaciones($verART['idART']);
if ($verAtributo) {
	$detallesART['attributes']= $verAtributo;
}
// variaciones
if ($verVariacion) {
	$detallesART['variations']= $verVariacion;
}
// $detallesART['shipping']['free_methods'] = array(
// 	'id' => '73328', 
// 	'rule' =>array(
// 		'free_mode' => 'country', 
// 		'value' => null, 
// 		),
// 	);


	$crearPublicacionM= $meli->post('/items', $detallesART, $params);
	$crearPublicacion=json_decode(json_encode($crearPublicacionM), true);
		if ($crearPublicacion['body']['permalink']) {
			// cargando descripcion
			$jsonDescrip = array('plain_text' => $h.$verART['description'].$f);
			$cargaDescri= $meli->put('/items/'.$crearPublicacion['body']['id'].'/description', $jsonDescrip, $params);
			$linkML= $crearPublicacion['body']['permalink'];
			$idML= $crearPublicacion['body']['id'];
			$stopTime= $crearPublicacion['body']['expiration_time'];
			$cargaBDM=$objArticulo->cargarPublicacion($verART['idART'],$idML,$linkML,$stopTime,$_SESSION['empresa']);
			$guardarExito[] = $verART['idART'];
		}
		if (!$crearPublicacion['body']['permalink']) {
			$archivo = fopen('errores/'.$verART['idART'].'.json','w');
			fputs($archivo,json_encode($crearPublicacion));
			fclose($archivo);
			$msjError= $crearPublicacion['body']['error'];
			$msjMError= $crearPublicacion['body']['cause'][0]['message'];
			$guardarError[] = array( 
				'articulo' =>$verART['idART'],
				'error' =>$msjError.'->'.$msjMError,
				);
		}


}
	}
?>




<?php
?>
<div class="row">
	<div class="col-lg-6">
		<h5>Cargados Correctamente</h5>
		<ul>
			<?php 
				for ($i=0; $i < count($guardarExito); $i++) { 
					echo '<li><a href="ML-misArticulos.php?s=listarItems&e=1">'.$guardarExito[$i]."</a></li>";
				}
			 ?>
		</ul>
	</div>
	<div class="col-lg-6">
		<h5>Errores de carga</h5>
		<ul>
			<?php 
				for ($i=0; $i < count($guardarError); $i++) { 
					echo '<li>'.$guardarError[$i]['articulo'].' Error: '.$guardarError[$i]['error'].'</li>';
				}
			 ?>
		</ul>
	</div>
</div>



<?php 



// fin de llave si esta logueado
}


else{
echo "No te registrado en mercadolibre, contactanos ";
}	



 ?>
