<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }

include 'class/Autocarga.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include'includes/configuraciones.php';
include'includes/funciones.php';


$titulo= 'Encabezado y pie de publicaciones';
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
$verPlantilla= Configuracion::verConfigu();;
if ($_GET['guardar']=='ok') {
    $guardarPlantilla= $objPlantilla->guardar();
}
 ?>
<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ¿Que es esto?
                        </div>
                        <div class="panel-body">
                            <p>Aquí puedes cargar en codigo HTML el encabezado y pie de tus publicaciones y solo concentrarte en el contenido de tus articulos.</p>
                        </div>
                    </div>
    </div>
</div>

<div class="row">
<?php 
if ($_GET['guardar']=='ok') {
	echo '<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-info"></i> Guardado con exito!</h4>
                  </div>';
}
else {

 ?>
	<div class="col-lg-6">
	<form action="?guardar=ok" method="post">
		<h3>Encabezado de Anuncios</h3>
		<p>Escribi texto plano indicando lo que quieras poner en el encabezado de tus publicacionesl</p>
		<textarea id="inputHeader" class="form-control" name="header" rows="10"><?php echo $verPlantilla['header']; ?></textarea>
	</div>
	<div class="col-lg-6">
		<h3>Pie de pagina</h3>
		<p>Escribi texto plano indicando lo que quieras poner en el pie de tus publicacionesl</p>
		<textarea id="inputFooter" class="form-control" name="footer" rows="10"><?php echo $verPlantilla['footer']; ?></textarea>
	</div>
	<div style="margin-top: 10px;" class="col-lg-12">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
	</form>
	</div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            NUEVA FUNCIÓN
                        </div>
                        <div class="panel-body">
                            <p>Subi la URL de una foto general para todos los artículos, coloca un mensaje general, o una explicación de los metodos de envio y formas de pago de tu local.</p>
                        </div>
                    </div>
    </div>
    <div class="col-lg-6">
        <label for="">Link </label>
        <form action="ML-fotoGeneral.php" method="post">
        <input value="<?php echo $verPlantilla['fotoGeneralURL']; ?>" type="url" class="form-control" required name="link" placeholder="http://miweb.com/mi-foto-general.jpg">     
        <br>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar Foto General</button>
        </form>
    </div>
</div>



<?php 
}
// fin de llave si se guardo o no
}
else {
    echo "No tenes permiso para ver esta sección";
}

include $templates.'/footer.php';


 ?>