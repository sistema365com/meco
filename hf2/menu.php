<?php 
$objCont= new Articulo();
$contarPendientes= $objCont->contarArticulosBM(0,$_SESSION['empresa']);
$permisosDeUsuario= explode(',', $_SESSION['permisos']);
 ?>
            <!-- cambiar aspecto de menu -->
            <aside id="sidebar-left" class="sidebar-box">

                <!-- Start left navigation - profile shortcut -->
                <div id="tour-8" class="sidebar-content">
                    <div class="media">
                        <a class="pull-left has-notif avatar" href="mi-perfil.php">
                            <img src="img/users/<?php echo $fotoDePerfil; ?>.jpg" alt="admin">
                            <i class="online"></i>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Hola, <span><?php echo $verUsuario['nombre']; ?></span></h4>
                            <small>--------</small>
                        </div>
                    </div>
                </div><!-- /.sidebar-content -->
                <!--/ End left navigation -  profile shortcut -->

                <!-- Start left navigation - menu -->
                <ul id="tour-9" class="sidebar-menu">

                    <!-- Start navigation - dashboard -->
                    <li class="submenu <?php echo ($_GET['s']=='')? 'active' : ''; ?>">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-dashboard"></i></span>
                            <span class="text">Inicio</span>
                            <span class="arrow"></span>
                            <span class="selected"></span>
                        </a>
                        <ul>
                            <li class="<?php echo ($_GET['s']=='panelInicio')? 'active' : ''; ?>"><a href="ML-inicio.php?s=panelInicio">Panel</a></li>
                            <li class="<?php echo ($_GET['s']=='panelInformes')? 'active' : ''; ?>"><a href="ML-informes.php?s=panelInformes">Informes</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - dashboard -->


                    <!-- encabezado ventas i -->
                    <li class="sidebar-category">
                        <span>MIS VENTAS</span>
                        <span class="pull-right"><i class="fa fa-paperclip"></i></span>
                    </li>
                    <!--/ encabezado ventas f -->
<?php 
if (in_array(1,$permisosDeUsuario) || in_array(2,$permisosDeUsuario) || in_array(4,$permisosDeUsuario)) {
 ?>
                    <!-- menu Ordenes i -->
                    <li class="submenu <?php echo ($_GET['s']=='listarOrdenes')? 'active' : ''; ?>">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                            <span class="text">Ordenes / ventas</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                <li><a href="ML-ordenes.php?s=listarOrdenes&tipo=recent"><i class="fa fa-circle-o"></i> Concretadas</a></li>
                <li><a href="ML-ordenes.php?s=ordenesPendientes&tipo=recent"><i class="fa fa-circle-o"></i> No retiradas / No enviadas</a></li>
                <li><a href="ML-ordenes.php?s=listarOrdenes&filtro=1&tipo=recent&estado=paid&calif=&envio=pending"><i class="fa fa-circle-o"></i> Envios Pendientes</a></li>
                <li><a href="ML-ordenes.php?s=etiquetas&filtro=1&tipo=recent&estado=&calif=&envio=ready_to_ship"><i class="fa fa-circle-o"></i> Etiquetas Para Imprimir</a></li>
                <li><a href="ML-ordenes.php?s=listarOrdenes&filtro=1&tipo=recent&estado=paid&calif=&envio=shipped"><i class="fa fa-circle-o"></i> Envios en Camino / transito</a></li>
                <li><a href="ML-ordenes.php?s=listarOrdenes&filtro=1&tipo=recent&estado=&calif=waiting_buyer&envio=delivered"><i class="fa fa-circle-o"></i> Esperando Calificación</a></li>
                <li><a href="ML-ordenes.php?s=calificarM&masiv=1&filtro=1&tipo=recent&estado=&calif=pending&envio=delivered"><i class="fa fa-circle-o"></i> Ventas sin calificar</a></li>
                        </ul>
                    </li>
                    <!--/ menu Ordenes f -->
<?php 
}
 ?>
<?php 
if (in_array(1,$permisosDeUsuario) || in_array(2,$permisosDeUsuario) || in_array(3,$permisosDeUsuario)) {
 ?>
                    <!-- menu preguntas i -->
                    <li class="submenu <?php echo ($_GET['s']=='listarPreguntas')? 'active' : ''; ?>">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-question"></i></span>
                            <span class="text">Preguntas</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                <li><a href="ML-preguntas.php?s=listarPreguntas"><i class="fa fa-circle-o"></i> Preguntas Sin Responder</a></li>
                        </ul>
                    </li>
                    <!--/ menu preguntas f -->
<?php 
}
 ?>
<?php 
if (in_array(1,$permisosDeUsuario) || in_array(2,$permisosDeUsuario) || in_array(5,$permisosDeUsuario)) {
 ?>
                    <!-- encabezado mis productos i -->
                    <li class="sidebar-category">
                        <span>MIS PRODUCTOS</span>
                        <span class="pull-right"><i class="fa fa-database"></i></span>
                    </li>
                    <!--/ encabezado mis productos F -->
                    <!-- menu mis productos I -->
                    <li class="submenu <?php echo ($_GET['s']=='prepararMasivamente')? 'active' : ''; ?>">
                        <a href="ML-misArticulos.php?s=prepararMasivamente&d=0&h=10">
                            <span class="icon"><i class="fa fa-cubes"></i></span>
                            <span class="text">Preparar Productos</span>
                        </a>
                    </li>
                    <li class="submenu <?php echo ($_GET['s']=='verArticuloPropio')? 'active' : ''; ?>">
                        <a href="ML-misArticulos.php?s=verArticuloPropio">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <span class="text">Buscar por SKU</span>
                        </a>
                    </li>
                    <!-- menu mis productos F -->
                    <!-- menu sincronizar I -->
                    <li class="submenu <?php echo ($_GET['s']=='mb-meli' || $_GET['s']=='mc-ml' || $_GET['s']=='purgarLista')? 'active' : ''; ?>">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-refresh"></i></span>
                            <span class="text">Sincronizar Cambios</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                <li><a href="ML-sincronizado.php?s=mb-meli"><i class="fa fa-circle-o"></i> Mis Productos -> MC</a></li>
                <li><a href="ML-sincronizado.php?s=mc-ml"><i class="fa fa-circle-o"></i> MC -> Mercadolibre</a></li>
                <li><a href="ML-sincronizado.php?s=purgarLista"><i class="fa fa-circle-o"></i> Purgar Lista</a></li>
                <li><a href="ML-sincronizado.php?s=desc-mb-meli"><i class="fa fa-circle-o"></i> Descripciones</a></li>
                <li><a href="ML-sincronizado.php?s=errores"><i class="fa fa-circle-o"></i> Errores</a></li>

                        </ul>
                    </li>
                    <!-- menu sincronizar f -->
                    <!-- encabezado mercadolibre i -->
                    <li class="sidebar-category">
                        <span>MercadoLibre</span>
                        <span class="pull-right"><i class="fa fa-trophy"></i></span>
                    </li>
                    <!--/ encabezado mercadolibre f -->
                    <!-- menu mercadolibre i -->
                    <li class="submenu <?php echo ($_GET['s']=='listarItems')? 'active' : ''; ?>">
                        <a href="ML-misArticulos.php?s=listarItems">
                            <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                            <span class="text">En MercadoLibre</span>
                        </a>
                    </li>
                    <li class="submenu <?php echo ($_GET['s']=='unico' || $_GET['s']=='listar')? 'active' : ''; ?>">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-upload"></i></span>
                            <span class="text">Importar Productos ML</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                <li><a href="ML-importar.php?s=unico"><i class="fa fa-circle-o"></i> Importar producto único</a></li>
                <li><a href="ML-importar.php?s=listar"><i class="fa fa-circle-o"></i> Listar Productos para importar</a></li>
                        </ul>
                    </li>
                    <li class="submenu <?php echo ($_GET['s']=='itemsPendientes')? 'active' : ''; ?>">
                        <a href="ML-misArticulos.php?s=itemsPendientes&e=0">
                            <span class="icon"><i class="fa fa-check-circle-o"></i></span>
                            <span class="text">Listo para publicar</span><span class="label label-info pull-right rounded"><?php echo $contarPendientes['cantidad']; ?></span>
                        </a>
                    </li>
                    <!--/ menu mercadolibre f -->
<?php 
}
 ?>
                    <!-- encabezado mercadolibre i -->
                    <li class="sidebar-category">
                        <span>Configuraciones</span>
                        <span class="pull-right"><i class="fa fa-gears"></i></span>
                    </li>
                    <!--/ encabezado mercadolibre f -->
                    <!-- menu configuraciones i -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-gears"></i></span>
                            <span class="text">Configuraciones</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
<?php 
if (in_array(1,$permisosDeUsuario) || in_array(2,$permisosDeUsuario)) {
 ?>
                <li><a href="usuarios.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                <li><a href="checkAPI.php"><i class="fa fa-circle-o"></i> Chequear Conexion ML</a></li>
<?php 
}
 ?>
                <li><a href="ML-mantenimiento.php"><i class="fa fa-circle-o"></i> Encabezado y Pie</a></li>
                <li><a href="ML-plantillas.php?s=respuestasPre"><i class="fa fa-circle-o"></i> Respuestas Pre-Venta</a></li>
                <li><a href="ML-plantillas.php?s=mensajesPre"><i class="fa fa-circle-o"></i> Mensajes Post-Venta</a></li>
                <li><a href="ML-plantillas.php?s=otrasPlantillas"><i class="fa fa-circle-o"></i> Otras Configuraciones</a></li>
                        </ul>
                    </li>
                    <!--/ menu configuraciones f -->
                    <!-- menu ayuda i -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-question"></i></span>
                            <span class="text">Ayuda</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                <li><a href="ayudaF.php?s=listar"><i class="fa fa-circle-o"></i> Tickets</a></li>
                <li><a href="ayudaF.php?s=ver"><i class="fa fa-circle-o"></i> Nuevo Ticket</a></li>
                <li><a href="ML-tutoriales.php?s=listar"><i class="fa fa-circle-o"></i> Tutoriales</a></li>
                        </ul>
                    </li>
                    <!--/ menu ayuda f -->

                </ul><!-- /.sidebar-menu -->
                <!--/ End left navigation - menu -->

                <!-- Start left navigation - footer -->
                <div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
                    <a id="setting" class="pull-left" href="mi-perfil.php" data-toggle="tooltip" data-placement="top" data-title="Configuración"><i class="fa fa-cog"></i></a>
                    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Pantalla Completa"><i class="fa fa-desktop"></i></a>
                    <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Bloquear"><i class="fa fa-lock"></i></a>
                    <a id="logout" data-url="page-lock-screen.html" class="pull-left" href="acciones/login-usuarios.php?id=2" data-toggle="tooltip" data-placement="top" data-title="Salir"><i class="fa fa-power-off"></i></a>
                </div><!-- /.sidebar-footer -->
                <!--/ End left navigation - footer -->

            </aside><!-- /#sidebar-left -->
            <!--/ END SIDEBAR LEFT -->
