<?php

use app\assets\admin\widget\OverviewAsset;

OverviewAsset::register($this);

$this->title = 'OVERVIEW WIDGET | BLANKON - Fullpack Admin Theme';

?>

<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-bar-chart-o"></i> Overview Widget <span>overview widget and more</span></h2>
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
                <li class="active">Overview</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <!-- Start weather widget -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel rounded shadow">
                    <div class="panel-body no-padding">
                        <div class="row row-merge">
                            <div class="col-sm-6 bg-warning text-center p-20">
                                <canvas id="clear-day" width="50" height="50"></canvas>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6 text-center br-r-3">
                                <p class="h1 mb-0">28°</p> <span class="text-muted">Clear Day</span>
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel rounded shadow">
                    <div class="panel-body no-padding">
                        <div class="row row-merge">
                            <div class="col-sm-6 bg-inverse text-center p-20">
                                <canvas id="clear-night" width="50" height="50"></canvas>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6 text-center br-r-3">
                                <p class="h1 mb-0">30°</p> <span class="text-muted">Clear Night</span>
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel rounded shadow">
                    <div class="panel-body no-padding">
                        <div class="row row-merge">
                            <div class="col-sm-6 bg-lilac text-center p-20">
                                <canvas id="wind" width="50" height="50"></canvas>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6 text-center br-r-3">
                                <p class="h1 mb-0">26°</p> <span class="text-muted">Wind</span>
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel rounded shadow">
                    <div class="panel-body no-padding">
                        <div class="row row-merge">
                            <div class="col-sm-6 bg-teal text-center p-20">
                                <canvas id="fog" width="50" height="50"></canvas>
                            </div><!-- /.col-sm-6 -->
                            <div class="col-sm-6 text-center br-r-3">
                                <p class="h1 mb-0">32°</p> <span class="text-muted">Fog</span>
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget-wrapper bg-theme mb-20 rounded shadow">
                    <div class="weather-current-city">
                        <img src="http://img.djavaui.com/?create=250x125,6880B0" alt="..."/>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <span class="current-city">Yogyakarta, ID</span>
                                <span class="current-temp">27&deg;C</span>
                            </div><!-- /.col-md-8 col-sm-8 col-xs-8 -->
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <span class="current-day-icon"><canvas id="partly-cloudy-day" width="60" height="60"></canvas></span>
                            </div><!-- /.col-md-4 col-sm-4 col-xs-4 -->
                        </div><!-- /.row -->
                        <span class="current-day"> Monday, 8 December </span>
                    </div><!-- /.weather-current-city -->
                    <div class="row">
                        <ul class="days">
                            <li class="col-md-4 col-sm-4 col-xs-4">
                                <strong>Tue</strong>
                                <canvas id="snow" width="45" height="45"></canvas>
                                <span>20°</span>
                            </li><!-- /.col-md-4 col-sm-4 col-xs-4 -->
                            <li class="col-md-4 col-sm-4 col-xs-4"><strong>Fri</strong>
                                <canvas id="rain" width="45" height="45"></canvas>
                                <span>18°</span>
                            </li><!-- /.col-md-4 col-sm-4 col-xs-4 -->
                            <li class="col-md-4 col-sm-4 col-xs-4"><strong>Sat</strong>
                                <canvas id="sleet" width="45" height="45"></canvas>
                                <span>24°</span>
                            </li><!-- /.col-md-4 col-sm-4 col-xs-4 -->
                        </ul><!-- /.days -->
                    </div><!-- /.row -->
                </div><!-- /.widget-wrapper -->
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="widget-wrapper rounded shadow">
                    <div class="weather-forecast">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="http://img.djavaui.com/?create=800x250,81B71A?f=ffffff" alt="..." height="240">
                                <div class="title">
                                    weather forecast
                                </div><!-- /.title -->
                                <div class="btn-group country-select">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                        Yogyakarta <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">London</a></li>
                                        <li><a href="#">Australia</a></li>
                                        <li><a href="#">New York</a></li>
                                        <li><a href="#">China</a></li>
                                    </ul>
                                </div><!-- /.country-select -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.weather-forecast -->
                    <div class="weather-full-info">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3 col-xs-override today-status">
                                <h1>Today</h1>
                                <i class="wi wi-day-sunny-overcast"></i>
                                <div class="degree">32</div>
                            </div><!-- /.today-status -->
                            <div class="col-md-9 col-sm-9 col-xs-9 col-xs-override">
                                <ul class="row">
                                    <li class="col-sm-2 col-xs-4 text-center">
                                        <h2>Sun</h2>
                                        <i class="wi wi-rain text-primary"></i>
                                        <div class="statistics">28</div>
                                    </li>
                                    <li class="col-sm-2 col-xs-4 text-center">
                                        <h2>Mon</h2>
                                        <i class="wi wi-storm-showers text-info"></i>
                                        <div class="statistics">25</div>
                                    </li>
                                    <li class="col-sm-2 col-xs-4 text-center">
                                        <h2>Tue</h2>
                                        <i class="wi wi-snow text-danger"></i>
                                        <div class="statistics">25</div>
                                    </li>
                                    <li class="col-sm-2 col-xs-4 text-center">
                                        <h2>Wed</h2>
                                        <i class="wi wi-cloudy-gusts text-warning"></i>
                                        <div class="statistics">30</div>
                                    </li>
                                    <li class="col-sm-2 col-xs-4 text-center">
                                        <h2>Thu</h2>
                                        <i class="wi wi-cloudy text-success"></i>
                                        <div class="statistics">26</div>
                                    </li>
                                    <li class="col-sm-2 col-xs-4 text-center">
                                        <h2>Fri</h2>
                                        <i class="wi wi-sprinkle"></i>
                                        <div class="statistics">23</div>
                                    </li>
                                </ul>
                            </div><!-- /.col-md-9 -->
                        </div><!-- /.row -->
                    </div><!-- /.weather-full-info -->
                </div><!-- /.widget-wrapper -->
            </div>
        </div><!-- /.row -->
        <!--/ End weather widget -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin') ;?>
    <!--/ End footer content -->

</section><!-- /#page-content -->