<?php 

$objPlantilla= new Plantilla();
$listarNotas= $objPlantilla->listarMensajes($_SESSION['empresa']);

 ?>
<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ¿Que son los Mensajes Rapidos?
                        </div>
                        <div class="panel-body">
                            <p>Cuando un comprador crea una orden en Mercadolibre, puedes enviarte mensajes por medio de la plataforma, aqui puedes crear mensajes rapidos para responder a tus compradores a consultas que siempre se repiten.</p>
                        </div>
                    </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Etiqueta Mensaje</th>
                        <th>Texto del Mensaje</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
<?php 
foreach ($listarNotas as $key) {
 ?>
                    <tr class="odd gradeX">   
                        <td><?php echo $key['titulo']; ?></td>
                        <td><?php echo $key['texto']; ?></td>
                        <td style="width: 130px;">
                            <!-- <a class="btn-editar" href="verArticuloML.php?id=<?php echo $key['id']; ?>"><i class="fa fa-pencil-square-o"></i></a> -->
                            <a class="btn btn-warning" href="#myModal<?php echo $key['id']; ?>" data-toggle="modal" data-target="#myModal<?php echo $key['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a onclick="return confirm('¿Seguro desea eliminar este elemento?')" class="btn btn-danger" href="moduloML/plantillas/ac.plantillas.php?borrarMensaje=ok&id=<?php echo $key['id']; ?>"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
<!-- Modal -->
<div id="myModal<?php echo $key['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Mensaje</h4>
      </div>
        <div class="modal-body">
				<form action="moduloML/plantillas/ac.plantillas.php" method="post">
				<input type="hidden" name="tipo" value="mensajes">
				<input type="hidden" name="nuevoRegistro" value="no">
				<input type="hidden" name="id" value="<?php echo $key['id']; ?>">
					<label for="">Etiqueta Mensaje</label>
					<input class="form-control" name="titulo" type="text" value="<?php echo $key['titulo']; ?>">
					<label for="">Contenido del mensaje</label>
					<textarea class="form-control" name="texto" id="" cols="30" rows="7"><?php echo $key['texto']; ?></textarea>
					<br>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Guardar</button>
		</form>
      </div>
    </div>
  </div>
</div>

<?php 
}
 ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>


<a class="btn btn-primary" href="#myModal" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Crear nueva</a>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Mensaje Pre diseñado</h4>
      </div>
        <div class="modal-body">
				<form action="moduloML/plantillas/ac.plantillas.php" method="post">
				<input type="hidden" name="tipo" value="mensajes">
				<input type="hidden" name="nuevoRegistro" value="ok">
					<label for="">Etiqueta del mensaje</label>
					<input class="form-control" name="titulo" type="text" value="">
					<label for="">Contenido del mensaje</label>
					<textarea class="form-control" name="texto" id="" cols="30" rows="7"></textarea>
					<br>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Guardar</button>
		</form>
      </div>
    </div>
  </div>
</div>



