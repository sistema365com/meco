<?php 
session_start();


$idsEtiqueta= $_POST['idsEtiqueta'];


  $url ="https://api.mercadolibre.com/shipment_labels?shipment_ids=".implode(',', $idsEtiqueta)."&response_type=pdf&access_token=".$_SESSION['access_token'];
  header('Location: '.$url);

 ?>
