<?php 
session_start();
include '../class/Conexion.php';
include '../class/Configuracion.php';
include '../includes/configuraciones.php';
include '../includes/funciones.php';
include 'class.notificaciones.php';


$objNotificaciones= new Notificaciones();

$marcarTodas= $objNotificaciones->marcarTodas($_SESSION['empresa']);

header('Location: ../inicio.php?todas=1');

 ?>