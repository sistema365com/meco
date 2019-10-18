<?php 
session_start();

  $url ="https://api.mercadolibre.com/shipment_labels?shipment_ids=".$_GET['id']."&response_type=pdf&access_token=".$_SESSION['access_token'];

$Result= file_get_contents($url);

// echo "<pre>";
// print_r($Result);
// echo "</pre>";

//variable que guarda el nombre del archivo PDF
$archivo="etiqueta.pdf";

//Llamada al script fpdf
require('facturas/fpdf.php');


$archivo_de_salida=$archivo;

$pdf=new FPDF();  //crea el objeto
$pdf->AddPage();  //añadimos una página. Origen coordenadas, esquina superior izquierda, posición por defeto a 1 cm de los bordes.
$pdf->SetFont('Arial','B',16);



$pdf->Output();//cierra el objeto pdf

//Creacion de las cabeceras que generarán el archivo pdf
header ("Content-Type: application/download");
header ("Content-Disposition: attachment; filename=$archivo");
header("Content-Length: " . filesize("$archivo"));
$fp = fopen($archivo, "r");
fpassthru($fp);
fclose($fp);





 ?>

<!-- https://api.mercadolibre.com/shipment_labels?shipment_ids=26076993815&response_type=pdf&access_token=APP_USR-5059930275300953-022607-d211b5c553d316c392d97ddbd60bac08__N_G__-82253270 -->
 <!--  echo "https://api.mercadolibre.com/shipment_labels?shipment_ids=".$_GET['id']."&response_type=pdf&access_token=".$_SESSION['access_token']; -->
