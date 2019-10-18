<?php 

switch ($_GET['alerta']) {
	case 'borrar':
		echo '<div class="alert alert-warning alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Eliminado correctamente</strong> Eliminaste un elemento correctamente
				</div>';
		break;
	case 'creado':
		echo '<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Creado correctamente</strong> Creaste correctamente un nuevo elemento
				</div>';
		break;
	case 'editado':
		echo '<div class="alert alert-info alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Editado correctamente</strong> Editaste correctamente un usuario
				</div>';
		break;
	case 'error':
		echo '<div class="alert alert-danger alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Atención!</strong> Hubo algun error y no se guardo lo que querias
				</div>';
		break;
}

 ?>
