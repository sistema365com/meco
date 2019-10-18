<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.plantilla.php';

$objPlantilla= new Plantilla();


if ($_POST['nuevoRegistro']=='ok') {
	if ($_POST['tipo']=='mensajes') {
		$add= $objPlantilla->addMensaje();
		if ($add) {
			header('Location: ../../ML-plantillas.php?s=mensajesPre&alerta=creado');
		}
		else{
			header('Location: ../../ML-plantillas.php?s=mensajesPre&alerta=error');
		}
	}
	if ($_POST['tipo']=='respuesta') {
		$add= $objPlantilla->addRespuesta();
		if ($add) {
			header('Location: ../../ML-plantillas.php?s=respuestasPre&alerta=creado');
		}
		else{
			header('Location: ../../ML-plantillas.php?s=respuestasPre&alerta=error');
		}
	}
}

if ($_POST['nuevoRegistro']=='no'){
	if ($_POST['tipo']=='mensajes') {
		$add= $objPlantilla->editaMensaje();
		if ($add) {
			header('Location: ../../ML-plantillas.php?s=mensajesPre&alerta=editado');
		}
		else{
			header('Location: ../../ML-plantillas.php?s=mensajesPre&alerta=error');
		}
	}
	if ($_POST['tipo']=='respuesta') {
		$add= $objPlantilla->editaRespuesta();
		if ($add) {
			header('Location: ../../ML-plantillas.php?s=respuestasPre&alerta=editado');
		}
		else{
			header('Location: ../../ML-plantillas.php?s=respuestasPre&alerta=error');
		}
	}
}

if ($_GET['borrarRespuesta']=='ok') {
	$elimina= $objPlantilla->eliminaRespuesta($_GET['id']);
		if ($elimina) {
			header('Location: ../../ML-plantillas.php?s=respuestasPre&alerta=borrar');
		}
		else{
			header('Location: ../../ML-plantillas.php?s=respuestasPre&alerta=error');
		}
}
if ($_GET['borrarMensaje']=='ok') {
	$elimina= $objPlantilla->eliminaMensaje($_GET['id']);
		if ($elimina) {
			header('Location: ../../ML-plantillas.php?s=mensajesPre&alerta=borrar');
		}
		else{
			header('Location: ../../ML-plantillas.php?s=mensajesPre&alerta=error');
		}
}
if ($_POST['configMA']==1) {
	$elimina= $objPlantilla->cargarMensajesAutomaticos();
		if ($elimina) {
			header('Location: ../../ML-plantillas.php?s=otrasPlantillas&alerta=editado');
		}
		else{
			header('Location: ../../ML-plantillas.php?s=otrasPlantillas&alerta=error');
		}
}




 ?>


