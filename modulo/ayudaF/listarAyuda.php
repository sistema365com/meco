<?php 
$objNoticias= new Ayuda();
$listar= $objNoticias->listar($_SESSION['empresa']);
$estadoTickets = array(
        '0' => '<span class="label label-danger">Pendiente</span>', 
        '1' => '<span class="label label-warning">Respondido</span>', 
        '2' => '<span class="label label-success">Cerrado</span>', 
        );
$tipoTicket = array(
    '0' => 'Administrativo', 
    '1' => 'Soporte', 
    '2' => 'Consulta', 
    );

 ?>
<div class="panel panel-default">
    <div class="panel-heading">
         Listado de Tickets
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Tipo</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
<?php 
foreach ($listar as $key) {
 ?>
                    <tr class="odd gradeX">
                        <td><?php echo $key['id']; ?></td>
                        <td><?php echo $key['titulo']; ?></td>
                        <td><?php echo $tipoTicket[$key['tipo']]; ?></td>
                        <td><?php echo $key['prioridad']; ?></td>
                        <td><?php echo $estadoTickets[$key['estado']]; ?></td>
                        <td><?php echo $key['fechaApertura']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="ayudaF.php?s=verTicket&id=<?php echo $key['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                            <a onclick="return confirm('¿Seguro desea cerrar este ticket?')" class="btn btn-success" href="modulo/ayudaF/ac.ayuda.php?borrarRegistro=1&id=<?php echo $key['id']; ?>"><i class="fa fa-check"></i></a>
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
    <a class="btn btn-primary btn-lg" href="ayudaF.php?s=ver">Crear Nuevo Ticket</a>
    </div>
</div>

