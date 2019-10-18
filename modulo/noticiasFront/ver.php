<?php 
$objNoticias= new NoticiasF();
$verNota= $objNoticias->ver($_GET['id']);
if ($_GET['leido']=='ok') {
    $marcarLeido= $objNoticias->marcarLeido($_GET['id'],$verNota['leido'].','.$_SESSION['prefijo'].$_SESSION['usuario_logueado']);
}
 ?>
                    <div class="row" id="blog-single">

                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

                            <div class="panel panel-default panel-blog rounded shadow">
                                <div class="panel-body">
                                    <h3 class="blog-title"><?php echo $verNota['titulo']; ?></h3>
                                    <ul class="blog-meta">
                                        <li>Por: <a href=""><?php echo $verNota['creadoPor']; ?></a></li>
                                        <li><?php echo $verNota['fecha']; ?></li>
                                    </ul>
                                    <div class="blog-img">
                                        <img src="<?php echo $verNota['portada']; ?>" alt="...">
                                    </div>
                                    <?php echo html_entity_decode($verNota['contenido']); ?>

                                </div><!-- panel-body -->
                            </div><!-- panel-blog -->


                        </div>


                    </div><!-- row -->
