<?php 
$objUser= new Useradmin();
$verUsuario= $objUser->verUsuario($_SESSION['usuario_logueado'],$_SESSION['prefijo']);

if (file_exists('img/users/'.urls_amigables($verUsuario['user_id']).'.jpg')) {
    $fotoDePerfil= urls_amigables($verUsuario['user_id']);
}
else $fotoDePerfil= 'defecto';
include 'notificaciones/class.notificaciones.php';
$objNotificaciones= new Notificaciones();
$listarNotificaciones= $objNotificaciones->listarNoti($_SESSION['empresa']);
$cantNotificaciones= (count($listarNotificaciones)!=0)?count($listarNotificaciones):'';
$cantNotificacionesL= (count($listarNotificaciones)!=0)?'<span class="count label label-danger rounded">'.count($listarNotificaciones).'</span>':'';

 ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="es"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo $cantNotificaciones; ?> Mercado Connecting</title>

        <!-- START @FAVICONS -->
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico/favicon-16x16.png">
<link rel="manifest" href="img/favicon.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

        <!--/ END FAVICONS -->

    <!-- START @FONT STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
    <!--/ END FONT STYLES -->


    <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="2temp/assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="2temp/assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="2temp/assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <!-- switch -->
        <link href="2temp/assets/global/plugins/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
        <!-- switch -->
    <!--/ END GLOBAL MANDATORY STYLES -->

    <!-- START @PAGE LEVEL STYLES -->
        <!-- tutoriales -->
        <link href="2temp/assets/commercial/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.css" rel="stylesheet">
        <!-- tutoriales -->
        <!-- grafico panel inicio -->
        <link href="2temp/assets/global/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
        <!-- grafico panel inicio -->
    <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="2temp/assets/admin/css/reset.css" rel="stylesheet">
        <link href="2temp/assets/admin/css/layout.css" rel="stylesheet">
        <link href="2temp/assets/admin/css/components.css" rel="stylesheet">
        <link href="2temp/assets/admin/css/plugins.css" rel="stylesheet">
        <link href="2temp/assets/admin/css/themes/default.theme.css" rel="stylesheet" id="theme">
        <link href="2temp/assets/admin/css/custom.css" rel="stylesheet">
        <link href="2temp/assets/admin/css/pages/dashboard-real-estate.css" rel="stylesheet">
        <link href="2temp/assets/admin/css/pages/chart-chartist.css" rel="stylesheet">
        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="2temp/assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="2temp/assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
        <![endif]-->

    <link rel="stylesheet" href="hf2/estilos2.css">
    <!-- header menciones -->
<?php 
if ($timerRefre) {
 ?>
  <link href='moduloML/preguntas/mentions-masteter/jquery.mentionsInput.css' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js' type='text/javascript'></script>
<?php 
}
 ?>
    <!-- header menciones -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="prehide()" class="page-header-fixed page-sidebar-fixed">
<!--   <body onload="prehide()" class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">
 -->  <div id="cargando"></div>

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <header id="header">

                <!-- Start header left -->
                <div class="header-left">
                    <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile left">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!--/ End offcanvas left -->

                    <!-- Start navbar header -->
                    <div class="navbar-header" style="background-color: #2a2a2a;">

                        <!-- Start brand -->
                        <a id="tour-1" class="navbar-brand" href="ML-inicio.php">
                            <img style="max-height: 90%;" src="img/logo.png" alt="brand logo">
                        </a><!-- /.navbar-brand -->
                        <!--/ End brand -->

                    </div><!-- /.navbar-header -->
                    <!--/ End navbar header -->

                    <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
<!--                     <div class="navbar-minimize-mobile right">
                        <i class="fa fa-cog"></i>
                    </div> -->
                    <!--/ End offcanvas right -->

                    <div class="clearfix"></div>
                </div><!-- /.header-left -->
                <!--/ End header left -->

                <!-- Start header right -->
                <div class="header-right">
                    <!-- Start navbar toolbar -->
                    <div class="navbar navbar-toolbar navbar-warning">

                        <!-- Start left navigation -->
                        <ul class="nav navbar-nav navbar-left">

                            <!-- Start sidebar shrink -->
                            <li id="tour-2" class="navbar-minimize">
                                <a href="javascript:void(0);" title="Minimize sidebar">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <!--/ End sidebar shrink -->

                        </ul><!-- /.nav navbar-nav navbar-left -->
                        <!--/ End left navigation -->

                        <!-- Start right navigation -->
                        <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->
<?php 
include 'modulo/noticiasFront/class.noticiasF.php';
$objNoticias= new NoticiasF();
$listarNoticias= $objNoticias->listar();
$contadorNoticias=0;
foreach ($listarNoticias as $key) {
  $nuevoLink= '';
  $leyeron= explode(',', $key['leido']);
  $valorBuscado= $_SESSION['prefijo'].$_SESSION['usuario_logueado'];
  if (!in_array($valorBuscado, $leyeron)) {
    $contadorNoticias++;
}
}
$contadorNoticiasL= ($contadorNoticias!=0)?'<span class="count label label-danger rounded">'.$contadorNoticias.'</span>':'';

?>

                        <!-- Start messages -->
                        <li id="tour-4" class="dropdown navbar-message">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag-o"></i><?php echo $contadorNoticiasL; ?></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Noticias <strong>(<?php echo $contadorNoticias; ?>)</strong></span>
                                </div>
                                <div class="dropdown-body">
                                    <!-- Start message list -->
                                    <div class="media-list niceScroll">
<?php 
foreach ($listarNoticias as $key) {
  $nuevoLink= '';
  $nuevoAdmiracion='';
  $leyeron= explode(',', $key['leido']);
  $valorBuscado= $_SESSION['prefijo'].$_SESSION['usuario_logueado'];
  if (!in_array($valorBuscado, $leyeron)) {
    $nuevoLink= '&leido=ok';
    $nuevoAdmiracion= ' <span class="label label-success">!!</span>';
  }
 ?>

                                        <a href="noticiasF.php?s=ver&id=<?php echo $key['id'].$nuevoLink; ?>" class="media">
                                            <div class="pull-left"><img src="img/users/<?php echo $key['creadoPor']; ?>.jpg" class="media-object img-circle"/></div>
                                            <div class="media-body">
                                                <span class="media-heading"><?php echo $key['titulo'].$nuevoAdmiracion; ?></span>
                                                <span class="media-text"><?php echo recortar_texto($key['titulo'],10); ?></span>
                                                <!-- Start meta icon -->
<!--                                                 <span class="media-meta"><i class="fa fa-reply"></i></span>
                                                <span class="media-meta"><i class="fa fa-paperclip"></i></span> -->
                                                <span class="media-meta pull-right"><?php echo $key['fecha']; ?></span>
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->
<?php 
}
 ?>
                                    </div>
                                    <!--/ End message list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="noticiasF.php?s=listar">Ver todas</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-message -->
                        <!--/ End messages -->

                        <!-- Start notifications -->
                        <li id="tour-5" class="dropdown navbar-notification">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><?php echo $cantNotificacionesL; ?></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Notificaciones <strong>(<?php echo count($listarNotificaciones); ?>)</strong></span>
                                    <span class="option text-right"><a href="notificaciones/marcarTodas.php"><i class="fa fa-check"></i> Marcar Leido</a></span>
                                </div>
                                <div class="dropdown-body niceScroll">
                                    <!-- Start notification list -->
                                    <div class="media-list small">
<?php 
foreach ($listarNotificaciones as $key) {
  $topico= explode('/', $key['resource']);
  $question_a = array(
    'link' => 'ML-preguntas.php?s=listarPreguntas&leido=1', 
    'ico' => 'question', 
    'texto' => 'Recibiste una pregunta', 
    );
  $orders_a = array(
    'link' => 'ML-ordenes.php?s=verorden&id='.$topico[2].'&leido=1', 
    'ico' => 'shopping-cart', 
    'texto' => 'Novedades en orden', 
    );
  $mensajes_a = array(
    'link' => 'ML-ordenes.php?s=verordenM&id='.$key['resource'].'&leido=1', 
    'ico' => 'comment', 
    'texto' => 'Tenes un Mensaje', 
    );
  $ticketNoti = array(
    'link' => 'ML-ayudaF.php?s=listar', 
    'ico' => 'ticket', 
    'texto' => 'Ticket Respondido', 
    );
  if ($topico[1]=='questions') {
    $imprimeNoti= $question_a;
  }
  if ($topico[1]=='orders') {
    $imprimeNoti= $orders_a;
  }
  if ($topico[1]=='notiTicket') {
    $imprimeNoti= $ticketNoti;
  }
  if ($key['topic']=='messages') {
    $imprimeNoti= $mensajes_a;
  }
 ?>
                                        <a href="<?php echo $imprimeNoti['link']; ?>" class="media">
                                            <div class="media-object pull-left"><i class="fa fa-<?php echo $imprimeNoti['ico']; ?> fg-info"></i></div>
                                            <div class="media-body">
                                                <span class="media-text"><?php echo $imprimeNoti['texto']; ?></span>
                                                <!-- Start meta icon -->
                                                <!-- <span class="media-meta">3 minutes</span> -->
                                                <!--/ End meta icon -->
                                            </div><!-- /.media-body -->
                                        </a><!-- /.media -->

<?php 
}
 ?>
                                    </div>
                                    <!--/ End notification list -->
                                </div>
                                <div class="dropdown-footer">
                                    <!-- <a href="#">Ver todas</a> -->
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-notification -->
                        <!--/ End notifications -->

                        <!-- Start profile -->
                        <li id="tour-6" class="dropdown navbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="avatar"><img src="img/users/<?php echo $fotoDePerfil; ?>.jpg" class="img-circle" alt="admin"></span>
                                    <span class="text hidden-xs hidden-sm text-muted"><?php echo $verUsuario['nombre'].' '.$verUsuario['apellido']; ?></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <!-- Start dropdown menu -->
                            <ul class="dropdown-menu animated flipInX">
                                <li class="dropdown-header">Mi Cuenta</li>
                                <li><a href="usuarios.php?s=miPerfil"><i class="fa fa-user"></i>Mi perfil</a></li>
<!--                                 <li><a href="mail-inbox.html"><i class="fa fa-envelope-square"></i>Inbox <span class="label label-info pull-right">30</span></a></li>
                                <li><a href="#"><i class="fa fa-share-square"></i>Invite a friend</a></li>
                                <li class="dropdown-header">Product</li>
                                <li><a href="#"><i class="fa fa-upload"></i>Upload</a></li>
                                <li><a href="#"><i class="fa fa-dollar"></i>Earning</a></li>
                                <li><a href="#"><i class="fa fa-download"></i>Withdrawals</a></li> -->
                                <li class="divider"></li>
                                <li><a href="acciones/login-usuarios.php?id=2"><i class="fa fa-sign-out"></i>Salir</a></li>
                            </ul>
                            <!--/ End dropdown menu -->
                        </li><!-- /.dropdown navbar-profile -->
                        <!--/ End profile -->

                        <!-- Start settings -->
<!--                         <li id="tour-7" class="navbar-setting pull-right">
                            <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
                        </li> -->
                        <!-- /.navbar-setting pull-right -->
                        <!--/ End settings -->

                        </ul>
                        <!--/ End right navigation -->

                    </div><!-- /.navbar-toolbar -->
                    <!--/ End navbar toolbar -->
                </div><!-- /.header-right -->
                <!--/ End header left -->

            </header> <!-- /#header -->
            <!--/ END HEADER -->

                  <!--

            START @SIDEBAR LEFT
            |=========================================================================================================================|
            |  TABLE OF CONTENTS (Apply to sidebar left class)                                                                        |
            |=========================================================================================================================|
            |  01. sidebar-box               |  Variant style sidebar left with box icon                                              |
            |  02. sidebar-rounded           |  Variant style sidebar left with rounded icon                                          |
            |  03. sidebar-circle            |  Variant style sidebar left with circle icon                                           |
            |=========================================================================================================================|

            -->
            <?php 
            include 'hf2/menu.php';
             ?>
            <section id="page-content">
                <!-- Start page header -->
                <div id="tour-11" class="header-content">
                    <h2><i class="fa fa-home" id="iconoHeader"></i><?php echo $titulo; ?></h2>
                    <div class="breadcrumb-wrapper hidden-xs">
<!--                         <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol> -->
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->
                <!-- Start body content -->
                <!-- <div class="body-content animated fadeIn"> -->
                <div class="body-content animated">
