<?php 
session_start();

  $url ="https://api.mercadolibre.com/shipment_labels?shipment_ids=".$_GET['id']."&response_type=pdf&access_token=".$_SESSION['access_token'];
  header('Location: '.$url);

 ?>
<!-- <!DOCTYPE HTML>
<html>
<head>
<title>MercadoLibre</title>
<meta charset='utf-8' /> <!--sirve para que se lean las ñ y las tildes-->
<!-- <style type="text/css">/*asi son los comentarios en css*/
html, body{
height: 100%;
margin: 0px;
padding: 0px;
}
iframe{
border: none;
width: 100%;
height: 100%;
margin: 0px;
padding: 0px;
overflow-y: hidden;
overflow-x: hidden;
}
</style>
</head>
<body>
<iframe style="border: none; width: 100%; height: 100%; margin: 0px;" src="<?php echo $url; ?>"></iframe>
</body>
</html> -->