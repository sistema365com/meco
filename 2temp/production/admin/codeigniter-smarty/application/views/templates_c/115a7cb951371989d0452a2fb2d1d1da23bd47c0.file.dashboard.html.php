<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-25 08:38:55
         compiled from "C:\xampp\htdocs\blankon-fullpack-admin-theme\production\admin\codeigniter-smarty\application\views\templates\contents\dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:28563580efdffa6ddc2-01044923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '115a7cb951371989d0452a2fb2d1d1da23bd47c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blankon-fullpack-admin-theme\\production\\admin\\codeigniter-smarty\\application\\views\\templates\\contents\\dashboard.html',
      1 => 1459191218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28563580efdffa6ddc2-01044923',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_580efdffac6165_47588745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580efdffac6165_47588745')) {function content_580efdffac6165_47588745($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-facebook rounded">
                <span class="mini-stat-icon"><i class="fa fa-facebook fg-facebook"></i></span>
                <div class="mini-stat-info">
                    <span>5,762</span>
                    Facebook Like
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-twitter rounded">
                <span class="mini-stat-icon"><i class="fa fa-twitter fg-twitter"></i></span>
                <div class="mini-stat-info">
                    <span>7,153</span>
                    Twitter Followers
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-googleplus rounded">
                <span class="mini-stat-icon"><i class="fa fa-google-plus fg-googleplus"></i></span>
                <div class="mini-stat-info">
                    <span>793</span>
                    Google+ Posts
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="mini-stat clearfix bg-bitbucket rounded">
                <span class="mini-stat-icon"><i class="fa fa-bitbucket fg-bitbucket"></i></span>
                <div class="mini-stat-info">
                    <span>8,932</span>
                    Repository
                </div>
            </div>
        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-9">

            <!-- Start widget visitor chart -->
            <div class="panel stat-stack widget-visitor rounded shadow">
                <div class="panel-body no-padding br-3">
                    <div class="row row-merge">
                        <div class="col-sm-8">
                            <div class="panel panel-theme stat-left no-margin no-box-shadow">
                                <div class="panel-heading no-border">
                                    <div class="pull-left">
                                        <h3 class="panel-title">Daily Visitor</h3>
                                    </div><!-- /.pull-left -->
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-theme dropdown-toggle no-border" data-toggle="dropdown">
                                                Duration <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right no-border">
                                                <li class="dropdown-header">Select duration :</li>
                                                <li><a href="#">Year</a></li>
                                                <li><a href="#">Month</a></li>
                                                <li><a href="#">Week</a></li>
                                                <li><a href="#">Day</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- /.pull-right -->
                                    <div class="clearfix"></div>
                                </div><!-- /.panel-heading -->
                                <div class="panel-body bg-theme">

                                    <div id="visitor-chart" class="resize-chart"></div>

                                </div><!-- /.panel-body -->
                                <div class="panel-footer no-border-top">
                                    <div class="row text-center">
                                        <div class="col-xs-4 col-xs-override border-right dotted">
                                            <p class="text-danger text-strong mb-0">- 5%</p>
                                            <p class="h3 text-strong mb-0 mt-10 counter-visit" data-counter="7341">7,341</p>
                                            <p class="text-muted">Visits Today</p>
                                        </div>
                                        <div class="col-xs-4 col-xs-override border-right dotted">
                                            <p class="text-success text-strong mb-0">+ 32%</p>
                                            <p class="h3 text-strong mb-0 mt-10 counter-unique" data-counter="23762">23,762</p>
                                            <p class="text-muted">Unique Visitors</p>
                                        </div>
                                        <div class="col-xs-4 col-xs-override">
                                            <p class="text-success text-strong mb-0">+ 76%</p>
                                            <p class="h3 text-strong mb-0 mt-10 counter-page" data-counter="70112">70,112</p>
                                            <p class="text-muted">Page Views</p>
                                        </div>
                                    </div>
                                </div><!-- /.panel-footer -->
                            </div><!-- /.panel -->
                        </div><!-- /.col-sm-8 -->
                        <div class="col-sm-4">
                            <div class="panel stat-right no-margin no-box-shadow">
                                <div class="panel-body">
                                    <h4 class="no-margin">Server Status</h4>
                                    <p class="text-muted">Summary of the server status.</p>

                                    <span>Domains</span><span class="pull-right">(7/10)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-lilac" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                    </div><!-- /.progress -->

                                    <span>Databases</span><span class="pull-right">(45/100)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-teal" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                    </div><!-- /.progress -->

                                    <span>Email Account</span><span class="pull-right">(30/50)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                    </div><!-- /.progress -->

                                    <span>Memory Usage</span><span class="pull-right">(45.2%)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                    </div><!-- /.progress -->

                                    <span>Disk Usage</span><span class="pull-right">(68.2%)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                    </div><!-- /.progress -->

                                    <span>CPU Usage</span><span class="pull-right">(35.05 - 30 cpus)</span>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                    </div><!-- /.progress -->
                                </div><!-- /.panel-body -->
                                <div class="panel-footer">
                                    <div id="realtime-status-chart" class="resize-chart"></div>
                                </div>
                            </div><!-- /.panel -->
                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End widget visitor chart -->

        </div>
        <div class="col-md-3">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">

                    <!-- Start weather widget -->
                    <div class="widget-wrapper bg-theme rounded">
                        <div class="weather-current-city">
                            <img src="http://img.djavaui.com/?create=250x125,A90329" alt="..."/>
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                                            <span class="current-city">
                                                                Yogyakarta, ID
                                                            </span>
                                                            <span class="current-temp">
                                                                27&deg;C
                                                            </span>
                                </div><!-- /.col-md-7 -->
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <span class="current-day-icon">
                                                              <canvas id="partly-cloudy-day" width="60" height="60"></canvas>
                                                            </span>
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->
                            <span class="current-day"> Monday, 8 December </span>
                        </div><!-- /.weather-current-city -->
                        <div class="row">
                            <ul class="days">
                                <li class="col-md-4 col-sm-4 col-xs-4">
                                    <strong>Tue</strong>
                                    <canvas id="snow" width="45" height="45"></canvas>
                                    <span>20°</span>
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-4"><strong>Fri</strong>
                                    <canvas id="rain" width="45" height="45"></canvas>
                                    <span>18°</span>
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-4"><strong>Sat</strong>
                                    <canvas id="sleet" width="45" height="45"></canvas>
                                    <span>24°</span>
                                </li>
                            </ul><!-- /.days -->
                        </div><!-- /.row -->
                    </div><!-- /.widget-wrapper -->
                    <!--/ End weather widget -->

                    <div class="divider"></div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">

                    <!-- Start blog post widget -->
                    <div class="blog-item blog-quote rounded shadow">
                        <div class="quote quote-lilac">
                            <a href="page-blog-single.html">
                                Stay Hungry, Stay Foolish
                                <small class="quote-author">- Steve Jobs -</small>
                            </a>
                        </div>
                        <div class="blog-details">
                            <ul class="blog-meta">
                                <li>By: <a href="">Djava UI</a></li>
                                <li>Jun 08, 2014</li>
                                <li><a href="">2 Comments</a></li>
                            </ul>
                        </div><!-- blog-details -->
                    </div><!-- blog-item -->
                    <!--/ End blog post widget -->

                </div>
            </div>

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-9">

            <!-- Start sample table -->
            <div class="table-responsive rounded mb-20">
                <table class="table table-striped table-theme">
                    <thead>
                    <tr>
                        <th class="text-center border-right">No.</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Position</th>
                        <th class="text-center">Rating</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center border-right">1</td>
                        <td>
                            <img src="http://img.djavaui.com/?create=35x35,81B71A?f=ffffff" class="img-circle img-bordered-theme" alt="John Kribo">
                            <span>John Kribo</span>
                        </td>
                        <td>United State</td>
                        <td>Senior Web Designer</td>
                        <td class="text-center">
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star active"></span>
                                <span class="star"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center border-right">2</td>
                        <td>
                            <img src="http://img.djavaui.com/?create=35x35,A90329?f=ffffff" class="img-circle img-bordered-theme" alt="Jennifer Poiyem">
                            <span>Jennifer Poiyem</span>
                        </td>
                        <td>Spain</td>
                        <td>Senior UX Designer</td>
                        <td class="text-center">
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star active"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center border-right">3</td>
                        <td>
                            <img src="http://img.djavaui.com/?create=35x35,F4645F?f=ffffff" class="img-circle img-bordered-theme" alt="Clara Wati">
                            <span>Clara Wati</span>
                        </td>
                        <td>United State</td>
                        <td>Developer</td>
                        <td class="text-center">
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star active"></span>
                                <span class="star"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center border-right">4</td>
                        <td>
                            <img src="http://img.djavaui.com/?create=35x35,6880B0?f=ffffff" class="img-circle img-bordered-theme" alt="Toni Mriang">
                            <span>Toni Mriang</span>
                        </td>
                        <td>Germany</td>
                        <td>Assistant</td>
                        <td class="text-center">
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star active"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center border-right">5</td>
                        <td>
                            <img src="http://img.djavaui.com/?create=35x35,5a67a5?f=ffffff" class="img-circle img-bordered-theme" alt="Bella negoro">
                            <span>Bella negoro</span>
                        </td>
                        <td>England</td>
                        <td>Developer</td>
                        <td class="text-center">
                            <div class="rating">
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star"></span>
                                <span class="star active"></span>
                                <span class="star"></span>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-success btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-primary btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-danger btn-xs rounded" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="text-center border-right">No.</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Position</th>
                        <th class="text-center">Rating</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div><!-- /.table-responsive -->
            <!--/ End sample table -->

            <!-- Start dropzone js -->
            <form id="my-dropzone" action="../../../assets/admin/data" class="dropzone mb-20 rounded">
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
            <!--/ End dropzone js -->

        </div>
        <div class="col-md-3">

            <!-- Start mini stats social widget -->
            <div class="row">
                <div class="col-md-12  col-xs-4 col-xs-override">

                    <div class="panel rounded shadow">
                        <div class="panel-heading text-center bg-youtube">
                            <p class="inner-all no-margin">
                                <i class="fa fa-youtube fa-5x"></i>
                            </p>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body text-center">
                            <p class="h4 no-margin inner-all text-strong">
                                <span class="block">342</span>
                                <span class="block">Videos</span>
                            </p>
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->

                </div>
                <div class="col-md-12 col-sm-4 col-xs-4 col-xs-override">

                    <div class="panel rounded shadow">
                        <div class="panel-heading text-center bg-dribbble">
                            <p class="inner-all no-margin">
                                <i class="fa fa-dribbble fa-5x"></i>
                            </p>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body text-center">
                            <p class="h4 no-margin inner-all text-strong">
                                <span class="block">2,341</span>
                                <span class="block">Designs</span>
                            </p>
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->

                </div>
                <div class="col-md-12 col-sm-4 col-xs-4 col-xs-override">

                    <div class="panel rounded shadow">
                        <div class="panel-heading text-center bg-soundcloud">
                            <p class="inner-all no-margin">
                                <i class="fa fa-soundcloud fa-5x"></i>
                            </p>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body text-center">
                            <p class="h4 no-margin inner-all text-strong">
                                <span class="block">34,282</span>
                                <span class="block">Musics</span>
                            </p>
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->

                </div>
            </div>

            <!--/ End mini stats social widget -->

        </div>
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
