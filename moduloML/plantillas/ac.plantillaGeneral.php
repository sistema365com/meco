<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.plantilla.php';

$objPlantilla= new Plantilla();


if ($_POST['editar']==1) {
	$guardarS= $objPlantilla->editarSaludo('saludoInicial',$_POST['saludoInicial']);
	$guardarF= $objPlantilla->editarSaludo('firma',$_POST['firma']);

	header('Location: ../../ML-plantillas.php?s=otrasPlantillas&alerta=creado');
	exit();
}


if ($_GET['borrar']=1) {
	$borrar= $objPlantilla->borrarSaludos($_SESSION['empresa']);
	header('Location: ../../ML-plantillas.php?s=otrasPlantillas&alerta=editado');
	exit();
}




 ?>