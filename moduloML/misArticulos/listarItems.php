<?php


$objArticulo= new Articulo();

$listarNotas= $objArticulo->listarArticulosBM($_GET['e'],$_SESSION['empresa']);



 ?>

<!-- alertas -->
<?php include 'includes/alertas.php'; ?>
<!-- fin de alertas -->
<form name="formulario" id="formulario" action="moduloML/misArticulos/ac.actualizarMasivaML.php" method="post">
<input type="hidden" name="devuelta" value="ML-misArticulos.php?s=listarItems">
<div class="panel panel-default">
    <div class="panel-heading">
         Filtrar <i class="fa fa-filter"></i>         <?php 
        for ($i=0; $i < count($estadoProv) ; $i++) { 
         ?>
            <a href="misArticulos.php?s=listarItems&e=<?php echo $i; ?>"><?php echo $estadoProv[$i]; ?></a>
         <?php 
        }
          ?>

    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 20px;">#</th>
                        <th>ID</th>
                        <th>ID ML</th>
                        <th>Titulo</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Estado en ML</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
<?php 
foreach ($listarNotas as $key) {
 ?>
                    <tr class="odd gradeX">   
                      <td style="width: 20px;"><input type="checkbox" name="elegidos[]" value='<?php echo serialize($key); ?>'></td>
                        <td><?php echo $key['idART']; ?></td>
                        <td><a target="_blank" href="<?php echo $key['perma_link']; ?>"><?php echo $key['idML']; ?></a></td>
                        <td><?php echo $key['title']; ?></td>
                        <td><?php echo $key['price']; ?></td>
                        <td><?php echo $key['available_quantity']; ?></td>
                        <td><?php echo $estadoProv[$key['estado']]; ?></td>
                        <td>
                            <a class="btn btn-success" href="misArticulos.php?s=verArticuloML&id=<?php echo $key['idART']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                        </td>
                    </tr>
<?php 
}
 ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<!--End Advanced Tables -->
Acción a realizar: 
<select name="select1" id="select" onchange="cambiaAction()">
    <option value="">Seleccionar</option>
    <option value="moduloML/misArticulos/ac.actualizarMasivaML.php">Actualizar Cambios</option>
    <option value="moduloML/misArticulos/ac.cambiarEstadoMasivo.php?e=activar">Activar</option>
    <option value="moduloML/misArticulos/ac.cambiarEstadoMasivo.php?e=pausa">Pausar</option>
    <option value="moduloML/misArticulos/ac.cambiarEstadoMasivo.php?e=cerrar">Cerrar</option>
    <?php 
    if ($_GET['e']==4) {
        echo '<option value="moduloML/misArticulos/ac.cambiarEstadoMasivo.php?e=republicar">Republicar</option>';
        echo '<option value="moduloML/misArticulos/ac.cambiarEstadoMasivo.php?e=eliminar">Eliminar</option>';
    }
     ?>
</select>
<input onclick="preshow();" type="submit" class="btn btn-success" value="Confirmar">

</form>

<script type="text/javascript">
    function cambiaAction()
    {
        var dest= document.formulario.select1[document.formulario.select1.selectedIndex].value
        // var dest= document.getElementsById('select').selectedIndex.value;
        document.forms.formulario.action= dest;
    }
</script>