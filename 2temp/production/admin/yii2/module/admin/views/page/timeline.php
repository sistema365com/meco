<?php

use app\assets\admin\page\TimelineAsset;

TimelineAsset::register($this);

$this->title = "TIMELINE | BLANKON - Fullpack Admin Theme";
?>


<!-- START @PAGE CONTENT -->
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-child"></i> Timeline <span>timeline activity</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Timeline</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">

                <div class="panel rounded shadow">
                    <div class="panel-body">
                        <div class="inner-all">
                            <ul class="list-unstyled">
                                <li class="text-center">
                                    <img class="img-circle img-bordered-primary" src="http://img.djavaui.com/?create=100x100,F4645F?f=ffffff" alt="Tol Lee">
                                </li>
                                <li class="text-center">
                                    <h4 class="text-capitalize">Tol Lee</h4>
                                    <p class="text-muted text-capitalize">web designer</p>
                                </li>
                                <li>
                                    <a href="" class="btn btn-success text-center btn-block">PRO Account</a>
                                </li>
                                <li><br/></li>
                                <li>
                                    <div class="btn-group-vertical btn-block">
                                        <a href="" class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a>
                                        <a href="" class="btn btn-default"><i class="fa fa-sign-out pull-right"></i>Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.panel -->

                <div class="panel panel-theme rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Contact</h3>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">
                        <ul class="list-group no-margin">
                            <li class="list-group-item"><i class="fa fa-envelope mr-5"></i> support@djavaui.com</li>
                            <li class="list-group-item"><i class="fa fa-globe mr-5"></i> www.djavaui.com</li>
                            <li class="list-group-item"><i class="fa fa-phone mr-5"></i> +6281 903 xxx xxx</li>
                        </ul>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

            </div>
            <div class="col-lg-9 col-md-9 col-sm-8">

                <div class="profile-cover">
                    <div class="cover rounded shadow no-overflow">
                        <div class="inner-cover">
                            <!-- Start offcanvas btn group menu: This menu will take position at the top of profile cover (mobile only). -->
                            <div class="btn-group cover-menu-mobile hidden-lg hidden-md">
                                <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="dropdown-menu pull-right no-border" role="menu">
                                    <li class="active"><a href="page-timeline.html"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
                                    <li><a href="page-profile.html"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span> <small>(7 new)</small></a></li>
                                </ul>
                            </div>
                            <img src="http://img.djavaui.com/?create=760x230,81B71A?f=ffffff" class="img-responsive" alt="cover">
                        </div>
                        <ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
                            <li class="active"><a href="page-timeline.html"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
                            <li><a href="page-profile.html"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span> <small>(7 new)</small></a></li>
                        </ul>
                    </div><!-- /.cover -->
                    <div class="profile-body">
                        <div class="profile-timeline">
                            <!-- Start timeline -->
                            <div class="timeline">
                                <div class="timeline-item alt">
                                    <div class="text-right">
                                        <div class="time-show first">
                                            <a href="#" class="btn btn-success">Today</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel panel-danger shadow">
                                            <div class="panel-heading">
                                                <div class="panel-title">Your Activity</div>
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-danger"><i class="fa fa-child"></i></span>
                                            </div>
                                            <div class="panel-body rounded">
                                                <ul class="list-unstyled no-margin">
                                                    <li><i class="fa fa-comment"></i> Discussion member on <a href="https://www.facebook.com/groups/twitterbootstrapindonesia/" target="_blank">Twitter Bootstrap Indonesia</a></li>
                                                    <li><i class="fa fa-book"></i> Add a resource <a href="#">Reading web design</a></li>
                                                    <li><i class="fa fa-comment"></i> Add new discussion topic feature Blankon v1.0.2</li>
                                                    <li><i class="fa fa-book"></i> Add a review <a href="#">Criminal on War</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item alt">
                                    <div class="timeline-desk">
                                        <div class="panel panel-success shadow">
                                            <div class="panel-body">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon bg-success circle"><i class="fa fa-shopping-cart"></i></span>
                                                <span class="timeline-date">10:00 am</span>
                                                <h1 class="fg-success">2 hours ago</h1>
                                                <p>You sold item, Blankon v1.0.0</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel panel-primary rounded shadow">
                                            <div class="panel-body">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-primary rounded"><i class="fa fa-upload"></i></span>
                                                <span class="timeline-date">11:35 am</span>
                                                <h1 class="blue">4 hours ago</h1>
                                                <p>5 new photo Uploaded on facebook</p>
                                                <div class="album">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,81B71A?f=ffffff" width="65">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,A90329?f=ffffff" width="65">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,F4645F?f=ffffff" width="65">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,6880B0?f=ffffff" width="65">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,5a67a5?f=ffffff" width="65">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,DD4814?f=ffffff" width="65">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,37BC9B?f=ffffff" width="65">
                                                    <img alt="..." src="http://img.djavaui.com/?create=65x45,00B1E1?f=ffffff" width="65">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item alt">
                                    <div class="text-right">
                                        <div class="time-show">
                                            <a href="#" class="btn btn-info rounded">Yesterday</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel panel-lilac shadow">
                                            <div class="panel-body">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon yellow"><i class="fa fa-pencil"></i></span>
                                                <h1 class="yellow">07:30 am</h1>
                                                <p><a href="#">Tenny Imoet</a> updated his status : "Feeling bored"</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item alt">
                                    <div class="timeline-desk">
                                        <div class="panel panel-inverse shadow">
                                            <div class="panel-body">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon bg-lilac"><i class="fa fa-download"></i></span>
                                                <span class="timeline-date">07:49 pm</span>
                                                <h1 class="">5:55 am</h1>
                                                <p>Download the new updates Twitter Bootstrap 3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel shadow">
                                            <div class="panel-body">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-warning"><i class="fa fa-user-md"></i></span>
                                                <span class="timeline-date">07:49 pm</span>
                                                <h1 class="blue">08 June | Sunday</h1>
                                                <p>Jeck Joko added new milestone <span><a class="blue" href="#">Daddy Botak</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-item alt">
                                    <div class="text-right">
                                        <div class="time-show">
                                            <a href="#" class="btn btn-danger">08 May 2014</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-item alt">
                                    <div class="timeline-desk">
                                        <div class="panel panel-success shadow">
                                            <div class="panel-heading">
                                                <div class="panel-title">Currently your check-in</div>
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon bg-success circle"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                            <div class="panel-body no-padding">
                                                <div id="map-marker" class="map"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel panel-info shadow">
                                            <div class="panel-heading">
                                                <div class="panel-title">New friends added</div>
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-info"><i class="fa fa-users"></i></span>
                                            </div>
                                            <div class="panel-body no-padding rounded">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center border-right">No.</th>
                                                            <th>Name</th>
                                                            <th>Location</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td class="text-center border-right">1</td>
                                                            <td>
                                                                <img src="http://img.djavaui.com/?create=35x35,81B71A?f=ffffff" class="img-circle img-bordered-theme" alt="...">
                                                                <span>John Kribo</span>
                                                            </td>
                                                            <td>United State</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center border-right">2</td>
                                                            <td>
                                                                <img src="http://img.djavaui.com/?create=35x35,A90329?f=ffffff" class="img-circle img-bordered-theme" alt="...">
                                                                <span>Jennifer Poiyem</span>
                                                            </td>
                                                            <td>Spain</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center border-right">3</td>
                                                            <td>
                                                                <img src="http://img.djavaui.com/?create=35x35,F4645F?f=ffffff" class="img-circle img-bordered-theme" alt="...">
                                                                <span>Clara Wati</span>
                                                            </td>
                                                            <td>United State</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center border-right">4</td>
                                                            <td>
                                                                <img src="http://img.djavaui.com/?create=35x35,6880B0?f=ffffff" class="img-circle img-bordered-theme" alt="...">
                                                                <span>Toni Mriang</span>
                                                            </td>
                                                            <td>Germany</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="timeline-item alt">
                                    <div class="text-right">
                                        <div class="time-show">
                                            <a href="#" class="btn btn-primary">Load More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/ End timeline -->
                        </div>
                    </div><!-- /.profile-body -->
                </div><!-- /.profile-cover -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <footer class="footer-content">
        2014 - 2015 &copy; Blankon Admin. Created by <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
        <span class="pull-right">0.01 GB(0%) of 15 GB used</span>
    </footer><!-- /.footer-content -->
    <!--/ End footer content -->

</section><!-- /#page-content -->
<!--/ END PAGE CONTENT -->