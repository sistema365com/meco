<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-map-marker"></i> {page} <span>{info}</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="dashboard.html">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Maps</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">{page}</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            Enrich your Google Maps using the jquery plugin <a href="http://gmap3.net/" target="_blank">Gmap3</a>. Gmap3 allows you to easily understand the power of Google Maps 3, due to the simplicity of jQuery.
        </div>
    </div>
</div><!-- /.row -->
<!-- Start Google map -->
<div class="row">
    <div class="col-md-12">

        <!-- Start street view marker -->
        <div class="panel rounded shadow panel-success">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Street View Marker</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-street-view-marker" class="map map-lg"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End street view marker -->

    </div>
</div>
<div class="row">
    <div class="col-md-4">

        <!-- Start with marker -->
        <div class="panel rounded shadow panel-danger">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">With Marker</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-marker" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End with marker -->

    </div>
    <div class="col-md-4">

        <!-- Start multiple marker -->
        <div class="panel rounded shadow panel-info">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Multiple Marker</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-multiple-marker" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End multiple marker -->

    </div>
    <div class="col-md-4">

        <!-- Start address map -->
        <div class="panel rounded shadow panel-primary">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Address Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-address" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End address map -->

    </div>
</div>
<div class="row">
    <div class="col-md-4">

        <!-- Start tag map -->
        <div class="panel rounded shadow panel-lilac">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Tag Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-tag" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End tag map -->

    </div>
    <div class="col-md-4">

        <!-- Start circle map -->
        <div class="panel rounded shadow panel-success">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Circle Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-circle" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End circle map -->

    </div>
    <div class="col-md-4">

        <!-- Start elevation map -->
        <div class="panel rounded shadow panel-warning">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Elevation Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-elevation" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End elevation map -->

    </div>
</div>
<div class="row">
    <div class="col-md-4">

        <!-- Start with infowindow -->
        <div class="panel rounded shadow panel-danger">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Info Window</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-infowindow" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End with infowindow -->

    </div>
    <div class="col-md-4">

        <!-- Start traffic map -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Traffic Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-traffic-map" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End traffic map -->

    </div>
    <div class="col-md-4">

        <!-- Start panel map -->
        <div class="panel rounded shadow panel-success">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Panel Map</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div id="map-panel-map" class="map"></div>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End panel map -->

    </div>
</div>
<!--/ End Google map -->

</div><!-- /.body-content -->
<!--/ End body content -->
