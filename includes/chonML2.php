<?php 
// $aplicacion = array(
// 	'ID' => '5059930275300953',
// 	'KEY' => 'l69NZmS44dQfsDTHSNxYxmqzlTXtG8rP',
// 	'URL' => 'http://localhost:8888/3-PublicadorML/checkAPI.php',
//  );
$aplicacion = array(
	'ID' => '3661330296299812',
    'KEY' => 'TQRNCA9hj3L6hB1PNEPD62iF6Sf50S8Q',
	'URL' => 'https://ml.kenshopublicidad.com/checkAPI.php',
 );
$_SESSION['ID']= $aplicacion['ID'];
$_SESSION['KEY']= $aplicacion['ID'];
$_SESSION['URL']= $aplicacion['ID'];
$meli = new Meli($aplicacion['ID'],$aplicacion['KEY'],$_SESSION['access_token'], $_SESSION['refresh_token']);
$todosLosToken= Configuracion::configABM();

if ($todosLosToken['ac_token']!='') {
	if ($_SESSION['access_token']!='') {
  	$timeActual= time();   // Obtenemos el timestamp del momento actual
    $timeVencimiento = strtotime($todosLosToken['dateToken']); // Obtenemos timestamp de la fecha de vencimiento
    // Calculamos el número de segundos que tienen esos 6 horas
    $segundos = 18000;

    // Condición: vencido
    if($timeActual-$timeVencimiento > $segundos) {
		$test= $meli->post('https://api.mercadolibre.com/oauth/token?grant_type=refresh_token&client_id='.$aplicacion['ID'].'&client_secret='.$aplicacion['KEY'].'&refresh_token='.$todosLosToken['re_token']);
    	$_SESSION['access_token']= $test['body']->access_token;
    	$_SESSION['refresh_token']= $test['body']->refresh_token;
        $guardarTokensGen= Configuracion::actualizarTokensGen($_SESSION['access_token'],$_SESSION['refresh_token'],$_SESSION['empresa']);
    	}
    }  
    // condicion: activo  
    if ($_SESSION['access_token']=='') {
		$test= $meli->post('https://api.mercadolibre.com/oauth/token?grant_type=refresh_token&client_id='.$aplicacion['ID'].'&client_secret='.$aplicacion['KEY'].'&refresh_token='.$todosLosToken['re_token']);
    	$_SESSION['access_token']= $test['body']->access_token;
    	$_SESSION['refresh_token']= $test['body']->refresh_token;
    	$_SESSION['expires_in']= $test['body']->expires_in;
        $guardarTokensGen= Configuracion::actualizarTokensGen($_SESSION['access_token'],$_SESSION['refresh_token'],$_SESSION['empresa']);
    }
}


?>