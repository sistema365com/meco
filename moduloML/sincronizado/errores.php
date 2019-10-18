<?php

(!$_GET['fechaInicio'])?$fechaInicio=$fechaHoy:$fechaInicio=$_GET['fechaInicio'];
(!$_GET['fechaFin'])?$fechaFin=$fechaHoy:$fechaFin=$_GET['fechaFin'];
$presta= Configuracion::verConfigu();

$objArticulo= new Articulo();

$listarErrores= $objArticulo->listarErrores($fechaInicio,$fechaFin,$_SESSION['empresa']);
 ?>

<div class="row">
	<div class="col-lg-6">
		<p>
			Aquí podemos ver los errores al enviar datos desde MercadoConnecting a Mercadolibre, revisa tus publicaciones.
		</p>
	</div>
	<div class="col-lg-6">
		<form action="ML-sincronizado.php" method="GET">
			<input type="hidden" name="s" value="errores">
			<label>Desde</label>
			<input type="date" name="fechaInicio" value="<?php echo $fechaHoy; ?>">
			<label>Hasta</label>
			<input type="date" name="fechaFin" value="<?php echo $fechaHoy; ?>">
			<input class="btn btn-info" type="submit" value="Buscar" class="btn bg-olive margin">
		</form>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Errores (<?php echo count($listarErrores); ?>)</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th>ID Mi base</th>
                      <th>Id Mercadolibre</th>
                      <th>Texto Error</th>
                      <th>Fecha</th>
                      <th>Acción</th>
                    </tr>

<?php 
    for ($i=0; $i < count($listarErrores); $i++) {
    ?>
                    <tr>
                      <td><?php echo $listarErrores[$i]['idART']; ?> <a href=""></a></td>
                      <td><?php echo $listarErrores[$i]['idML']; ?></td>
                      <td><?php echo $listarErrores[$i]['mensaje']; ?></td>
                      <td><?php echo $listarErrores[$i]['fecha']; ?></td>
                        <td>
                            <a target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Editar Producto" class="btn btn-success" href="ML-misArticulos.php?s=verArticuloML&id=<?php echo $listarErrores[$i]['idART']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                        </td>
                    </tr>
<?php 
    }
 ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
	</div>
</form>
</div>
<?php 
$anterior= $_GET['d']-$_GET['h'];
$siguiente= $_GET['d']+$_GET['h'];
 ?>
<nav aria-label="...">
  <ul class="pager">
    <li><a href="?s=mb-meli&buscar=ok&d=<?php echo $anterior ?>&h=<?php echo $_GET['h']; ?>">Anterior</a></li>
    <li><a href="?s=mb-meli&buscar=ok&d=<?php echo $siguiente ?>&h=<?php echo $_GET['h']; ?>">Siguiente</a></li>
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