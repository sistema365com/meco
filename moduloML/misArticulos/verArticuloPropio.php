<?php
$presta= Configuracion::verConfigu();

if ($presta['presta']==0) {
	$objArticulo= new Articulo();
}
if ($presta['presta']==2) {
	$objArticulo= new Fidelity();
}
if ($presta['presta']==1) {
	$objArticulo= new Presta();
}
if ($_GET['t']=='SKU') {
	$verART=$objArticulo->verArticuloBDporSKU($_GET['id']);
}
if ($_GET['t']=='PRESTA') {
	$verART=$objArticulo->verArticuloBD($_GET['id']);
	// probar($verART);
}
if ($presta['presta']==2) {
	$verART= $verART;
}
$verML=$objArticulo->verArticuloBM($verART['NUMERO'],$_SESSION['empresa']);
$bloquearGuardado= false;

if ($presta['presta']==0) {
	$verDescripcion2=$objArticulo->verDescripcion($verART['NUMERO']);
	$verDescripcion=$verART['texto_ml'];
}
if ($presta['presta']==2) {
	$verDescripcion=$verART['contenido'];
}
elseif ($presta['presta']==1) {
	$verDescripcion2=$objArticulo->verDescripcion($verART['NUMERO']);
	$verDescripcion=$verDescripcion2['description'];
}


if ($verML['idART']==$_GET['id'] && $_GET['id']!='') {
	$bloquearGuardado= true;
 ?>
<script type="text/javascript">
	window.location= 'ML-misArticulos.php?s=verArticuloML&id=<?php echo $_GET['id']; ?>';
</script>
<div class="alert alert-warning alert-dismissable">
<h4><i class="icon fa fa-info"></i> Atención!!</h4>
Este artículo ya se encuentra en tu Base de datos preparado para publicar o ya publicado en mercadolibre, revisa su estado haciendo click <a href="ML-misArticulos.php?s=verArticuloML&id=<?php echo $_GET['id']; ?>">ACÁ</a>
</div>



<?php
} 
// si se selecciono un articulo
if ($_GET['id']) {
// datosART

	$categorias1= $meli->get('/sites/'.$presta['siteML'].'/category_predictor/predict?title='.str_replace(" ", "%20", $verART[$objArticulo->getTitle()]));
	$categorias=json_decode(json_encode($categorias1['body']->path_from_root), true);
	$listingType= $meli->get('/sites/'.$presta['siteML'].'/listing_types');
	$moneda= explode(',', $presta['moneda']);
	// probar($categorias);
 ?>
<form action="moduloML/misArticulos/ac.guardarML.php" method="post">
	<input type="hidden" name="idART" value="<?php echo $verART[$objArticulo->getIdArt()]; ?>">
	<input type="hidden" name="buying_mode" value="buy_it_now">
<div class="col-lg-12">
<h4><i class="fa fa-tag"></i> Datos del Producto</h4>
	<label for="">Titulo <small>(Máximo 60 caracteres)</small></label>
	<input class="form-control" type="text" name="title" value="<?php echo $verART[$objArticulo->getTitle()]; ?>">
	<label for="">Descripción del producto</label>
	<textarea id="editor1" class="form-control" rows="5" name="description"><?php echo $verDescripcion; ?></textarea>
<!-- texto plano -->
<br>
            <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 style="margin-bottom: 5px;" class="box-title"><b>Nueva Descripción en Texto Plano</b></h3>
	<textarea class="form-control" name="textoPlano" id="" cols="30" rows="10"><?php echo strip_tags(html_entity_decode($verDescripcion)); ?></textarea>
                </div>
            </div>
<!-- texto plano -->
	<label for="">SKU o Referencia</label>
<?php 
if ($verART['REFERENCIA']=='') {
	$SKUloco= $_GET['id'];
}
else {
	$SKUloco= $verART['REFERENCIA'];
}
 ?>
	<input type="text" name="seller_custom_field" class="form-control" value="<?php echo $SKUloco; ?>">
</div>
<div class="row">
<div class="col-lg-6">
	<div id="inpuNameSinCate">
	<label for="">Categoría recomendada Mercadolibre</label><br>
<?php 
$cantidad= count($categorias)-2;
for ($i=0; $i < count($categorias) ; $i++) { 
	echo $categorias[$i]['name'].'('.$categorias[$i]['id'].') -> ';
}
echo "<br>";
$ultimasCate1= $meli->get('/categories/'.$categorias[$cantidad]['id']);
$ultimasCate=json_decode(json_encode($ultimasCate1['body']->children_categories), true);
// probar($ultimasCate);
?>
	</div>

 	<p id="inpuNameSinCateNombre">La categoría recomendada a ingresar es: </p>
 	<p style="display: none;" id="inputNameCate"></p>
 	<input id="inputCate" class="form-control" type="text" name="category_id" value="<?php echo $categorias[$cantidad+1]['id']; ?>">
</div>
<div class="col-lg-6">
                        <dl>
                            <dt><span class="fa fa-sitemap"></span><a href="" style="color:black"> Otras categorías recomendadas</a></dt>
                            <dd>
<?php 
for ($i=0; $i < count($ultimasCate); $i++) {
	$rojito= '';
	if ($categorias['json']['path_from_root'][$cantidad+1]['id']==$ultimasCate[$i]['id']) {
		$rojito= 'style="color:red;"';
	}
?>
	<span <?php echo $rojito; ?> > <?php echo $ultimasCate[$i]['name']; ?>
		<a onclick="return cambiarCate('<?php echo $ultimasCate[$i]['id'];; ?>')" href="#"><?php echo $ultimasCate['json']['children_categories'][$i]['id']; ?></a>
	</span><br>
<?php
}
 ?>	
                             </dd>
                        </dl>
					 <button onclick="return abrirHijo();">Seleccionar Manualmente</button>

</div>
</div>
<!-- inicio variaciones -->
<!-- <hr>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-info-circle"></i> ATRIBUTOS Y VARIACIONES
                </div>
                <div class="panel-body">
                    <p>Agregar atributos y variaciones a cada articulo va a incrementar tus ventas, abriremos una nueva ventana en la que podrás crear o editar las diferentes configuraciones segun la categoría que tengas seleccionada en el apartado anterior.</p>
                    <a onclick="return abrirVariaciones();" href="" class="btn btn-warning">CONFIGURAR ATRIBUTOS</a>
                </div>
            </div>
    </div>
</div>
<hr>
<script type="text/javascript">
	function abrirVariaciones() {
	var idART= <?php echo $_GET['id']; ?>;
	var idCate= document.getElementById('inputCate').value;
	var link= "verVariaciones.php?cat="+idCate+'&id='+idART;
	 window.open(link, "popupId", "location=no,menubar=no,titlebar=no,resizable=no,toolbar=no, menubar=no,width=1200,height=800"); 
	 	return false;
	 }
</script> -->
<!-- fin variaciones -->
<div class="row">
<div class="col-lg-6">
	<label for="">Cantidad</label>
	<input class="form-control" type="number" name="available_quantity" value="<?php echo $verART[$objArticulo->getAvailable_quantity()]; ?>">
</div>
<div class="col-lg-6">
	<label for="">Precio</label>
	<input class="form-control" type="text" name="price" value="<?php echo $verART[$objArticulo->getPrice()]; ?>">
</div>
<div class="col-lg-6">
	<label for="">Garantia</label>
	<input class="form-control" type="text" name="warranty">
</div>
<div class="col-lg-3">
  <label for="">Moneda</label><br>
<?php 
for ($i=0; $i < count($moneda) ; $i++) {
  $checked= '';
        if ($i==0) {
           $checked= 'checked="checked"';
         } 
 ?>
  <input <?php echo $checked; ?> type="radio" name="currency_id" value="<?php echo $moneda[$i]; ?>"> <?php echo $moneda[$i]; ?>
<?php 
}
 ?>
  <br>
</div>
<div class="col-lg-3">
	<label for="">Tipo de articulo</label><br>
	<input checked="checked" type="radio" name="condition_buy" value="new"> Nuevo
	<input type="radio" name="condition_buy" value="used"> Usado
</div>
</div>
<h4><i class="fa fa-picture-o"></i> Imagenes y Video</h4>
<div class="col-lg-6">
	<label for="">Video Youtube</label>
	<input class="form-control" type="url" name="video_id" placeholder="copiar URL de video">
</div>
<div class="col-lg-6">
	<label for="">Fotos</label> <br>
<!-- listar imagenes  -->
<?php 
if ($presta['presta']==0) {
	$url= configuracion::verConfigu();
	echo '<input class="form-control" type="text" name="pictures" placeholder="Agregar urls de imagenes separadas por punto y coma ( ; )" value="'.$url['urlImg'].$verART['fotos'].'.jpg">';
}
if ($presta['presta']==2) {
	echo '<input class="form-control" type="text" name="pictures" placeholder="Agregar urls de imagenes separadas por punto y coma ( ; )" value="'.implode(';',$verART['imagenes']).'">';
}
if ($presta['presta']==1) {
echo '<input id="inputIMG" type="hidden" name="pictures" value="">';
$url= configuracion::verConfigu();
if ($url['configIMGPRESTA']==1) {
$listarImg= $objArticulo->listarImgPresta($verART[$objArticulo->getIdArt()]);
}
if ($url['configIMGPRESTA']==2) {
$listarImg= $objArticulo->listarImgPresta2($verART[$objArticulo->getIdArt()]);
}
$i= 0;
foreach ($listarImg as $key) {
	$i ++;
if ($url['configIMGPRESTA']==1) {
	$idImg= $url['urlImg'].$key['IMG'].'/'.$key['IMG'].'-thickbox_default/'.urls_amigables($verART['DESCRIP']).'.jpg';
}
if ($url['configIMGPRESTA']==2) {
	$carpetitasF= implode('/', str_split($key['IMG']));
	$idImg= $url['urlImg'].'img/p/'.$carpetitasF.'/'.$key['IMG'].'.jpg';
}

 ?>
<a href="" onclick="return selecImg(<?php echo "'".$idImg."'"; ?>,<?php echo $i; ?>)"><img id="<?php echo 'link'.$i; ?>" class="selectorImg" style="width: 75px; margin: 10px;" src="<?php echo $idImg; ?>"></a>
<?php 
	}
}
 ?>
</div>

<h4><i class="fa fa-check"></i> Tipo de publicación</h4>
<div class="col-lg-6">
	<label for="">Categoria de Publicación</label>
	<select onchange="checkGratis()" class="form-control" name="listing_type_id" id="">
	<option value="0">Seleccionar</option>
<?php 
foreach ($listingType['body'] as $key) {
	echo '<option value="'.$key->id.'">'.$key->name.'</option>';
}

 ?>
	</select>
</div>
<div class="col-lg-3">
	<label for="">Tipo de venta</label><br>
	<input checked="checked" type="radio" name="buying_mode" value="buy_it_now"> Compra inmediata
</div>
<div class="col-lg-3">
  <label for="">Opciones de Envio</label><br>
  <input checked="true" type="checkbox" name="envios1[]" value="me2"> Mercado Envios   |
  <input checked="true" type="checkbox" name="envios2[]" value="true"> Ofrecer retiro en Tienda
  <input type="checkbox" name="envios3[]" value="true"> Envio Gratis
</div>

<div class="col-lg-12" style="margin-top: 20px;">
	<a style="margin-right: 10px;" class="btn btn-primary" href="prepararMasivamente.php?d=0&h=10">Cancelar</a>
<?php 
if (!$bloquearGuardado) {
 ?>
	<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
<?php 
}
 ?>
</div>
</form>
<div style="height: 300px;"></div>



<script type="text/javascript">
	function selecImg(url,id)
	{
      var dato= document.getElementById('inputIMG').value;
      // var datoN= document.getElementById('nuevo_li').value;
      if (dato=='') {
      document.getElementById('inputIMG').value= url;
      document.getElementById('link'+id).style.border='10px solid blue';
      return false;
      }
      else {
      document.getElementById('inputIMG').value= dato+';'+url;
      document.getElementById('link'+id).style.border='10px solid blue';
      return false;
		}
	}
	function cambiarCate(id)
	{
		document.getElementById('inputCate').value= id;
		return false;
	}
	 function abrirHijo() {
	 window.open("moduloML/misArticulos/verJson.php", "popupId", "location=no,menubar=no,titlebar=no,resizable=no,toolbar=no, menubar=no,width=1200,height=800"); 
	 	return false;
	 }
</script>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1', {
        uiColor: '#f39c12',
        allowedContent: true,
        language: 'es',
        toolbar: [
            [ 'Source' , 'Format', 'Font', '-' , 'Bold', 'Italic' , '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
            [ '-', 'TextColor', 'Paste', 'Table', 'Undo'  ],
        ]
    });
    </script>

<?php

// datosART
}

else
// si no se selecciono, proponer buscar
{
?>
<div class="row">
	<div class="col-lg-12">
		<form action="">
			<input type="hidden" name="s" value="verArticuloPropio">
			<label for="">Tipo de Busqueda</label><br>
			<input checked type="radio" name="t" value="PRESTA"> ID.
			<input type="radio" name="t" value="SKU"> SKU o Referencia.
			<br>
			<label for="">Dato a buscar</label>
			<input type="text" name="id" class="form-control">
			<br>
			<input type="submit" value="Buscar" class="btn btn-lg btn-primary">
		</form>
		<a onclick="preshow();" style="margin-top: 30px;" href="ML-misArticulos.php?s=prepararMasivamente" class="btn btn-success">Preparar Masivamente tus publicaciones</a>
	</div>
</div>
 
<?php 
}