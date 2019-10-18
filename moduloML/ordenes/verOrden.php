<?php 
$objArticulo= new Articulo();
$envios = array(
	'to_be_agreed' => 'Lo Retira',
	'ready_to_ship' => 'Imprimir Etiqueta',
	'pending' => 'Envios Pendientes',
	'shipped' => 'En Camino',
	'delivered' => 'Entregado',
	'not_delivered' => 'No Entregado',
	 );

	$params = array(
		'access_token' => $_SESSION['access_token'],
		);
	$usuarioML= $meli->get('/users/me',$params);
	$idUserML= $usuarioML['body']->id;
	$ordenM= $meli->get('/orders/'.$_GET['id'],$params);
	$ordenes=json_decode(json_encode($ordenM['body']), true);
	$mensajesM= $meli->get('/messages/orders/'.$_GET['id'],$params);
	$mensajes=array_reverse(json_decode(json_encode($mensajesM['body']->results), true));
	$marcarLeido= $objNotificaciones->marcarLeido2($_GET['id']);

	$paramsPreg = array(
		'access_token' => $_SESSION['access_token'],
		);
	$preguntasM= $meli->get('/questions/search?item_id='.$ordenes['order_items'][0]['item']['id'].'&from='.$ordenes['buyer']['id']);
	$preguntas=array_reverse(json_decode(json_encode($preguntasM['body']->questions), true));

	$articuloEnBase= $objArticulo->verArticuloPorIdML($ordenes['order_items'][0]['item']['id']);
	$linkABase= (!$articuloEnBase)?'':' <a data-toggle="tooltip" data-placement="top" data-original-title="Ver producto en mi base" href="misArticulos.php?s=verArticuloML&id='.$articuloEnBase['idART'].'"><i class="fa fa-link"></i></a>  <a target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Ver producto en MercadoLibre" href="'.$articuloEnBase['perma_link'].'"><i class="fa fa-external-link"></i></a>';
 ?>
 <a href="ML-ordenes.php?s=ordenesPendientes&tipo=recent"><i class="fa fa-undo"></i> Volver al listado</a>

 	<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		  <div class="panel-heading" style="text-transform: uppercase;"><b><?php echo $ordenes['buyer']['first_name'].' '.$ordenes['buyer']['last_name'].' #'.$ordenes['id']; ?></b></div>
		  <div class="panel-body">
			<div class="col-lg-2">
				<p>
					<i class="fa fa-user"></i> <?php echo $ordenes['buyer']['nickname']; ?> <br>
					<i class="fa fa-phone"></i> <?php echo $ordenes['buyer']['phone']['number']; ?> <br>
					<i class="fa fa-id-card-o"></i> <?php echo $ordenes['buyer']['billing_info']['doc_type'].' '.$ordenes['buyer']['billing_info']['doc_number']; ?> <br>
					<i class="fa fa-comments"></i> <a href="">Mensajes</a>
					<?php if (count($mensajes)>0) {
						echo '<small class="label bg-red">'.count($mensajes).'</small>';
					} ?>
				</p>
			</div>
			<div class="col-lg-3">
				<b><?php echo $ordenes['order_items'][0]['item']['title']; ?></b> 
				<?php echo $linkABase; ?>
				<br>
				SKU: <?php echo $ordenes['order_items'][0]['item']['seller_custom_field']; ?> <br>
				<?php 
				$fechaCompra= explode('T', $ordenes['date_created']);
				 ?>
				Fecha compra: <?php echo $fechaCompra[0]; ?> <br>
				Precio Unitario: $ <?php echo $ordenes['order_items'][0]['unit_price']; ?> <br>
				Cantidad: <?php echo $ordenes['order_items'][0]['quantity']; ?> <br>
				Total Compra: $ <?php echo $ordenes['total_amount']; ?>.-
			</div>
			<div class="col-lg-3">
				<i class="fa fa-money"></i> Total a pagar: $<?php echo $ordenes['total_amount'].' <br>'.$ordenes['payments'][0]['payment_method_id'].' ($'.$ordenes['payments'][0]['transaction_amount'].'- ID'.$ordenes['payments'][0]['id'].')'; ?> <br>
<?php 
if (isset($ordenes['payments'][1]['status'])) {
	echo $ordenes['payments'][1]['payment_method_id'].' ($'.$ordenes['payments'][1]['transaction_amount'].'- ID'.$ordenes['payments'][1]['id'].') <br>';
}
if (isset($ordenes['payments'][2]['status'])) {
	echo $ordenes['payments'][2]['payment_method_id'].' ($'.$ordenes['payments'][2]['transaction_amount'].'- ID'.$ordenes['payments'][2]['id'].') <br>';
}
$totalPagos= $ordenes['payments'][0]['transaction_amount']+$ordenes['payments'][1]['transaction_amount']+$ordenes['payments'][2]['transaction_amount'];
	echo '<b>Total Pagos Recibidos:</b> $ '.$totalPagos.'<br>';
if ($envios[$ordenes['shipping']['status']]=='Imprimir Etiqueta') {
 ?>
				<i class="fa fa-truck"></i><a target="_blank" href="moduloML/ordenes/etiqueta.php?id=<?php echo $ordenes['shipping']['id']; ?>"><i></i> Imprimir Etiqueta</a><br>
 <?php 
}
else {
  ?>
				<i class="fa fa-truck"></i> <?php echo $envios[$ordenes['shipping']['status']]; ?><br>
				<a target="_blank" href="#myModal2<?php echo $key['id']; ?>" data-toggle="modal" data-target="#myModal2<?php echo $ordenes['id']; ?>"><i class="fa fa-print"></i> Imprimir Etiqueta Envio Arco</a><br>
  <?php 
}
   ?>
   				<?php if ($key['shipping']['shipping_option']['name']){ ?>
   				Metodo de envio: <br>
   				<?php echo $key['shipping']['shipping_option']['name']; ?>   					
   				<?php }
   					else {
   						?>
   						<a id="marcarRetiro" href="#nota">Marcar como retirado</a>
   						<?php
   					}
   				 ?>
			</div>
			<div class="col-lg-4">
                <a class="btn btn-primary" href="#myModal<?php echo $key['id']; ?>" data-toggle="modal" data-target="#myModal<?php echo $ordenes['id']; ?>"><i class="fa fa-pencil-square-o"></i> Formulario Entrega Producto</a>
				<br>
			<?php 
				$raitings = array(
					'positive' => '<i class="fa fa-thumbs-up"></i> Positivo', 
					'negative' => '<i class="fa fa-thumbs-down"></i> Negativo</a>', 
					'neutral' => '<i class="fa fa-meh-o"></i> Neutral</a>', 
					);
				if (isset($ordenes['feedback']['sale'])) {
					echo "Calificaste: ".$raitings[$ordenes['feedback']['sale']['rating']];
				}
				else {
			 ?>
				<label for="">Calificar: </label>
				<a onclick="return confirm('Esto calificara automaticamente con el mensaje de calificación que guardaste en configuraciones')" style="color: green;" href="moduloML/ordenes/ac.calificar.php?c=positive&o=<?php echo $ordenes['id']; ?>&comprador=<?php echo $ordenes['buyer']['id']; ?>"><i class="fa fa-thumbs-up"></i> Positivo</a> |
				<a style="color: blue;" href="ML-ordenes.php?s=calificarM&masiv=1&filtro=1&tipo=recent&estado=&calif=pending&envio=delivered"><i class="fa fa-meh-o"></i> Neutral</a> |
				<a style="color: red;" href="ML-ordenes.php?s=calificarM&masiv=1&filtro=1&tipo=recent&estado=&calif=pending&envio=delivered"><i class="fa fa-thumbs-down"></i> Negativo</a>
			<?php } ?>
			</div>
		  </div>
		</div>
	</div>
	</div>
<?php 
if (count($preguntas)>0) {
 ?>
	<div class="row">
		    <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title"><i class="fa fa-question"></i> Preguntas</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body">
<?php 
for ($i=0; $i < count($preguntas); $i++) { 
	$fechaRecorte= explode('.', $preguntas[$i]['answer']['date_created']);
?>
				<p style="margin-left: 30px;">
Pregunta: <b><?php echo $preguntas[$i]['text']; ?></b> <br>
Respuesta: <?php echo $preguntas[$i]['answer']['text']; ?> <br>
<small>Fecha: <?php echo $fechaRecorte[0]; ?></small>
<hr>
 				</p>

<?php
}

 ?>
            </div>
    </div>
<?php 
}
 ?>
	<div class="row">
		    <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title"><i class="fa fa-commenting-o"></i> Mensajes</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body">
<!-- ***************** -->
<?php 
for ($i=0; $i < count($mensajes); $i++) { 
	$para= '';
	$texto= '';
	$enviadoEl= '';
	$de = '';
	$enviadoEl = explode('.', $mensajes[$i]['date_available']);
	$leido = explode('.', $mensajes[$i]['date_read']);
	$de = $mensajes[$i]['to']['id'];
	$para = $mensajes[$i]['from']['user_id'];
	$texto = $mensajes[$i]['text']['plain'];
	if ($para != $idUserML) {
		echo '<div class="panel panel-teal">
                <div class="panel-heading">
                	COMPRADOR: <br>
                  <p>'.$texto.'<br><small><i class="fa fa-clock-o"></i> '.$enviadoEl[0].'</small></p>
                </div><!-- /.box-header -->
            </div>';
		// echo '<div class="direct-chat-msg">
  //                     <div class="direct-chat-info clearfix">
  //                       <span class="direct-chat-name pull-left">'.$de.'</span>
  //                       <span class="direct-chat-timestamp pull-right">'.$enviadoEl[0].'</span>
  //                     </div>
  //                     <div class="direct-chat-text">
  //                       '.$texto.'
  //                     </div>
  //                       <small class="direct-chat-timestamp pull-right">Leido: '.$leido[0].'</small>
  //                   </div>';
	}
	else {
		echo '<div class="panel panel-warning">
                <div class="panel-heading">
                	YO: <br>
                  <p>'.$texto.'<br><small><i class="fa fa-clock-o"></i> '.$enviadoEl[0].'</small></p>
                </div><!-- /.box-header -->
            </div>';
		// echo '<div class="direct-chat-msg right">
  //                     <div class="direct-chat-info clearfix">
  //                       <span class="direct-chat-name pull-right">'.$de.'</span>
  //                       <span class="direct-chat-timestamp pull-left">'.$enviadoEl[0].'</span>
  //                     </div>
  //                     <div class="direct-chat-text">
  //                       '.$texto.'
  //                     </div>
  //                     <small class="direct-chat-timestamp pull-right">Leido: '.$leido[0].'</small>
  //                   </div>';
	}
}
 ?>
<!-- ***************** -->

                  <form action="moduloML/ordenes/ac.enviarMensaje.php" method="post">
                    <div class="input-group">
                    <input type="hidden" name="idML" value="<?php echo $ordenes['order_items'][0]['item']['id']; ?>">
                    <input type="hidden" name="to" value="<?php echo $ordenes['buyer']['id']; ?>">
                    <input type="hidden" name="from" value="<?php echo $idUserML; ?>">
                    <input type="hidden" name="resource_id" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" name="site_id" value="<?php echo $siteML['siteML']; ?>">
                      <input id="textoM" type="text" name="text" placeholder="Escribir Mensaje ..." class="form-control" />
                      <span class="input-group-btn">
                        <button type="reset" class="btn btn-danger btn-flat">Borrar</button>
                        <button type="submit" class="btn btn-primary btn-flat">Enviar</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div><!--/.direct-chat -->
<?php 
$objPlantilla= new Plantilla();
$listarMensajes= $objPlantilla->listarMensajes($_SESSION['empresa']);
foreach ($listarMensajes as $key) {
?>
	<div class="col-lg-2">
	<a href="" onclick="return mensaje('<?php echo $key['texto']; ?>')" class="btn btn-block btn-info btn-xs"><?php echo $key['titulo']; ?></a>
	</div>
<?php
}
 ?>
            </div><!-- /.col -->
	</div>
	<hr>
	<div style="margin-bottom: 40px;"></div>
	<div class="row">
		<div class="col-lg-6">
			<h4><i class="fa fa-file-o"></i> Notas</h4>
<?php 
$notasM= $meli->get('/orders/'.$_GET['id'].'/notes',$params);
$notas=array_reverse(json_decode(json_encode($notasM['body'][0]), true));
for ($i=0; $i < count($notas['results']) ; $i++) { 

 ?>
    <div class="timeline-item alt">
        <div class="timeline-desk">
            <div class="panel panel-success shadow">
                <div class="panel-body">
                    <span class="arrow-alt"></span>
                    <span class="timeline-icon bg-success circle"><i style="padding: 5px;" class="fa fa-shopping-cart"></i></span>
                    <span class="timeline-date"><?php echo $notas['results'][$i]['date_created']; ?></span>
                    <p><?php echo $notas['results'][$i]['note']; ?></p>


            <div class="timeline-footer">
                <a href="moduloML/ordenes/ac.notas.php?order_id=<?php echo $_GET['id']; ?>&delete=<?php echo $notas['results'][$i]['id']; ?>" class="btn btn-danger btn-xs">Eliminar</a>
            </div>
                </div>
            </div>
        </div>
    </div>

			<?php 
			}
			 ?>
        </div>
		<div class="col-lg-6" id="nota">
			<h4>Agregar Nota <span id="impri1"></span></h4>
			<form action="moduloML/ordenes/ac.notas.php" method="post">
			<input type="hidden" name="add" value="1">
			<input type="hidden" name="order_id" value="<?php echo $_GET['id']; ?>">
				<textarea autocomplete="off" class="form-control" name="text" onkeyup="maxCaracteres(280,1)" id="dato1" cols="30" rows="10"></textarea>
				<button class="btn btn-success"><i class="fa fa-save"></i> Guardar Nota</button>
			</form>
		</div>
	</div>


<!-- Modal formulario entrega de producto -->
<div id="myModal<?php echo $ordenes['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confeccionar Etiqueta para retiro de producto</h4>
      </div>
        <div class="modal-body">
				<form target="_blank" action="moduloML/ordenes/entregaProducto.php" method="POST">
					<input type="hidden" name="ciudad" value="<?php echo $ciudad['ciudad']; ?>">
					<input type="hidden" name="telefono" value="<?php echo $ordenes['buyer']['phone']['number']; ?>">
					<input type="hidden" name="articulo" value="<?php echo $ordenes['order_items'][0]['item']['title']; ?>">
					<input type="hidden" name="operacion" value="<?php echo $ordenes['id']; ?>">
					<input type="hidden" name="vendedor" value="<?php echo $ordenes['seller']['nickname']; ?>">
					<input type="hidden" name="comprador" value="<?php echo $ordenes['buyer']['nickname']; ?>">
					<label for="">Fecha</label>
					<input type="date" name="fecha" class="form-control" value="<?php echo $hoy; ?>">
					<label for="">Nombre de quien retira</label>
					<input type="text" name="nombreRetira" class="form-control" value="<?php echo $ordenes['buyer']['first_name'].' '.$ordenes['buyer']['last_name']; ?>">
					<label for="">Número de documento</label>
					<input type="number" name="numeroDocumento" class="form-control" value="<?php echo $ordenes['buyer']['billing_info']['doc_number']; ?>">
					<label for="">Dirección de entrega</label>
					<input type="text" name="direccion" class="form-control" value="<?php echo $ordenes['shipping']['receiver_address']['address_line'].' ('.$ordenes['shipping']['receiver_address']['city']['name'].')'; ?>">
        </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Vista Previa</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </form>
      </div>
    </div>
  </div>
</div>
<!-- modal entrega arco -->
<div id="myModal2<?php echo $ordenes['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confeccionar Etiqueta Envio Arco</h4>
      </div>
        <div class="modal-body">
				<form target="_blank" action="moduloML/ordenes/entregaProductoArco.php" method="POST">
					<input type="hidden" name="ciudad" value="<?php echo $ciudad['ciudad']; ?>">
					<input type="hidden" name="telefono" value="<?php echo $ordenes['buyer']['phone']['number']; ?>">
					<input type="hidden" name="articulo" value="<?php echo $ordenes['order_items'][0]['item']['title']; ?>">
					<input type="hidden" name="operacion" value="<?php echo $ordenes['id']; ?>">
					<input type="hidden" name="vendedor" value="<?php echo $ordenes['seller']['nickname']; ?>">
					<input type="hidden" name="comprador" value="<?php echo $ordenes['buyer']['nickname']; ?>">
					<label for="">Fecha</label>
					<input type="date" name="fecha" class="form-control" value="<?php echo $hoy; ?>">
					<label for="">Nombre Destinatario</label>
					<input type="text" name="nombreRetira" class="form-control" value="<?php echo $ordenes['buyer']['first_name'].' '.$ordenes['buyer']['last_name']; ?>">
					<label for="">Número de documento</label>
					<input type="number" name="numeroDocumento" class="form-control" value="<?php echo $ordenes['buyer']['billing_info']['doc_number']; ?>">
					<label for="">Dirección de entrega</label>
					<input type="text" name="direccion" class="form-control" value="<?php echo $ordenes['shipping']['receiver_address']['address_line'].' ('.$ordenes['shipping']['receiver_address']['city']['name'].')'; ?>">
        </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Vista Previa</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </form>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
	function mensaje(contenido){
        var contenidoAnterior= document.getElementById('textoM').value;
		document.getElementById('textoM').value= contenidoAnterior+contenido;
		return false;
	}
	var retiro = document.querySelector('#marcarRetiro');
	retiro.onclick= mensajeRetiro;
	function mensajeRetiro(){
		var f= new Date();
		var fecha= f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()+' Hora: '+f.getHours()+':'+f.getMinutes();
		var mensaje= 'Articulo retirado día: '+fecha+' ---> Observaciones: ';
		document.getElementById('dato1').value = mensaje;
	}
</script>







