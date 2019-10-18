<?php

use app\assets\admin\widget\BlogAsset;

BlogAsset::register($this);

$this->title = 'BLOG WIDGET | BLANKON - Fullpack Admin Theme';

?>


<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-pencil"></i> Blog Widget <span>blog widget and more</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Widget</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Blog</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <!-- Start blog widget -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="blog-item rounded shadow">
                    <a href="#" class="blog-img">
                        <img src="http://img.djavaui.com/?create=250x170,81B71A?f=ffffff" class="img-responsive" alt="..." />
                    </a>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">Title post</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                        <div class="blog-summary">
                            <p>Content post goes here ...</p>
                            <button class="btn btn-sm btn-success">Read More</button>
                        </div><!-- /.blog-summary -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="blog-item rounded shadow">
                    <div id="carousel-blog-post" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-blog-post" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-blog-post" data-slide-to="1"></li>
                            <li data-target="#carousel-blog-post" data-slide-to="2"></li>
                        </ol><!-- /.carousel-indicators -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://img.djavaui.com/?create=250x170,81B71A?f=ffffff" class="img-responsive" alt="..." />
                                <div class="carousel-caption">
                                    Slide 1
                                </div>
                            </div><!-- /.item -->
                            <div class="item">
                                <img src="http://img.djavaui.com/?create=250x170,81B71A?f=ffffff" class="img-responsive" alt="..." />
                                <div class="carousel-caption">
                                    Slide 2
                                </div>
                            </div><!-- /.item -->
                            <div class="item">
                                <img src="http://img.djavaui.com/?create=250x170,81B71A?f=ffffff" class="img-responsive" alt="..." />
                                <div class="carousel-caption">
                                    Slide 3
                                </div>
                            </div><!-- /.item -->
                        </div><!-- /.carousel-inner -->
                        <a class="left carousel-control" href="#carousel-blog-post" role="button" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a><!-- /.carousel-control -->
                        <a class="right carousel-control" href="#carousel-blog-post" role="button" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a><!-- /.carousel-control -->
                    </div><!-- carousel -->
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">Title post</a></h4>
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                        <div class="blog-summary">
                            <p>Content post goes here ...</p>
                            <button class="btn btn-sm btn-success">Read More</button>
                        </div><!-- /.blog-summary -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="blog-item rounded shadow">
                    <a href="page-blog-single.html" class="blog-img"><img src="http://img.djavaui.com/?create=250x170,81B71A?f=ffffff" class="img-responsive" alt="..." /></a>
                    <div class="blog-details">
                        <div class="ribbon-wrapper">
                            <div class="ribbon ribbon-danger">Ribbon</div>
                        </div><!-- /.ribbon-wrapper -->
                        <h4 class="blog-title"><a href="">Title post</a></h4><!-- /.blog-title -->
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                        <div class="blog-summary">
                            <p>Content post goes here ...</p>
                            <button class="btn btn-sm btn-success">Read More</button>
                        </div><!-- /.blog-summary -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="blog-item rounded shadow">
                    <div class="blog-video">
                        <iframe src="//www.youtube.com/embed/ab0TSkLe-E0" allowfullscreen></iframe>
                    </div>
                    <div class="blog-details">
                        <h4 class="blog-title"><a href="">Title post</a></h4><!-- /.blog-title -->
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                        <div class="blog-summary">
                            <p>Content post goes here ...</p>
                            <button class="btn btn-sm btn-success">Read More</button>
                        </div><!-- /.blog-summary -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-primary">
                        <a href="">
                            Quote Primary
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-success">
                        <a href="">
                            Quote Success
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-info">
                        <a href="">
                            Quote Info
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-warning">
                        <a href="">
                            Quote Warning
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-danger">
                        <a href="">
                            Quote Danger
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-lilac">
                        <a href="">
                            Quote Lilac
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-teal">
                        <a href="">
                            Quote Teal
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="blog-item blog-quote rounded shadow">
                    <div class="quote quote-inverse">
                        <a href="">
                            Quote Inverse
                            <small class="quote-author">- sub -</small>
                        </a>
                    </div><!-- /.quote -->
                    <div class="blog-details">
                        <ul class="blog-meta">
                            <li>By: <a href="">User</a></li>
                            <li>mm dd, yyyy</li>
                            <li><a href="">comments</a></li>
                        </ul><!-- /.blog-meta -->
                    </div><!-- /.blog-details -->
                </div><!-- /.blog-item -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-4 col-sm-6">

                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#popular"><strong>Popular</strong></a></li>
                    <li class=""><a data-toggle="tab" href="#recent"><strong>Recent</strong></a></li>
                    <li class=""><a data-toggle="tab" href="#comments"><strong>Comments</strong></a></li>
                </ul><!-- /.nav-tabs -->
                <div class="tab-content no-padding">
                    <div id="popular" class="blog-list tab-pane active">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="page-blog-single.html" title="Lorem ipsum dolor sit">Lorem ipsum dolor sit</a></h4>
                                <small class="media-desc">Amet, consectetur adipisicing elit, sed do ut labore et dolore magna aliqua...</small>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="page-blog-single.html" title="Ut enim ad minim veniam">Ut enim ad minim veniam</a></h4>
                                <small class="media-desc">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat...</small>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="page-blog-single.html" title="Duis aute irure dolor">Duis aute irure dolor</a></h4>
                                <small class="media-desc">In reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</small>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                    </div><!-- /.blog-list active -->
                    <div id="recent" class="blog-list tab-pane">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="page-blog-single.html" title="Excepteur sint occaecat cupidatat">Excepteur sint occaecat cupidatat</a></h4>
                                <small class="media-desc">Sunt in culpa qui officia deserunt mollit anim id est laborum...</small>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="page-blog-single.html" title="Sed ut perspiciatis unde">Sed ut perspiciatis unde</a></h4>
                                <small class="media-desc">Omnis iste natus error sit voluptatem accusantium doloremque laudantium...</small>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><a href="page-blog-single.html" title="Totam rem aperiam">Totam rem aperiam</a></h4>
                                <small class="media-desc">eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae...</small>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                    </div><!-- /.blog-list -->
                    <div id="comments" class="blog-list tab-pane">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=50x50,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><b>Commented on : </b><a href="page-blog-single.html" title="Lorem ipsum dolor sit">Lorem ipsum dolo...</a></h4>
                                <small class="media-desc"><i class="fa fa-quote-left"></i> Dicta sunt explicabo. Nemo enim ipsam voluptatem By </small>
                                <a href="page-profile.html">Jeck Joko</a>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=50x50,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><b>Commented on : </b><a href="page-blog-single.html" title="Ut enim ad minim veniam">Ut enim ad mini...</a></h4>
                                <small class="media-desc"><i class="fa fa-quote-left"></i> Sed quia consequuntur magni dolores eos qui ratione By </small>
                                <a href="page-profile.html">Tenny Imoet</a>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img src="http://img.djavaui.com/?create=50x50,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                            </a><!-- /.pull-left -->
                            <div class="media-body">
                                <h4 class="media-heading"><b>Commented on : </b><a href="page-blog-single.html" title="Duis aute irure dolor">Duis aute iru...</a></h4>
                                <small class="media-desc"><i class="fa fa-quote-left"></i> Neque quisquam est, qui dolorem ipsum dolor sit amet By </small>
                                <a href="page-profile.html">Leli Madang</a>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                    </div><!-- /.blog-list -->
                </div><!-- /.tab-content -->

            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6">

                <div class="panel panel-primary blog-list-slider rounded shadow">
                    <div class="panel-heading">
                        <h3 class="panel-title">NEWS & UPDATES</h3>
                    </div><!-- /.panel-heading -->
                    <div id="carousel-blog-list" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-blog-list" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-blog-list" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="blog-list">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                                        </a><!-- /.pull-left -->
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="page-blog-single.html" title="Lorem ipsum dolor sit">Lorem ipsum dolor sit</a></h4>
                                            <small class="media-desc">Amet, consectetur adipisicing elit, sed do ut labore et dolore magna aliqua...</small>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                                        </a><!-- /.pull-left -->
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="page-blog-single.html" title="Ut enim ad minim veniam">Ut enim ad minim veniam</a></h4>
                                            <small class="media-desc">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat...</small>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                                        </a><!-- /.pull-left -->
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="page-blog-single.html" title="Duis aute irure dolor">Duis aute irure dolor</a></h4>
                                            <small class="media-desc">In reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</small>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                </div><!-- /.blog-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="blog-list">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                                        </a><!-- /.pull-left -->
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="page-blog-single.html" title="Excepteur sint occaecat cupidatat">Excepteur sint occaecat cupidatat</a></h4>
                                            <small class="media-desc">Sunt in culpa qui officia deserunt mollit anim id est laborum...</small>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                                        </a><!-- /.pull-left -->
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="page-blog-single.html" title="Sed ut perspiciatis unde">Sed ut perspiciatis unde</a></h4>
                                            <small class="media-desc">Omnis iste natus error sit voluptatem accusantium doloremque laudantium...</small>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img src="http://img.djavaui.com/?create=45x30,81B71A?f=ffffff" alt="..." class="img-responsive img-thumbnail"/>
                                        </a><!-- /.pull-left -->
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="page-blog-single.html" title="Totam rem aperiam">Totam rem aperiam</a></h4>
                                            <small class="media-desc">eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae...</small>
                                        </div><!-- /.media-body -->
                                    </div><!-- /.media -->
                                </div>
                            </div><!-- /.item -->
                        </div><!-- /.carousel-inner -->
                    </div><!-- /.carousel -->
                </div><!-- /.blog-list-slider -->

            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">News <span class="label label-lilac">79</span></h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding"><!-- /.panel-body -->
                        <div class="media inner-all mt-10">
                            <div class="pull-left">
                                                                    <span class="fa fa-stack fa-2x">
                                                                        <i class="fa fa-circle text-lilac fa-stack-2x"></i>
                                                                        <i class="fa fa-bold text-white fa-stack-1x"></i>
                                                                    </span>
                            </div><!-- /.pull-left -->
                            <div class="media-body">
                                <a href="#" class="h4">Bootstrap 3: Frontend framework</a>
                                <small class="block text-muted">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
                                <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <div class="line"></div>
                        <div class="media inner-all">
                            <div class="pull-left">
                                                                    <span class="fa fa-stack fa-2x">
                                                                        <i class="fa fa-circle text-lilac fa-stack-2x"></i>
                                                                        <i class="fa fa-bold text-white fa-stack-1x"></i>
                                                                    </span>
                            </div><!-- /.pull-left -->
                            <div class="media-body">
                                <a href="#" class="h4">Bootstrap 3: Frontend framework</a>
                                <small class="block text-muted">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small>
                                <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                    </div><!-- /.panel -->
                </div><!-- /.panel -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        <!--/ End blog widget -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin') ;?>
    <!--/ End footer content -->

</section><!-- /#page-content -->