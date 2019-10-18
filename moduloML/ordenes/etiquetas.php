
<?php 
$objArticulo= new Articulo();
$ciudad= Configuracion::verConfigu();
$envios = array(
	'to_be_agreed' => 'Lo Retira',
	'ready_to_ship' => 'Imprimir Etiqueta',
	'pending' => 'Envios Pendientes',
	'shipped' => 'En Camino',
	'delivered' => 'Entregado',
	'not_delivered' => 'No Entregado',
	 );

	$params = array(
		'access_token' => $_SESSION['access_token'],
		);
	$usuarioML= $meli->get('/users/me',$params);
	$idUserML= $usuarioML['body']->id;
	$body = array('seller' => $idUserML, );
	$paramsOrder = array(
		'access_token' => $_SESSION['access_token'],
		'seller' => $idUserML,
		);
	if (isset($_GET['d'])) {
		$paramsOrder['offset']= $_GET['d'];
	}
	if (isset($_GET['filtro'])) {
		if (isset($_GET['estado'])) {$paramsOrder['order.status']= $_GET['estado'];}
		if (isset($_GET['dateFrom'])) {$paramsOrder['order.date_created.from']= $_GET['dateFrom'].'T00:00:00.000-00:00';}
		if (isset($_GET['dateTo'])) {$paramsOrder['order.date_created.from']= $_GET['dateTo'].'T00:00:00.000-00:00';}
		if (isset($_GET['estado'])) {$paramsOrder['order.status']= $_GET['estado'];}
		if (isset($_GET['calif'])) {$paramsOrder['feedback.status']= $_GET['calif'];}
		if (isset($_GET['envio'])) {$paramsOrder['shipping.status']= $_GET['envio'];}
	}
	$paramsOrder['sort']= 'date_desc';
	$ordenesM= $meli->get('/orders/search/'.$_GET['tipo'],$paramsOrder);
	$ordenes=json_decode(json_encode($ordenesM['body']->results), true);
	$ordenesFail=json_decode(json_encode($ordenesM['body']), true);
	$total=json_decode(json_encode($ordenesM['body']->paging), true);

	$cantidadPaginas= round($total['total']/50);
	// probar($ordenes);
	if ($ordenesFail['message']=='invalid_token') {
		echo "<script>alert('Token Vencido, Reiniciar sesión.'); document.location=('acciones/login-usuarios.php?id=2')</script>";
	}

?> 
<!-- https://api.mercadolibre.com/shipment_labels?shipment_ids=20178600648,20182100995&response_type=pdf -->
<form action="moduloML/ordenes/printEtiquetas.php" method="post" target="_blank">


<?php
	foreach ($ordenes as $key) {
	$articuloEnBase= $objArticulo->verArticuloPorIdML($key['order_items'][0]['item']['id']);
	$linkABase= (!$articuloEnBase)?'':' <a data-toggle="tooltip" data-placement="top" data-original-title="Ver producto en mi base" href="misArticulos.php?s=verArticuloML&id='.$articuloEnBase['idART'].'"><i class="fa fa-link"></i></a>  <a target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Ver producto en MercadoLibre" href="'.$articuloEnBase['perma_link'].'"><i class="fa fa-external-link"></i></a>';
?>
	<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		  <div class="panel-heading" style="text-transform: uppercase;"><input type="checkbox" class="switch" name="idsEtiqueta[]" data-on-text="SI" data-off-text="NO" data-on-color="teal" value="<?php echo $key['shipping']['id']; ?>"> <a href="ML-ordenes.php?s=verorden&id=<?php echo $key['id']; ?>"><?php echo $key['buyer']['first_name'].' '.$key['buyer']['last_name'].' #'.$key['id']; ?></a></div>
		  <div class="panel-body">
			<div class="col-lg-4">
				<p>
					<i class="fa fa-user"></i> <?php echo $key['buyer']['nickname']; ?> <br>
					<i class="fa fa-phone"></i> <?php echo $key['buyer']['phone']['number']; ?> <br>
					<i class="fa fa-comments"></i> <a href="ML-ordenes.php?s=verorden&id=<?php echo $key['id']; ?>">Mensajes</a>
				</p>
			</div>
			<div class="col-lg-4">
				<b><?php echo $key['order_items'][0]['item']['title']; ?></b>
				<?php echo $linkABase; ?>
				 <br>
				SKU: <?php echo $key['order_items'][0]['item']['seller_custom_field']; ?> <br>
				Precio Unitario: $ <?php echo $key['order_items'][0]['unit_price']; ?>.- <br>
				Cantidad: <?php echo $key['order_items'][0]['quantity']; ?> <br>
				Total Compra: $ <?php echo $key['total_amount']; ?>.- 
			</div>
			<div class="col-lg-4">
				<i class="fa fa-money"></i> Total a pagar: $<?php echo $key['total_amount'].' <br>'.$key['payments'][0]['payment_method_id'].' ($'.$key['payments'][0]['transaction_amount'].' -ID'.$key['payments'][0]['id'].')'; ?> <br>
<?php 
if (isset($key['payments'][1]['status'])) {
	echo $key['payments'][1]['payment_method_id'].' ($'.$key['payments'][1]['transaction_amount'].'- ID'.$key['payments'][1]['id'].') <br>';
}
if (isset($key['payments'][2]['status'])) {
	echo $key['payments'][2]['payment_method_id'].' ($'.$key['payments'][2]['transaction_amount'].'- ID'.$key['payments'][2]['id'].') <br>';
}
$totalPagos= $key['payments'][0]['transaction_amount']+$key['payments'][1]['transaction_amount']+$key['payments'][2]['transaction_amount'];
	echo '<b>Total Pagos Recibidos:</b> $ '.$totalPagos.'<br>';
if ($envios[$key['shipping']['status']]=='Imprimir Etiqueta') {
 ?>
				<i class="fa fa-truck"></i><a target="_blank" href="moduloML/ordenes/etiqueta.php?id=<?php echo $key['shipping']['id']; ?>"><i></i> Imprimir Etiqueta</a><br>
 <?php 
}
else {
  ?>
				<i class="fa fa-truck"></i> <?php echo $envios[$key['shipping']['status']].'($'.$key['shipping']['cost'].')'; ?><br>
  <?php 
}
   ?>
   				<!-- <i class="fa fa-motorcycle"></i> -->
   				<?php if ($key['shipping']['shipping_option']['name']): ?>
   				Metodo de envio: <br>
   				<?php echo $key['shipping']['shipping_option']['name']; ?>   					
   				<?php endif ?>
			</div>
		  </div>
		</div>
	</div>
	</div>


<?php
	}
 ?>

 <button type="submit" class="btn btn-teal"><i class="fa fa-print"></i> IMPRIMIR</button>

</form>
</div>



