<?php 
// session_start();
require '../class/Conexion.php';
require '../class/Useradmin.php';
$usuario= new Useradmin();

if ($_GET['id']==2) {
	@session_start();
	@session_destroy();
	header('Location: ../index.php');
}
// $user= 'jg.pradi@gmail.com';
// $pass= 'tablones';
$user= $_POST['user'];
$pass= $_POST['password'];


$prueba= $usuario->login($user, $pass);

if ($prueba['nombre']) {
	header('Location: ../ML-inicio.php');
}
else {
	echo "<script>alert('Usuario incorrecto o contraseña incorrecta'); document.location=('../index.php')</script>";
}





 ?>

<a href="../index.php">volver a inicio</a>