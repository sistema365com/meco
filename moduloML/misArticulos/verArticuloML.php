<?php
$objArticulo= new Articulo();

$verART=$objArticulo->verArticuloBM($_GET['id'],$_SESSION['empresa']);
$listingTypeM= $meli->get('/sites/MLA/listing_types');
$listingType=json_decode(json_encode($listingTypeM), true);

$objVariaciones= new Variaciones();
$verAtributo= $objVariaciones->verAtributos($_GET['id']);
$verVariacion= $objVariaciones->verVariaciones($_GET['id']);
if ($verVariacion) {
    $anuncioVariacion= ' - Tiene variaciones';
}

include 'includes/alertas.php';
 ?>

<div class="row">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                            <div class="callout callout-info">
                                <h5> Estado en MercadoConnecting</h5>
                    <p>
                    Estado actual MC: <?php echo $estadoProv[$verART['estado']]; ?> <br>
                    Id publicacion de mercadolibre: <?php echo $verART['idML']; ?> <br>
                    Link del producto: <?php echo '<a target="_blank" href="'.$verART['perma_link'].'">Ver articulo En ML</a>'; ?> <br>
                    </p>
                            </div>
                        </div>
                    </div>
<?php 
if ($verART['estado']!=0) {
    $datoMLM= $meli->get('/items/'.$verART['idML']);
    $datoML=json_decode(json_encode($datoMLM), true);
?>
    <div class="col-lg-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Cambios en el articulo</h3>
<?php 
// mostrar alerta si se encuentra cerrado o inactivo
if ($datoML['body']['status']=='closed' || $datoML['body']['status']=='inactive' || $datoML['body']['status']=='under_review') {
 ?>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                            <div class="callout callout-warning">
                                <h5> ATENCIÓN al estado en mercadolibre!</h5>
                    <p>
                    Esta publicación en MercadoLibre se encuentra en estado: <?php echo $datoML['body']['status']; ?>
                    </p>
                            </div>
                        </div>
                    </div> 
<?php 
}
// si esta activo y con envio gratis mostrar esta alerta
else{
    if ($datoML['body']['shipping']['free_methods'][0]['id']!='') {
    ?>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-md-12">
                                <div class="callout callout-warning">
                                    <h5> PRODUCTO CON ENVIO GRATIS ACTIVADO!</h5>
                        <p>
                        Esta publicación en MercadoLibre se encuentra envio gratis activado <a href="moduloML/misArticulos/ac.envioGratis.php?ac=2&id=<?php echo $_GET['id']; ?>">Desactivar envio gratis</a>
                        </p>
                                </div>
                            </div>
                        </div><?php
    }
    else{
        echo "activar envio";
    }
}
  ?>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>Campo</th>
                      <th>Base MercadoConnecting</th>
                      <th>Mercadolibre</th>
                      <th>Hay Cambios?</th>
                    </tr>
                    <tr>
                        <td>Titulo</td>
                        <td><?php echo $verART['title'] ?></td>
                        <td><?php echo $datoML['body']['title']; ?></td>
                        <td><?php if($verART['title']!=$datoML['body']['title']){echo "Actualizar!";}else{echo "Sin cambio";}; ?></td>
                    </tr>
                    <tr>
                        <td>Precio</td>
                        <td><?php echo $verART['price'] ?></td>
                        <td><?php echo $datoML['body']['price']; ?></td>
                        <td><?php if($verART['price']!=$datoML['body']['price']){echo "Actualizar!";}else{echo "Sin cambio";}; ?></td>
                    </tr>
                    <tr>
                        <td>Cantidad</td>
                        <td><?php echo $verART['available_quantity'].$anuncioVariacion; ?></td>
                        <td><?php echo $datoML['body']['available_quantity']; ?></td>
                        <td><?php if($verART['available_quantity']!=$datoML['body']['available_quantity']){echo "Actualizar!";}else{echo "Sin cambio";}; ?></td>
                    </tr>
                    <tr>
                        <td>Categoria Publicacion</td>
                        <td><?php echo $verART['listing_type_id'] ?></td>
                        <td><?php echo $datoML['body']['listing_type_id']; ?></td>
                        <td><?php if($verART['listing_type_id']!=$datoML['body']['listing_type_id']){echo "Actualizar!";}else{echo "Sin cambio";}; ?></td>
                    </tr>
                    <tr>
                        <td>Garantia</td>
                        <td><?php echo $verART['warranty'] ?></td>
                        <td><?php echo $datoML['body']['warranty']; ?></td>
                        <td><?php if($verART['warranty']!=$datoML['body']['warranty']){echo "Actualizar!";}else{echo "Sin cambio";}; ?></td>
                    </tr>
                    <tr>
                        <td>Descripción</td>
                        <td>Siempre Actualizamos</td>
                        <td>Siempre Actualizamos</td>
                        <td>Siempre Actualizamos</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
    <form action="moduloML/misArticulos/ac.actualizarML.php" method="post">
        <input type="hidden" name="idART" value="<?php echo $_GET['id']; ?>">
        <input style="margin-bottom: 10px;" onclick="preshow();" type="submit" class="btn btn btn-success" value="ACTUALIZAR">
    </form>
    </div>
<?php
}
 ?>
</div>
<!-- inicio variaciones -->
<?php 
if (!$verAtributo && !$verVariacion) {
    // si no hay variacion se muestra esto
 ?>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <i class="fa fa-info-circle"></i> ATRIBUTOS Y VARIACIONES
                </div>
                <div class="panel-body">
                    <p>Agregar atributos y variaciones a cada articulo va a incrementar tus ventas, abriremos una nueva ventana en la que podrás crear o editar las diferentes configuraciones segun la categoría que tengas seleccionada en el apartado anterior.</p>
                    <a onclick="return abrirVariaciones('moduloML/variaciones/verVariaciones.php?cat=');" href="" class="btn btn-warning">CONFIGURAR ATRIBUTOS</a>
                </div>
            </div>
    </div>
</div>
<?php 
}
else {
    // si hay variacion se muestra esto
 ?>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <i class="fa fa-warning-circle"></i> EDITAR ATRIBUTOS Y VARIACIONES
                </div>
                <div class="panel-body">
                    <p>Agregar atributos y variaciones a cada articulo va a incrementar tus ventas, abriremos una nueva ventana en la que podrás crear o editar las diferentes configuraciones segun la categoría que tengas seleccionada en el apartado anterior.</p>
                    <a onclick="return abrirVariaciones('moduloML/variaciones/verEdicionVariaciones.php?cat=');" href="" class="btn btn-warning">EDITAR ATRIBUTOS</a>
            <form action="" method="" onsubmit="return enviarAtributo()">
                <input type="hidden" id="valor-idArt" name="idART" value="<?php echo $_GET['id']; ?>">
                <input type="hidden" id="valor-idML" name="idML" value="<?php echo $verART['idML']; ?>">
                <input id="bt-atributos" style="margin-top: 10px;" class="btn btn-primary" type="submit" value="Enviar Atributos configurados a Mercadolibre">
            </form>
            <!-- <form action="moduloML/variaciones/AMLvariaciones.php" target="_blank" method="post">
                <input type="hidden" name="idART" value="<?php echo $_GET['id']; ?>">
                <input type="hidden" name="idML" value="<?php echo $verART['idML']; ?>">
                <input style="margin-top: 10px;" class="btn btn-primary" type="submit" value="Enviar Variaciones configurados a Mercadolibre">
            </form> -->
                </div>
            </div>
    </div>
</div>

 <?php 
}
  ?>
<script type="text/javascript">
    function abrirVariaciones(link) {
    var idART= <?php echo $_GET['id']; ?>;
    var idCate= document.getElementById('inputCate').value;
    var link= link+idCate+'&id='+idART;
     window.open(link, "popupId", "location=no,menubar=no,titlebar=no,resizable=no,toolbar=no, menubar=no,width=1200,height=800"); 
        return false;
     }
</script>
<!-- fin variaciones -->
	<div class="col-lg-12">
<a class="btn btn-lilac" href="moduloML/misArticulos/ac.envioGratis.php?ac=1&id=<?php echo $_GET['id']; ?>"><i class="fa fa-truck"></i> Activar envio gratis</a>

<form action="moduloML/misArticulos/ac.editarML.php" method="post">
	<input type="hidden" name="idART" value="<?php echo $_GET['id']; ?>">
	<input type="hidden" name="currency_id" value="<?php echo $verART['currency_id'] ?>">
	<input type="hidden" name="category_id" value="<?php echo $verART['category_id'] ?>">
	<input type="hidden" name="buying_mode" value="<?php echo $verART['buying_mode'] ?>">
	<input type="hidden" name="condition" value="<?php echo $verART['condition_buy'] ?>">
	<label for="">Titulo</label>
	<input class="form-control" type="text" name="title" value="<?php echo $verART['title'] ?>">
    <label for="">Precio</label>
    <input class="form-control" type="text" name="price" value="<?php echo $verART['price'] ?>">
	<label for="">Categoria <a onclick="return abrirHijo();" href="">Buscar categoria</a></label>
	<input class="form-control" type="text" id="inputCate" name="category_id" value="<?php echo $verART['category_id'] ?>">
<?php 
// cantidades variaciones
if ($verVariacion) {
    // SI TIENE VARIACION...
    foreach ($verVariacion as $key) {
       echo '<label for="">Cantidad '.$key['attribute_combinations'][0]['value_name'].'</label>
    <input class="form-control" type="number" name="'.$key['id'].'_available_quantity" value="'.$key['available_quantity'].'">';
    }
}
else {
    //  si no tiene variacion
 ?>
	<label for="">Cantidad</label>
	<input class="form-control" type="number" name="available_quantity" value="<?php echo $verART['available_quantity'] ?>">
<?php 
}
// cierre cantidad de variaciones
 ?>
	<label for="">Categoria de Publicación</label>
	<select class="form-control" name="listing_type_id" id="">
<?php 
foreach ($listingType['body'] as $key) {
	$select='';
	if ($verART['listing_type_id']==$key['id']) {
		$select='selected="true"';
	}
	echo '<option '.$select.' value="'.$key['id'].'">'.$key['name'].'</option>';
}

 ?>
	</select>
	<label for="">Video Youtube</label>
	<input class="form-control" type="text" name="video_id" value="<?php echo $verART['video_id'] ?>">
	<label for="">Garantia</label>
	<input class="form-control" type="text" name="warranty" value="<?php echo $verART['warranty'] ?>">
	<label for="">URL imagen</label><small>Separar con ";" si son varias fotos</small>
	<input class="form-control" type="text" name="pictures" value="<?php echo $verART['pictures'] ?>">
	<label for="">Descripción del articulo</label>
	<textarea id="summernote-textarea" class="form-control" placeholder="Ingresar consulta ..." name="description"><?php echo $verART['description']; ?></textarea>

<!-- texto plano -->
<br>
            <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 style="margin-bottom: 5px;" class="box-title"><b>Nueva Descripción en Texto Plano</b></h3>
    <textarea class="form-control" name="textoPlano" id="" cols="30" rows="10"><?php echo strip_tags(html_entity_decode($verART['description'])); ?></textarea>
                </div>
            </div>
<!-- texto plano -->
    
	<button onclick="preshow();" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Editar</button>
</form>
	</div>
</div>

<script type="text/javascript">
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

        <script type="text/javascript">
            function enviarAtributo(id){
                    //valores del texto
                    idART = document.getElementById('valor-idArt').value;
                    idML = document.getElementById('valor-idML').value;
                    document.getElementById('bt-atributos').className='btn btn-info btn-stroke';
                    document.getElementById('bt-atributos').value='Enviando a ML... Espere respuesta';
                     //mostrar resultado
                    // respuesta = document.getElementById('respuesta'+id);
                    //instanciamos el objetoAjax
                    ajax = new XMLHttpRequest();
                    ajax.open('POST','moduloML/variaciones/AMLatributos.php');
                    ajax.onload = function (){
                        if (ajax.readyState==1 || ajax.readyState==2 || ajax.readyState==3) {
                                document.getElementById('articulo'+id).className='spinner flat';
                        }
                        else if (ajax.readyState==4){
                        if(ajax.status == 200 ){ //<-- rta satisfactoria
                            respuesta = (ajax.responseText);
                            if (respuesta=='Atributos Actualizados en Mercadolibre Correctamente') {
                                document.getElementById('bt-atributos').className='btn btn-success';
                                document.getElementById('bt-atributos').value='Envio Exitoso';
                                // alert('guardado');
                            }
                            if (respuesta=='Error al actualizar atributos') {
                                document.getElementById('bt-atributos').className='btn btn-danger';
                                document.getElementById('bt-atributos').value='Error al Enviar';
                            }
                        } 
                        }
                        else {
                            alert('Se produjo un error, volver a intentarlo');
                        }
                    };
                    //Llamamos al método setRequestHeader indicando que los datos a enviarse están codificados como un formulario. 
                    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                    //enviamos las variables a 'consulta.php' 
                    ajax.send('&idART='+idART+'&idML='+idML);
                    return false;
                } 
        </script>

