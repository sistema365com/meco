<?php include 'includes/alertas.php'; ?>
<div class="row">
	<div class="col-lg-6">
		<p>
			En esta sección podras asociar articulos que ya tengas publicados en mercadolibre, con los de tu base de datos.
		</p>
	</div>
	<div class="col-lg-6">
		<?php echo $linkConector; ?>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<form action="moduloML/importar/ac.importacion.php" method="post">
			<label for="">Nº de articulo de tu base de datos</label>
			<input type="text" name="idART" class="form-control">
			<label for="">Id de Mercadolibre  <a href="#myModal" data-toggle="modal" data-target="#myModal">¿Donde lo Encuentro?</a></label>
			<input placeholder="solo numeros! sin letras" type="text" name="idML" class="form-control">
			<br>
			<input type="submit" value="Importar" class="btn btn-success">
		</form>
	</div>
</div>





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Donde encontrar el ID de Mercadolibre</h4>
      </div>
        <div class="modal-body">
        <h4>Paso 1:</h4>
        <p>Ir al menu de la izquierda, sector "Ventas", y despúes a "Publicaciones"</p>
        <img src="img/idML1.png" style="max-width: 100px;">
        <h4>Paso 2:</h4>
        <p>En tus artículos busca el ID como en la siguiente imagen, copia solo el número!.</p>
        <img src="img/idML2.png" style="width: 100%;">

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
