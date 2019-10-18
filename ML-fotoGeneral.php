<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }

require 'moduloML/php-sdk-master/Meli/meli.php';
include 'class/Autocarga.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include'includes/configuraciones.php';
include'includes/funciones.php';
include 'moduloML/chonML.php';


$titulo= 'Foto General';
$scriptFooter= false;


include $templates.'/header.php';
if ($_SESSION['permisos']==0001 || $_SESSION['permisos']==0002) {
include 'includes/alertas.php';

/**
* 
*/
class Plantilla
{
    public function guardar()
    {
        $link=Conexion::conectarK();
        $query='UPDATE user_config SET 
        header="'.$_POST['header'].'", 
        footer="'.$_POST['footer'].'"  
        WHERE id_admin="'.$_SESSION['empresa'].'"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        return true;
    }
	public function guardarFoto($id)
	{
        $link=Conexion::conectarK();
        $query='UPDATE user_config SET 
        fotoGeneral="'.$id.'", 
        fotoGeneralURL="'.$_POST['link'].'" 
        WHERE id_admin="'.$_SESSION['empresa'].'"';
        $stmt=$link->prepare($query);
        $resultado= $stmt->execute();
        return true;
	}
	public function verPlantilla()
	{
        $link=Conexion::conectarK();
        $query= "SELECT * FROM user_config where id_admin='".$_SESSION['empresa']."'";
        $stmt=$link->prepare($query);
        $stmt->execute();
        $resultado=$stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
	}
	
}

$objPlantilla= new Plantilla();


$usuarioML= Configuracion::verConfigu();
$params = array(
'access_token' => $_SESSION['access_token']
);
$data['source'] = $_POST['link'];
$desc1 = $meli->post('pictures?access_token='.$_SESSION['access_token'], $data);
$desc=json_decode(json_encode($desc1['body']), true);
$guardarFoto= $objPlantilla->guardarFoto($desc['id']);

 ?>
<div class="row">
    <div class="col-lg-12">
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Creado correctamente</strong> Cargaste una foto General correctamente
                </div>
    </div>
</div>


<?php 
// fin de llave si se guardo o no
}
else {
    echo "No tenes permiso para ver esta sección";
}

include $templates.'/footer.php';


 ?>