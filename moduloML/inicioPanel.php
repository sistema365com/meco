<?php
$objArticulo= new Articulo();
$contarPublicados= $objArticulo->contarArticulosBM(1,$_SESSION['empresa']);
$contarPausados= $objArticulo->contarArticulosBM(3,$_SESSION['empresa']);
$contarFinalizados= $objArticulo->contarArticulosBM(4,$_SESSION['empresa']);
$stock0= $objArticulo->verArticulosStockCero();
$stock1= $objArticulo->verArticulosStockUno(3);

$objInformes= new Informes();
 ?>
                <!-- Start body content -->
                <!-- <div class="body-content animated fadeIn"> -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mini-stat clearfix bg-bitbucket">
                                        <span class="mini-stat-icon"><i class="fa fa-play fg-warning"></i></span><!-- /.mini-stat-icon -->
                                        <div class="mini-stat-info">
                                            <span class="counter"><?php echo $contarPublicados['cantidad']; ?></span>
                                            <a href="ML-misArticulos.php?s=listarItems&e=1"> Publicados</a>
                                        </div><!-- /.mini-stat-info -->
                                    </div><!-- /.mini-stat -->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mini-stat clearfix bg-bitbucket">
                                        <span class="mini-stat-icon"><i class="fa fa-pause fg-danger"></i></span><!-- /.mini-stat-icon -->
                                        <div class="mini-stat-info">
                                            <span class="counter"><?php echo $contarPausados['cantidad']; ?></span>
                                            <a href="ML-misArticulos.php?s=listarItems&e=3"> Pausados</a>
                                        </div><!-- /.mini-stat-info -->
                                    </div><!-- /.mini-stat -->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mini-stat clearfix bg-bitbucket">
                                        <span class="mini-stat-icon"><i class="fa fa-stop fg-success"></i></span><!-- /.mini-stat-icon -->
                                        <div class="mini-stat-info">
                                            <span class="counter"><?php echo $contarFinalizados['cantidad']; ?></span>
                                            <a href="ML-misArticulos.php?s=listarItems&e=4"> Finalizados</a>
                                        </div><!-- /.mini-stat-info -->
                                    </div><!-- /.mini-stat -->
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="mini-stat clearfix bg-bitbucket">
                                        <span class="mini-stat-icon"><i class="fa fa-check fg-teals"></i></span><!-- /.mini-stat-icon -->
                                        <div class="mini-stat-info">
                                            <span class="counter"><?php echo $contarPendientes['cantidad']; ?></span>
                                            <a href="ML-misArticulos.php?s=itemsPendientes&e=0"> Listo para publicar</a>
                                        </div>
                                    </div><!-- /.mini-stat-info -->
                                </div><!-- /.mini-stat -->
                            </div>
</div>
</div>
<?php 
if (count($stock0)>0) {
 ?>
<div class="row">
    <div class="col-lg-12">
                                    <div class="callout callout-warning">
                                        <strong>Atención!</strong> Tenés <?php echo count($stock0); ?> Publicaciones sin stock <a href="ML-misArticulos.php?s=sinStock" class="alert-link">Revisalas acá</a>.
                                    </div>
    </div>
</div>
<?php 
}
if (count($stock1)>0) {
 ?>
<div class="row" style="margin-top: 10px;">
    <div class="col-lg-12">
                                    <div class="callout callout-info">
                                        <strong>Atención!</strong> Tenés <?php echo count($stock1); ?> Publicaciones pausadas que ya tienen Stock <a href="ML-misArticulos.php?s=conStock&estado=3" class="alert-link">Revisalas acá</a>.
                                    </div>
    </div>
</div>
<?php 
}
if (in_array(1,$permisosDeUsuario) || in_array(2,$permisosDeUsuario) || in_array(6,$permisosDeUsuario)) {
$idUserML= Configuracion::verConfigu();
$params = array('access_token' => $_SESSION['access_token'], );
$mercadoPago= $meli->get('/users/'.$idUserML['mlUserId'].'/mercadopago_account/balance',$params);

$ventaPorMes= $objInformes->importesPorMesAño();
 ?>

                     <div class="row">
                        <div class="col-md-8">
                            <div class="panel panel-default shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title text-uppercase"><a data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Ver más Informes" href="ML-informes.php?s=panelInformes"><i class="fa fa-plus"></i></a> Ventas Por Mes ver más datos</h3>
                                    </div><!-- /.pull-left -->
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Minimizar"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Cerrar"><i class="fa fa-times"></i></button>
                                    </div><!-- /.pull-right -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="ct-chart ct-month-inventory" style="height: 300px;"></div>
                                </div><!-- /.panel-body -->
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Saldo MercadoPago</h3>
                                    </div><!-- /.pull-left -->
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Minimizar"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Cerrar"><i class="fa fa-times"></i></button>
                                    </div><!-- /.pull-right -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body">
                                    <ul class="list-unstyled list-real-estate">
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <p>En cuenta</p>
                                                    <h3>$<span class="counter"><?php echo $mercadoPago['body']->total_amount; ?></span></h3>
                                                </div>
                                                <div class="pull-right">
                                                    <span class="status"><i class="fa fa-university fg-warning"></i></span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <p>Disponible</p>
                                                    <h3>$<span class="counter"><?php echo $mercadoPago['body']->available_balance; ?></span></h3>
                                                </div>
                                                <div class="pull-right">
                                                    <span class="status"><i class="fa fa-check fg-success"></i></span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <p>A librerar</p>
                                                    <h3>$<span class="counter"><?php echo $mercadoPago['body']->unavailable_balance; ?></span></h3>
                                                </div>
                                                <div class="pull-right">
                                                    <span class="status"><i class="fa fa-clock-o fg-danger"></i></span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.panel-body -->
                            </div>

                        </div>
                    </div>
<?php 
}
 ?>

<div class="row">
                        <!-- inicio panel top -->
                        <div class="col-md-3">
                            <div class="panel panel-teal shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title"><i class="fa fa-trophy"></i>Top Respuestas (Anual)</h3>
                                    </div>
                                    <!-- <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body no-padding">
                                    <ul class="list-group no-margin">
<?php 
$topRespuestasAnual= $objInformes->topRespuestasAnual($anoHoy);
for ($i=0; $i < count($topRespuestasAnual); $i++) { 
 ?>
                                        <li class="list-group-item">
                                            <span class="badge"><?php echo $topRespuestasAnual[$i]['respuestas']; ?></span>
                                            <?php echo $topRespuestasAnual[$i]['nombre'].' '.$topRespuestasAnual[$i]['apellido']; ?>
                                        </li>
<?php 
}
 ?>
                                    </ul>
                                </div><!-- /.panel-body -->
                            </div>
                        </div>
                        <!-- final panel top -->
                        <!-- inicio panel top -->
                        <div class="col-md-3">
                            <div class="panel panel-teal shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title"><i class="fa fa-trophy"></i>Top Respuestas (Mes)</h3>
                                    </div>
                                    <!-- <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body no-padding">
                                    <ul class="list-group no-margin">
<?php 
$topRespuestasMensual= $objInformes->topRespuestasMensual($mesHoy);
for ($i=0; $i < count($topRespuestasMensual); $i++) { 
 ?>
                                        <li class="list-group-item">
                                            <span class="badge"><?php echo $topRespuestasMensual[$i]['respuestas']; ?></span>
                                            <?php echo $topRespuestasMensual[$i]['nombre'].' '.$topRespuestasMensual[$i]['apellido']; ?>
                                        </li>
<?php 
}
 ?>
                                    </ul>
                                </div><!-- /.panel-body -->
                            </div>
                        </div>
                        <!-- final panel top -->
                        <!-- inicio panel top -->
                        <div class="col-md-3">
                            <div class="panel panel-warning shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title"><i class="fa fa-trophy"></i>Top Mensajes (Anual)</h3>
                                    </div>
                                    <!-- <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body no-padding">
                                    <ul class="list-group no-margin">
<?php 
$topMensajesAnual= $objInformes->topMensajesAnual($anoHoy);
for ($i=0; $i < count($topMensajesAnual); $i++) { 
 ?>
                                        <li class="list-group-item">
                                            <span class="badge"><?php echo $topMensajesAnual[$i]['respuestas']; ?></span>
                                            <?php echo $topMensajesAnual[$i]['nombre'].' '.$topMensajesAnual[$i]['apellido']; ?>
                                        </li>
<?php 
}
 ?>
                                    </ul>
                                </div><!-- /.panel-body -->
                            </div>
                        </div>
                        <!-- final panel top -->
                        <!-- inicio panel top -->
                        <div class="col-md-3">
                            <div class="panel panel-warning shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title"><i class="fa fa-trophy"></i>Top Mensajes (Mes)</h3>
                                    </div>
                                    <!-- <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body no-padding">
                                    <ul class="list-group no-margin">
<?php 
$topMensajesAnual= $objInformes->topMensajesMensual($mesHoy);
for ($i=0; $i < count($topMensajesAnual); $i++) { 
 ?>
                                        <li class="list-group-item">
                                            <span class="badge"><?php echo $topMensajesAnual[$i]['respuestas']; ?></span>
                                            <?php echo $topMensajesAnual[$i]['nombre'].' '.$topMensajesAnual[$i]['apellido']; ?>
                                        </li>
<?php 
}
 ?>
                                    </ul>
                                </div><!-- /.panel-body -->
                            </div>
                        </div>
                        <!-- final panel top -->
</div>







<?php
for ($i=1; $i <= $mesHoy; $i++) { 
        $buscado= '';
        $buscado= buscarEnArray($ventaPorMes,$i,'Mes');
        if ($buscado['Mes']==$i) {
            $ventitas[$i]['suma'] = $buscado['suma'];
        }
        else {
            $ventitas[$i]['suma'] = 0;
        }
}

// definimos un array de valores en php
$ventasMesesAnte=array_column($ventitas, 'suma');
?>
<script type="text/javascript">
    // obtenemos el array de valores mediante la conversion a json del
    // array de php
    var arrayVentas=<?php echo json_encode($ventasMesesAnte);?>;
</script>
