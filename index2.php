<?php 
include 'class/Autocarga.php';

if (isset($_GET['c'])) {
	$valorUser= $_GET['c'].'-';
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Publicador Mercadolibre</title>
		<meta charset='utf-8' /> <!--sirve para que se lean las ñ y las tildes-->
		<meta name="viewport" content="width=device-width">
    <!-- favicon -->
<!--     <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png"> -->
		<style type="text/css">/*asi son los comentarios en css*/
			body{
				/*background-color: #E8BB30;*/
				background-image: url('img/intro-bg-5.jpg');
				background-repeat: no-repeat;
				background-size: cover;
			}
			#form{
				position: relative;
				max-width: 300px;
				width: 100%;
				max-height: 450px;
				margin: 50px auto;
				padding: 20px;
				background: white;
				border: solid 2px black;

			}
			label {
				text-align: center;
				font-size: 18px;
				font-family: verdana;

			}
			input{
				border: 0px;
				width: 100%;
				height: 20px;
				background-color: grey;
			}
			input:focus{
				outline:0px;
				box-shadow: 0 0 3px black;
				width: 100%;
				height: 20px;
			}
			button[type="submit"]{
				display: block;
				line-height: 30px;
				font-weight: bold;
				font-size: 20px;
				display: inline-block;
				text-align: center;
				height: 40px;
				width: 100%;
				align-items: flex-start;
				margin: 20px auto;
				background-color: black;
				color: #fff;
				border: none;
				text-transform: uppercase;
			}
			button[type="submit"]:hover{
				display: block;
				line-height: 30px;
				font-weight: bold;
				font-size: 20px;
				display: inline-block;
				text-align: center;
				height: 40px;
				width: 100%;
				align-items: flex-start;
				margin: 20px auto;
				background-color: rgba(0, 0, 0, 0.54);
				color: black;
				border: none;
				text-transform: uppercase;
			}
			span {
				font-size: 22px;
			}
			.logoprincipal{
				display: block;
				max-width: 100%;
				height: 150px;
				margin: 10px auto;
				border-radius: 5px;
			    transition: 500ms linear;
			    /*-webkit-transition: 500ms linear;*/
			    /*animation: rodar 500ms ease-out 8 alternate;*/
				/*-webkit-animation: rodar 500ms ease-out 8 alternate;*/
				/*transition: 500ms;*/
			}
/*			@keyframes rodar{
				to{
					transform: translate(0,-60px) rotate(100deg);
				}
			}

			@-webkit-keyframes rodar{
				to{
					-webkit-transform: translate(0,-60px) rotate(100deg);
				}
			}*/

/*			.logoprincipal:hover{
				display: block;
				max-width: 100%;
				margin: 10px auto;
				border-radius: 5px;
				transform: rotate(360deg);
				transform: rotate(360deg);
			    -ms-transform: rotate(360deg);
			    -webkit-transform: rotate(360deg);
			}*/
			#logoAgro{
				max-width: 300px;
				position: fixed;
				bottom: 0px;
				left: 0px;
			}
		
		</style>
		<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	</head>
	<link rel="stylesheet" type="text/css" href="estilos.css"> <!--linkear a hoja de estilos css selector de clases-->
	<body>
		<div id="form">
		<img class="logoprincipal" src="img/logoML.png">
			<form action="acciones/login-usuarios.php" method="POST" onsubmit="return poneUser()">
				<label for=""><span class="ion-person"></span> Usuario</label>
				<input autofocus="true" id="user" autofocus="true" type="text" name="user" value="<?php echo $valorUser; ?>">
				<label for=""><span class="ion-key"></span> Contraseña</label>
				<input type="password" name="password">
				<button type="submit"><span class="ion-log-in"></span> Ingresar</button>
			</form>
		</div>
<script type="text/javascript">
	function poneUser(){
		var user= document.getElementById('user').value;
		if (user.indexOf('-')==-1) {
			alert('Recuerde poner su prefijo de cliente seguido de un guion medio (-) antes de su usuario');
			document.getElementById('user').style.backgroundColor='#E60F32';
			return false;
		}
	}
</script>

		<!-- <img id="logoAgro" src="img/logo_agro.png"> -->
	</body>
</html>

