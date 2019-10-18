<?php
	
	function miAutocargador($nombreClase){
		//include_once "clases/". $nombreClase . ".php";
		// include_once "class/". $nombreClase . ".php";
		include_once 'class/'.$nombreClase . ".php";
	}

	spl_autoload_register("miAutocargador");

?>

