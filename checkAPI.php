<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
require 'moduloML/php-sdk-master/Meli/meli.php';
include 'class/Autocarga.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'includes/configuraciones.php';
include 'includes/funciones.php';
include 'moduloML/chonML.php';



$titulo= 'Probar Conexión a MercadoLibre';
$scriptFooter= false;

include $templates.'/header.php';
if ($_SESSION['permisos']==1 || $_SESSION['permisos']==2) {
include 'moduloML/alertas.php';
$verConfigu= Configuracion::verConfigu();


if($_GET['code'] || $_SESSION['access_token']) {

	// If code exist and session is empty
	if($_GET['code'] && !($_SESSION['access_token'])) {
		// If the code was in get parameter we authorize
		$user = $meli->authorize($_GET['code'], $aplicacion['URL']);
		
		// Now we create the sessions with the authenticated user
		$_SESSION['access_token'] = $user['body']->access_token;
		$_SESSION['expires_in'] = time() + $user['body']->expires_in;
		$_SESSION['refresh_token'] = $user['body']->refresh_token;
		// guardar en BD
		// $guardarTokens= Configuracion::actualizarTokens($_SESSION['access_token'],$_SESSION['refresh_token']);
		$guardarTokensGen= Configuracion::actualizarTokensGen($_SESSION['access_token'],$_SESSION['refresh_token'],$_SESSION['empresa']);
	} else {
		// We can check if the access token in invalid checking the time
		if($_SESSION['expires_in'] > time()) {
			try {
				// Make the refresh proccess
				$refresh = $meli->refreshAccessToken();

				// Now we create the sessions with the new parameters
				$_SESSION['access_token'] = $refresh['body']->access_token;
				$_SESSION['expires_in'] = time() + $refresh['body']->expires_in;
				$_SESSION['refresh_token'] = $refresh['body']->refresh_token;
			} catch (Exception $e) {
			  	echo "Exception: ",  $e->getMessage(), "\n";
			}
		}
	}
	$params = array('access_token' => $_SESSION['access_token']);
	$usuarioML= $meli->get('/users/me',$params);
	$idUserML= $usuarioML['body']->id;
	$nombreML= $usuarioML['body']->first_name;
	$nickML= $usuarioML['body']->nickname;
	$msjHola= 'Hola '.$nombreML.' ('.$nickML.'), estas conectado a Mercadolibre';
	// $linkConector= '<a class="btn btn-block btn-success" href="'.$meli->getLogoutUrl().'"> '.$msjHola.' || <i class="fa fa-sign-out"></i> Desconectar MercadoLibre</a>';
} 
else {
	$msjHola= 'Estas desconectado de ML';
	$linkConector= '<a class="btn btn-block btn-danger" href="'.$meli->getAuthUrl($aplicacion['URL'], Meli::$AUTH_URL[$verConfigu['siteML']]).'"> '.$msjHola.' || <i class="fa fa-plug"></i> Conectar a MercadoLibre</a>';
}

?>

	<div class="col-lg-12">
<?php echo $linkConector; ?>
<h3>Datos del usuario</h3>
<ul>
	<?php if (isset($idUserML)){echo '<li>'.$msjHola.'</li>';} ?>
	<li>Cliente: <?php echo $verConfigu['prefijo']; ?></li>
	<li>Usuario Autorizado de Mercadolibre: <?php echo $verConfigu['userML']; ?></li>
	<li>Proximo Vencimiento: <?php echo $verConfigu['vencimiento']; ?></li>
</ul>
	</div>


<?php 

}
else {
    echo "No tenes permiso para ver esta sección";
}

include $templates.'/footer.php';


 ?>