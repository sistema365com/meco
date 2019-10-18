<?php 
$objArticulo= new Articulo();
$objPresta= new Presta();
$contarPublicados= $objArticulo->contarArticulosBM(1,$_SESSION['empresa']);
$contarPausados= $objArticulo->contarArticulosBM(3,$_SESSION['empresa']);
$contarFinalizados= $objArticulo->contarArticulosBM(4,$_SESSION['empresa']);
$articulosImportados= $contarPublicados['cantidad']+$contarPausados['cantidad']+$contarFinalizados['cantidad'];
$listarNotas= $objArticulo->listarArticulosBM($_GET['e'],$_SESSION['empresa'],0,20000);

$usuarioML= Configuracion::verConfigu();

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

if (!$_GET['limit']) {
	$limitePagina= 20;
}
else {
	$limitePagina= $_GET['limit'];
}


$params = array(
'access_token' => $_SESSION['access_token']
);
$paramsFilter = array(
'access_token' => $_SESSION['access_token'],
'limit' => $limitePagina,
// 'orders' => 'start_time_desc',
'offset' => $_GET['offset']
);
// consulto items del usuario
$itemsMLP= $meli->get('users/'.$usuarioML['mlUserId'].'/items/search',$paramsFilter);
// total items
$totalArticulos= $itemsMLP['body']->paging->total;
// guardo array con los items
for ($i=0; $i < count($itemsMLP['body']->results); $i++) { 
	$itemsParaChequear[]= $itemsMLP['body']->results[$i]; 
}
$multiGet= implode(',', $itemsParaChequear);

// consulto detalles de todos los items
	$atributos= '&attributes=id,title,seller_custom_field,site_id,available_quantity,status,price,permalink,listing_type_id';
	$datoItem1= $meli->get('items?ids='.$multiGet.$atributos.'&access_token='.$_SESSION['access_token']);
//probar($datoItem1);
include 'includes/alertas.php'; 

?>
<div class="row">
    <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            ¿Que podemos hacer aquí?
                        </div>
                        <div class="panel-body">
                            <p>Aquí se encuentran todos tus artículos actualmente publicados en mercadolibre, podras ir chequeando uno a uno todos para guardarlos en MercadoConnecting y luego controlar tus publicaciones desde aquí. <br>
                            Actualmente tienes en MercadoLibre: <?php echo $itemsMLP['body']->paging->total; ?> Publicaciones. <br>
                            Importaste a MercadoConnecting: <?php echo $articulosImportados; ?>
                            </p>
                        </div>
                    </div>
    </div>
</div>
<?php 
	for ($i=0; $i < count($datoItem1['body']); $i++) {
		// reemplazo comillas en el serializado
		$arrayOrig= json_decode(json_encode($datoItem1['body'][$i]), true);
		$arrayOrig['title']= str_replace("''", "COMILLAS", $arrayOrig['title']);
		$serializado= serialize($arrayOrig);
		$buscando= buscarEnArray($listarNotas,$datoItem1['body'][$i]->id,'idML');
		if ($buscando['idML']==$datoItem1['body'][$i]->id) {
			$claseCuadro= 'success';
			$botonDeGuardado= '<button id="boton-'.$i.'" class="btn btn-success disabled" type="submit"><i class="fa fa-check"></i> Listo</button>';
		}
		else {
			$claseCuadro= 'warning';
			$botonDeGuardado= '<button id="boton-'.$i.'" class="btn btn-warning" type="submit"><i class="fa fa-save"></i> Guardar</button>';
		}
?>
        <div class="row">
        <div class="col-lg-12">
            <div id="cuadro-<?php echo $i; ?>" class="panel panel-<?php echo $claseCuadro; ?>">
                <div class="panel-heading">
                  <h3 style="margin-bottom: 5px;" class="panel-title"><b><?php echo $datoItem1['body'][$i]->title; ?></b> <a target="_blank" href="<?php echo $datoItem1['body'][$i]->permalink; ?>"><i class="fa fa-link"></i></a></h3>
                </div>
                <div class="panel-body">
                  <p>
                  	<img style="float:left;" src="<?php echo $datoItem1['body'][$i]->thumbnail; ?>" alt="">
                  	Id Publicación: <?php echo $datoItem1['body'][$i]->id; ?> <br>
                  	Estado: <?php echo $datoItem1['body'][$i]->status; ?> <br>
                  	Cantidad: <?php echo $datoItem1['body'][$i]->available_quantity; ?> <br>
                  	Precio: $<?php echo $datoItem1['body'][$i]->price; ?>.- <br>
                  </p>
                  <form method="" action="" onsubmit="return enviarDatos(<?php echo $i; ?>)">
                  	<input type="hidden" id="array<?php echo $i; ?>" value='<?php echo $serializado; ?>'>
                  	<label for="">Id del artículo en mi base de datos:</label>
                  	<input style="max-width: 200px; padding: 5px" list="buscador<?php echo $i; ?>" type="text" id="articulo<?php echo $i; ?>" value="<?php echo $datoItem1['body'][$i]->seller_custom_field; ?>">
              <datalist id="buscador<?php echo $i; ?>">
<?php 
	foreach ($listarMisProductos as $key) {
		echo '<option label="'.$key[$frontCampoTitulo].'" value="'.$key[$frontCampoId].'">';
	}
 ?>
              </datalist>
					<?php echo $botonDeGuardado; ?>
                  </form>
                </div>
            </div>
        </div>
        </div>
<?php
	}

 ?>

		<script type="text/javascript">
			function enviarDatos(id){
			        //valores del texto
					array = document.getElementById('array'+id).value;
					articulo = document.getElementById('articulo'+id).value;
					document.getElementById('articulo'+id).className='spinner flat';
			         //mostrar resultado
					// respuesta = document.getElementById('respuesta'+id);
					//instanciamos el objetoAjax
					ajax = new XMLHttpRequest();
					ajax.open('POST','moduloML/importar/ac.importar.php');
					ajax.onload = function (){
						if (ajax.readyState==1 || ajax.readyState==2 || ajax.readyState==3) {
								document.getElementById('articulo'+id).className='spinner flat';
						}
						else if (ajax.readyState==4){
						if(ajax.status == 200 ){ //<-- rta satisfactoria
							respuesta = (ajax.responseText);
							if (respuesta=='GUARDADO') {
								document.getElementById('articulo'+id).className='';
								document.getElementById('cuadro-'+id).className='panel panel-success';
								document.getElementById('boton-'+id).className='btn btn-success disabled';
								document.getElementById('boton-'+id).innerHTML='<i class="fa fa-check"></i> Listo';
								// alert('guardado');
							}
							if (respuesta=='Error') {
								document.getElementById('articulo'+id).className='';
								document.getElementById('cuadro-'+id).className='panel panel-danger';
								document.getElementById('boton-'+id).innerHTML='<i class="fa fa-exclamation"></i> Error';
								document.getElementById('boton-'+id).className='btn btn-danger';
								alert('Error inesperado, intentalo nuevamente o contactanos');
							}
							if (respuesta=='Error1') {
								document.getElementById('articulo'+id).className='';
								document.getElementById('cuadro-'+id).className='panel panel-danger';
								document.getElementById('boton-'+id).innerHTML='<i class="fa fa-exclamation"></i> Error';
								document.getElementById('boton-'+id).className='btn btn-danger';
								alert('Ya importaste un articulo con ese ID');
							}
							if (respuesta=='Error2') {
								document.getElementById('articulo'+id).className='';
								document.getElementById('cuadro-'+id).className='panel panel-danger direct-chat direct-chat-danger';
								document.getElementById('boton-'+id).innerHTML='<i class="fa fa-exclamation"></i> Error';
								document.getElementById('boton-'+id).className='btn btn-danger';
								alert('No encontramos este ID en tu base de datos');
							}
						} 
						}
						else {
							alert('Se produjo un error, volver a intentarlo');
						}
					};
					//Llamamos al método setRequestHeader indicando que los datos a enviarse están codificados como un formulario. 
					ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
					//enviamos las variables a 'consulta.php' 
					ajax.send('&array='+array+'&articulo='+articulo);
					return false;
				} 
		</script>


<?php 
$anterior= $_GET['offset']-$limitePagina;
$siguiente= $_GET['offset']+$limitePagina;
 ?>
<nav aria-label="...">
  <ul class="pager">
    <li><a href="?offset=<?php echo $anterior ?>&limit=<?php echo $limitePagina; ?>">Anterior</a></li>
    <li><a href="?offset=<?php echo $siguiente ?>&limit=<?php echo $limitePagina; ?>">Siguiente</a></li>
  </ul>
</nav>
</div>


