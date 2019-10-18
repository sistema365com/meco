
<?php 
	$anualMeses = array(
		1 => array(
			'inicio' => '2017-01-01',
			'fin' => '2017-01-31',
			 ), 
		2 => array(
			'inicio' => '2017-02-01',
			'fin' => '2017-02-28',
			 ),
		3 => array(
			'inicio' => '2017-03-01',
			'fin' => '2017-03-31',
			 ),
		4 => array(
			'inicio' => '2017-04-01',
			'fin' => '2017-04-30',
			 ),
		5 => array(
			'inicio' => '2017-05-01',
			'fin' => '2017-05-31',
			 ),
		6 => array(
			'inicio' => '2017-06-01',
			'fin' => '2017-06-30',
			 ),
		7 => array(
			'inicio' => '2017-07-01',
			'fin' => '2017-07-31',
			 ),
		8 => array(
			'inicio' => '2017-08-01',
			'fin' => '2017-08-31',
			 ),
		9 => array(
			'inicio' => '2017-09-01',
			'fin' => '2017-09-30',
			 ),
		10 => array(
			'inicio' => '2017-10-01',
			'fin' => '2017-10-31',
			 ),
		11 => array(
			'inicio' => '2017-11-01',
			'fin' => '2017-11-30',
			 ),
		12 => array(
			'inicio' => '2017-12-01',
			'fin' => '2017-12-31',
			 ),
		);
	$idUserML= Configuracion::verConfigu();
	for ($i=1; $i <= count($anualMeses); $i++) { 
		$paramsOrder['date_from']= $anualMeses[$i]['inicio'].'T00:00:00.000-00:00';
		$paramsOrder['date_to']= $anualMeses[$i]['fin'].'T23:55:00.000-00:00';
		$ordenesM= $meli->get('/users/'.$idUserML['mlUserId'].'/items_visits',$paramsOrder);
		$visitas[] = array(
			'fecha' => $anualMeses[$i]['fin'],
			'valor' => $ordenesM['body']->total_visits,
			 );
	}
	probar($visitas);
				// **************** INICIO: guardado de ordenes
				$objOrdenes= new Ordenes();
				// finalmente lo guardo si existe el array guardar
				for ($i=0; $i < count($visitas); $i++) { 
					if ($visitas[$i]['valor']!=0) {
					$guardaBD= $objOrdenes->altaVisitas($visitas[$i]);
					}
				}
				// **************** FINAL: guardado de ordenes

?> 

