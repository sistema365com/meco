<?php

$objArticulo= new Articulo();
$listarItemsML= $objArticulo->listarArticulosBMLimitado(3,$_SESSION['empresa'],$_GET['d'],$_GET['h']);
foreach ($listarItemsML as $key) {
	if ($key['available_quantity']==0) {
		$listarItemsML2[]= $key;
	}
}

 ?>
<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ¿Que podemos hacer en esta sección?
                        </div>
                        <div class="panel-body">
                            <p>Aquí listamos todos los articulos que tienes pausados en MercadoConnecting por falta de Stock en tu Base de PrestaShop, para que definas si quieres eliminarlos o no. <br> <span style="color:red;">Al eliminarlos, Borraremos tambien la publicación de mercadolibre y ya no podrá ser republicada!</span></p>
                        </div>
                    </div>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
<form action="moduloML/misArticulos/ac.cambiarEstadoMasivo.php?e=cerrar&eliminarMC=1" method="post">
<input type="hidden" name="d" value="<?php echo $_GET['d']; ?>">
<input type="hidden" name="h" value="<?php echo $_GET['h']; ?>">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Artículos no encontrados en Presta </h3>
<input type="button" value="Tildar Todos" onclick="tildarTodos();">
<input type="button" value="Destildar Todos" onclick="destildarTodos();">
<input type="button" value="Invertir Seleccion" onclick="invertirSeleccion();"><br>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 20px;">#</th>
                      <th>ID</th>
                      <th>Titulo</th>
                      <th>Precio</th>
                      <th>Stock</th>
                    </tr>

<?php 
    foreach ($listarItemsML2 as $key) {
    	$serialice= '';
    	$serialice = array(
    		'idART' => $key['idART'],
    		'idML' => $key['idML'],
    		 );
    ?>
                    <tr>
                      <td style="width: 20px;"><input type="checkbox" name="elegidos[]" value='<?php echo serialize($serialice); ?>'></td>
                      <td><?php echo $key['idART']; ?></td>
                      <td><a target="_blank" href="<?php echo $key['perma_link']; ?>"><?php echo $key['title']; ?></a></td>
                      <td><?php echo $key['price']; ?></td>
                      <td><?php echo $key['available_quantity']; ?></td>
                    </tr>
<?php 
    }
 ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <button onclick="preshow();" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar Seleccionados de MercadoConnecting</button>
	</div>
</form>
</div>
<?php 
$anterior= $_GET['d']-20;
$siguiente= $_GET['d']+20;
 ?>
<nav aria-label="...">
  <ul class="pager">
    <li><a href="?d=<?php echo $anterior ?>&h=20">Anterior</a></li>
    <li><a href="?d=<?php echo $siguiente ?>&h=20">Siguiente</a></li>
  </ul>
</nav>
</div>



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