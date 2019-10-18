@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-signal"></i> Flot Charts <span>visual charts & graphs</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Charts</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Flot Charts</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info mb-20">
                    <a href="http://www.flotcharts.org/" target="_blank">Flot</a> is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start basic chart -->
                <div class="panel rounded shadow panel-success">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Basic</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-container="body" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="flot-basic-chart" class="chart"></div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End basic chart -->

            </div>
            <div class="col-md-6">

                <!-- Start bar chart -->
                <div class="panel rounded shadow panel-warning">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Bar</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-container="body" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="flot-bar-chart" class="chart"></div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End bar chart -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start pie chart -->
                <div class="panel rounded shadow panel-danger">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Pie</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="flot-pie-chart" class="chart"></div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End pie chart -->

            </div>
            <div class="col-md-6">

                <!-- Start real time update chart -->
                <div class="panel rounded shadow panel-primary">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Real Time Update</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div id="flot-realtime-chart" class="chart"></div>
                    </div>
                </div>
                <!--/ End real time update chart -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
