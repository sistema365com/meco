<?php 
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

	$mensajesM2= $meli->get('/messages/'.$_GET['id'],$params);

	$ordenM= $meli->get('/orders/'.$mensajesM2['body']->resource_id,$params);
	$ordenes=json_decode(json_encode($ordenM['body']), true);

	$mensajesM= $meli->get('/messages/orders/'.$mensajesM2['body']->resource_id,$params);
	$mensajes=array_reverse(json_decode(json_encode($mensajesM['body']->results), true));

	$marcarLeido= $objNotificaciones->marcarLeido($_GET['id']);


 ?>

 	<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		  <div class="panel-heading" style="text-transform: uppercase;"><a href="ML-ordenes.php?s=verorden&id=<?php echo $ordenes['id']; ?>"><i class="fa fa-link"></i> <?php echo $ordenes['buyer']['first_name'].' '.$ordenes['buyer']['last_name']; ?></a></div>
		  <div class="panel-body">
			<div class="col-lg-3">
				<p>
					<i class="fa fa-user"></i> <?php echo $ordenes['buyer']['nickname']; ?> <br>
					<i class="fa fa-phone"></i> <?php echo $ordenes['buyer']['phone']['number']; ?> <br>
					<i class="fa fa-comments"></i> <a href="">Mensajes</a>
				</p>
			</div>
			<div class="col-lg-3">
				<b><?php echo $ordenes['order_items'][0]['item']['title']; ?></b> <br>
				<?php 
				$fechaCompra= explode('T', $ordenes['date_created']);
				 ?>
				Fecha compra: <?php echo $fechaCompra[0]; ?> <br>
				Precio Unitario: <?php echo $ordenes['order_items'][0]['unit_price']; ?> <br>
				Cantidad: <?php echo $ordenes['order_items'][0]['quantity']; ?> <br>
				SKU: <?php echo $ordenes['order_items'][0]['item']['seller_custom_field']; ?>
			</div>
			<div class="col-lg-2">
				<i class="fa fa-money"></i> <?php echo $ordenes['payments'][0]['status'].' ('.$ordenes['payments'][0]['payment_method_id'].')'; ?> <br>
				<i class="fa fa-truck"></i> <?php echo $envios[$ordenes['shipping']['status']]; ?><br>
			</div>
			<div class="col-lg-4">
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
				<a style="color: green;" href=""><i class="fa fa-thumbs-up"></i> Positivo</a> |
				<a style="color: blue;" href=""><i class="fa fa-meh-o"></i> Neutral</a> |
				<a style="color: red;" href=""><i class="fa fa-thumbs-down"></i> Negativo</a>
			<?php } ?>
			</div>
		  </div>
		</div>
	</div>
	</div>
	<div class="row">
		    <div class="col-md-12">
              <!-- DIRECT CHAT PRIMARY -->
              <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Mensajes</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
<!-- ***************** -->
<?php 
for ($i=0; $i < count($mensajes); $i++) { 
	$para= '';
	$texto= '';
	$enviadoEl= '';
	$de = '';
	$enviadoEl = $mensajes[$i]['date_available'];
	$leido = $mensajes[$i]['date_read'];
	$de = $mensajes[$i]['to']['id'];
	$para = $mensajes[$i]['from']['user_id'];
	$texto = $mensajes[$i]['text']['plain'];
	if ($para != $idUserML) {
		echo '<div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">'.$de.'</span>
                        <span class="direct-chat-timestamp pull-right">'.$enviadoEl.'</span>
                      </div>
                      <div class="direct-chat-text">
                        '.$texto.'
                      </div>
                        <small class="direct-chat-timestamp pull-right">Leido: '.$leido.'</small>
                    </div>';
	}
	else {
		echo '<div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">'.$de.'</span>
                        <span class="direct-chat-timestamp pull-left">'.$enviadoEl.'</span>
                      </div>
                      <div class="direct-chat-text">
                        '.$texto.'
                      </div>
                      <small class="direct-chat-timestamp pull-right">Leido: '.$leido.'</small>
                    </div>';
	}
}
 ?>
<!-- ***************** -->
                  </div><!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" />
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                      </li><!-- End Contact Item -->
                    </ul><!-- /.contatcts-list -->
                  </div><!-- /.direct-chat-pane -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <form action="ordenes/ac.enviarMensaje.php" method="post">
                    <div class="input-group">
                    <input type="hidden" name="to" value="<?php echo $ordenes['buyer']['id']; ?>">
                    <input type="hidden" name="from" value="<?php echo $idUserML; ?>">
                    <input type="hidden" name="resource_id" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" name="site_id" value="<?php echo $siteML['siteML']; ?>">
                      <input id="textoM" type="text" name="text" placeholder="Escribir Mensaje ..." class="form-control" />
                      <span class="input-group-btn">
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
	<div class="row">
		<div class="col-lg-6">
			<h4><i class="fa fa-file-o"></i> Notas</h4>
<ul class="timeline">
<?php 
$notasM= $meli->get('/orders/'.$_GET['id'].'/notes',$params);
$notas=array_reverse(json_decode(json_encode($notasM['body'][0]), true));
for ($i=0; $i < count($notas['results']) ; $i++) { 

 ?>
    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-red">
            <?php echo $notas['results'][$i]['date_created']; ?>
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-comment bg-blue"></i>
        <div class="timeline-item">


            <div class="timeline-body">
                <?php echo $notas['results'][$i]['note']; ?>
            </div>

            <div class="timeline-footer">
                <a href="ordenes/ac.notas.php?order_id=<?php echo $_GET['id']; ?>&delete=<?php echo $notas['results'][$i]['id']; ?>" class="btn btn-danger btn-xs">Eliminar</a>
            </div>
        </div>
    </li>

			<?php 
			}
			 ?>
</ul>

		</div>
		<div class="col-lg-6">
			<h4>Agregar Nota <span id="impri1"></span></h4>
			<form action="ordenes/ac.notas.php" method="post">
			<input type="hidden" name="add" value="1">
			<input type="hidden" name="order_id" value="<?php echo $_GET['id']; ?>">
				<textarea autocomplete="off" class="form-control" name="text" onkeyup="maxCaracteres(300,1)" id="dato1" cols="30" rows="10"></textarea>
				<button class="btn btn-success"><i class="fa fa-save"></i> Guardar Nota</button>
			</form>
		</div>
	</div>



<script type="text/javascript">
	function mensaje(contenido){
		document.getElementById('textoM').value= contenido;
		return false;
	}
</script>








