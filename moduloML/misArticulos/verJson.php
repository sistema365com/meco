<?php 
require '../php-sdk-master/DEPRECATED/src/meli.php';
include '../../includes/funciones.php';
// Create our Application instance (replace this with your appId and secret).
$meli = new Meli(array(
	'appId'  	=> '5059930275300953',
	'secret' 	=> 'l69NZmS44dQfsDTHSNxYxmqzlTXtG8rP',
));

include '../../class/Conexion.php';
include '../../class/Configuracion.php';
// $categoria= $meli->get('/sites/MLA/categories');

// foreach ($categoria['json'] as $key) {
// 	echo $key['name'].'<br>';
// }
$presta= Configuracion::verConfigu();
$niveles= explode('-', $_GET['c']);


 ?>

 <!DOCTYPE HTML>
 <html>
 	<head>
 		<title>Categorias</title>
 		<meta charset='utf-8' /> <!--sirve para que se lean las ñ y las tildes-->
 		<style type="text/css">/*asi son los comentarios en css*/
 		#cargando {
		    position:absolute;
		    width:100%;
		    height:100%;
		    background: #7497E9 url('../../form/ajax-loader.gif') no-repeat center;
		}
 
 		</style>
 	</head>
 	<link rel="stylesheet" type="text/css" href="../../1temp/bootstrap/css/bootstrap.min.css"> <!--linkear a hoja de estilos css selector de clases-->
 	<body onload="prehide();">
<div id="cargando"></div>
<div class="container">
 	<div class="row">




 		<div class="col-lg-2">
<?php 
$categoria= $meli->get('/sites/'.$presta['siteML'].'/categories');

foreach ($categoria['json'] as $key) {
	$selc= '';
	if ($niveles[0]==$key['id']) {
		$selc= 'style="color:red"';
	}
	echo '<a onclick="preshow()" '.$selc.' href="verJson.php?c='.$key['id'].'">'.$key['name'].'</a><br>';
}

 ?> 	
 			
 		</div>
<?php 
if (count($niveles)>0) {
for ($i=0; $i < count($niveles); $i++) { 
	$cateML= $meli->get('/categories/'.$niveles[$i]);
?>

<div class="col-lg-2">
	<?php 
	if ($cateML['json']['children_categories']) {
		foreach ($cateML['json']['children_categories'] as $key) {
		$selc= '';
		if ($niveles[$i+1]==$key['id']) {
			$selc= 'style="color:red;"';
		}
			echo '<a onclick="preshow()" '.$selc.' href="verJson.php?c='.$_GET['c'].'-'.$key['id'].'">'.$key['name'].'</a><br>';
		}
	}
	elseif (!$cateML['json']['children_categories']) {
		$cateMLFinal= $meli->get('/categories/'.$niveles[$i]);
		?>
		<a class="btn btn-success" onclick="cerrar('<?php echo $niveles[$i]; ?>','<?php echo $cateMLFinal['json']['name']; ?>');" href="">Seleccionar <?php echo $niveles[$i]; ?></a>
		<?php
	}
	 ?>

</div>


<?php
}
// fin bucle for

}

 ?>






	</div> <!-- cierre row -->
</div> <!-- cierre cont -->
 
  <script type="text/javascript">
	function prehide(){ 
	if (document.getElementById){ 
	document.getElementById('cargando').style.visibility='hidden'} 
	} 
	function preshow(){ 
	if (document.getElementById){ 
	document.getElementById('cargando').style.visibility='visible'} 
	} 

 function cerrar(data,name) {
 // var data = window.document.getElementById('val1').value;
 window.opener.document.getElementById('inputCate').value = data; 
 window.opener.document.getElementById('inputNameCate').innerHTML = 'La categoria seleccionada manualmente es:<br>'+name; 
 window.opener.document.getElementById('inputNameCate').style.display = 'block'; 
 window.opener.document.getElementById('inpuNameSinCate').style.display = 'none'; 
 window.opener.document.getElementById('inpuNameSinCateNombre').style.display = 'none'; 
 this.window.close();
 }

 </script>

 
 
 
 	</body>
 </html>
 