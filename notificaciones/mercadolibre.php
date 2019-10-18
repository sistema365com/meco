<?php 
$aplicacion = array(
    'ID' => '4282773055253235',
    'KEY' => '6pBbVXfvoetRX682lCHEgMlRy3jU0ojd',
    'URL' => 'https://app.mercadoconnecting.com/checkAPI.php',
 );
// $aplicacion = array(
// 	'ID' => '3661330296299812',
//     'KEY' => 'TQRNCA9hj3L6hB1PNEPD62iF6Sf50S8Q',
// 	'URL' => 'https://ml.kenshopublicidad.com/checkAPI.php',
//  );
$_SESSION['ID']= $aplicacion['ID'];
$_SESSION['KEY']= $aplicacion['KEY'];
$_SESSION['URL']= $aplicacion['URL'];
$meli = new Meli($aplicacion['ID'],$aplicacion['KEY'],$token, $refresh_token);
$todosLosToken= Configuracion::verIDML($user_id);
if ($todosLosToken['ac_token']!='') {
	if ($token!='') {
  	$timeActual= time();   // Obtenemos el timestamp del momento actual
    $timeVencimiento = strtotime($todosLosToken['dateToken']); // Obtenemos timestamp de la fecha de vencimiento
    // Calculamos el número de segundos que tienen esos 6 horas
    $segundos = 18000;

    // Condición: vencido
    if($timeActual-$timeVencimiento > $segundos) {
		$test= $meli->post('https://api.mercadolibre.com/oauth/token?grant_type=refresh_token&client_id='.$aplicacion['ID'].'&client_secret='.$aplicacion['KEY'].'&refresh_token='.$todosLosToken['re_token']);
    	$token= $test['body']->access_token;
    	$refresh_token= $test['body']->refresh_token;
        $guardarTokensGen= Configuracion::actualizarTokensGen($token,$refresh_token,$todosLosToken['id_admin']);
    	}
    }  
    // condicion: activo  
    if ($token=='') {
		$test= $meli->post('https://api.mercadolibre.com/oauth/token?grant_type=refresh_token&client_id='.$aplicacion['ID'].'&client_secret='.$aplicacion['KEY'].'&refresh_token='.$todosLosToken['re_token']);
    	$token= $test['body']->access_token;
    	$refresh_token= $test['body']->refresh_token;
    	$_SESSION['expires_in']= $test['body']->expires_in;
        $guardarTokensGen= Configuracion::actualizarTokensGen($token,$refresh_token,$todosLosToken['id_admin']);
    }
}


?>