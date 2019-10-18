<?php 
session_start();
require '../php-sdk-master/DEPRECATED/src/meli.php';
// require 'php-sdk-master/Meli/meli.php';
include '../../class/Conexion.php';
include '../misArticulos/class.Articulo.php';
include '../../includes/configuraciones.php';
include '../../includes/funciones.php';
// Create our Application instance (replace this with your appId and secret).
$meli = new Meli(array(
	'appId'  	=> '5059930275300953',
	'secret' 	=> 'l69NZmS44dQfsDTHSNxYxmqzlTXtG8rP',
));

$objArticulo= new Articulo();
$verArticulo= $objArticulo->verArticuloBM($_GET['id'],$_SESSION['empresa']);
// {
//  "attributes":[
//    {
//      "id":"MODEL",
//      "value_name":"B228D"
//    },
//    {
//      "id":"VOLUME_CAPACITY",
//      "value_name":"28 L"
//    }
//  ]
// }
$atributos= $meli->get('/categories/'.$_GET['cat'].'/attributes');
$espTecnicas= $meli->get('/categories/'.$_GET['cat'].'/technical_specifications');
$atrEspecial= $espTecnicas['json']['table']['sections'][0]['attributes'];
// probar();

 ?>

 <!DOCTYPE HTML>
 <html>
 	<head>
 		<title>Variaciones y Atributos</title>
 		<meta charset='utf-8' /> <!--sirve para que se lean las ñ y las tildes-->
 		<style type="text/css">/*asi son los comentarios en css*/
 		#cargando {
		    position:absolute;
		    width:100%;
		    height:100%;
		    background: #7497E9 url('form/ajax-loader.gif') no-repeat center;
		}
 
 		</style>
 	</head>
 	<link rel="stylesheet" type="text/css" href="../../1temp/bootstrap/css/bootstrap.min.css"> <!--linkear a hoja de estilos css selector de clases-->
    <!-- FontAwesome 4.3.0 -->
<!--     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="../../1temp/bower_components/font-awesome/css/font-awesome.min.css">
 	<body onload="prehide();">
<div id="cargando"></div>
<div class="container">
	<div class="row">
	    <div class="col-lg-12">
	            <div class="panel panel-info">
	                <div class="panel-heading">
	                    <i class="fa fa-info-circle"></i> Bienvenido a Atributos y Variaciones
	                </div>
	                <div class="panel-body">
	                    <p>Te marcaremos las especificaciones más importantes con este simbolo: <i style="color: orange;" class="fa fa-star"></i> <br>
	                    ¿porque hacemos esto? estos atributos se verán <a target="_blank" href="fichaTecnica.png">de esta manera</a></p>
	                </div>
	            </div>
	    </div>
	</div>
	<div class="row">
			<form action="guardarVariacion.php" method="POST">
			<input type="hidden" name="idART" value="<?php echo $_GET['id']; ?>">
			<input type="hidden" name="precio" value="<?php echo $verArticulo['price']; ?>">
			<input type="hidden" name="stock" value="<?php echo $verArticulo['available_quantity']; ?>">
				<?php 
					foreach ($atributos['json'] as $key) {
						$destaque= '';
						$bloqueado= '';
						$buscarAtrPrin= buscarEnArray($atrEspecial,$key['id'],'id');
// me fijo si son atributos importantes
						if ($buscarAtrPrin['id']==$key['id']) {
							$destaque= '<i style="color: orange;" class="fa fa-star"></i>';
						}
						if ($key['tags']['fixed']=='true') {
							$bloqueado= 'disabled="true"';
						}
// fin atributos importantes
						$serializado[]=$key['id'];
				?>
			<div class="col-lg-6">
					<label for=""><?php echo $destaque.' '.$key['name']; ?><small style="color:green;"><?php if (isset($key['default_unit'])) {
						$lala= array_column($key['allowed_units'], 'id');
						echo " Unidades Disponibles: ".implode($lala, ' / ');
					}; ?></small></label>
				<?php 
				//si tiene variaciones:
				if ($key['tags']['allow_variations']=='true') {
					$imagen= explode(';', $verArticulo['pictures']);
					foreach ($key['values'] as $key2) {
				?>
					<input type="hidden" name="V-<?php echo $key['id']; ?>" value="variationOK">
					<br><input type="checkbox" value="<?php echo $key2['name']; ?>" name="<?php echo $key['id']; ?>[]"> <?php echo $key2['name']; ?> <b>Url Imagen:</b> <input style="width: 160px;" type="text" name="<?php echo $key2['name']; ?>-imgVariacion" value="<?php echo $imagen[0]; ?>">
				<?php
					}
				}
				//Si no tiene variaciones
				else{
				if ($key['value_type']=='list') {
				?>
					<select class="form-control" name="<?php echo $key['id']; ?>" id="">
						<option value="">Seleccionar</option>
						<?php foreach ($key['values'] as $key2) {
							echo '<option value="'.$key2['name'].'">'.$key2['name'].'</option>';
						} ?>
					</select>
				<?php
				}
				if ($key['value_type']=='boolean') {
				?>
					<input type="hidden" name="<?php echo $key['id']; ?>-boolean" value="id">
					<select class="form-control" name="<?php echo $key['id']; ?>" id="">
						<option value="">Seleccionar</option>
						<option value="242084">NO</option>
						<option value="242085">SI</option>
					</select>
				<?php
				}
				if ($key['value_type']=='number'){
				 ?>
					<input <?php echo $bloqueado; ?> class="form-control" type="number" name="<?php echo $key['id']; ?>" value="<?php echo $key['values'][0]['name']; ?>">

				<?php
						}
				if ($key['value_type']=='number_unit'){
				 ?>
					<input <?php echo $bloqueado; ?> class="form-control" type="text" name="<?php echo $key['id']; ?>" value="<?php echo $key['values'][0]['name'].$key['default_unit']; ?>">

				<?php
						}
				if ($key['value_type']=='string'){
				 ?>
					<input <?php echo $bloqueado; ?> class="form-control" type="text" name="<?php echo $key['id']; ?>" value="<?php echo $key['values'][0]['name']; ?>">
				<?php
						}
					} //fin de else si no acepta variaciones.
				?>
				</div>
				<?php
					}
					$serializado1= serialize($serializado);
				 ?>
				 <input type="hidden" name="campos" value='<?php echo $serializado1; ?>'>
				 <br>
				 <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Guardar</button>
			</form>
	</div>


 	
</div>
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
 