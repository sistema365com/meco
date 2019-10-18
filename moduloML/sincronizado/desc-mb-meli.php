<?php


$presta= Configuracion::verConfigu();

$objBM= new Articulo();
if ($presta['presta']==0) {
    $objArticulo= new Articulo();
    if($_SESSION['empresa']==8){
        $campoTexto= 'texto_ml';
    }
}
if ($presta['presta']==1) {
    $objArticulo= new Presta();
    $campoTexto= 'TEXTO';
}
if ($presta['presta']==2) {
    $objArticulo= new Fidelity();
    $campoTexto= 'contenido';
}

$listarItemsML= $objBM->listarArticulosBMC($_SESSION['empresa'],$_GET['d'],$_GET['h']);
foreach ($listarItemsML as $key) {
	$nuevoArray[]= $key['NUMERO'];
}
$listarStock= $objArticulo->listarArticulosBDC($nuevoArray);
// probar($listarStock);
 ?>

<div class="row">
	<div class="col-lg-6">
		<p>
			Debido a los cambios en las descripciones propuestos por Mercadolibre, creamos un modulo especial para poder procesar los datos de descripciones que figuran en HTML y quieren ser pasados a formato texto plano.<br>
			Desde aquí, van a poder traer los datos de su base de datos de ERP ó Presta a Mercado Connecting, para que luego puedan enviarlos a Mercado Libre.
		</p>
	</div>
		<div class="col-lg-2" style="text-align: center;"><i style="font-size: 30px;" class="fa fa-cubes"></i><br>Base de datos de mis artículos</div>
		<div class="col-lg-2" style="text-align: center;"><i style="font-size: 30px;" class="fa fa-arrow-right"></i></div>
		<div class="col-lg-2" style="text-align: center;"><i style="font-size: 30px;" class="fa fa-database"></i><br>Base de Artículos creados en Mercado Connecting</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<a class="btn btn-success" onclick="preshow();" href="?s=desc-mb-meli&buscar=ok&d=0&h=10"><i class="fa fa-search"></i> Buscar Cambios desde la ultima Actualización</a>
		<div class="btn-group">
          <button type="button" class="btn btn-success">Mostrar</button>
          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="ML-sincronizado.php?s=desc-mb-meli&buscar=ok&d=<?php echo $_GET['d']; ?>&h=10"> 10</a></li>
            <li><a href="ML-sincronizado.php?s=desc-mb-meli&buscar=ok&d=<?php echo $_GET['d']; ?>&h=20"> 20</a></li>
            <li><a href="ML-sincronizado.php?s=desc-mb-meli&buscar=ok&d=<?php echo $_GET['d']; ?>&h=30"> 30</a></li>
            <li><a onclick="return confirm('Esto puede demorar un poco... ten paciencia!');" href="ML-sincronizado.php?s=desc-mb-meli&buscar=ok&d=<?php echo $_GET['d']; ?>&h=1000"> 1000</a></li>
            <li><a onclick="return confirm('Esto puede demorar un poco... ten paciencia!');" href="ML-sincronizado.php?s=desc-mb-meli&buscar=ok&d=<?php echo $_GET['d']; ?>&h=10000"> 10000</a></li>
          </ul>
        </div>
	</div>
</div>
<?php if($_GET['buscar']=='ok'){ ?>
<div class="row">
	<div class="col-lg-12">
<form action="moduloML/sincronizado/desc-ac.mb-meli.php" method="post">


<input type="hidden" name="d" value="<?php echo $_GET['d']; ?>">
<input type="hidden" name="h" value="<?php echo $_GET['h']; ?>">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Artículos con cambios</h3>
<input class="btn btn-teal" type="button" value="Tildar Todos" onclick="tildarTodos();">
<input class="btn btn-teal" type="button" value="Destildar Todos" onclick="destildarTodos();">
<input class="btn btn-teal" type="button" value="Invertir Seleccion" onclick="invertirSeleccion();"><br>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 20px;">#</th>
                      <th>ID</th>
                      <th>Texto en tu base</th>
                      <th>Texto en Mercado Connecting</th>
                    </tr>

<?php 
    for ($i=0; $i < count($listarItemsML); $i++) {
    $noSeEncuentra='';
    $dif=''; 
    $claveDeBusqueda = ($_SESSION['empresa']==8) ? 'sku' : 'NUMERO' ;
    $claveBuscada= buscarEnArray($listarStock,$listarItemsML[$i]['NUMERO'],$claveDeBusqueda);
    if ($claveBuscada['NUMERO']!=$listarItemsML[$i]['NUMERO']) {
    	$noSeEncuentra= 'Articulo no disponible en presta';
    	$claveparaPausar = array(
    		'NUMERO' => $listarItemsML[$i]['NUMERO'], 
    		'DESCRIP' => $listarItemsML[$i]['DESCRIP'], 
    		'STOCK' => 0, 
    		'PRECIO' => $listarItemsML[$i]['PRECIO'], 
    		);
    	$serializado=$claveparaPausar;
    }
    else {
	    if ($claveBuscada['DESCRIP'] != $listarItemsML[$i]['DESCRIP']) {
	    	$dif[]= 'TITULO';
	    }
	    if ($claveBuscada['PRECIO'] != $listarItemsML[$i]['PRECIO']) {
	    	$dif[]= 'PRECIO';
	    }
	    if ($claveBuscada['STOCK'] != $listarItemsML[$i]['STOCK']) {
	    	$dif[]= 'STOCK';
	    }
      // probar cambiar clave buscada por $listarItemsML
	    $serializado=$claveBuscada;
    }
    ?>
                    <tr>
                      <td>
                        <div class="ckbox ckbox-teal">
                            <input id="checkbox-teal<?php echo $i+1; ?>" type="checkbox" name="elegidos[]" value='<?php echo $listarItemsML[$i]['NUMERO']; ?>'>
                            <label for="checkbox-teal<?php echo $i+1; ?>"></label>
                        </div>
                      </td>
                      <!-- <td style="width: 20px;"><input type="checkbox" name="elegidos[]" value='<?php echo serialize($serializado); ?>'></td> -->
                      <td><?php echo $listarItemsML[$i]['NUMERO']; ?></td>
                      <td><?php echo nl2br($claveBuscada[$campoTexto]); ?></td>
                      <td><?php echo nl2br($listarItemsML[$i]['TEXTO']); ?></td>
                    </tr>
<?php 
    }
 ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <div class="boton-fijo">
              <button onclick="preshow();" type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Actualizar Seleccionados</button>
              </div>
	</div>
</form>
</div>
<?php 
$anterior= $_GET['d']-$_GET['h'];
$siguiente= $_GET['d']+$_GET['h'];
 ?>
<nav aria-label="...">
  <ul class="pager">
    <li><a href="?s=desc-mb-meli&buscar=ok&d=<?php echo $anterior ?>&h=<?php echo $_GET['h']; ?>">Anterior</a></li>
    <li><a href="?s=desc-mb-meli&buscar=ok&d=<?php echo $siguiente ?>&h=<?php echo $_GET['h']; ?>">Siguiente</a></li>
  </ul>
</nav>
</div>


<?php } ?>

<script type="text/javascript">

function chequeaCompleto(){
	var dato= document.getElementById('mecanico').value;
	if (dato!=0) {
		document.getElementById('boton').removeAttribute('disabled','true');
	}
	if (dato==0) {
		document.getElementById('boton').setAttribute('disabled','true');
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