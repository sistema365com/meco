<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
include 'class/Autocarga.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'includes/configuraciones.php';
include 'includes/funciones.php';



$titulo= 'Usuarios';
$scriptFooter= false;

include $templates.'/header.php';

include 'modulo/usuarios/alertas.php';


switch ($_GET['s']) {
    case 'verUsuarios':
        include 'modulo/usuarios/usuarios.php';
        break;
    case 'verUsuario':
        include 'modulo/usuarios/verUsuario.php';
        break;
    case 'miPerfil':
        include 'modulo/usuarios/mi-perfil.php';
        break;
    
    default:
        include 'modulo/usuarios/usuarios.php';
        break;
}



 ?>



 <script type="text/javascript">
        document.getElementById('iconoHeader').className='fa fa-users';
 </script>




<?php 

include $templates.'/footer.php';


 ?>