<?php 
if ($_GET['alerta']=='creado') {
sleep(1);
}
$vendedor= Configuracion::verConfigu();
$objPlantilla= new Plantilla();

$params = array(
'seller_id' => $vendedor['mlUserId'], 
'access_token' => $_SESSION['access_token'],
'sort_fields' => 'date_created',
'sort_types' => 'DESC',
// 'limit' => 3,
'status' => 'UNANSWERED',
);
$preguntaM= $meli->get('/questions/search',$params);
$pregunta=json_decode(json_encode($preguntaM['body']->questions), true);


$articulosPreguntados= array_column($pregunta, 'item_id');
$multiGet= implode($articulosPreguntados, ',');
$paramAC = array('access_token' => $_SESSION['access_token'], );
$articuloMultiM= $meli->get('items?ids='.$multiGet,$paramAC);
$articuloMulti=json_decode(json_encode($articuloMultiM['body']), true);


// probar($pregunta);

 ?>


<?php 
$i=0;
foreach ($pregunta as $key) {
if ($key['id']==$_GET['id']) {
    $ocultarPregunta= 'hidden';
}
else {
    $ocultarPregunta= '';
}
$preguntonM= $meli->get('/users/'.$key['from']['id'],$params);
$pregunton=json_decode(json_encode($preguntonM['body']), true);

    $paramsPreg = array(
        'access_token' => $_SESSION['access_token'],
        );
    $preguntasMANT= $meli->get('/questions/search?item_id='.$key['item_id'].'&from='.$key['from']['id']);
    $preguntasANT=json_decode(json_encode($preguntasMANT['body']->questions), true);

// probar($pregunton);
    $i++;
 ?>
        <form action="moduloML/preguntas/ac.enviarRespuesta.php" method="POST">
<?php 
$paramAC = array('access_token' => $_SESSION['access_token'], );
$articulo= buscarEnArray($articuloMulti,$key['item_id'],'id');
// probar($articulo);
$verPlantilla= $objPlantilla->verPlantillaGeneral($_SESSION['empresa']);
$saludoInicial=false;
$firma=false;
$saludin='';
if ($verPlantilla[0]['texto']!='') {
    $saludoInicial=true;
    $saludin=str_replace('@USUARIO', $pregunton['nickname'], $verPlantilla[0]['texto']);
}
if ($verPlantilla[1]['texto']!='') {
    $firma=true;
}
 ?>
 <div class="row <?php echo $ocultarPregunta; ?>" style="border-bottom: solid 2px black; margin-top: 10px;">
     <div class="col-lg-12">
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-lg-1">
                <img class="img-circle" src="<?php echo $articulo['thumbnail']; ?>">
            </div>
            <div class="col-lg-10" style="margin-left: 10px;">
                <p><b>Articulo: </b><a target="_blank" href="<?php echo $articulo['permalink']; ?>"><?php echo $articulo['title']; ?></a><br>
                <b>SKU: </b><?php echo $articulo['seller_custom_field']; ?><br>
                <b>Precio: </b><?php echo $articulo['price'].' '.$articulo['currency_id']; ?><br>
                <b>Ubicado en:</b> <?php echo $pregunton['address']['city']; ?></p>
            </div>
        </div>
<?php 
if (count($preguntasANT)>1) {
 ?>
    <div class="row">
            <div class="col-md-12">
              <!-- preguntas de la orden -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Preguntas Anteriores</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
<?php 
for ($i=0; $i < count($preguntasANT)-1; $i++) { 
?>
                <p style="margin-left: 30px;">
Pregunta: <b><?php echo $preguntasANT[$i]['text']; ?></b> <br>
Respuesta: <?php echo $preguntasANT[$i]['answer']['text']; ?> <br>
<small>Fecha: <?php echo $preguntasANT[$i]['answer']['date_created']; ?></small>
                </p>

<?php
}

 ?>
                </div>
              </div>
            </div>
    </div>
<?php 
}
 ?>
            <div class="box box-success direct-chat direct-chat-success">
                <div class="box-header with-border">
                  <h3 class="box-title"><b>Nueva Pregunta:</b> <?php echo $key['text']; ?></h3>
                </div><!-- /.box-header -->
            </div>
                <label for="">Respuesta</label><br>
                <input type="hidden" name="id" value="<?php echo $key['id']; ?>">
                <input type="hidden" name="articulo" value="<?php echo $articulo['seller_custom_field']; ?>">
                <input type="hidden" name="fechaRealizada" value="<?php echo $key['date_created']; ?>">
<?php 
if($saludoInicial){ echo '<input checked type="checkbox" name="saludoInicial" value="'.$saludin.'">'.$saludin;}
 ?>
                <textarea name="text" id="textoM<?php echo $key['id'].$i; ?>" class="form-control" rows="5"></textarea>
<?php 
if($firma){ echo '<input checked type="checkbox" name="firma" value="'.$verPlantilla[1]['texto'].'">'.$verPlantilla[1]['texto'].'<br>';}
 ?>
                <label for="">Respuestas Rapidas</label><br>
<?php 
$listarMensajes= $objPlantilla->listarRespuestas($_SESSION['empresa']);
foreach ($listarMensajes as $key2) {
?>
	<div class="col-lg-4">
	<a style="text-transform: uppercase;" href="" onclick="return mensaje('<?php echo $key2['texto']; ?>','<?php echo $key['id'].$i; ?>')" class="btn btn-block btn-info btn-xs"><?php echo $key2['titulo']; ?></a>
	</div>
<?php
}
 ?>
 <br><br><br>

        </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default">Borrar Respuesta</button>
        <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Enviar</button>
                </form>
         
     </div>
 </div>
<?php 
}
 ?>


<script type="text/javascript">
	function mensaje(contenido,id){
        var contenidoAnterior= document.getElementById('textoM'+id).value;
		document.getElementById('textoM'+id).value= contenidoAnterior+contenido;
		return false;
	}
</script>
