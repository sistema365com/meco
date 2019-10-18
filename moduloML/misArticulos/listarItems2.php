<?php 
$config= Configuracion::verConfigu();
$objArticulo= new Articulo();

$listarNotas= $objArticulo->listarArticulosBM($_GET['e'],$_SESSION['empresa'],$_GET['d'],$_GET['h']);


if ($config['presta']!=2) {
        $objPresta= new Presta();
        if (!$_SESSION['articulosPropios']) {
                if ($usuarioML['presta']==1) {
                    $listarMisProductos= $objPresta->listarArticulosBD();
                    $frontCampoTitulo= $objPresta->getTitle();
                    $frontCampoId= $objPresta->getIdART();
                    $_SESSION['articulosPropios']= $listarMisProductos;
                }
                if($usuarioML['presta']==0) {
                    $listarMisProductos= $objArticulo->listarArticulosBD();
                    $frontCampoTitulo= $objArticulo->getTitle();
                    $frontCampoId= $objArticulo->getIdART();
                    $_SESSION['articulosPropios']= $listarMisProductos;
                }
        }
        elseif($_SESSION['articulosPropios']) {
            $listarMisProductos= $_SESSION['articulosPropios'];
                if ($usuarioML['presta']==1) {
                    $frontCampoTitulo= $objPresta->getTitle();
                    $frontCampoId= $objPresta->getIdART();
                    $_SESSION['articulosPropios']= $listarMisProductos;
                }
                if($usuarioML['presta']==0) {
                    $frontCampoTitulo= $objArticulo->getTitle();
                    $frontCampoId= $objArticulo->getIdART();
                    $_SESSION['articulosPropios']= $listarMisProductos;
                }
        }
}



// alertas I
include 'includes/alertas.php';
// alertas F
 ?>
 <form action="ML-misArticulos.php" method="get">
    <div class="input-group mb-15">
        <input type="hidden" name="s" value="verArticuloML">
        <input name="id" list="buscador" class="form-control" type="text" placeholder="Buscar por ID de base de datos ó titulo">
              <datalist id="buscador">
<?php 
    foreach ($listarMisProductos as $key) {
        echo '<option label="'.$key[$frontCampoTitulo].'" value="'.$key[$frontCampoId].'">';
    }
 ?>
              </datalist>
        <span class="input-group-btn"><button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Buscar!</button></span>
    </div>
 </form>
<form name="formulario" id="formulario" action="moduloML/misArticulos/ac.actualizarMasivaML.php" method="post">
<input type="hidden" name="devuelta" value="ML-misArticulos.php?s=listarItems">
<div class="row">
    <div class="col-md-12" style="margin-bottom: 20px;">
<input class="btn btn-teal btn-xs" type="button" value="Tildar Todos" onclick="tildarTodos();">
<input class="btn btn-teal btn-xs" type="button" value="Destildar Todos" onclick="destildarTodos();">
<input class="btn btn-teal btn-xs" type="button" value="Invertir Seleccion" onclick="invertirSeleccion();">
        <div class="btn-group">
            <button type="button" class="btn btn-warning btn-xs dropdown-toggle" data-toggle="dropdown">
                Mostrar <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="ML-misArticulos.php?s=listarItems&e=<?php echo $_GET['e']; ?>&d=<?php echo $_GET['d']; ?>&h=20">20</a></li>
                <li><a href="ML-misArticulos.php?s=listarItems&e=<?php echo $_GET['e']; ?>&d=<?php echo $_GET['d']; ?>&h=50">50</a></li>
                <li><a href="ML-misArticulos.php?s=listarItems&e=<?php echo $_GET['e']; ?>&d=<?php echo $_GET['d']; ?>&h=100">100</a></li>
                <li><a href="ML-misArticulos.php?s=listarItems&e=<?php echo $_GET['e']; ?>&d=<?php echo $_GET['d']; ?>&h=200">200</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">

        <!-- Start order table -->
        <div class="panel">
            <div class="panel-heading">
         Filtrar <i class="fa fa-filter"></i>         <?php 
            for ($i=0; $i < count($estadoProv) ; $i++) { 
             ?>
                <a href="ML-misArticulos.php?s=listarItems&e=<?php echo $i; ?>"><?php echo $estadoProv[$i]; ?></a>
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
 ?>
                    <tr class="border-<?php echo $labelEstado[$listarNotas[$i]['estado']]; ?>">
                        <td>
                            <div class="ckbox ckbox-teal">
                            <input id="checkbox-teal<?php echo $ipa; ?>" type="checkbox" name="elegidos[]" value='<?php echo serialize($listarNotas[$i]); ?>'>
                            <label for="checkbox-teal<?php echo $ipa; ?>"></label>
                        </div>                        
                        </td>
                        <td><?php echo $listarNotas[$i]['idART']; ?></td>
                        <td><a data-toggle="tooltip" data-placement="top" data-original-title="Ver en Mercadolibre" target="_blank" href="<?php echo $listarNotas[$i]['perma_link']; ?>"><?php echo $listarNotas[$i]['idML']; ?></a></td>
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
    <li><a href="ML-misArticulos.php?s=listarItems&e=<?php echo $_GET['e'] ?>&d=<?php echo $anterior ?>&h=<?php echo $hasta; ?>">Anterior</a></li>
    <li><a href="ML-misArticulos.php?s=listarItems&e=<?php echo $_GET['e'] ?>&d=<?php echo $siguiente ?>&h=<?php echo $hasta; ?>">Siguiente</a></li>
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

