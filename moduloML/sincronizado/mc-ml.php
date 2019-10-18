<?php


$presta= Configuracion::verConfigu();
$h= $presta['header'];
$f= $presta['footer'];
$objBM= new Articulo();

if ($_GET['h']) {
$verArticulo= $objBM->BMporEstado($_SESSION['empresa'],$_GET['d'],$_GET['h']);
for ($i=0; $i < count($verArticulo); $i++) { 
	if ($verArticulo[$i]['available_quantity']==0 && $verArticulo[$i]['idML']!='') {
		$pausar=$objBM->cambiarEstado($verArticulo[$i]['idART'],$verArticulo[$i]['idML'],3,$_SESSION['empresa']);
	}
	// if ($verArticulo[$i]['available_quantity']>0 && $verArticulo[$i]['available_quantity']==3 ) {
	// 	$activar=$objBM->cambiarEstado($verArticulo[$i]['idART'],$verArticulo[$i]['idML'],1,$_SESSION['empresa']);
	// } no se que es esto... pero ver si nadie chiya borrarlo, esto lo escribi el 8 de agosto de 2016
}
}

?>
<div class="row">
	<div class="col-lg-6">
		<p>
			En esta sección podes importar todos los datos que tenemos en MercadoConnecting, a tu cuenta de Mercado Libre. (Precio, Stock, Descripción)<br>

			Si queres actualizar solo stock y precios de todos los articulos de manera mas rapida, hacelo desde aquí: 
			<a target="_blank" href="http://mercadoconnecting.com/app/timer-ml/publicador.php?u=<?php echo $_SESSION['empresa']; ?>">Actualizar TODOS</a> <br>
			Tené en cuenta que esto puede demorar dependiendo la cantidad de artículos que tengas publicados.
		</p>
	</div>
		<div class="col-lg-2" style="text-align: center;"><i style="font-size: 30px;" class="fa fa-database"></i><br>Base de datos de mis articulos</div>
		<div class="col-lg-2" style="text-align: center;"><i style="font-size: 30px;" class="fa fa-arrow-right"></i></div>
		<div class="col-lg-2" style="text-align: center;"><img style="height: 100px; padding-bottom: 30px;" src="img/logoML.png"></div>
</div>
<form action="">
<!-- <input type="hidden" name="empresa" value="<?php echo $_GET['empresa']; ?>"> -->
<input type="hidden" name="s" value="mc-ml">
	<label for="">Desde el articulo</label><input type="number" name="d" value="<?php echo $_GET['d']+$_GET['h']; ?>">
	<label for="">cantidad de articulos a actualizar</label><input type="number" name="h" max="200" step="10" value="<?php echo $_GET['h']; ?>">
	<input class="btn btn-primary" type="submit" value="Proximos">
</form>

<?php



$params = array('access_token' => $_SESSION['access_token'], );    


for ($i=0; $i < count($verArticulo); $i++) { 
	$edit = array(
		'title' => $verArticulo[$i]['title'],
		'price' => $verArticulo[$i]['price'],
		'available_quantity' => $verArticulo[$i]['available_quantity'],
		 );
	if ($verArticulo[$i]['price']<=549.00) {
		$edit['shipping']= array(
			'mode' => 'me2', 
			'local_pick_up' => false, 
			'free_shipping' => false, 
			'free_methods' => array(), 
			'logistic_type' => 'drop_off', 
			);
	}
	$editar= $meli->put('/items/'.$verArticulo[$i]['idML'], $edit, $params);
	$jsonTexto = array('plain_text' => $h.$verArticulo[$i]['description'].$f);
	// codigo para no actualizar texto en los de miguel manzo
	if ($_SESSION['empresa']!=9 && $_SESSION['empresa']!=11) {
		$editaTexto= $meli->put('/items/'.$verArticulo[$i]['idML'].'/description', $jsonTexto, $params);
	}
	// codigo para no actualizar texto en los de miguel manzo
	$meliM=json_decode(json_encode($editar['httpCode']), true);
	if ($meliM==200) {
	$mensajePrecio=($presta['siteML']=='MLM' && $verArticulo[$i]['price']<=549.00)?'ok':'';
	$mensajeEnvio= ($presta['siteML']=='MLM' && $editar['body']->shipping->free_shipping)?'ok':'';
	$revisar= ($mensajeEnvio=='ok' && $mensajePrecio=='ok')?'<small style="color:red;"> Revisar ENVIO! figura gratis y vale menos de 549.00</small>':'';
	$articulos[]='Id Base Prestashop: '.$verArticulo[$i]['idART'].'  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  <a target="_blank" href="'.$editar['body']->permalink.'">ID Mercadolibre:'.$verArticulo[$i]['idML'].'</a>'.$revisar;
	}
	if ($meliM==405) {
	$errores[]='Id Base Prestashop: '.$verArticulo[$i]['idART'].' <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  Articulo no esta publicado en mercadolibre';
	}
	// probar($editar);
// 			$descrip = array('text' => html_entity_decode($h).'<table width="900px" border="0" align="center" cellpadding="0" cellspacing="0">
// <tr align="center">
// <td align="center">'.html_entity_decode($verArticulo['description']).'</td>
// </tr>
// </table>'.html_entity_decode($f),);
// 	$meli->put('/items/'.$verArticulo['idML'].'/description', $descrip, $params);
	// https://app.mercadoconnecting.com/timer/timer-meli-ML.php?empresa=9&d=3600&h=10

}
echo "Modificados:<br>";
for ($i=0; $i < count($articulos); $i++) { 
	echo '<i class="fa fa-check-circle" aria-hidden="true"></i> '.$articulos[$i].'<br>';
}

echo "<hr>Errores: <br>";
for ($i=0; $i < count($errores); $i++) { 
	echo '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> '.$errores[$i].'<br>';
}

?>
