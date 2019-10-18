
<?php 
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
	}
	$paramsOrder['order.status']= 'paid';
	$paramsOrder['sort']= 'date_asc';
	$paramsOrder['order.date_created.from']= $_GET['dateFrom'].'T00:00:00.000-00:00';
	$paramsOrder['order.date_created.to']= $_GET['dateTo'].'T23:55:00.000-00:00';
	$ordenesM= $meli->get('/orders/search/',$paramsOrder);
	$ordenes=json_decode(json_encode($ordenesM['body']->results), true);
	$ordenesFail=json_decode(json_encode($ordenesM['body']), true);
	$total=json_decode(json_encode($ordenesM['body']->paging), true);
	$cantidadPaginas= ceil($total['total']/50);
	// probar($ordenesM);
	echo "suma total: ".array_sum(array_column($ordenes, 'total_amount')).'<br>';
	echo 'Ordenes totales'.$ordenesM['body']->paging->total;
	echo "<br>Cantidad de paginas: ".$cantidadPaginas;
	if ($ordenesFail['message']=='invalid_token') {
		echo "<script>alert('Token Vencido, Reiniciar sesión.'); document.location=('acciones/login-usuarios.php?id=2')</script>";
	}
	for ($i=0; $i < $cantidadPaginas; $i++) { 
		$guardar= '';
		$verificar= '';
		$check= '';
		$yaCreados= '';
		$filtro = array(
			0 => 0, 
			1 => 50, 
			2 => 100, 
			3 => 150, 
			4 => 200, 
			5 => 250, 
			6 => 300, 
			7 => 400, 
			8 => 450, 
			9 => 500, 
			);
		$paramsOrderConsolidada = array(
			'access_token' => $_SESSION['access_token'],
			'seller' => $idUserML,
			);
		$paramsOrderConsolidada['offset']= $filtro[$i];
		$paramsOrderConsolidada['sort']= 'date_asc';
		$paramsOrder['order.status']= 'paid';
		$paramsOrderConsolidada['order.date_created.from']= $_GET['dateFrom'].'T00:00:00.000-00:00';
		$paramsOrderConsolidada['order.date_created.to']= $_GET['dateTo'].'T23:55:00.000-00:00';
		$ordenesMConsolidada= $meli->get('/orders/search/',$paramsOrderConsolidada);
		$ordenesParaGuardar=json_decode(json_encode($ordenesMConsolidada['body']->results), true);
				// **************** INICIO: guardado de ordenes
				$objOrdenes= new Ordenes();
				// verifico ordenes en la base de datos
				foreach ($ordenesParaGuardar as $key) {
					$verificar[]= $key['id'];
				}
				$check= $objOrdenes->checkNumOrdenes($verificar);
				$yaCreados= array_column($check, 'idOrden');
				// recorro el array de ML y si no esta en la orden lo preparo para guardar
				foreach ($ordenesParaGuardar as $key) {
					if (!in_array($key['id'], $yaCreados)) {
						$guardar[]= $key;
					}
				}
				// finalmente lo guardo si existe el array guardar
				(isset($guardar))?$guardaBD= $objOrdenes->altaOrdenInfoMasiva($guardar):'';
				// **************** FINAL: guardado de ordenes
				echo "<br>Cantidad guardada: ".count($guardar);
	}
			
?> 

<div class="row">
	<div class="col-lg-12">
		<form action="ordenes.php" method="GET">
			<input type="hidden" name="s" value="ordenesMensual">
	        <div class="col-lg-2"><label for="">Desde</label></div>
	        <div class="col-lg-2"><input value="<?php echo $_GET['dateFrom']; ?>" type="date" name="dateFrom" class="form-control"></div>
	        <div class="col-lg-2"><label for="">Hasta</label></div>
	        <div class="col-lg-2"><input value="<?php echo $_GET['dateTo']; ?>" type="date" name="dateTo" class="form-control"></div>
	        <div class="col-lg-2"><input type="submit" value="Filtrar"></div>
		</form>
	</div>
</div>


