<?php 
$objPlantilla= new Plantilla();
$listarNotas= $objPlantilla->listarRespuestas($_SESSION['empresa']);

 ?>

<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ¿Que son las respuestas Rapidas?
                        </div>
                        <div class="panel-body">
                            <p>Aquí puedes configurar respuestas rapidas para las preguntas que te realicen posible compradores de Mercadolibre, crea una etiqueta para identificar la respuesta y luego ingresa el contenido de la respuesta.</p>
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
                        <th>Etiqueta</th>
                        <th>Contenido de la respuesta</th>
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
                            <a onclick="return confirm('¿Seguro desea eliminar este elemento?')" class="btn btn-danger" href="moduloML/plantillas/ac.plantillas.php?borrarRespuesta=ok&id=<?php echo $key['id']; ?>"><i class="fa fa-times"></i></a>
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
                <form action="moduloML/plantillas/ac.plantillas.php" method="post" onsubmit="return check();">
                <input type="hidden" name="tipo" value="respuesta">
                <input type="hidden" name="nuevoRegistro" value="no">
                <input type="hidden" name="id" value="<?php echo $key['id']; ?>">
					<label for="">Etiqueta</label>
					<input id="etiqueta" class="form-control" name="titulo" type="text" value="<?php echo $key['titulo']; ?>">
					<label for="">Contenido de la respuesta</label>
					<textarea class="form-control" name="texto" id="contenido" cols="30" rows="7"><?php echo $key['texto']; ?></textarea>
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
<script type="text/javascript">
    function check(){
        var contenido= document.getElementById('contenido').value;
        var etiqueta= document.getElementById('etiqueta').value;
        if (contenido=='') {
            alert('Tenes que crear un texto en la respuesta');
            return false;
        }
        if (etiqueta=='') {
            alert('Tenes que crear un titulo para la etiqueta');
            return false;
        }
    }
</script>

<?php 
}
 ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>


<a class="btn btn-primary" href="#myModal" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Crear Nueva Respuesta</a>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nueva Respuesta Pre diseñado</h4>
      </div>
        <div class="modal-body">
                <form action="moduloML/plantillas/ac.plantillas.php" method="post" onsubmit="return check2();">
                <input type="hidden" name="tipo" value="respuesta">
                <input type="hidden" name="nuevoRegistro" value="ok">
                <input type="hidden" name="id" value="<?php echo $key['id']; ?>">
                    <label for="">Etiqueta</label>
                    <input id="etiqueta2" class="form-control" name="titulo" type="text" value="">
                    <label for="">Contenido de la respuesta</label>
                    <textarea id="contenido2" class="form-control" name="texto" id="" cols="30" rows="7"></textarea>
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

<script type="text/javascript">
    function check2(){
        var contenido= document.getElementById('contenido2').value;
        var etiqueta= document.getElementById('etiqueta2').value;
        if (contenido=='') {
            alert('Tenes que crear un texto en la respuesta');
            return false;
        }
        if (etiqueta=='') {
            alert('Tenes que crear un titulo para la etiqueta');
            return false;
        }
    }
</script>


