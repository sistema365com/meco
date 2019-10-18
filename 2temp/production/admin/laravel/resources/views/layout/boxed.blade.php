@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start header content -->
    <div class="header-content">
        <h2><i class="fa fa-file-o"></i>Boxed Page <span>boxed layout sample</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Layouts</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Blank Page</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <!--/ End header content -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <h3 class="panel-title">Page Blank</h3>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        page blank
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

            </div>
        </div>

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
