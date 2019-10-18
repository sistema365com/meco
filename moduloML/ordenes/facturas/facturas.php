<?php
include '../../class/Conexion.php';
include '../../class/Generico.php';
include '../../includes/funciones.php';
include '../../includes/configuraciones.php';

if ($_POST["generar_factura"] == "true")
{

//Recibir detalles de factura
$fechaRecepcion = $_POST[fechaRecepcion];
$idNota = $_POST[ID];
$datoext1 = $_POST[DATOEXT1];
$datoext2 = $_POST[DATOEXT2];
$datoext3 = $_POST[DATOEXT3];
$datoext4 = $_POST[DATOEXT4];
$datoext5 = $_POST[DATOEXT5];
$datoext6 = $_POST[DATOEXT6];
$datoext7 = $_POST[DATOEXT7];
$datoext8 = $_POST[DATOEXT8];
$datoext9 = $_POST[DATOEXT9];
$datoext10 = $_POST[DATOEXT10];
$datoext11 = $_POST[DATOEXT11];
$datoext12 = $_POST[DATOEXT12];
$datoext13 = $_POST[DATOEXT13];
$datoext14 = $_POST[DATOEXT14];
$datoext15 = $_POST[DATOEXT15];
$datoext16 = $_POST[DATOEXT16];
$datoext17 = $_POST[DATOEXT17];
$datoext18 = $_POST[DATOEXT18];
$datoext19 = $_POST[DATOEXT19];
$datoext20 = $_POST[DATOEXT20];
$datoext21 = $_POST[DATOEXT21];
$datoext22 = $_POST[DATOEXT22];

//variable que guarda el nombre del archivo PDF
$archivo="remito-$idNota.pdf";

//Llamada al script fpdf
require('fpdf.php');


$archivo_de_salida=$archivo;

$pdf=new FPDF();  //crea el objeto
$pdf->AddPage();  //añadimos una página. Origen coordenadas, esquina superior izquierda, posición por defeto a 1 cm de los bordes.


//logo de la tienda
$pdf->Image('../../../images/logoarco.png' , 5 ,5, 0, 20,'PNG', 'http://php-estudios.blogspot.com');

// Encabezado de la factura
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190, 10, "REMITO REPARACIÓN", 0, 2, "R");
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5, "Número de reparación: $idNota"."\n"."Fecha: $fechaRecepcion", 0, "R", false);
$pdf->Ln(2);


// Datos de la tienda
$pdf->SetFont('Arial','B',12);
$top_datos=45;
$pdf->SetXY(40, $top_datos);
$pdf->Cell(190, 10, "Datos de la maquina:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190, //posición X
5, //posición Y
"Máquina: ".$datoext4."\n".
"Modelo: ".$datoext5."\n".
"Marca: ".$datoext6."\n".
"Accesorios: ".$datoext7."\n".
"Nº de Serie: ".$datoext8."\n".
"Faltantes: ".$datoext9."\n".
"Falla aparente: ".$datoext10,
 0, // bordes 0 = no | 1 = si
 "J", // texto justificado 
 false);


// Datos del cliente
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(125, $top_datos);
$pdf->Cell(190, 10, "Datos del cliente:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(
190, //posición X
5, //posicion Y
"Nombre: ".$datoext1."\n".
"E-mail: ".$datoext2."\n".
"Teléfono: ".$datoext3, 
0, // bordes 0 = no | 1 = si
"J", // texto justificado
false);

//Salto de línea
$pdf->Ln(2);

// Datos del cliente
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(40, 150);
$pdf->Cell(150, 10, "Atención:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(
150, //posición X
5, //posicion Y
"Las máquinas deberán ser retiradas dentro de los 60 días. En caso contrario se actualizará el costo a la lista en vigencia. Luego de los 90 días se cobrará una tasa mensual en concepto de almacenamiento.", 
0, // bordes 0 = no | 1 = si
"J", // texto justificado
false);

$pdf->SetFont('Arial','B',14);
$pdf->SetXY(40, -55);
$pdf->MultiCell(
150, //posición X
8, //posicion Y
"Firma: \n".
"Aclaración: \n", 
1, // bordes 0 = no | 1 = si
"J", // texto justificado
false);

$pdf->SetFont('Courier','',10);
$pdf->SetXY(40, -35);
$pdf->MultiCell(
150, //posición X
5, //posicion Y
"Si tiene consultas puede llamarnos al 4583-4477 ó ingresar a: www.reparaciones.arcomaquinarias.com", 
0, // bordes 0 = no | 1 = si
"C", // texto justificado
false);

// $pdf->Output($archivo_de_salida);//cierra el objeto pdf
$pdf->Output();//cierra el objeto pdf

//Creacion de las cabeceras que generarán el archivo pdf
header ("Content-Type: application/download");
header ("Content-Disposition: attachment; filename=$archivo");
header("Content-Length: " . filesize("$archivo"));
$fp = fopen($archivo, "r");
fpassthru($fp);
fclose($fp);

//Eliminación del archivo en el servidor
unlink($archivo);
}