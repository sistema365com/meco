<?php 
$nuevoRegistro=false;
$id= $_GET['id'];
if (!$id) {
    $nuevoRegistro=true;
}

$objNotas= new Useradmin();
$listarNotas= $objNotas->verUsuario($id,$_SESSION['prefijo']);
$fotoNota= urls_amigables($listarNotas[USER]).'.jpg';

$permisoUser= explode(',', $listarNotas['permisos']);
$permisosDeUsuario= explode(',', $_SESSION['permisos']);
if (in_array(2,$permisosDeUsuario) || in_array(1,$permisosDeUsuario)) {

 ?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <form action="modulo/usuarios/ac.registrar-usuarios.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="userAdmin" name="tipoEdicion">
            <input type="hidden" value="<?php echo $id ?>" name="<?php echo ID; ?>">
<?php 
if ($nuevoRegistro) {
     echo '<input type="hidden" name="nuevoRegistro" value="1">';
 } ?>
                <div class="form-group">
                    <label><?php echo NOMUSER; ?></label><div id="respuestaDato1"></div>
                    <input id="dato1" name="<?php echo USER; ?>" class="form-control" type="text" value="<?php echo $listarNotas[USER]; ?>">
                </div> 
<?php 
if ($nuevoRegistro) {
     echo '<div class="form-group">
                    <label>'.NOMPASS.'</label><div id="respuestaPASS1"></div>
                    <input id="password1" name="'.PASS.'" class="form-control" type="password" value="">
                </div>';
     echo '<div class="form-group">
                    <label>Repetir contraseña</label><div id="respuestaPASS2"></div>
                    <input id="password2" name="pass2" class="form-control" type="password" value="">
                </div>';
 } 
 ?> 
                <div class="form-group">
                    <label><?php echo NOMNOMBRE; ?></label><div id="respuestaDato2"></div>
                    <input id="dato2" name="<?php echo NOMBRE; ?>" class="form-control" type="text" value="<?php echo $listarNotas[NOMBRE]; ?>">
                </div>
                <div class="form-group">
                    <label><?php echo NOMAPELLIDO; ?></label>
                    <input name="<?php echo APELLIDO; ?>" class="form-control" type="text" value="<?php echo $listarNotas[APELLIDO]; ?>">
                </div>
<?php if (!$nuevoRegistro) { ?>
                <a href="#myModal" data-toggle="modal" data-target="#myModal">Cambiar contraseña</a>
<?php } ?>
        </div>
        <div class="col-lg-3">
                <div class="form-group">
                    <label><?php echo NOMTELEFONO; ?></label>
                    <input name="<?php echo TELEFONO; ?>" class="form-control" type="date" value="<?php echo $listarNotas[TELEFONO]; ?>">
                </div> 
                <div class="form-group">
                    <label><?php echo NOMEMAIL; ?></label><div id="respuestaEmail"></div>
                    <input id="email" name="<?php echo EMAIL; ?>" class="form-control" type="text" value="<?php echo $listarNotas[EMAIL]; ?>">
                </div>
    <div class="form-group">
    <label for="">Permisos de Usuario</label> <br>
    <?php 
    for ($i=2; $i <= count($permisosNom); $i++) { 
    ?>
        <input <?php if (in_array($i,$permisoUser)){echo "checked";} ?> type="checkbox" name="<?php echo PERMISOS; ?>[]" value="<?php echo $i; ?>"> <?php echo $permisosNom[$i]; ?> <br>
    <?php
    }
     ?>
    </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Subir o modificar foto princial
                </div>
                <div class="panel-body">
<?php 
if (file_exists('img/users/'.$fotoNota)) {
 ?>
                    <img class="nota-image" src="<?php echo 'img/users/'.$fotoNota; ?>">
<?php }
else {
 ?>
 <img class="nota-image" src="<?php echo 'img/users/defecto.jpg'; ?>">
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
              <input type="hidden" name="user" value="<?php echo $id; ?>">
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




<script type="text/javascript" src="js/validaForm/jquery.js"></script>
<script type="text/javascript" src="js/validaForm/main.js"></script>


    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1', {
        uiColor: '<?php echo $color4;?>',
        toolbar: [
            [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
            [ '-', 'TextColor', 'Paste', 'Table'  ]
        ]
    });
    </script>




<?php 
}
else {
    echo "No tenes permiso para ver esta sección";
}

 ?>