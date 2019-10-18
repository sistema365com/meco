<?php 
$objAyuda= new Ayuda();
$verTicket= $objAyuda->ver($_GET['id']);
if ($verTicket['cliente']==$_SESSION['empresa']) {
$mensajes= $objAyuda->listarMensajes($_GET['id']);
$estadoTickets = array(
        '0' => '<span class="conflicto">Pendiente</span>', 
        '1' => '<span class="pendiente">Respondido</span>', 
        '2' => '<span class="disponible">Cerrado</span>', 
        );
$tipoTicket = array(
    '0' => 'Administrativo', 
    '1' => 'Soporte', 
    '2' => 'Consulta', 
    );

$marcarLeido= $objNotificaciones->marcarLeido3($_GET['id']);

 ?>

<div class="container">
<div class="row">
	<a href="ayudaF.php?s=listar"><i class="fa fa-undo"></i> Volver al listado de Tickets</a>
</div>
	<div class="row">
		<div class="col-lg-6">
			<h3><i class="fa fa-comments"></i> Historial Ticket</h3>
<?php 
foreach ($mensajes as $key) {
$de= '';
if ($key['creadoPor']!=$_SESSION['empresa']) {
	$de= 'Soporte';
}
else {
	$de= 'Usuario';
}
 ?>
			<h5><b>De:</b> <?php echo $de; ?> <small><i class="fa fa-clock-o"></i> <?php echo ($key['fecha']); ?></small></h5>
			<p><b>Mensaje:</b><?php echo html_entity_decode($key['contenido']); ?></p>
			<hr>

<?php 
}
 ?>
		<form action="modulo/ayudaF/ac.ayuda.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<input type="hidden" name="agregarMensaje" value="1">
			<label for="">Agregar Mensaje</label>
			<textarea name="contenido" id="summernote-textarea" class="form-control" rows="10" placeholder="Ingresar consulta ..."></textarea>
			<button class="btn btn-primary" type="submit"><i class="fa fa-send"></i> Enviar</button>
		</form>
		</div>
		<div class="col-lg-6">
			<h3><i class="fa fa-ticket"></i> Detalles del Ticket</h3>
			<p>
				<b>TITULO</b>: <?php echo $verTicket['titulo']; ?><br>
				<b>TIPO DE CONSULTA</b>: <?php echo $tipoTicket[$verTicket['tipo']]; ?><br>
				<b>Estado Actual</b>: <?php echo $estadoTickets[$verTicket['estado']]; ?>
			</p>
<?php 
if ($verTicket['estado']!=2) {
 ?>
				<a onclick="return confirm('¿Seguro desea cerrar este ticket?')" class="btn btn-success" href="modulo/ayudaF/ac.ayuda.php?borrarRegistro=1&id=<?php echo $verTicket['id']; ?>"><i class="fa fa-check"></i> Cerrar Ticket</a>
<?php 
}
 ?>			
<?php 
if ($verTicket['estado']==2) {
 ?>
				<a onclick="return confirm('¿Seguro desea abrir nuevamente este ticket?')" class="btn btn-warning" href="modulo/ayudaF/ac.ayuda.php?borrarRegistro=2&id=<?php echo $verTicket['id']; ?>"><i class="fa fa-check"></i> Abrir Ticket</a>
<?php 
}
 ?>			
		</div>
	</div>
	
</div>


<?php 
}
else{
	echo "No Tiene permiso para ver este Ticket";
}

 ?>
