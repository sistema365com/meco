<?php

if (!$_GET['d']) {
	$_GET['d']=0;
}
if (!$_GET['h']) {
	$_GET['h']=100;
}


$objArticulo= new Articulo();
$articulos= $objArticulo->BMPendientes(0,$_SESSION['empresa'],$_GET['d'],$_GET['h']);


 ?>

<div class="row">
	<div class="col-lg-12">
<form action="ML-misArticulos.php?s=publicarMasiva" method="post">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Articulos listos para enviar a Mercadolibre</h3>
<input class="btn btn-teal" type="button" value="Tildar Todos" onclick="tildarTodos();">
<input class="btn btn-teal" type="button" value="Destildar Todos" onclick="destildarTodos();">
<input class="btn btn-teal" type="button" value="Invertir Seleccion" onclick="invertirSeleccion();"><br>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 20px;">#</th>
                      <th>ID</th>
                      <th>Titulo</th>
                      <th>Foto</th>
                      <th>Precio</th>
                      <th>Stock</th>
                    </tr>
<?php 
$ipa= 1;
foreach ($articulos as $key) {
	$foto= explode(',', $key['pictures']);
 ?>
                    <tr>
                      <td>
                        <div class="ckbox ckbox-teal">
                            <input id="checkbox-teal<?php echo $ipa; ?>" type="checkbox" name="elegidos[]" value="<?php echo $key['idART']; ?>">
                            <label for="checkbox-teal<?php echo $ipa; ?>"></label>
                        </div>
                      </td>
                      <!-- <td style="width: 20px;"><input type="checkbox" name="elegidos[]" value="<?php echo $key['idART']; ?>"></td> -->
                      <td><a data-toggle="tooltip" data-placement="top" data-original-title="Editar Producto" href="ML-misArticulos.php?s=verArticuloML&id=<?php echo $key['idART']; ?>"><?php echo $key['idART']; ?></a></td>
                      <td><a data-toggle="tooltip" data-placement="top" data-original-title="Editar Producto" href="ML-misArticulos.php?s=verArticuloML&id=<?php echo $key['idART']; ?>"><?php echo $key['title']; ?></a></td>
                      <td><img class="img-circle" style="width: 30px;" src="<?php echo $foto[0]; ?>"></td>
                      <td>$<?php echo $key['price']; ?></td>
                      <td><?php echo $key['available_quantity']; ?></td>
                    </tr>
<?php 
$ipa ++;
}
 ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <div class="boton-fijo">
              <button onclick="preshow();" type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Publicar Seleccionados</button>
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
    <li><a href="?s=itemsPendientes&d=<?php echo $anterior ?>&h=<?php echo $_GET['h']; ?>">Anterior</a></li>
    <li><a href="?s=itemsPendientes&d=<?php echo $siguiente ?>&h=<?php echo $_GET['h']; ?>">Siguiente</a></li>
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