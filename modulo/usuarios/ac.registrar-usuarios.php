<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include '../../class/Useradmin.php';
include '../../class/Generico.php';
include '../../class/class.upload.php';
include '../../includes/funciones.php';
include '../../includes/configuraciones.php';
$objNota= new Useradmin();

$nuevoRegistro= $_POST['nuevoRegistro'];
$borrarRegistro= $_GET['borrarRegistro'];
$idNotaGET = $_GET[ID];


// capturo variables
	$userId= $_POST[ID];
	$usuario= $_POST[USER];
	$imgName= urls_amigables($_POST[USER]);
	$pass= $_POST[PASS];
	$pass2= $_POST['pass2'];
	$nombre= $_POST[NOMBRE];
	$apellido= $_POST[APELLIDO];
	$email= $_POST[EMAIL];
	$telefono= $_POST[TELEFONO];
	$permisos= implode(',', $_POST[PERMISOS]);


if ($borrarRegistro) {
        if ($idNotaGET==$_SESSION['usuario_logueado']) {
        echo "<script>alert('No puede eliminarse a usted mismo'); document.location=('../verUsuario.php?id=".$id."&alerta=error')</script>";
        exit();
        }
        $borrar= $objNota->borrarUser($idNotaGET);
        if ($borrar) {
            header('Location: ../../usuarios.php?alerta=borrar');
        }
        else {
            echo "error al borrar";
        }
}
else {




// validaciones
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<script>alert('El correo ingresado no es una direccion valida'); document.location=('../verUsuario.php?id=".$id."&alerta=error')</script>";
		exit();
	}
	// if ($validar==1) {
	// 	echo "<script>alert('El correo electronico ya se encuentra registrado, recupera tu contraseña'); document.location=('../verUsuario.php?id=".$id."&alerta=error')</script>";
	// 	exit();
	// }
	if ($pass != $pass2) {
		echo "<script>alert('Las contraseñas ingresadas deben ser iguales'); document.location=('../verUsuario.php?id=".$id."&alerta=error')</script>";
		exit();
	}
	if (!$nombre) {
		echo "<script>alert('Falta completar el Nombre'); document.location=('../verUsuario.php?id=".$id."&alerta=error')</script>";
		exit();
	}
	if (!$email) {
		echo "<script>alert('Falta completar el Correo electronico'); document.location=('../verUsuario.php?id=".$id."&alerta=error')</script>";
		exit();
	}
	

	else {

if (!$nuevoRegistro) {
    $edita= $objNota->editaUser($userId,$usuario,$nombre,$apellido,$email,$telefono,$permisos,$_SESSION['prefijo']);
    if ($edita) {
                        $image = new Upload($_FILES["image"]);
                        if($image->uploaded){
                            if (file_exists('../img/users/'.$imgName.'.jpg')){
                                unlink('../img/users/'.$imgName.'.jpg');
                            }
                            // pongo nombre a la imagenes
                            $image->file_new_name_body= $imgName;
                            // calidad de imagenes
                            $image->image_resize= true;
                            $image->images_x = 300;
                            $image->images_y = 300;
                            // convertir imagen a
                            $image->image_convert= 'jpg';
                            // guardar imagen en
                            $image->Process("../img/users/");
                            if($image->processed){
                            }
                            else{
                                echo "<script>alert('error al cargar foto, intente nuevamente".$image->error."'); document.location=('../usuarios.php')</script>";
                            }
                        }
        if ($_POST['tipoEdicion']== 'userAdmin') {
        header('Location: ../../usuarios.php?s=verUsuarios&alerta=editado');
        }
        else
        header('Location: ../../usuarios.php?s=miPerfil&alerta=editado');
    }
    else { echo "error de carga";}
}
elseif ($nuevoRegistro) {
    $crear= $objNota->registrar($usuario,$pass,$nombre,$apellido,$email,$telefono,$permisos,$_SESSION['prefijo']);
    if ($crear) {
                
                        $image = new Upload($_FILES["image"]);
                        if($image->uploaded){
                            if (file_exists('../img/users/'.$imgName.'.jpg')){
                                unlink('../img/users/'.$imgName.'.jpg');
                            }
                            // pongo nombre a la imagenes
                            $image->file_new_name_body= $imgName;
                            // calidad de imagenes
                            $image->image_resize= true;
                            $image->images_x = 300;
                            $image->images_y = 300;
                            // convertir imagen a
                            $image->image_convert= 'jpg';
                            // guardar imagen en
                            $image->Process("../img/users/");
                            if($image->processed){
                            }
                            else{
                                echo "<script>alert('error al cargar foto, intente nuevamente".$image->error."'); document.location=('../notas.php')</script>";
                            }
                        }
        header('Location: ../../usuarios.php?s=verUsuarios&alerta=creado');
    }
    else { echo "error de carga";}
}


	}



}



 ?>

<a href="../../usuarios.php?s=verUsuarios">volver a inicio</a>