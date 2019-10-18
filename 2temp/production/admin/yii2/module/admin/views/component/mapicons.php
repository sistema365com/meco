<?php

use app\assets\admin\component\MapIconsAsset;

MapIconsAsset::register($this);

$this->title = 'MAP ICONS | BLANKON - Fullpack Admin Theme';

?>



<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-paw"></i> Icons Map <span>Icon font for use with Google Maps API</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Component</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Icons</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Icons Map</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info mb-20">
                    <a href="http://map-icons.com/" target="_blank">Map Icons</a> makes Google Maps Markers dynamic with control over shape, color, size, and icon easily changed using options in the marker object as well as simple SVG Notation and CSS.
                </div>
            </div>
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel rounded shadow">
                    <div class="panel-body no-padding">
                        <div id="map-icons" class="map map-lg"></div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
            </div>
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <!-- Start general icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">General</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-art-gallery"></span>
                            &nbsp;map-icon-art-gallery
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-campground"></span>
                            &nbsp;map-icon-campground
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-bank"></span>
                            &nbsp;map-icon-bank
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-hair-care"></span>
                            &nbsp;map-icon-hair-care
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-gym"></span>
                            &nbsp;map-icon-gym
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-point-of-interest"></span>
                            &nbsp;map-icon-point-of-interest
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-post-box"></span>
                            &nbsp;map-icon-post-box
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-post-office"></span>
                            &nbsp;map-icon-post-office
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-university"></span>
                            &nbsp;map-icon-university
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-beauty-salon"></span>
                            &nbsp;map-icon-beauty-salon
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-atm"></span>
                            &nbsp;map-icon-atm
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-rv-park"></span>
                            &nbsp;map-icon-rv-park
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-school"></span>
                            &nbsp;map-icon-school
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-library"></span>
                            &nbsp;map-icon-library
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-spa"></span>
                            &nbsp;map-icon-spa
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-route"></span>
                            &nbsp;map-icon-route
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-postal-code"></span>
                            &nbsp;map-icon-postal-code
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-stadium"></span>
                            &nbsp;map-icon-stadium
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-postal-code-prefix"></span>
                            &nbsp;map-icon-postal-code-prefix
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-museum"></span>
                            &nbsp;map-icon-museum
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-finance"></span>
                            &nbsp;map-icon-finance
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-natural-feature"></span>
                            &nbsp;map-icon-natural-feature
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-funeral-home"></span>
                            &nbsp;map-icon-funeral-home
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-cemetery"></span>
                            &nbsp;map-icon-cemetery
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-park"></span>
                            &nbsp;map-icon-park
                        </div>
                        <div class="icon-maps-example col-md-3">
                            <span aria-hidden="true" class="map-icon-lodging"></span>
                            &nbsp;map-icon-lodging
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End general icons -->

                <!-- Start toilets icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Toilets</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-female"></span>
                                &nbsp;map-icon-female
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-male"></span>
                                &nbsp;map-icon-male
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-unisex"></span>
                                &nbsp;map-icon-unisex
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-toilet"></span>
                                &nbsp;map-icon-toilet
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End toilets icons -->

                <!-- Start food icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Food</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-bakery"></span>
                                &nbsp;map-icon-bakery
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-cafe"></span>
                                &nbsp;map-icon-cafe
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-restaurant"></span>
                                &nbsp;map-icon-restaurant
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-food"></span>
                                &nbsp;map-icon-food
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End food icons -->

                <!-- Start stores icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Stores</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-liquor-store"></span>
                                &nbsp;map-icon-liquor-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-bicycle-store"></span>
                                &nbsp;map-icon-bicycle-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-pet-store"></span>
                                &nbsp;map-icon-pet-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-hardware-store"></span>
                                &nbsp;map-icon-hardware-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-book-store"></span>
                                &nbsp;map-icon-book-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-furniture-store"></span>
                                &nbsp;map-icon-furniture-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-department-store"></span>
                                &nbsp;map-icon-department-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-electronics-store"></span>
                                &nbsp;map-icon-electronics-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-jewelry-store"></span>
                                &nbsp;map-icon-jewelry-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-clothing-store"></span>
                                &nbsp;map-icon-clothing-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-convenience-store"></span>
                                &nbsp;map-icon-convenience-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-store"></span>
                                &nbsp;map-icon-store
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-shopping-mall"></span>
                                &nbsp;map-icon-shopping-mall
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-movie-rental"></span>
                                &nbsp;map-icon-movie-rental
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-grocery-or-supermarket"></span>
                                &nbsp;map-icon-grocery-or-supermarket
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-florist"></span>
                                &nbsp;map-icon-florist
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-laundry"></span>
                                &nbsp;map-icon-laundry
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End stores icons -->

                <!-- Start activities icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Activities</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <h4 class="col-md-12">Land Activities</h4>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-abseiling"></span>
                                &nbsp;map-icon-abseiling
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-archery"></span>
                                &nbsp;map-icon-archery
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-baseball"></span>
                                &nbsp;map-icon-baseball
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-bicycling"></span>
                                &nbsp;map-icon-bicycling
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-climbing"></span>
                                &nbsp;map-icon-climbing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-golf"></span>
                                &nbsp;map-icon-golf
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-hang-gliding"></span>
                                &nbsp;map-icon-hang-gliding
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-horse-riding"></span>
                                &nbsp;map-icon-horse-riding
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-inline-skating"></span>
                                &nbsp;map-icon-inline-skating
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-motobike-trail"></span>
                                &nbsp;map-icon-motobike-trail
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-playground"></span>
                                &nbsp;map-icon-playground
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-skateboarding"></span>
                                &nbsp;map-icon-skateboarding
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-tennis"></span>
                                &nbsp;map-icon-tennis
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-trail-walking"></span>
                                &nbsp;map-icon-trail-walking
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-viewing"></span>
                                &nbsp;map-icon-viewing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-walking"></span>
                                &nbsp;map-icon-walking
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col-md-12">Water Activities</h4>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-boating"></span>
                                &nbsp;map-icon-boating
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-boat-ramp"></span>
                                &nbsp;map-icon-boat-ramp
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-boat-tour"></span>
                                &nbsp;map-icon-boat-tour
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-canoe"></span>
                                &nbsp;map-icon-canoe
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-diving"></span>
                                &nbsp;map-icon-diving
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-fishing"></span>
                                &nbsp;map-icon-fishing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-fishing-pier"></span>
                                &nbsp;map-icon-fishing-pier
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-fish-cleaning"></span>
                                &nbsp;map-icon-fish-cleaning
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-jet-skiing"></span>
                                &nbsp;map-icon-jet-skiing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-kayaking"></span>
                                &nbsp;map-icon-kayaking
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-marina"></span>
                                &nbsp;map-icon-marina
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-rafting"></span>
                                &nbsp;map-icon-rafting
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-sailing"></span>
                                &nbsp;map-icon-sailing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-scuba-diving"></span>
                                &nbsp;map-icon-scuba-diving
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-surfing"></span>
                                &nbsp;map-icon-surfing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-swimming"></span>
                                &nbsp;map-icon-swimming
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-waterskiing"></span>
                                &nbsp;map-icon-waterskiing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-whale-watching"></span>
                                &nbsp;map-icon-whale-watching
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-wind-surfing"></span>
                                &nbsp;map-icon-wind-surfing
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="col-md-12">Winter Activities</h4>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-chairlift"></span>
                                &nbsp;map-icon-chairlift
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-cross-country-skiing"></span>
                                &nbsp;map-icon-cross-country-skiing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-ice-fishing"></span>
                                &nbsp;map-icon-ice-fishing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-ice-skating"></span>
                                &nbsp;map-icon-ice-skating
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-ski-jumping"></span>
                                &nbsp;map-icon-ski-jumping
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-skiing"></span>
                                &nbsp;map-icon-skiing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-sledding"></span>
                                &nbsp;map-icon-sledding
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-snow-shoeing"></span>
                                &nbsp;map-icon-snow-shoeing
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-snow"></span>
                                &nbsp;map-icon-snow
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-snowboarding"></span>
                                &nbsp;map-icon-snowboarding
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-snowmobile"></span>
                                &nbsp;map-icon-snowmobile
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End activities icons -->

                <!-- Start transport icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Transport</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-train-station"></span>
                                &nbsp;map-icon-train-station
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-subway-station"></span>
                                &nbsp;map-icon-subway-station
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-bus-station"></span>
                                &nbsp;map-icon-bus-station
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-transit-station"></span>
                                &nbsp;map-icon-transit-station
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-parking"></span>
                                &nbsp;map-icon-parking
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-gas-station"></span>
                                &nbsp;map-icon-gas-station
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-car-rental"></span>
                                &nbsp;map-icon-car-rental
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-car-dealer"></span>
                                &nbsp;map-icon-car-dealer
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-car-repair"></span>
                                &nbsp;map-icon-car-repair
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-car-wash"></span>
                                &nbsp;map-icon-car-wash
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-airport"></span>
                                &nbsp;map-icon-airport
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-taxi-stand"></span>
                                &nbsp;map-icon-taxi-stand
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End transport icons -->

                <!-- Start health icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Health</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-health"></span>
                                &nbsp;map-icon-health
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-dentist"></span>
                                &nbsp;map-icon-dentist
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-doctor"></span>
                                &nbsp;map-icon-doctor
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-hospital"></span>
                                &nbsp;map-icon-hospital
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-pharmacy"></span>
                                &nbsp;map-icon-pharmacy
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-physiotherapist"></span>
                                &nbsp;map-icon-physiotherapist
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-veterinary-care"></span>
                                &nbsp;map-icon-veterinary-care
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End health icons -->

                <!-- Start entertainment icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Entertainment</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-bar"></span>
                                &nbsp;map-icon-bar
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-amusement-park"></span>
                                &nbsp;map-icon-amusement-park
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-aquarium"></span>
                                &nbsp;map-icon-aquarium
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-casino"></span>
                                &nbsp;map-icon-casino
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-movie-theater"></span>
                                &nbsp;map-icon-movie-theater
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-night-club"></span>
                                &nbsp;map-icon-night-club
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-zoo"></span>
                                &nbsp;map-icon-zoo
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-bowling-alley"></span>
                                &nbsp;map-icon-bowling-alley
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End Entertainment icons -->

                <!-- Start services icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Services</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-storage"></span>
                                &nbsp;map-icon-storage
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-electrician"></span>
                                &nbsp;map-icon-electrician
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-moving-company"></span>
                                &nbsp;map-icon-moving-company
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-painter"></span>
                                &nbsp;map-icon-painter
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-plumber"></span>
                                &nbsp;map-icon-plumber
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-roofing-contractor"></span>
                                &nbsp;map-icon-roofing-contractor
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-general-contractor"></span>
                                &nbsp;map-icon-general-contractor
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-locksmith"></span>
                                &nbsp;map-icon-locksmith
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End services icons -->

                <!-- Start business icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Business</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-insurance-agency"></span>
                                &nbsp;map-icon-insurance-agency
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-lawyer"></span>
                                &nbsp;map-icon-lawyer
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-real-estate-agency"></span>
                                &nbsp;map-icon-real-estate-agency
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-travel-agency"></span>
                                &nbsp;map-icon-travel-agency
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-accounting"></span>
                                &nbsp;map-icon-accounting
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End business icons -->

                <!-- Start government icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Government</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-courthouse"></span>
                                &nbsp;map-icon-courthouse
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-political"></span>
                                &nbsp;map-icon-political
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-local-government"></span>
                                &nbsp;map-icon-local-government
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-embassy"></span>
                                &nbsp;map-icon-embassy
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-city-hall"></span>
                                &nbsp;map-icon-city-hall
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-fire-station"></span>
                                &nbsp;map-icon-fire-station
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-police"></span>
                                &nbsp;map-icon-police
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End government icons -->

                <!-- Start religious icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Religious</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-place-of-worship"></span>
                                &nbsp;map-icon-place-of-worship
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-church"></span>
                                &nbsp;map-icon-church
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-mosque"></span>
                                &nbsp;map-icon-mosque
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-synagogue"></span>
                                &nbsp;map-icon-synagogue
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-hindu-temple"></span>
                                &nbsp;map-icon-hindu-temple
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End religious icons -->

                <!-- Start accessibility icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Accessibility</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-wheelchair"></span>
                                &nbsp;map-icon-wheelchair
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-closed-captioning"></span>
                                &nbsp;map-icon-closed-captioning
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-open-captioning"></span>
                                &nbsp;map-icon-open-captioning
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-sign-language"></span>
                                &nbsp;map-icon-sign-language
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-volume-control-telephone"></span>
                                &nbsp;map-icon-volume-control-telephone
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-low-vision-access"></span>
                                &nbsp;map-icon-low-vision-access
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-braille"></span>
                                &nbsp;map-icon-braille
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-audio-description"></span>
                                &nbsp;map-icon-audio-description
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-assistive-listening-system"></span>
                                &nbsp;map-icon-assistive-listening-system
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End accessibility icons -->

                <!-- Start user interface icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">User Interface</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-search"></span>
                                &nbsp;map-icon-search
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-location-arrow"></span>
                                &nbsp;map-icon-location-arrow
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-zoom-out"></span>
                                &nbsp;map-icon-zoom-out
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-zoom-out-alt"></span>
                                &nbsp;map-icon-zoom-out-alt
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-zoom-in"></span>
                                &nbsp;map-icon-zoom-in
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-zoom-in-alt"></span>
                                &nbsp;map-icon-zoom-in-alt
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-crosshairs"></span>
                                &nbsp;map-icon-crosshairs
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-compass"></span>
                                &nbsp;map-icon-compass
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-expand"></span>
                                &nbsp;map-icon-expand
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-fullscreen"></span>
                                &nbsp;map-icon-fullscreen
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End user interface icons -->

                <!-- Start marker icons -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Marker Icons</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-map-pin"></span>
                                &nbsp;map-icon-map-pin
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-square-pin"></span>
                                &nbsp;map-icon-square-pin
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-route-pin"></span>
                                &nbsp;map-icon-route-pin
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-sheild"></span>
                                &nbsp;map-icon-sheild
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-circle"></span>
                                &nbsp;map-icon-circle
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-square-rounded"></span>
                                &nbsp;map-icon-square-rounded
                            </div>
                            <div class="icon-maps-example col-md-3">
                                <span aria-hidden="true" class="map-icon-square"></span>
                                &nbsp;map-icon-square
                                </span>
                            </div>
                        </div>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End marker icons -->
            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin'); ?>
    <!--/ End footer content -->

</section><!-- /#page-content -->