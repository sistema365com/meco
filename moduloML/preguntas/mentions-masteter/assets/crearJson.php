<?PHP
include '../../../../class/Conexion.php';
include '../../../../class/Configuracion.php';
include '../../../misArticulos/class.Articulo.php';
$objArticulo= new Articulo();
$listarNotas= $objArticulo->listarArticulosBM(1,$_GET['empresa'],0,15000);

foreach ($listarNotas as $key) {
    $data[] = array(
        'id' => $key['title'], 
        'name' => $key['title'].' -> '.$key['perma_link'].' <- ', 
        'avatar' => 'http://cdn0.4dots.com/i/customavatars/avatar7112_1.gif', 
        'type' => 'contac', 
        );
}


$jsonencoded= json_encode($data,JSON_UNESCAPED_UNICODE);


if (file_exists($_GET['empresa'].".json")) {
	unlink($_GET['empresa'].".json");
}

$fh = fopen($_GET['empresa'].".json", 'w');
fwrite($fh, $jsonencoded);
fclose($fh);


?>
<a target="_blank" href="http://mercadoconnecting.com/app/moduloML/preguntas/mentions-masteter/assets/<?php echo $_GET['empresa']; ?>.json"> ver archivo</a>


