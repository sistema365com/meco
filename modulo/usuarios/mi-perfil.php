<?php 

$objNotas= new Useradmin();
$listarNotas= $objNotas->verUsuario($_SESSION['usuario_logueado'],$_SESSION['prefijo']);
$fotoNota= urls_amigables($listarNotas['user_id']).'.jpg';
if (!file_exists('img/users/'.$fotoNota.'.jpg')) {
  $fotoNota= 'admin.jpg';
}
else {
  $fotoNota= urls_amigables($listarNotas['user_id']).'.jpg';
}


 ?>


<!-- editar usuario -->
<h3>Editar mis Datos</h3>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <form action="acciones/registrar-usuarios.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $_SESSION['usuario_logueado'] ?>" name="<?php echo ID; ?>">
            <input type="hidden" value="<?php echo $_SESSION['permisos'] ?>" name="<?php echo PERMISOS; ?>">
<?php 
if ($nuevoRegistro) {
     echo '<input type="hidden" name="nuevoRegistro" value="1">';
 } ?>
                <div class="form-group">
                    <label><?php echo NOMUSER; ?></label>
                    <input name="<?php echo USER; ?>" class="form-control" type="text" value="<?php echo $listarNotas[USER]; ?>">
                </div> 
<?php 
if ($nuevoRegistro) {
     echo '<div class="form-group">
                    <label>'.NOMPASS.'</label>
                    <input name="'.PASS.'" class="form-control" type="password" value="">
                </div>';
     echo '<div class="form-group">
                    <label>Repetir contraseña</label>
                    <input name="pass2" class="form-control" type="password" value="">
                </div>';
 } 
 ?> 
                <div class="form-group">
                    <label><?php echo NOMNOMBRE; ?></label>
                    <input name="<?php echo NOMBRE; ?>" class="form-control" type="text" value="<?php echo $listarNotas[NOMBRE]; ?>">
                </div>
                <div class="form-group">
                    <label><?php echo NOMAPELLIDO; ?></label>
                    <input name="<?php echo APELLIDO; ?>" class="form-control" type="text" value="<?php echo $listarNotas[APELLIDO]; ?>">
                </div>
                <a href="#myModal" data-toggle="modal" data-target="#myModal">Cambiar contraseña</a>
        </div>
        <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo NOMTELEFONO; ?></label>
                    <input name="<?php echo TELEFONO; ?>" class="form-control" type="date" value="<?php echo $listarNotas[TELEFONO]; ?>">
                </div> 
                <div class="form-group">
                    <label><?php echo NOMEMAIL; ?></label>
                    <input name="<?php echo EMAIL; ?>" class="form-control" type="text" value="<?php echo $listarNotas[EMAIL]; ?>">
                </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Subir o modificar foto princial
                </div>
                <div class="panel-body">
<?php if (!$nuevoRegistro) { ?>
                    <img class="nota-image" src="<?php echo 'img/users/'.$fotoNota; ?>">
<?php } ?>
                </div>
                <div class="panel-footer">
                    <input name="image" type="file">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-4">
                <a href="javascript:history.back(-1);" type="reset" class="btn btn-default">Cancelar</a>
<?php 
if ($nuevoRegistro) {
    echo '<button type="submit" class="btn btn-primary">Crear</button>';
}
else {
    echo '<button type="submit" class="btn btn-primary">Editar</button>';
}
 ?>            
                </form>
        </div> 
    </div>   
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cambio de contraseña</h4>
      </div>
        <div class="modal-body">

            <form class="form-horizontal" action="modulo/usuarios/ac.cambiarPass.php" method="post">
<!--               <div class="form-group">
                <label for="inputEmail" class="control-label col-sm-2">Contraseña Actual</label>
                <div class="col-sm-10">
                  <input type="password" name="pass1" class="form-control" id="inputEmail1" placeholder="" value="">
                </div>
              </div> -->
              <input type="hidden" name="user" value="<?php echo $_SESSION['usuario_logueado']; ?>">
              <div class="form-group">
                <label for="inputEmail" class="control-label col-sm-2">Contraseña Nueva</label>
                <div class="col-sm-10">
                  <input type="password" name="pass2" class="form-control" id="inputEmail1" placeholder="" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="control-label col-sm-2">Repetir Contraseña</label>
                <div class="col-sm-10">
                  <input type="password" name="pass3" class="form-control" id="inputEmail1" placeholder="" value="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Cambiar</button>
                </div>
              </div>
            </form>



        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>








<?php 

include $templates.'/footer.php';


 ?>