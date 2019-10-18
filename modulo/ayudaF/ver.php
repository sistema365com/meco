<?php 
if (isset($_GET['id'])) {
	$objNoticias= new Ayuda();
	$ver= $objNoticias->ver($_GET['id']);
	$nuevaNoticia= false;
}
else{
	$nuevaNoticia=true;
}
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

 ?>

<div class="row">
<form action="modulo/ayudaF/ac.ayuda.php" method="POST">
<?php 
if ($nuevaNoticia) {
		echo '<input type="hidden" name="nuevoRegistro" value="1">';
	}
	else {
		echo '<input type="hidden" name="nuevoRegistro" value="0">';
		echo '<input type="hidden" name="idNoticia" value="'.$_GET['id'].'">';
	}
 ?>
	<div class="col-lg-6">
		<label for="">Tipo de Ticket</label>
		<select class="form-control" name="tipo" id="">
<?php 
for ($i=0; $i < count($tipoTicket); $i++) { 
 ?>
			<option value="<?php echo $i; ?>"><?php echo $tipoTicket[$i]; ?></option>
<?php 
}
 ?>
 		</select>
	</div>
	<div class="col-lg-6">
		<label for="">Prioridad</label>
		<select class="form-control" name="prioridad" id="">
			<option value="Baja">Baja</option>
			<option selected value="Media">Media</option>
			<option value="Alta">Alta</option>
 		</select>
	</div>
	<div class="col-lg-12">
		<label for="">Titulo</label>
		<input class="form-control" type="text" name="titulo" value="<?php echo $ver['titulo']; ?>">
	</div>
	<div class="col-lg-12">
		<label for="">Contenido</label>
		<textarea name="contenido" id="summernote-textarea" class="form-control" rows="10" placeholder="Ingresar consulta ..."><?php echo $ver['contenido']; ?></textarea>
	</div>
	<div class="col-lg-12">
			<button class="btn btn-primary"><i class="fa fa-ticket"></i> Enviar Ticket a Soporte</button>
	</div>
</form>
</div>



