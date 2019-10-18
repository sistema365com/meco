
<?php 
$confi= Configuracion::verConfigu();
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
	$total=json_decode(json_encode($ordenesM['body']->paging), true);

	$cantidadPaginas= round($total['total']/50);
	// echo "<pre>";
	// print_r($ordenesM);
	// echo "</pre>";
?> 


<h3>Selecciona los usuarios a los que quiere calificar</h3>


<?php
	foreach ($ordenes as $key) {
		$todasLasOrdenes[]= $key['id'];
?>
	<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		  <div class="panel-heading" style="text-transform: uppercase;">
		  <button id="s<?php echo $key['id']; ?>" onclick="seleccionados(<?php echo $key['id']; ?>)"><i class="fa fa-check-square"></i></button> 
		  <button onclick="borrar(<?php echo $key['id']; ?>)"><i class="fa fa-minus-square"></i></button> 

		  <a href="ML-ordenes.php?s=verorden&id=<?php echo $key['id']; ?>"><i class="fa fa-link"></i> <?php echo $key['buyer']['first_name'].' '.$key['buyer']['last_name']; ?></a></div>
		  <div class="panel-body">
			<div class="col-lg-3">
				<p>
					<i class="fa fa-user"></i> <?php echo $key['buyer']['nickname']; ?> <br>
					<i class="fa fa-phone"></i> <?php echo $key['buyer']['phone']['number']; ?> <br>
					<i class="fa fa-comments"></i> <a href="ML-ordenes.php?s=verorden&id=<?php echo $key['id']; ?>">Mensajes</a>
				</p>
			</div>
			<div class="col-lg-3">
				<b><?php echo $key['order_items'][0]['item']['title']; ?></b> <br>
				Precio Unitario: <?php echo $key['order_items'][0]['unit_price']; ?> <br>
				Cantidad: <?php echo $key['order_items'][0]['quantity']; ?> <br>
				SKU: <?php echo $key['order_items'][0]['item']['seller_custom_field']; ?>
			</div>
			<div class="col-lg-2">
				<i class="fa fa-money"></i> <?php echo $key['payments'][0]['status'].' ('.$key['payments'][0]['payment_method_id'].')'; ?> <br>
				<i class="fa fa-truck"></i> <?php echo $envios[$key['shipping']['status']]; ?><br>
			</div>
			<div class="col-lg-4">
			<?php 
				$raitings = array(
					'positive' => '<i class="fa fa-thumbs-up"></i> Positivo', 
					'negative' => '<i class="fa fa-thumbs-down"></i> Negativo</a>', 
					'neutral' => '<i class="fa fa-meh-o"></i> Neutral</a>', 
					);
				if (isset($key['feedback']['sale'])) {
					echo "Calificaste: ".$raitings[$key['feedback']['sale']['rating']];
				}
				else {
			 ?>
				<label for="">Calificar: </label>
				<a onclick="return confirm('Esto calificara automaticamente con el mensaje de calificación que guardaste en configuraciones')" style="color: green;" href="moduloML/ordenes/ac.calificar.php?c=positive&o=<?php echo $key['id']; ?>&comprador=<?php echo $key['buyer']['id']; ?>"><i class="fa fa-thumbs-up"></i> Positivo</a> |
<!-- 				<a style="color: blue;" href=""><i class="fa fa-meh-o"></i> Neutral</a> |
				<a style="color: red;" href=""><i class="fa fa-thumbs-down"></i> Negativo</a> -->
			<?php } ?>
			</div>
		  </div>
		</div>
	</div>
	</div>


<?php
	}
 ?>

<div class="row">
	<div class="col-lg-12">
	<h3>Configurar Calificación:</h3>
	<form action="moduloML/ordenes/ac.calificar.php" method="post">
	<div class="col-lg-6">
		<input type="hidden" id="displayCalificar" name="elegidos">
		<label for="">Calificación:</label>
		<select onchange="calificacion()" class="form-control" name="c" id="c">
			<option value="">Elegir</option>
			<option value="positive">Positiva</option>
			<option value="neutral">Neutral</option>
			<option value="negative">Negativa</option>
		</select>
	</div>
	<div class="col-lg-6">
		<label for="">Concreto la venta</label><br>
		<input type="radio" name="concreto" value="si" onclick="ocultar();"> SI
		<input type="radio" name="concreto" value="no" onclick="muestra();"> NO
	</div>
	<div class="col-lg-12">
		<div id="motivo" style="display: none">
			<label for="">Motivo</label>
			<select class="form-control" name="reasons" id="reasons">
				<option value>Elegir</option>
				<option value="SELLER_OUT_OF_STOCK" id="outOfStock">Me quedé sin stock</option>
				<option value="SELLER_DIDNT_TRY_TO_CONTACT_BUYER">Decidí no venderlo</option>
				<option value="BUYER_NOT_ENOUGH_MONEY">El comprador se arrepintió</option>
			</select>
		</div>
		<label for="">Mensaje calificación:</label>
		<textarea class="form-control" name="texto" id="texto" rows="5"></textarea><br>
		<input type="submit" value="Enviar Calificaciones" class="btn btn-primary">
	</div>
	</form>
	</div>
</div>











<script type="text/javascript"> 
	var mostrar= [];
	getElementById('displayCalificar').value= mostrar;
	function seleccionados(valor){
		mostrar.push(valor);
		document.getElementById("displayCalificar").value = mostrar;
		document.getElementById("s"+valor).style = 'color:green';
	}
	function borrar(valor){
		var borrando= mostrar.indexOf(valor);
		mostrar.splice(borrando,1);
		document.getElementById("displayCalificar").value = mostrar;
		document.getElementById("s"+valor).style = 'color:none';
	}
	function muestra(){
		document.getElementById("motivo").style = 'display:block';
	}
	function ocultar(){
		document.getElementById("motivo").style = 'display:none';
	}
	function calificacion(){
		var eleccion= document.getElementById('c').value;
		if (eleccion=='positive') {
			document.getElementById('texto').value= '<?php echo $confi['mensajePositivo']; ?>';
		}
	}

</script> 


