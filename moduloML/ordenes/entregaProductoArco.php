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
	  <!-- <tr>
	    <td style="border: none;text-align: left;"><img style="max-width: 100px;" src="logoML.png"></td>
	    <td style="border: none;text-align: right;"><img style="max-width: 100px;" src="logoMP.png"></td>
	  </tr> -->
	  <tr>
	    <td colspan="2">
	    	<h3>Remitente:</h3>
	    	<p>
	    	Arco Maquinarias Alquiler y Ventas S.A.<br>
	    	Dirección: Av. Juan B. Justo 5761 1ºPiso (1406) C.A.B.A.<br>
	    	CUIT: 30-71057233-6 <br>
	    	Tel: (011)5197-2800
	    	</p>
	    	
	    </td>
	  </tr>
	  <tr>
	    <td colspan="2">
	    	<h2 style="margin-left: 40px; text-decoration: underline;">Destinatario:</h2>
	    	<p style="margin-left: 40px;font-size: 20px;">
	    	Nombre completo: <?php echo $_POST['nombreRetira']; ?><br>
	    	DNI: <?php echo $_POST['numeroDocumento']; ?><br>
	    	Teléfono: <?php echo $_POST['telefono']; ?><br>
	    	Dirección de entrega: <?php echo $_POST['direccion']; ?><br>
	    		
	    	</p>
	    	
	    </td>
	  </tr>
	</table>


<form action="">
	<input style="margin-bottom: 30px; padding: 20px; text-transform: uppercase;" type="button" name="IMPRIMIR" value="Imprimir" onclick="window.print();">
	<a href="" onclick="window.close();">Cerrar</a>
</form>



	</body>
</html>
