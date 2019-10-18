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


header('Content-Type: application/json');
echo json_encode($data);
