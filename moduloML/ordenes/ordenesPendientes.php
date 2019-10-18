
<?php 
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
		$paramsOrder['feedback.status']= 'pending';
	}
	if (isset($_GET['filtro'])) {
		if (isset($_GET['estado'])) {$paramsOrder['order.status']= $_GET['estado'];}
		if (isset($_GET['dateFrom'])) {$paramsOrder['order.date_created.from']= $_GET['dateFrom'].'T00:00:00.000-00:00';}
		if (isset($_GET['dateTo'])) {$paramsOrder['order.date_created.from']= $_GET['dateTo'].'T00:00:00.000-00:00';}
		if (isset($_GET['estado'])) {$paramsOrder['order.status']= $_GET['estado'];}
		if (isset($_GET['calif'])) {$paramsOrder['feedback.status']= 'pending';}
		if (isset($_GET['envio'])) {$paramsOrder['shipping.status']= 'ready_to_ship,to_be_agreed';}
	}
	$paramsOrder['sort']= 'date_desc';
	$paramsOrder['feedback.status']= 'pending';
	$paramsOrder['shipping.status']= 'to_be_agreed,ready_to_ship';
	$ordenesM= $meli->get('/orders/search/'.$_GET['tipo'],$paramsOrder);
	$ordenes=json_decode(json_encode($ordenesM['body']->results), true);
	$ordenesFail=json_decode(json_encode($ordenesM['body']), true);
	$total=json_decode(json_encode($ordenesM['body']->paging), true);

	$cantidadPaginas= round($total['total']/50);
	// probar($ordenesM);
	if ($ordenesFail['message']=='invalid_token') {
		echo "<script>alert('Token Vencido, Reiniciar sesión.'); document.location=('acciones/login-usuarios.php?id=2')</script>";
	}

?> 

<div class="row">
	<div class="col-lg-12">
		<form action="">
		<input type="hidden" name="s" value="ordenesPendientes">
		<input type="hidden" name="filtro" value="1">
			<label for="">Ordenes <?php echo ' ('.count($ordenes).') '; ?></label> 
			<input <?php if($_GET['tipo']=='recent'){echo "checked";} ?> type="radio" name="tipo" value="recent"> Abiertas
			<input <?php if($_GET['tipo']=='archived'){echo "checked";} ?> type="radio" name="tipo" value="archived"> Cerradas
			<label for="">Cobros </label>
			<select name="estado" id="">
				<option value="">Todos</option>
				<option <?php if($_GET['estado']=='confirmed'){echo "selected";} ?> value="confirmed">A cobrar</option>
				<option <?php if($_GET['estado']=='paid'){echo "selected";} ?> value="paid">Cobrados</option>
			</select>
			<label for="">Calificaciones </label>
			<select name="calif" id="">
				<option value="">Todos</option>
				<option <?php if($_GET['calif']=='pending'){echo "selected";} ?> value="pending">Sin calificar</option>
				<option <?php if($_GET['calif']=='waiting_buyer'){echo "selected";} ?> value="waiting_buyer">Calificado</option>
				<option <?php if($_GET['calif']=='contradictory'){echo "selected";} ?> value="contradictory">Contradictorias</option>
			</select>
			<label for="">Envios </label>
			<select name="envio" id="">
				<option value="">Todos</option>
				<option <?php if($_GET['envio']=='to_be_agreed'){echo "selected";} ?> value="to_be_agreed">Lo Retira</option>
				<option <?php if($_GET['envio']=='ready_to_ship'){echo "selected";} ?> value="ready_to_ship">Etiqueta Para Imprimir</option>
				<option <?php if($_GET['envio']=='pending'){echo "selected";} ?> value="pending">Envios Pendientes</option>
				<option <?php if($_GET['envio']=='shipped'){echo "selected";} ?> value="shipped">En Camino</option>
				<option <?php if($_GET['envio']=='delivered'){echo "selected";} ?> value="delivered">Entregados</option>
				<option <?php if($_GET['envio']=='not_delivered'){echo "selected";} ?> value="not_delivered">No Entregados</option>
			</select>
			

			<input type="submit" value="Filtrar">
		</form>
	</div>
</div>




<?php
	foreach ($ordenes as $key) {
?>
	<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		  <div class="panel-heading" style="text-transform: uppercase;"><a href="ML-ordenes.php?s=verorden&id=<?php echo $key['id']; ?>"><i class="fa fa-link"></i> <?php echo $key['buyer']['first_name'].' '.$key['buyer']['last_name'].' #'.$key['id']; ?></a></div>
		  <div class="panel-body">
			<div class="col-lg-4">
				<p>
					<i class="fa fa-user"></i> <?php echo $key['buyer']['nickname']; ?> <br>
					<i class="fa fa-phone"></i> <?php echo $key['buyer']['phone']['number']; ?> <br>
					<i class="fa fa-id-card-o"></i> <?php echo $key['buyer']['billing_info']['doc_type'].' '.$key['buyer']['billing_info']['doc_number']; ?> <br>
					<i class="fa fa-comments"></i> <a href="ML-ordenes.php?s=verorden&id=<?php echo $key['id']; ?>">Mensajes</a>
				</p>
			</div>
			<div class="col-lg-4">
				<b><?php echo $key['order_items'][0]['item']['title']; ?></b> <br>
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
<!-- Modal formulario entrega de producto -->
<div id="myModal<?php echo $key['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confeccionar Etiqueta para retiro de producto</h4>
      </div>
        <div class="modal-body">
				<form target="_blank" action="ordenes/entregaProducto.php" method="POST">
					<input type="hidden" name="ciudad" value="<?php echo $ciudad['ciudad']; ?>">
					<input type="hidden" name="telefono" value="<?php echo $key['buyer']['phone']['number']; ?>">
					<input type="hidden" name="articulo" value="<?php echo $key['order_items'][0]['item']['title']; ?>">
					<input type="hidden" name="operacion" value="<?php echo $key['id']; ?>">
					<input type="hidden" name="vendedor" value="<?php echo $key['seller']['nickname']; ?>">
					<input type="hidden" name="comprador" value="<?php echo $key['buyer']['nickname']; ?>">
					<label for="">Fecha</label>
					<input type="date" name="fecha" class="form-control" value="<?php echo $hoy; ?>">
					<label for="">Nombre de quien retira</label>
					<input type="text" name="nombreRetira" class="form-control" value="<?php echo $key['buyer']['first_name'].' '.$key['buyer']['last_name']; ?>">
					<label for="">Número de documento</label>
					<input type="number" name="numeroDocumento" class="form-control" value="<?php echo $key['buyer']['billing_info']['doc_number']; ?>">
					<label for="">Dirección de entrega</label>
					<input type="text" name="direccion" class="form-control" value="<?php echo $key['shipping']['receiver_address']['address_line'].' ('.$key['shipping']['receiver_address']['city']['name'].')'; ?>">
        </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Vista Previa</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </form>
      </div>
    </div>
  </div>
</div>


<?php
	}
 ?>


 <?php 
$anterior= $_GET['d']-50;
$siguiente= $_GET['d']+50;
// s=listarOrdenes&tipo=recent&filtro=1&estado=paid&calif=&envio=pending
if (!$_GET['filtro']) {
	$addLink= '';
}
else {
	$addLink='&filtro=1&estado='.$_GET['estado'].'&calif='.$_GET['calif'].'&envio='.$_GET['envio'].'';
}

 ?>
<nav aria-label="...">
  <ul class="pager">
    <li><a href="ML-ordenes.php?s=ordenesPendientes&tipo=recent&d=<?php echo $anterior.$addLink ?>">Anterior</a></li>
    <li><a href="ML-ordenes.php?s=ordenesPendientes&tipo=recent&d=<?php echo $siguiente.$addLink ?>">Siguiente</a></li>
  </ul>
</nav>
</div>



