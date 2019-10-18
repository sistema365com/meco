<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.variaciones.php';
include '../funciones.php';

$campos= unserialize($_POST['campos']);
for ($i=0; $i <= count($campos); $i++) {
		if ($_POST[$campos[$i]]!='') {
			if (is_array($_POST[$campos[$i]])) {
				for ($i2=0; $i2 < count($_POST[$campos[$i]]); $i2++) { 
					$variaciones[] = array(
		              'attribute_combinations'=> array(array(
			                  'name' => $campos[$i], 
			                  'value_name' => $_POST[$campos[$i]][$i2], 
	                  	)), 
	                  'price'=>$_POST['precio'], 
	                  'available_quantity'=>$_POST['stock'], 
	                  'sold_quantity'=>$_POST['stock'], 
	                  'picture_ids'=> array($_POST[$_POST[$campos[$i]][$i2].'-imgVariacion']), 
	                  );
				}
			}
			else {
				if ($_POST[$campos[$i].'-boolean']=='id') {
				 	$attributes[] = array(
				 		'id' => $campos[$i], 
				 		'value_id' => $_POST[$campos[$i]], 
				 		);
				}
				else {
				 	$attributes[] = array(
				 		'id' => $campos[$i], 
				 		'value_name' => $_POST[$campos[$i]], 
				 		);
			 	}
		 	}
		 } 
}

// probar($variaciones);
// probar(json_encode($attributes));

// guardar atributos**************
	$objAtributos= new Variaciones();
if (isset($attributes)) {
	$guardado= $objAtributos->addAtributo($_POST['idART'],$attributes);
	if ($guardado) {
		echo "Atributos Guardados Correctamente <br>";
	}
	else { echo "<span style='color:red;'>Error al guardar Atributo</span><br>";}
}
// guardar variaciones**************
if (isset($variaciones)) {
	$guardado= $objAtributos->addVariacion($_POST['idART'],$variaciones);
	if ($guardado) {
		echo "Variaciones Guardadas Correctamente <br>";
	}
	else { echo "<span style='color:red;'>Error al guardar Variacion</span><br>";}
}


 ?>