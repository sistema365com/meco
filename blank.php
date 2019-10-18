<?php 
session_start();
    if (!$_SESSION['usuario_logueado']) {
        header("Location: index.php");
    }
include 'class/Autocarga.php';
include 'includes/configuraciones.php';
include 'moduloML/misArticulos/class.Articulo.php';
include 'moduloML/misArticulos/class.Presta.php';
include 'includes/funciones.php';


$titulo= 'Listado de articulos';
$scriptFooter= false;


include $templates.'/header.php';


 ?>



                            <!-- Start inside form layout -->
                            <div class="panel rounded shadow">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Inside form layout</h3>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-body">
                                    <p>Variant form layout inside body modal</p>
                                </div>
                                <div class="panel-footer">

                                    <button class="btn btn-theme" data-toggle="modal" data-target=".bs-example-modal-form">Launch modal</button>

                                </div>
                            </div>
                            <!--/ End inside form layout -->

            <!-- Start inside form layout -->
            <div class="modal fade bs-example-modal-form" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-photo-viewer">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Form title</h4>
                        </div>
                        <div class="modal-body no-padding">
                            <form class="form-horizontal form-bordered" role="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="firstname-1" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control input-sm" id="firstname-1">
                                        </div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="password-1" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" class="form-control input-sm" id="password-1">
                                        </div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-7">
                                            <div class="ckbox ckbox-theme">
                                                <input id="rememberme-3" value="1" type="checkbox">
                                                <label for="rememberme-3">Remember me</label>
                                            </div>
                                        </div>
                                    </div><!-- /.form-group -->
                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
                                        <button type="submit" class="btn btn-success">Sign in</button>
                                    </div>
                                </div><!-- /.form-footer -->
                            </form>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->




<?php 

include $templates.'/footer.php';


 ?>