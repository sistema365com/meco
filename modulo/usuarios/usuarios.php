<?php 

$objNotas= new Useradmin();
$listarNotas= $objNotas->listarUsuarios($_SESSION['prefijo']);


 ?>
<div class="panel panel-default">
    <div class="panel-heading">
         Listado de Usuarios
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th><?php echo NOMUSER; ?></th>
                        <th><?php echo NOMNOMBRE; ?></th>
                        <th><?php echo NOMAPELLIDO; ?></th>
                        <th><?php echo NOMPERMISOS; ?></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
<?php 
foreach ($listarNotas as $key) {
 ?>
                    <tr class="odd gradeX">
<?php 
if (file_exists('img/users/'.urls_amigables($key[USER]).'.jpg')) {
 ?>
 <td><img style="max-width: 30px; border-radius: 50%; margin:auto;" src="img/users/<?php echo urls_amigables($key[USER]); ?>.jpg"></td>
 <?php 
 }
 else {
     ?>
<td><img style="max-width: 30px; border-radius: 50%;" src="img/users/defecto.jpg"></td>
<?php } ?>
                        
                        <td><?php echo $key[USER]; ?></td>
                        <td><?php echo $key[NOMBRE]; ?></td>
                        <td><?php echo $key[APELLIDO]; ?></td>
                        <td><?php echo $permisosNom[$key[PERMISOS]]; ?></td>
                        <td>
                            <a class="btn btn-warning" href="usuarios.php?s=verUsuario&id=<?php echo $key[USERID]; ?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-danger" href="modulo/usuarios/ac.registrar-usuarios.php?borrarRegistro=1&id=<?php echo $key[USERID]; ?>"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
<?php 
}
 ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<!--End Advanced Tables -->

<div class="row">
    <div class="container">
    <a class="btn btn-primary btn-lg" href="usuarios.php?s=verUsuario">Crear nuevo usuario</a>
    </div>
</div>

