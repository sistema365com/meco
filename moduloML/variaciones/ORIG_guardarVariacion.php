<?php 
session_start();
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
	                  'picture_ids'=> array($_POST[$campos[$i].'-imgVariacion']), 
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
if (file_exists('A'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json')) {
	unlink('A'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json');
}
if (isset($attributes)) {
	file_put_contents('A'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json',json_encode($attributes));
}
// guardar variaciones**************
if (file_exists('B'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json')) {
	unlink('B'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json');
}
if (isset($variaciones)) {
	file_put_contents('B'.$_POST['idART'].'_'.$_SESSION['empresa'].'.json',json_encode($variaciones));
}

echo "Guardado Correctamente";

 ?>