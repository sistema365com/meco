<?php 

switch ($_GET['alerta']) {
	case 'envio-activado':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Activaste envio GRATIS</strong> para desactivarlo hacelo desde <a href="moduloML/misArticulos/ac.envioGratis.php?ac=2&id='.$_GET["id"].'">Desactivar Envio Gratis</a>
				</div>';
		break;
	case 'envio-desactivado':
		echo '<div class="alert alert-warning alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Eliminaste envio GRATIS</strong> Volvé a activarlo más abajo
				</div>';
		break;
	case 'borrar':
		echo '<div class="alert alert-warning alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Eliminado correctamente</strong> Eliminaste un elemento correctamente
				</div>';
		break;
	case 'impo-existe':
		echo '<div class="alert alert-warning alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>El artículo ya esta creado</strong> No importamos ningun dato
				</div>';
		break;
	case 'creado':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Creado correctamente</strong> Creaste correctamente un nuevo elemento
				</div>';
		break;
	case 'calificado':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Calificaste correctamente</strong> Creaste una calificación para un comprador
				</div>';
		break;
	case 'ac':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Actualizado correctamente</strong> Subiste a mercadolibre una actualización sobre este producto.
				</div>';
		break;
	case 'acM':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Actualizado correctamente</strong> Actualizaste '.$_GET['mod'].' productos simultaneamente.
				</div>';
		break;
	case 'art-cargado':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Creado correctamente</strong> cargaste un articulo correctamente
				</div>';
		break;
	case 'ok':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Creado correctamente</strong> Pronosticaste un partido correctamente
				</div>';
		break;
	case 'procesado':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Operación exitosa</strong> Se cargaron correctamente los puntos de la fecha '.$fecha.'
				</div>';
		break;
	case 'impo-ok':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Operación exitosa</strong> Se Importo el articulo correctamente.
				</div>';
		break;
	case 'editado':
		echo '<div class="alert alert-info alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Editado correctamente</strong> Editaste correctamente un elemento
				</div>';
		break;
	case 'art-editado':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Editado correctamente</strong> Editaste correctamente un articulo
				</div>';
		break;
	case 'error':
		echo '<div class="alert alert-danger alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Atención!</strong> Hubo algun error y no se guardo lo que querias
				</div>';
		break;
	case 'error-log':
		echo '<div class="alert alert-danger alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Atención!</strong> El usuario de mercadolibre con el que esta logueado, no se encuentra autorizado por nuestra aplicación, contacte con nosotros.
				</div>';
		break;
	case 'impo-error':
		echo '<div class="alert alert-danger alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Atención!</strong> No encontramos el artículo en Mercadolibre
				</div>';
		break;
	case 'noCalificado':
		echo '<div class="alert alert-danger alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Atención!</strong> Hubo un error y no se guardo tu calificación
				</div>';
		break;
	case 'art-error':
		echo '<div class="alert alert-danger alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Atención!</strong> Hubo algun error y no se guardo tu articulo
				</div>';
		break;
	case 'art-yapublicado':
		echo '<div class="alert alert-warning alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Articulo ya publicado!</strong> Por favor, selecciona "Editar publicación en MercadoLibre"
				</div>';
		break;
}

 ?>
