<?php

use app\assets\admin\animate\AnimateAsset;

AnimateAsset::register($this);

$this->title = 'ANIMATE | BLANKON - Fullpack Admin Theme';

?>

<section id="page-content">

    <!-- Start header content -->
    <div class="header-content">
        <h2><i class="fa fa-forumbee"></i>Animate.css <span>Just-add-water CSS animations</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Animate.css</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <!--/ End header content -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <!-- Start animate.css -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Animate.css</h3>
                        </div>
                        <div class="pull-right">
                            <button title="" data-original-title="" class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button title="" data-original-title="" class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-sub-heading">
                        <div class="callout callout-info"><p><a href="http://daneden.github.io/animate.css/" target="_blank">Animate.css</a> is a bunch of cool, fun, and cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and general just-add-water-awesomeness.</div>
                    </div><!-- /.panel-subheading -->
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-7">
                                <div id="animate-action" class="panel-scrollable">
                                    <div class="panel-body" style="height: 400px">
                                        <h4>Attention Seekers</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="bounce">bounce</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="flash">flash</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="pulse">pulse</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rubberBand">rubberBand</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="shake">shake</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="swing">swing</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="tada">tada</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="wobble">wobble</button>

                                        <h4>Bouncing Entrances</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="bounceIn">bounceIn</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="bounceInDown">bounceInDown</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="bounceInLeft">bounceInLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="bounceInRight">bounceInRight</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="bounceInUp">bounceInUp</button>

                                        <h4>Fading Entrances</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeIn">fadeIn</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInDown">fadeInDown</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInDownBig">fadeInDownBig</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInLeft">fadeInLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInLeftBig">fadeInLeftBig</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInRight">fadeInRight</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInRightBig">fadeInRightBig</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInUp">fadeInUp</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeInUpBig">fadeInUpBig</button>

                                        <h4>Fading Exits</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOut">fadeOut</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutDown">fadeOutDown</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutDownBig">fadeOutDownBig</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutLeft">fadeOutLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutLeftBig">fadeOutLeftBig</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutRight">fadeOutRight</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutRightBig">fadeOutRightBig</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutUp">fadeOutUp</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="fadeOutUpBig">fadeOutUpBig</button>

                                        <h4>Flippers</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="flip">flip</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="flipInX">flipInX</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="flipInY">flipInY</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="flipOutX">flipOutX</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="flipOutY">flipOutY</button>

                                        <h4>Lightspeed</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="lightSpeedIn">lightSpeedIn</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="lightSpeedOut">lightSpeedOut</button>

                                        <h4>Rotating Entrances</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateIn">rotateIn</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateInDownLeft">rotateInDownLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateInDownRight">rotateInDownRight</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateInUpLeft">rotateInUpLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateInUpRight">rotateInUpRight</button>

                                        <h4>Rotating Exits</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateOut">rotateOut</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateOutDownLeft">rotateOutDownLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateOutDownRight">rotateOutDownRight</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateOutUpLeft">rotateOutUpLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rotateOutUpRight">rotateOutUpRight</button>

                                        <h4>Sliding Entrances</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideInUp">slideInUp</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideInDown">slideInDown</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideInLeft">slideInLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideInRight">slideInRight</button>

                                        <h4>Sliding Exits</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideOutUp">slideOutUp</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideOutDown">slideOutDown</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideOutLeft">slideOutLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="slideOutRight">slideOutRight</button>

                                        <h4>Zoom Entrances</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomIn">zoomIn</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomInDown">zoomInDown</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomInLeft">zoomInLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomInRight">zoomInRight</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomInUp">zoomInUp</button>

                                        <h4>Zoom Exits</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomOut">zoomOut</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomOutDown">zoomOutDown</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomOutLeft">zoomOutLeft</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomOutRight">zoomOutRight</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="zoomOutUp">zoomOutUp</button>

                                        <h4>Specials</h4>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="hinge">hinge</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rollIn">rollIn</button>
                                        <button class="btn btn-success btn-sm btn-push mb-10" data-animate="rollOut">rollOut</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img id="animation-sample" src="http://img.djavaui.com/?create=370x230,81B71A?f=ffffff" alt="animate" style="width: 100%;padding: 25px;"/>
                            </div>
                        </div>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End animate.css -->

            </div>
        </div>

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin') ;?>
    <!--/ End footer content -->

</section><!-- /#page-content -->