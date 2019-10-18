<?php 

$objArticulo= new Articulo();

$listarNotas= $objArticulo->verArticulosStockUno($_GET['estado']);



// alertas I
include 'includes/alertas.php';
// alertas F
 ?>
<form name="formulario" id="formulario" action="moduloML/misArticulos/ac.actualizarMasivaML.php" method="post">
<div class="row">
    <div class="col-md-12" style="margin-bottom: 20px;">
<input class="btn btn-teal btn-xs" type="button" value="Tildar Todos" onclick="tildarTodos();">
<input class="btn btn-teal btn-xs" type="button" value="Destildar Todos" onclick="destildarTodos();">
<input class="btn btn-teal btn-xs" type="button" value="Invertir Seleccion" onclick="invertirSeleccion();"><br>
<input type="hidden" name="devuelta" value="ML-misArticulos.php?s=sinStock">
    </div>
    <div class="col-md-12">

        <!-- Start order table -->
        <div class="panel">
            <div class="panel-heading">
         Filtrar <i class="fa fa-filter"></i>         <?php 
            for ($i=0; $i < count($estadoProv) ; $i++) { 
             ?>
                <a href="ML-misArticulos.php?s=sinStock&estado=<?php echo $i; ?>"><?php echo $estadoProv[$i]; ?></a>
             <?php 
            }
              ?>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div class="table-responsive">
                    <table class="table table-bordered table-middle table-lilac">
                        <thead>
                            <tr>
                                <th>#</th>
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
$ipa= 0;
for ($i=0; $i < count($listarNotas); $i++) { 
    $serializado= $listarNotas[$i];
    unset($serializado['description']);
    // probar($serializado);
 ?>
                    <tr class="border-<?php echo $labelEstado[$listarNotas[$i]['estado']]; ?>">
                        <td>
                            <div class="ckbox ckbox-teal">
                            <input id="checkbox-teal<?php echo $ipa; ?>" type="checkbox" name="elegidos[]" value='<?php echo serialize($serializado); ?>'>
                            <label for="checkbox-teal<?php echo $ipa; ?>"></label>
                        </div>                        
                        </td>
                        <td><?php echo $listarNotas[$i]['idART']; ?></td>
                        <td><a target="_blank" href="<?php echo $listarNotas[$i]['perma_link']; ?>"><?php echo $listarNotas[$i]['idML']; ?></a></td>
                        <td><?php echo $listarNotas[$i]['title']; ?></td>
                        <td><?php echo $listarNotas[$i]['price']; ?></td>
                        <td><?php echo $listarNotas[$i]['available_quantity']; ?></td>
                        <td><?php echo $estadoProv[$listarNotas[$i]['estado']]; ?></td>
                        <td>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Editar Producto" class="btn btn-success" href="ML-misArticulos.php?s=verArticuloML&id=<?php echo $listarNotas[$i]['idART']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                        </td>
                    </tr>
<?php
$ipa ++; 
}
 ?>
                                <!-- <td class="text-center">
                                    <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </td> -->
                        </tbody>
                    </table>
<!--inicio acciones a realizar -->
<div style="margin: 10px;">
Acción a realizar: 
<select name="select1" id="select" onchange="cambiaAction()">
    <option value="">Seleccionar</option>
    <option value="moduloML/misArticulos/ac.actualizarMasivaML.php">Actualizar Cambios</option>
    <option value="moduloML/misArticulos/ac.cambiarEstadoMasivoMC.php?e=activar">Activar</option>
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
</div>
<!-- final acciones a realizar -->
                </div>
            </div><!-- /.panel-body -->
        </div>
        <!--/ End order table -->

    </div>
</div>

<?php 
$anterior= $_GET['d']-$_GET['h'];
$siguiente=(!$_GET['h'])?20:$_GET['d']+$_GET['h'];
$hasta=(!$_GET['h'])?20:$_GET['h'];
 ?>
<nav aria-label="...">
  <ul class="pager">
    <li><a href="ML-misArticulos.php?s=listarItems&e=&<?php echo $_GET['e'] ?>d=<?php echo $anterior ?>&h=<?php echo $hasta; ?>">Anterior</a></li>
    <li><a href="ML-misArticulos.php?s=listarItems&e=&<?php echo $_GET['e'] ?>d=<?php echo $siguiente ?>&h=<?php echo $hasta; ?>">Siguiente</a></li>
  </ul>
</nav>
</div>
<script type="text/javascript">

function chequeaCompleto(){
    var dato= document.getElementById('tipoPubli').value;
    if (dato==0) {
        alert('Seleccionar un tipo de publicacíon');
        prehide();
        return false;
    }
}

var inputs= document.getElementsByTagName('input');

function contarTildados()
{
    var cont= 0;
    for (var i = 0; i <= inputs.length; i++) {
        if (inputs[i].type=='checkbox' && inputs[i].checked) 
            {
                cont++;
            }
    }
    alert('tenes chequeados '+cont);
}

function contarDestildados()
{

}

function tildarTodos()
{
    for (var i = 0; i <= inputs.length; i++) {
        if (inputs[i].type=='checkbox') 
            {
                inputs[i].checked=true;
            };
    }
}

function destildarTodos()
{
    for (var i = 0; i <= inputs.length; i++) {
        if (inputs[i].type=='checkbox') 
            {
                inputs[i].checked=false;
            };
    }
}

function invertirSeleccion()
{
    for (var i = 0; i <= inputs.length; i++) {
        if (inputs[i].checked) 
            {
                inputs[i].checked=false;
            }
        else {
            inputs[i].checked=true;
        }
    }
}

</script>

