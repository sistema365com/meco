<?php 
$objInformes= new Informes();
$ventaPorMes= $objInformes->importesPorMesAño();
$visitasPorMes= $objInformes->visitasPorMesAño();
// probar($visitasPorMes);
$balance= $objInformes->balance();
 ?>

<div class="row">
	<div class="col-md-6">

	    <!-- Start bar chart -->
	    <div class="panel rounded shadow panel-warning">
	        <div class="panel-heading">
	            <div class="pull-left">
	                <h3 class="panel-title"><i class="fa fa-stop" style="color: #E9573F;"></i> Ventas Vs. <i class="fa fa-stop" style="color: #00B1E1;"></i> Visitas  </h3>
	            </div>
	            <div class="pull-right">
	                <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expandir"><i class="fa fa-expand"></i></button>
	                <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Minimizar"><i class="fa fa-angle-up"></i></button>
	                <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Cerrar"><i class="fa fa-times"></i></button>
	            </div>
	            <div class="clearfix"></div>
	        </div><!-- /.panel-heading -->
	        <div class="panel-body">
	            <canvas id="chartjs-bar-chart" height="300" width="600" class="chartjs"></canvas>
	        </div><!-- /.panel-body -->
	    </div><!-- /.panel -->
	    <!--/ End bar chart -->

	</div>
    <div class="col-md-6">

        <!-- Start bordered table -->
        <div class="table-responsive mb-20">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Mes</th>
                        <th class="text-center">Importe</th>
                        <th class="text-center">Tickets</th>
                        <th class="text-center">Prom. Ticket</th>
                        <th class="text-center">Visitas</th>
                        <th class="text-center">% Conversión</th>
                    </tr>
                </thead>
                <tbody>
<?php 
for ($i=0; $i < count($ventaPorMes); $i++) { 
	$visitas= buscarEnArray($visitasPorMes,$ventaPorMes[$i]['Mes'],'Mes');
 ?>
                    <tr>
                        <td class="text-center"><?php echo $mesesDelAno[$ventaPorMes[$i]['Mes']]; ?></td>
                        <td class="text-center">$ <?php echo $ventaPorMes[$i]['suma']; ?></td>
                        <td class="text-center"><?php echo $ventaPorMes[$i]['cantidad']; ?></td>
                        <td class="text-center">$ <?php echo round($ventaPorMes[$i]['promedio'],2); ?></td>
                        <td class="text-center"><?php echo $visitas['visitas']; ?></td>
                        <td class="text-center"><?php echo round(($ventaPorMes[$i]['cantidad']/$visitas['visitas'])*100,2); ?> %</td>
                    </tr>
<?php 
}
 ?>
                </tbody>
            </table>
        </div><!-- /.table-responsive -->
        <!--/ End bordered table -->

    </div>
</div>
<div class="row">
                        <!-- inicio panel top -->
                        <div class="col-md-4">
                            <div class="panel panel-warning shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title"><i class="fa fa-trophy"></i>Top Productos (Anual)</h3>
                                    </div>
                                    <!-- <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                    </div> -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body no-padding">
                                    <ul class="list-group no-margin">
<?php 
$topProductosAnual= $objInformes->topProducto();
for ($i=0; $i < count($topProductosAnual); $i++) { 
 ?>
                                        <li class="list-group-item">
                                            <span class="badge"><?php echo $topProductosAnual[$i]['cantidad']; ?></span>
                                            <a data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $topProductosAnual[$i]['title']; ?>" target="_blank" href="<?php echo $topProductosAnual[$i]['perma_link']; ?>">
                                            <?php echo recortar_texto($topProductosAnual[$i]['title'],30); ?>
                                            </a>
                                        </li>
<?php 
}
 ?>
                                    </ul>
                                </div><!-- /.panel-body -->
                            </div>
                        </div>
                        <!-- final panel top -->
                                <div class="col-md-4">

                                    <!-- Start list bank table -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title text-center">Ganancias - <b>Anual</b></h3>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body no-padding">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="pull-left text-capitalize">Ventas</span>
                                                            <span class="pull-right text-strong fg-teals">$<span class="counter"><?php echo $balance['ventas']; ?></span></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="pull-left text-capitalize">Comisión MercadoLibre</span>
                                                            <span class="pull-right text-strong fg-danger">$<span class="counter"><?php echo $balance['cometa']; ?></span></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="pull-left text-capitalize">Diferencia</span>
                                                            <span class="pull-right text-strong">$<span class="counter"><?php echo $balance['dif']; ?></span></span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- /.panel-body -->
                                    </div>
                                    <!--/ End list bank table -->

                                </div>

</div>

<?php 
$dat1= array_column($ventaPorMes, 'suma');
$dat2= array_column($visitasPorMes, 'visitas');

 ?>

<script type="text/javascript">
	var dat1= <?php echo json_encode($dat1);?>;
	var dat2= <?php echo json_encode($dat2);?>;
</script>