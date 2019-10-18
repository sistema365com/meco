<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../../class/Useradmin.php';
include '../../class/Generico.php';
include '../../class/class.upload.php';
include '../../includes/funciones.php';
include '../../includes/configuraciones.php';
$usuario= new Useradmin();


// $user= 'jg.pradi@gmail.com';
// $pass= 'tablones';
$id= $_POST['user'];
$pass2= $_POST['pass2'];
$pass3= $_POST['pass3'];


if (!$pass2 || !$pass3) {
echo "<script>alert('algun campo esta vacio'); document.location=('../../usuarios.php?s=verUsuario&id=".$id."&alerta=error')</script>";
exit();

}


	if ($pass2==$pass3){

	$editaUser= $usuario->cambiaPass($pass2,$id,$_SESSION['prefijo']);
	if ($editaUser) {
	echo "<script>alert('Cambiaste tu contraseña correctamente'); document.location=('../../usuarios.php?s=verUsuario&id=".$id."&alerta=editado')</script>";
	}
	else {
	echo "<script>alert('Error intentalo de nuevo o contactate con nosotros'); document.location=('../../usuarios.php?s=verUsuario&id=".$id."&alerta=error')</script>";

	}
	}
	else {
	echo "<script>alert('La contraseña nueva no coincide'); document.location=('../../usuarios.php?s=verUsuario&id=".$id."&alerta=error')</script>";
	}





 ?>

<a href="../mi-carrito">volver a inicio</a>