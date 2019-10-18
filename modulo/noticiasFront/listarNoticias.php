<?php 
// $prefijo= Configuracion::verConfigu();
$objNoticias= new NoticiasF();
$listar= $objNoticias->listar();
foreach ($listar as $key) {
$nuevo='';
if ($key['id']==$_GET['id']) {
  $nuevo=' <div class="ribbon-wrapper">
              <div class="ribbon ribbon-danger">Nuevo!</div>
          </div>';
  if ($_GET['leido']=='ok') {
    $leido1= explode(',', $key['leido']);
    array_push($leido1,$_SESSION['prefijo'].$_SESSION['usuario_logueado']);
    $leido = implode(',', $leido1);
    $marcarLeido= $objNoticias->marcarLeido($_GET['id'],$leido);
  }
}
 ?>
                <div id="blog-list">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-item rounded shadow">
                                <a href="blog-single.html" class="blog-img"><img src="<?php echo $key['portada']; ?>" class="img-responsive full-width" alt="..." /></a>
                                <div class="blog-details">
                                    <?php echo $nuevo; ?>
                                    <h4 class="blog-title"><a href="noticiasF.php?s=ver&id=<?php echo $key['id']; ?>"><?php echo $key['titulo']; ?></a></h4>
                                    <ul class="blog-meta">
                                        <li>Por: <a href="" target="_blank"><?php echo $key['creadoPor']; ?></a></li>
                                        <li><?php echo $key['fecha']; ?></li>
                                    </ul>
                                    <div class="blog-summary">
                                        <?php echo html_entity_decode($key['contenido']); ?>
                                        <a href="noticiasF.php?s=ver&id=<?php echo $key['id']; ?>" class="btn btn-sm btn-success">Leer Más</a>
                                    </div>
                                </div>
                            </div><!-- /.blog-item -->
                        </div>
                    </div>
                </div><!-- /#blog-list -->


<?php 
}
 ?>
