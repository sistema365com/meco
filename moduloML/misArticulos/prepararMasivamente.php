<?php
$presta= Configuracion::verConfigu();
$moneda= explode(',', $presta['moneda']);

if ($presta['presta']==0) {
    $objArticulo= new Articulo();
}
if ($presta['presta']==1) {
    $objArticulo= new Presta();
}
if ($presta['presta']==2) {
    $objArticulo= new Fidelity();
}
$articulos= $objArticulo->listarArticulosBDLimitados($_GET['d'],$_GET['h'],$_GET['orden']);
?>

<div class="row">
    <div class="col-lg-12">
<form action="moduloML/misArticulos/ac.guardarMLmasivo.php" method="post" onsubmit="return chequeaCompleto();">
  <label for="">Moneda</label><br>
<?php 
for ($i=0; $i < count($moneda) ; $i++) {
  $checked= '';
        if ($i==0) {
           $checked= 'checked="checked"';
         } 
 ?>
        <div class="rdio rdio-theme rounded">
            <input <?php echo $checked; ?> id="radio-type-rounded<?php echo $i+1; ?>" type="radio" name="currency_id" value="<?php echo $moneda[$i]; ?>">
            <label for="radio-type-rounded<?php echo $i+1; ?>"> <?php echo $moneda[$i]; ?></label>
        </div>
<?php 
}
 ?>
  <br>
  <label for="">Categoria de Publicación</label>
  <select onchange="checkGratis()" class="form-control" name="listing_type_id" id="tipoPubli">
  <option value="0">Seleccionar</option>
<?php 
  $listingTypeM= $meli->get('/sites/'.$presta['siteML'].'/listing_types');
  $listingType=json_decode(json_encode($listingTypeM), true);
foreach ($listingType['body'] as $key) {
  echo '<option value="'.$key['id'].'">'.$key['name'].'</option>';
}

 ?>
  </select>
  <label for="">Garantia</label>
  <input class="form-control" type="text" name="warranty">
  <label for="">Tipo de articulo</label><br>
        <div class="rdio rdio-theme rounded">
            <input checked="checked" id="radio-type-rounded51" type="radio" name="condition_buy" value="new">
            <label for="radio-type-rounded51">Nuevo</label>
        </div>
        <div class="rdio rdio-theme rounded">
            <input id="radio-type-rounded52" type="radio" name="condition_buy" value="used">
            <label for="radio-type-rounded52">Usado</label>
        </div>
<!--   <input checked="checked" type="radio" name="condition_buy" value="new"> Nuevo
  <input type="radio" name="condition_buy" value="used"> Usado -->
  <br>
  <label for="">Opciones de Envio</label><br>
  <label style="margin-right: 5px;" for="">Mercado Envios </label><input checked type="checkbox" class="switch" value="me2" name="envios1[]" data-on-text="SI" data-off-text="NO" data-on-color="teal">
  <label style="margin-right: 5px;" for="">Ofrecer retiro en Tienda </label><input checked type="checkbox" class="switch" value="true" name="envios2[]" data-on-text="SI" data-off-text="NO" data-on-color="teal">
<!--   <input checked="true" type="checkbox" name="envios1[]" value="me2"> Mercado Envios   |
  <input checked="true" type="checkbox" name="envios2[]" value="true"> Ofrecer retiro en Tienda -->
  <div style="margin: 20px;"></div>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Articulos de tu base de datos</h3>
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
                      <th>Categoría Recomendada en ML</th>
                      <th>Stock</th>
                      <th>Precio</th>
                      <th>Condicion</th>
                      <th>Ver Art</th>
                    </tr>
<?php 
  $ipa= 1;
foreach ($articulos as $key) {
  // si es de fidelity le cambio el titulo y le agrego la etiqueta de mili litros
  if ($presta['prefijo']=='balcon') {
    $key['titulo']=$key[$objArticulo->getTitle()].' '.$key['etiquetas'][0]['etiqueta'][0];
  }
  $publicado= false;
  $verArticuloML= $objArticulo->verArticuloBM($key[$objArticulo->getIdART()],$_SESSION['empresa']);
  if ($verArticuloML['idART']!=$key[$objArticulo->getIdART()]) {
    $publicado= true;
  }
  // $cantidad= count($categorias['json']['path_from_root'])-2;
    $categoriasM= $meli->get('/sites/'.$presta['siteML'].'/category_predictor/predict?title='.str_replace(" ", "%20", $key[$objArticulo->getTitle()]));
    $categorias=json_decode(json_encode($categoriasM), true);
      $arbolCate= '';
    for ($i=0; $i < count($categorias['body']['path_from_root']) ; $i++) { 
      $arbolCate[]= $categorias['body']['path_from_root'][$i]['name'];
      $arbolCateID[]= $categorias['body']['path_from_root'][$i]['id'];
    }
 ?>
                    <tr>
                      <td>
                      <?php if($publicado){ ?>
                        <div class="ckbox ckbox-teal">
                            <input id="checkbox-teal<?php echo $ipa; ?>" type="checkbox" name="elegidos[]" value="<?php echo $key[$objArticulo->getIdART()].'/'.end($arbolCateID); ?>">
                            <label for="checkbox-teal<?php echo $ipa; ?>"></label>
                        </div>
                      <?php } ?>
                      </td>
                      <!-- <td style="width: 20px;"><?php if($publicado){ ?><input type="checkbox" name="elegidos[]" value="<?php echo $key[$objArticulo->getIdART()].'/'.end($arbolCateID); ?>"><?php } ?></td> -->
                      <td><?php echo $key[$objArticulo->getIdART()]; ?></td>
                      <td><?php echo $key[$objArticulo->getTitle()]; ?></td>
                      <td><?php echo implode($arbolCate, '->').'('.end($arbolCateID).')'; ?></td>
                      <td><?php echo $key[$objArticulo->getAvailable_quantity()]; ?></td>
                      <td>$<?php echo $key[$objArticulo->getPrice()]; ?></td>
                      <td><?php echo $key['CONDICION']; ?></td>
                      <td><a href="ML-misArticulos.php?s=verArticuloPropio&t=PRESTA&id=<?php echo $key[$objArticulo->getIdART()]; ?>" target="_blank"><i class="fa fa-link"></i></a></td>
                    </tr>
<?php 
  $ipa ++;
  }
 ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <div class="boton-fijo">
              <button onclick="preshow();" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar Seleccionados</button>
              </div>
    </div>
</form>
<?php 
$anterior= $_GET['d']-$_GET['h'];
$siguiente= $_GET['d']+$_GET['h'];
 ?>
<nav aria-label="...">
  <ul class="pager">
    <li><a href="ML-misArticulos.php?s=prepararMasivamente&d=<?php echo $anterior ?>&h=<?php echo $_GET['h']; ?>">Anterior</a></li>
    <li><a href="ML-misArticulos.php?s=prepararMasivamente&d=<?php echo $siguiente ?>&h=<?php echo $_GET['h']; ?>">Siguiente</a></li>
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
