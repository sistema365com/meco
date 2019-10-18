<?php 

session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../../class/Useradmin.php';
include '../../class/Generico.php';
include 'class.ayuda.php';
include '../../includes/funciones.php';
include '../../includes/configuraciones.php';
include 'alert-mails.php';

$objNoticias= new Ayuda();



if ($_GET['borrarRegistro']==1) {
	$eliminar= $objNoticias->borrar($_GET['id']);
	if ($eliminar) {
		header('Location: ../../ayudaF.php?s=listar&alerta=ok');
	}
	exit();
}
if ($_GET['borrarRegistro']==2) {
	$eliminar= $objNoticias->abrirTicket($_GET['id']);
	if ($eliminar) {
		header('Location: ../../ayudaF.php?s=listar&alerta=ok');
	}
	exit();
}
if ($_POST['agregarMensaje']==1) {
	$add= $objNoticias->addMensaje($_POST['id']);
	if ($add) {
		header('Location: ../../ayudaF.php?s=listar&alerta=creado');
	}
	exit();
}


if ($_POST['nuevoRegistro']==1) {
	$crear= $objNoticias->crear();
	if ($crear) {
		ticketCreado();
		header('Location: ../../ayudaF.php?s=listar&alerta=creado');
	}
	else{
		header('Location: ../../ayudaF.php?s=listar&alerta=error');
	}

}
if ($_POST['nuevoRegistro']==0) {
	$crear= $objNoticias->editar($_POST['idNoticia']);
	if ($crear) {
		header('Location: ../../noticias.php?s=listar&alerta=editado');
	}
	else{
		header('Location: ../../noticias.php?s=listar&alerta=error');
	}

}




 ?>