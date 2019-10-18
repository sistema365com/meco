<?php 
session_start();
include '../../class/Conexion.php';
include '../../class/Configuracion.php';
include 'class.Articulo.php';
include 'class.Presta.php';
include 'class.fidelty.php';
include '../../includes/funciones.php';

$objBaseMeli= new Articulo();
$presta= Configuracion::verConfigu();
if ($presta['presta']==1) {
	$objArticulo= new Presta();
	$keyDesc= 'description';
}
if ($presta['presta']==2) {
	$objArticulo= new Fidelity();
	$keyDesc= 'description';
}
if ($presta['presta']==0) {
	$objArticulo= new Articulo();
	$keyDesc= 'texto';
}

$elegidos= $_POST['elegidos'];
for ($i=0; $i < count($elegidos); $i++) { 
	$imagenesM='';
	$locura= explode('/', $elegidos[$i]);
	$verART= $objArticulo->verArticuloBD($locura[0]);
	if ($presta['presta']!=2) {
		$verDesc= $objArticulo->verDescripcion($locura[0]);
	}
if ($presta['presta']==0) {
	$imagenesM[]= $presta['urlImg'].$locura[0].'.jpg';
}
if ($presta['presta']==2) {
	$imagenesM[]= $verART['imagenes'][0];
	$keyDesc= 'contenido';
	$verDesc= $verART;
}
if ($presta['presta']==1) {
	if ($presta['configIMGPRESTA']==1) {
	$listarImg= $objArticulo->listarImgPresta($locura[0]);
			foreach ($listarImg as $key) {
				$imagenesM[]= $presta['urlImg'].$key['IMG'].'/'.$key['IMG'].'-thickbox_default/'.urls_amigables($verART['DESCRIP']).'.jpg';
			}
	}
	if ($presta['configIMGPRESTA']==2) {
	$listarImg= $objArticulo->listarImgPresta2($locura[0]);
			foreach ($listarImg as $key) {
			$carpetitasF= implode('/', str_split($key['IMG']));
				$imagenesM[]= $presta['urlImg'].'img/p/'.$carpetitasF.'/'.$key['IMG'].'.jpg';
			}
	}
}


	$cargarArticulo= $objBaseMeli->altaMasivaBM($verART,$locura[1],strip_tags(html_entity_decode($verDesc[$keyDesc])),$imagenesM,$_SESSION['empresa'],$presta['siteML']);

}




header('Location: ../../ML-misArticulos.php?s=itemsPendientes&e=0');

 ?>


