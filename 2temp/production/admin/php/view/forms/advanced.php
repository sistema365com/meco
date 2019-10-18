<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-list-alt"></i> {page}<span>{info}</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="dashboard.html">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Forms</a>
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
    <div class="col-md-6">

        <!-- Start toggle switches -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Toggle Switches</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-sub-heading">
                <div class="callout callout-info"><p><a href="http://www.bootstrap-switch.org/" target="_blank">Bootstrap Switch 3</a>, Turn checkboxes and radio buttons in toggle switches.</p></div>
            </div><!-- /.panel-sub-heading -->
            <div class="panel-body">

                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Default</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="default">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Primary</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="primary">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Success</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="success">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Warning</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="warning">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Danger</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="danger">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Lilac</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="lilac">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Teal</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="teal">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 text-right">Switch Inverse</label>
                        <div class="col-sm-7">
                            <input type="checkbox" class="switch" name="switch" checked data-on-text="ON" data-off-text="OFF" data-on-color="inverse">
                        </div>
                    </div>

                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!-- End toggle switches -->

    </div>
    <div class="col-md-6">

        <!-- Start input masks -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Input Masks</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-sub-heading">
                <div class="callout callout-info"><p>An <a href="http://robinherbots.github.io/jquery.inputmask/" target="_blank">inputmask</a> helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers, ...</p></div>
            </div><!-- /.panel-sub-heading -->
            <div class="panel-body">

                <form class="form-horizontal" id="input-mask">

                    <div class="form-group">
                        <label class="col-sm-3 text-right">Date:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" data-inputmask="'alias': 'date'">
                                    <span class="text-muted help-block">dd/mm/yyyy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 text-right">Date:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" data-inputmask="'alias': 'mm/dd/yyyy'">
                                    <span class="text-muted help-block">mm/dd/yyyy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 text-right">Int.|US Phone:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999'], 'showTooltip': true">
                                    <span class="text-muted help-block">999-999-9999 [x99999]</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 text-right">License plate:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" data-inputmask="'mask': '[9-]AAA-999'">
                                    <span class="text-muted help-block">[9-]AAA-999</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 text-right">Decimal:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true">
                                    <span class="text-muted help-block">Group separator: , </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 text-right">IP address:</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" id="ip" data-inputmask="'alias': 'ip'">
                                    <span class="text-muted help-block">AAA.AAA.AAA.AAA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div><!-- /.panel-body  -->
        </div><!-- /.panel -->
        <!-- End input masks -->

    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">

        <!-- Start datepicker -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Datepicker</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading  -->
            <div class="panel-sub-heading">
                <div class="callout callout-info"><p>Add <a href="http://vitalets.github.io/bootstrap-datepicker/" target="_blank">datepicker</a> picker to field or to any other element.</p></div>
            </div><!-- /.panel-sub-heading  -->
            <div class="panel-body no-padding">

                <form class="form-horizontal form-bordered" id="dp">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">format specified via options</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" value="02-16-2012" id="dp1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">format specified via data tag</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" value="02/16/12" data-date-format="mm/dd/yy" id="dp2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Attached to div (inline)</label>
                        <div class="col-sm-7">
                            <div id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy"></div>
                        </div>
                    </div>
                </form>

            </div><!-- /.panel-body  -->
        </div><!-- /.panel  -->
        <!-- End datepicker -->

    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">

        <!-- Start dropzone js -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Dropzone js</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-sub-heading">
                <div class="callout callout-info"><p><a href="http://www.dropzonejs.com/" target="_blank">DropzoneJS</a> is an open source library that provides drag'n'drop file uploads with image previews. <span class="text-danger">This is just a demo dropzone. Uploaded files are not stored.</span></p><span class="label label-info">Not available in IE9 &amp; below</span></div>
            </div><!-- /.panel-subheading -->
            <div class="panel-body">

                <form action="{url}assets/admin/data" class="dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End dropzone js -->

    </div>
</div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->
