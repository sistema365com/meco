<?php 
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Comprobante de Entrega</title>
		<meta charset='utf-8' /> <!--sirve para que se lean las ñ y las tildes-->
		<style type="text/css">/*asi son los comentarios en css*/
		body{
			max-width: 800px;
			text-align: center;
			margin: auto;
		}
		th {
			font-size: 13px;
			font-weight: normal;
    		border: 2px solid black;
    		color: #039; 
    		text-align: center;
    	}

		td {
			padding: 8px;
    		border: 2px solid black;
    		color: #669;
    	}
		table {     
			font-family: "Lucida Sans Unicode", "Lucida Grande", 
			Sans-Serif;
    		font-size: 12px;
    		margin: 45px;  
    		width: 800px;
    		text-align: left;
    		border-collapse: collapse; 
    	}

		</style>
	</head>
	<link rel="stylesheet" type="text/css" href="estilos.css"> <!--linkear a hoja de estilos css selector de clases-->
	<body>
	<table>
	  <tr>
	    <td style="border: none;text-align: left;"><img style="max-width: 100px;" src="logoML.png"></td>
	    <td style="border: none;text-align: right;"><img style="max-width: 100px;" src="logoMP.png"></td>
	  </tr>
	<tr>
	  <th colspan="2"><h1>Recibo entrega de producto</h1></th>
	</tr>
	<tr>
	  <th colspan="2">Por favor completar en letra mayúscula de imprenta.</th>
	</tr>
	<tr>
	  <th colspan="2"><h2>1. Datos de quien recibe el producto</h2></th>
	</tr>
	  <tr>
	    <td colspan="2">Nombre completo: <?php echo $_POST['nombreRetira']; ?></td>
	  </tr>
	  <tr>
	    <td>Nº de documento: <?php echo $_POST['numeroDocumento']; ?></td>
	    <td>Teléfono: <?php echo $_POST['telefono']; ?></td>
	  </tr>
	  <tr>
	    <td colspan="2">Dirección de entrega (cuando corresponda): <?php echo $_POST['direccion']; ?></td>
	  </tr>
	  <tr>
	  	<th colspan="2"><h2>2. Información del producto</h2></th>
	  </tr>
	  <tr>
	  	<td>Artículo: <?php echo $_POST['articulo']; ?></td>
	  	<td>Nº de Operación: <?php echo $_POST['operacion']; ?></td>
	  </tr>
	  <tr>
	  	<th colspan="2"><b>Importante</b>: Corrobore DNI de quien retira</th>
	  </tr>
	  <tr>
	  	<td>Apodo Comprador: <?php echo $_POST['comprador']; ?></td>
	  	<td>Apodo Vendedor: <?php echo $_POST['vendedor']; ?></td>
	  </tr>
	  <tr style="height: 100px;">
	  	<td><?php echo $_POST['ciudad']; ?> <br>fecha: <?php echo $_POST['fecha']; ?></td>
	  	<td>Firma: <br>Aclaración:</td>
	  </tr>
	</table>


<form action="">
	<input style="margin-bottom: 30px; padding: 20px; text-transform: uppercase;" type="button" name="IMPRIMIR" value="Imprimir" onclick="window.print();">
	<a href="" onclick="window.close();">Cerrar</a>
</form>



	</body>
</html>
