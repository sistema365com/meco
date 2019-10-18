<?php 
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

// $articulosPreguntados= array_column($pregunta, 'item_id');
// $multiGet= implode($articulosPreguntados, ',');
// $paramAC = array('access_token' => $_SESSION['access_token'], );
// $articuloMultiM= $meli->get('items?ids='.$multiGet,$paramAC);
// $articuloMulti=json_decode(json_encode($articuloMultiM['body']), true);


if (count($pregunta)==0) {
 ?>
                            <div class="panel panel-default rounded shadow">
                                <div class="panel-body">
                                    <div class="callout callout-info">
                                        <strong>Felicitaciones!</strong> Estas al dia con todas las respuestas!.
                                    </div>
                                </div><!-- /.panel-body -->
                            </div><!-- /.panel -->


<?php 
}
$ii=0;
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
$fechaCreada= explode('T', $key['date_created']);
// probar($pregunton);
    $ii++;
$paramAC = array('access_token' => $_SESSION['access_token'], );
$articulo= buscarEnArray($articuloMulti,$key['item_id'],'id');
$articuloM= $meli->get('items/'.$key['item_id'],$paramAC);
$articulo=json_decode(json_encode($articuloM['body']), true);
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
        <form id="formulario_<?php echo $ii; ?>">
 <div id="pregunta_<?php echo $ii; ?>" style="border-bottom: solid 2px black; margin-top: 5px;">
     <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <img class="img-circle" src="<?php echo $articulo['secure_thumbnail']; ?>">
            </div>
            <div class="col-lg-10" style="margin-left: 10px;">
                <p><b>Articulo: </b><a target="_blank" href="<?php echo $articulo['permalink']; ?>"><?php echo $articulo['title']; ?></a><br>
                <b>SKU: </b><?php echo $articulo['seller_custom_field']; ?><br>
                <b>Precio: </b><?php echo $articulo['price'].' '.$articulo['currency_id']; ?><br>
                <b>Ubicado en:</b> <?php echo $pregunton['address']['city']; ?><br>
                <b>Fecha realizada:</b> <?php echo $fechaCreada[0]; ?></p>
            </div>
        </div>
<?php 
if (count($preguntasANT)>1) {
 ?>
    <div class="row">
            <div class="col-md-12">
              <!-- preguntas de la orden -->
              <div class="panel panel-warning">
                <div class="panel-heading">
                  <h3 style="padding:1px;" class="panel-title">Preguntas Anteriores</h3>
                </div><!-- /.box-header -->
                <div class="panel-body">
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
            <div class="panel panel-teal">
                <div class="panel-heading">
                  <h3 style="padding:1px;" class="panel-title"><b>Nueva Pregunta:</b> <?php echo $key['text']; ?></h3>
                </div><!-- /.box-header -->
            </div>
                <label for="">Respuesta</label><br>
                <input type="hidden" name="id" value="<?php echo $key['id']; ?>">
                <input type="hidden" name="idML" value="<?php echo $key['item_id']; ?>">
                <input type="hidden" name="articulo" value="<?php echo $articulo['seller_custom_field']; ?>">
                <input type="hidden" name="fechaRealizada" value="<?php echo $key['date_created']; ?>">
<?php 
if($saludoInicial){ echo '<input checked type="checkbox" name="saludoInicial" value="'.$saludin.'">'.$saludin;}
 ?>
                <textarea rows="2" style="width: 100%;" class='mention-example2' placeholder='Recomenda otro Articulo escribiendo el título y luego de #. Ej: #teclado...' name="text" id="textoM<?php echo $key['id'].$i; ?>" class="form-control" rows="2"></textarea>
<?php 
if($firma){ echo '<input checked type="checkbox" name="firma" value="'.$verPlantilla[1]['texto'].'">'.$verPlantilla[1]['texto'].'<br>';}
 ?>
                <label for="">Respuestas Rapidas</label><br>
<?php 
$listarMensajes= $objPlantilla->listarRespuestas($_SESSION['empresa']);
foreach ($listarMensajes as $key2) {
?>
    <div class="col-lg-4">
    <a style="text-transform: uppercase; margin-bottom: 8px;" href="" onclick="return mensaje('<?php echo $key2['texto']; ?>','<?php echo $key['id'].$i; ?>')" class="btn btn-block btn-info btn-xs"><?php echo $key2['titulo']; ?></a>
    </div>
<?php
}
 ?>
 <br><br><br>

        </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default">Borrar Respuesta</button>
        <button id="<?php echo $ii; ?>" class="btn btn-success" type="button"><i class="fa fa-paper-plane"></i> Enviar</button>
                </form>
         
     </div>
 </div>
<?php 
}
 ?>


    <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <script>
     $(function(){
         $(document).on('click', 'button[type="button"]', function(event) {
            let id = this.id;
            document.getElementById(id).className='btn btn-warning';
            document.getElementById(id).innerHTML='<i class="fa fa-spinner fa-spin"></i> Respondiendo';
         //var url = "dame-datos.php"; // El script a dónde se realizará la petición.
            $.ajax({
                   type: "POST",
                   url: 'moduloML/preguntas/ac.enviarRespuesta.php',
                   data: $("#formulario_"+id).serialize(), // Adjuntar los campos del formulario enviado.
                   success: function(data)
                   {
                        // Mostrar la respuestas del script PHP.
                       // $("#respuestaLoca").html(data); 
                       if (data=='ok') {
                            cantidad = cantidad-1;
                            document.getElementById('tituloSeccion').innerHTML= cantidad;
                            var divPR= document.getElementById('pregunta_'+id);
                            $('#pregunta_'+id).fadeOut(1000);
                            // divPR.className='hidden';
                            // alert('test');
                        }
                        else{
                            alert('Error al enviar respuesta, recargar pagina.');
                        }
                       // $("#btn_enviar").
                       
                   }
                 });

            return false; // Evitar ejecutar el submit del formulario.
         });
      });
    </script>



<script type="text/javascript">
    function mensaje(contenido,id){
        var contenidoAnterior= document.getElementById('textoM'+id).value;
        document.getElementById('textoM'+id).value= contenidoAnterior+contenido;
        return false;
    }
</script>
<script type='text/javascript'>
  var cantidad= <?php echo count($pregunta) ?>;
  document.getElementById('tituloSeccion').innerHTML= cantidad;
</script>
