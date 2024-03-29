<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-list-alt"></i> Form Elements <span>form elements and more</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url($this->config->item('link_url').'/dashboard')?>">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Forms</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Form Elements</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

<div class="row">
<div class="col-md-6">

    <!-- Start input fields - basic form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Input Fields</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-sub-heading">
            <div class="callout callout-info"><p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group no-margin</code> for optimum spacing.</p></div>
        </div><!-- /.panel-subheading -->
        <div class="panel-body no-padding">

            <form action="#">
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label">Default Input</label>
                        <input class="form-control" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Rounded Input</label>
                        <input class="form-control rounded" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Focus Input</label>
                        <input class="form-control form-focus" type="text" value="Demonstrative focus state">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Left Icon</label>
                        <div class="input-icon">
                            <i class="fa fa-microphone"></i>
                            <input class="form-control" placeholder="Left icon" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Right Icon</label>
                        <div class="input-icon right">
                            <i class="fa fa-microphone"></i>
                            <input class="form-control" placeholder="Right icon" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">With Spinner</label>
                        <input class="form-control spinner" placeholder="Loading something..." type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">With Spinner Flat</label>
                        <input class="form-control spinner flat" placeholder="Loading something..." type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label" for="disabledinput1">Disabled Input</label>
                        <input id="disabledinput1" class="form-control" disabled="" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label" for="readonlyinput1">Read-Only Input</label>
                        <input value="Read Only Input" id="readonlyinput1" class="form-control" readonly="readonly" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Static control</label>
                        <div>
                            <p class="form-control-static">email@example.com</p>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Block Help Text</label>
                        <div>
                            <input class="form-control" type="text">
                            <span class="help-block no-margin">A block of help text that breaks onto a new line.</span>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Input with Tooltip</label>
                        <input type="text" class="form-control tooltips" data-toggle="tooltip" data-placement="top" data-title="Tooltip goes here" placeholder="Hover me">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Input with Popover</label>
                        <input type="text" class="form-control popovers" data-toggle="popover" data-placement="top" data-title="The Title" data-content="Content goes here..." data-trigger="click" placeholder="Click Me">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Placeholder</label>
                        <input placeholder="This is a placeholder" class="form-control" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Input Sizing</label>
                        <input placeholder=".input-sm" class="form-control input-sm mb-15" type="text">
                        <input placeholder="default" class="form-control mb-15" type="text">
                        <input placeholder=".input-lg" class="form-control input-lg" type="text">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Input Tags</label>
                        <input type="text" value="Tag 1,Tag 2,Tag 3" data-role="tagsinput" class="form-control" placeholder="Type and enter" />
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!--/ End input fields - basic form-->

</div><!-- /.col-md-6 -->
<div class="col-md-6">

    <!-- Start input fields - horizontal form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Input Fields</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-sub-heading">
            <div class="callout callout-info"><p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form. Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p></div>
        </div><!-- /.panel-subheading -->
        <div class="panel-body no-padding rounded-bottom">
            <form action="#" class="form-horizontal form-bordered">
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Default Input</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Rounded Input</label>
                        <div class="col-sm-9">
                            <input class="form-control rounded" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Focus Input</label>
                        <div class="col-sm-9">
                            <input value="Demonstrative focus state" class="form-control" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Left Icon</label>
                        <div class="col-sm-9 input-icon">
                            <i class="fa fa-microphone"></i>
                            <input class="form-control" placeholder="Left icon" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Right Icon</label>
                        <div class="col-sm-9 input-icon right">
                            <i class="fa fa-microphone"></i>
                            <input class="form-control" placeholder="Right icon" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">With Spinner</label>
                        <div class="col-sm-9">
                            <input class="form-control spinner" placeholder="Loading something..." type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">With Spinner Flat</label>
                        <div class="col-sm-9">
                            <input class="form-control spinner flat" placeholder="Loading something..." type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Disabled Input</label>
                        <div class="col-sm-9">
                            <input class="form-control" disabled="disabled" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Read-Only Input</label>
                        <div class="col-sm-9">
                            <input value="Read Only Input" class="form-control" readonly="readonly" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Static control</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">email@example.com</p>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Block Help Text</label>
                        <div class="col-sm-9">
                            <input placeholder="Help Text" class="form-control" type="text">
                            <span class="help-block no-margin">A block of help text that breaks onto a new line.</span>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Input with Tooltip</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control tooltips" data-toggle="tooltip" data-placement="top" data-title="Tooltip goes here" placeholder="Hover me">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Input with Popover</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control popovers" data-toggle="popover" data-placement="top" data-title="The Title" data-content="Content goes here..." data-trigger="click" placeholder="Click Me">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Placeholder</label>
                        <div class="col-sm-9">
                            <input placeholder="This is a placeholder" class="form-control" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Input Sizing</label>
                        <div class="col-sm-9">
                            <input placeholder=".input-sm" class="form-control input-sm mb-15" type="text">
                            <input placeholder="default" class="form-control mb-15" type="text">
                            <input placeholder=".input-lg" class="form-control input-lg" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Input Tags</label>
                        <div class="col-sm-9">
                            <input type="text" value="Tag 1,Tag 2,Tag 3" data-role="tagsinput" placeholder="Type and enter"/>
                        </div>
                    </div><!-- /.form-group -->

                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!--/ End input fields - horizontal form -->

</div><!-- /.col-md-6 -->
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            <p>Extend form controls by adding text or buttons before, after, or on both sides of any text-based input. Use <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a <code>.form-control</code>.</p>
        </div>
    </div>
</div><!-- /.row -->

<div class="row">
<div class="col-md-6">
    <!-- Start input groups -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Input Groups</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding border-bottom">
            <form action="#">
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label mb-5">Basic examples</label>
                        <div class="input-group mb-15">
                            <span class="input-group-addon bg-success">@</span>
                            <input class="form-control no-border-left" type="text">
                        </div>
                        <div class="input-group mb-15">
                            <input class="form-control no-border-right" type="text">
                            <span class="input-group-addon bg-primary">.00</span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control no-border-right" type="text">
                            <span class="input-group-addon bg-warning">.00</span>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label mb-5">Sizing</label>
                        <div class="input-group input-group-lg mb-15">
                            <span class="input-group-addon bg-danger">@</span>
                            <input class="form-control no-border-left" type="text">
                        </div>
                        <div class="input-group mb-15">
                            <span class="input-group-addon bg-success">@</span>
                            <input class="form-control no-border-left" type="text">
                        </div>
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon bg-info">@</span>
                            <input class="form-control no-border-left" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label mb-5">Checkbox &amp; Radio</label>
                        <div class="input-group mb-15">
                            <span class="input-group-addon bg-primary"><input type="checkbox"></span>
                            <input class="form-control no-border-left" type="text">
                        </div>
                        <div class="input-group mb-15">
                                                        <span class="input-group-addon">
                                                            <div class="ckbox ckbox-success">
                                                                <input id="checkbox-success-addon1" checked="checked" type="checkbox">
                                                                <label for="checkbox-success-addon1"></label>
                                                            </div>
                                                        </span>
                            <input class="form-control" type="text">
                        </div>
                        <div class="input-group mb-15">
                            <span class="input-group-addon"><input type="radio"></span>
                            <input class="form-control" type="text">
                        </div>
                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <div class="rdio rdio-theme">
                                                                <input id="radio-checked-addon1" type="radio">
                                                                <label for="radio-checked-addon1"></label>
                                                            </div>
                                                        </span>
                            <input class="form-control" type="text">
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label mb-5">Button addons</label>
                        <div class="input-group mb-15">
                            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go!</button></span>
                            <input class="form-control no-border-left" type="text">
                        </div>
                        <div class="input-group mb-15">
                            <input class="form-control" type="text">
                            <span class="input-group-btn"><button type="button" class="btn btn-default">Go!</button></span>
                        </div>
                        <div class="input-group mb-15">
                            <div class="input-group-btn">
                                <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <input class="form-control no-border-left" type="text">
                        </div>
                        <div class="input-group">
                            <input class="form-control" type="text">
                            <div class="input-group-btn">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label mb-5">Segmented buttons</label>
                        <div class="input-group mb-15">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-danger" tabindex="-1">Action</button>
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <input class="form-control no-border-left" type="text">
                        </div>
                        <div class="input-group">
                            <input class="form-control no-border-right" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-warning" tabindex="-1">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!--/ End input groups -->
</div>
<div class="col-md-6">
    <!-- Start input groups -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Input Groups</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">
            <form action="#" class="form-horizontal form-bordered">

                <div class="form-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label mb-5">Basic examples</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-15">
                                <span class="input-group-addon bg-success">@</span>
                                <input class="form-control no-border-left" type="text">
                            </div>
                            <div class="input-group mb-15">
                                <input class="form-control no-border-right" type="text">
                                <span class="input-group-addon bg-primary">.00</span>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input class="form-control no-border-right" type="text">
                                <span class="input-group-addon bg-warning">.00</span>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label mb-5">Sizing</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-lg mb-15">
                                <span class="input-group-addon bg-danger">@</span>
                                <input class="form-control no-border-left" type="text">
                            </div>
                            <div class="input-group mb-15">
                                <span class="input-group-addon bg-success">@</span>
                                <input class="form-control no-border-left" type="text">
                            </div>
                            <div class="input-group input-group-sm">
                                <span class="input-group-addon bg-info">@</span>
                                <input class="form-control no-border-left" type="text">
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label mb-5">Checkbox &amp; Radio</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-15">
                                <span class="input-group-addon bg-primary"><input type="checkbox"></span>
                                <input class="form-control no-border-left" type="text">
                            </div>
                            <div class="input-group mb-15">
                                                        <span class="input-group-addon">
                                                            <div class="ckbox ckbox-success">
                                                                <input id="checkbox-success-addon2" checked="checked" type="checkbox">
                                                                <label for="checkbox-success-addon2"></label>
                                                            </div>
                                                        </span>
                                <input class="form-control" type="text">
                            </div>
                            <div class="input-group mb-15">
                                <span class="input-group-addon"><input type="radio"></span>
                                <input class="form-control" type="text">
                            </div>
                            <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <div class="rdio rdio-theme">
                                                                <input id="radio-checked-addon2" type="radio">
                                                                <label for="radio-checked-addon2"></label>
                                                            </div>
                                                        </span>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label mb-5">Button addons</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-15">
                                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go!</button></span>
                                <input class="form-control no-border-left" type="text">
                            </div>
                            <div class="input-group mb-15">
                                <input class="form-control" type="text">
                                <span class="input-group-btn"><button type="button" class="btn btn-default">Go!</button></span>
                            </div>
                            <div class="input-group mb-15">
                                <div class="input-group-btn">
                                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <input class="form-control no-border-left" type="text">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text">
                                <div class="input-group-btn">
                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label mb-5">Segmented buttons</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-15">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-danger" tabindex="-1">Action</button>
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <input class="form-control no-border-left" type="text">
                            </div>
                            <div class="input-group">
                                <input class="form-control no-border-right" type="text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-warning" tabindex="-1">Action</button>
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>
        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!--/ End input groups -->
</div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            <p>A checkbox or radio with the <code>disabled</code> attribute will be styled appropriately. To have the <code>&lt;label&gt;</code> for the checkbox or radio also display a "not-allowed" cursor when the user hovers over the label, add the <code>.disabled</code> class to your <code>.radio</code>, <code>.radio-inline</code>, <code>.checkbox</code>, <code>.checkbox-inline</code>, or <code>&lt;fieldset&gt;</code>.</p>
        </div>
    </div>
</div><!-- /.row -->

<div class="row">
<div class="col-md-6">

    <!-- Start checkbox - basic form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Checkbox</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">

            <form action="#">
                <div class="form-body">
                    <div class="form-group">
                        <label>Checkboxes</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                Unchecked
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input checked="checked" type="checkbox">
                                Checked
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input disabled="disabled" type="checkbox">
                                Disabled Unchecked
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input checked="checked" disabled="disabled" type="checkbox">
                                Disabled Checked
                            </label>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Checkboxes Inline</label>
                        <div class="checkbox">
                            <label class="checkbox-inline">
                                <input type="checkbox">
                                A
                            </label>
                            <label class="checkbox-inline">
                                <input checked="checked" type="checkbox">
                                B
                            </label>
                            <label class="checkbox-inline">
                                <input disabled="disabled" type="checkbox">
                                C
                            </label>
                            <label class="checkbox-inline">
                                <input checked="checked" disabled="disabled" type="checkbox">
                                D
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Checkboxes Enhanced</label>
                        <div class="ckbox ckbox-theme">
                            <input id="checkbox-unchecked1" type="checkbox">
                            <label for="checkbox-unchecked1">Unchecked</label>
                        </div>
                        <div class="ckbox ckbox-theme">
                            <input id="checkbox-checked1" checked="checked" type="checkbox">
                            <label for="checkbox-checked1">Checked</label>
                        </div>
                        <div class="ckbox ckbox-theme">
                            <input id="checkbox-disabled-unchecked1" type="checkbox" disabled="disabled">
                            <label for="checkbox-disabled-unchecked1">Disabled Unchecked</label>
                        </div>
                        <div class="ckbox ckbox-theme">
                            <input id="checkbox-disabled-checked1" checked="checked" type="checkbox" disabled="disabled">
                            <label for="checkbox-disabled-checked1">Disabled Checked</label>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Checkboxes Colors</label>
                        <div class="ckbox ckbox-default">
                            <input id="checkbox-default1" checked="checked" type="checkbox">
                            <label for="checkbox-default1">Checkbox Default</label>
                        </div>
                        <div class="ckbox ckbox-primary">
                            <input id="checkbox-primary1" checked="checked" type="checkbox">
                            <label for="checkbox-primary1">Checkbox Primary</label>
                        </div>
                        <div class="ckbox ckbox-success">
                            <input id="checkbox-success1" checked="checked" type="checkbox">
                            <label for="checkbox-success1">Checkbox Success</label>
                        </div>
                        <div class="ckbox ckbox-info">
                            <input id="checkbox-info1" checked="checked" type="checkbox">
                            <label for="checkbox-info1">Checkbox Info</label>
                        </div>
                        <div class="ckbox ckbox-warning">
                            <input id="checkbox-warning1" checked="checked" type="checkbox">
                            <label for="checkbox-warning1">Checkbox Warning</label>
                        </div>
                        <div class="ckbox ckbox-danger">
                            <input id="checkbox-danger1" checked="checked" type="checkbox">
                            <label for="checkbox-danger1">Checkbox Danger</label>
                        </div>
                        <div class="ckbox ckbox-lilac">
                            <input id="checkbox-lilac1" checked="checked" type="checkbox">
                            <label for="checkbox-lilac1">Checkbox Lilac</label>
                        </div>
                        <div class="ckbox ckbox-teal">
                            <input id="checkbox-teal1" checked="checked" type="checkbox">
                            <label for="checkbox-teal1">Checkbox Teal</label>
                        </div>
                        <div class="ckbox ckbox-inverse">
                            <input id="checkbox-inverse1" checked="checked" type="checkbox">
                            <label for="checkbox-inverse1">Checkbox Inverse</label>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Checkboxes Type</label>
                        <div class="ckbox ckbox-theme">
                            <input id="checkbox-type-default1" checked="checked" type="checkbox">
                            <label for="checkbox-type-default1">Checkbox Default</label>
                        </div>
                        <div class="ckbox ckbox-theme rounded">
                            <input id="checkbox-type-rounded1" checked="checked" type="checkbox">
                            <label for="checkbox-type-rounded1">Checkbox Rounded</label>
                        </div>
                        <div class="ckbox ckbox-theme circle">
                            <input id="checkbox-type-circle1" checked="checked" type="checkbox">
                            <label for="checkbox-type-circle1">Checkbox Circle</label>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!-- End checkbox - basic form -->

</div>
<div class="col-md-6">

    <!-- Start checkbox - horizontal form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Checkbox</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">

            <form class="form-horizontal form-bordered">
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Checkboxes</label>
                        <div class="col-md-8">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Unchecked
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input checked="checked" type="checkbox">
                                    Checked
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input disabled="disabled" type="checkbox">
                                    Disabled Unchecked
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input checked="checked" disabled="disabled" type="checkbox">
                                    Disabled Checked
                                </label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Checkboxes Inline</label>
                        <div class="col-md-8">
                            <div class="checkbox">
                                <label class="checkbox-inline">
                                    <input type="checkbox">
                                    A
                                </label>
                                <label class="checkbox-inline">
                                    <input checked="checked" type="checkbox">
                                    B
                                </label>
                                <label class="checkbox-inline">
                                    <input disabled="disabled" type="checkbox">
                                    C
                                </label>
                                <label class="checkbox-inline">
                                    <input checked="checked" disabled="disabled" type="checkbox">
                                    D
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Checkboxes Enhanced</label>
                        <div class="col-md-8">
                            <div class="ckbox ckbox-theme">
                                <input id="checkbox-unchecked2" type="checkbox">
                                <label for="checkbox-unchecked2">Unchecked</label>
                            </div>
                            <div class="ckbox ckbox-theme">
                                <input id="checkbox-checked2" checked="checked" type="checkbox">
                                <label for="checkbox-checked2">Checked</label>
                            </div>
                            <div class="ckbox ckbox-theme">
                                <input id="checkbox-disabled-unchecked2" type="checkbox" disabled="disabled">
                                <label for="checkbox-disabled-unchecked2">Disabled Unchecked</label>
                            </div>
                            <div class="ckbox ckbox-theme">
                                <input id="checkbox-disabled-checked2" checked="checked" type="checkbox" disabled="disabled">
                                <label for="checkbox-disabled-checked2">Disabled Checked</label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Checkboxes Colors</label>
                        <div class="col-md-8">
                            <div class="ckbox ckbox-default">
                                <input id="checkbox-default2" checked="checked" type="checkbox">
                                <label for="checkbox-default2">Checkbox Default</label>
                            </div>
                            <div class="ckbox ckbox-primary">
                                <input id="checkbox-primary2" checked="checked" type="checkbox">
                                <label for="checkbox-primary2">Checkbox Primary</label>
                            </div>
                            <div class="ckbox ckbox-success">
                                <input id="checkbox-success2" checked="checked" type="checkbox">
                                <label for="checkbox-success2">Checkbox Success</label>
                            </div>
                            <div class="ckbox ckbox-info">
                                <input id="checkbox-info2" checked="checked" type="checkbox">
                                <label for="checkbox-info2">Checkbox Info</label>
                            </div>
                            <div class="ckbox ckbox-warning">
                                <input id="checkbox-warning2" checked="checked" type="checkbox">
                                <label for="checkbox-warning2">Checkbox Warning</label>
                            </div>
                            <div class="ckbox ckbox-danger">
                                <input id="checkbox-danger2" checked="checked" type="checkbox">
                                <label for="checkbox-danger2">Checkbox Danger</label>
                            </div>
                            <div class="ckbox ckbox-lilac">
                                <input id="checkbox-lilac2" checked="checked" type="checkbox">
                                <label for="checkbox-lilac2">Checkbox Lilac</label>
                            </div>
                            <div class="ckbox ckbox-teal">
                                <input id="checkbox-teal2" checked="checked" type="checkbox">
                                <label for="checkbox-teal2">Checkbox Teal</label>
                            </div>
                            <div class="ckbox ckbox-inverse">
                                <input id="checkbox-inverse2" checked="checked" type="checkbox">
                                <label for="checkbox-inverse2">Checkbox Inverse</label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Checkboxes Type</label>
                        <div class="col-md-8">
                            <div class="ckbox ckbox-theme">
                                <input id="checkbox-type-default2" checked="checked" type="checkbox">
                                <label for="checkbox-type-default2">Checkbox Default</label>
                            </div>
                            <div class="ckbox ckbox-theme rounded">
                                <input id="checkbox-type-rounded2" checked="checked" type="checkbox">
                                <label for="checkbox-type-rounded2">Checkbox Rounded</label>
                            </div>
                            <div class="ckbox ckbox-theme circle">
                                <input id="checkbox-type-circle2" checked="checked" type="checkbox">
                                <label for="checkbox-type-circle2">Checkbox Circle</label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!-- End checkbox - horizontal form -->

</div>
</div><!-- /.row -->

<div class="row">
<div class="col-md-6">

    <!-- Start radio - basic form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Radio</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">

            <form action="#">
                <div class="form-body">
                    <div class="form-group">
                        <label>Radios</label>
                        <div class="radio">
                            <label>
                                <input type="radio">
                                Unchecked
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input checked="checked" type="radio">
                                Checked
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input disabled="disabled" type="radio">
                                Disabled Unchecked
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input disabled="disabled" checked="checked" type="radio">
                                Disabled Checked
                            </label>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Radios Inline</label>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio">
                                A
                            </label>
                            <label class="radio-inline">
                                <input checked="checked" type="radio">
                                B
                            </label>
                            <label class="radio-inline">
                                <input disabled="disabled" type="radio">
                                C
                            </label>
                            <label class="radio-inline">
                                <input disabled="disabled" checked="checked" type="radio">
                                D
                            </label>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Radios Enhanced</label>
                        <div class="rdio rdio-theme">
                            <input id="radio-unchecked" type="radio">
                            <label for="radio-unchecked">Unchecked</label>
                        </div>
                        <div class="rdio rdio-theme">
                            <input id="radio-checked" checked="checked" type="radio">
                            <label for="radio-checked">Checked</label>
                        </div>
                        <div class="rdio rdio-theme">
                            <input id="radio-disabled-unchecked" type="radio" disabled="disabled">
                            <label for="radio-disabled-unchecked">Disabled Unchecked</label>
                        </div>
                        <div class="rdio rdio-theme">
                            <input id="radio-disabled-checked" checked="checked" type="radio" disabled="disabled">
                            <label for="radio-disabled-checked">Disabled Checked</label>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Radios Colors</label>
                        <div class="rdio rdio-default">
                            <input id="radio-default" checked="checked" type="radio" name="radio">
                            <label for="radio-default">Radio Default</label>
                        </div>
                        <div class="rdio rdio-primary">
                            <input id="radio-primary" type="radio" name="radio">
                            <label for="radio-primary">Radio Primary</label>
                        </div>
                        <div class="rdio rdio-success">
                            <input id="radio-success" type="radio" name="radio">
                            <label for="radio-success">Radio Success</label>
                        </div>
                        <div class="rdio rdio-info">
                            <input id="radio-info" type="radio" name="radio">
                            <label for="radio-info">Radio Info</label>
                        </div>
                        <div class="rdio rdio-warning">
                            <input id="radio-warning" type="radio" name="radio">
                            <label for="radio-warning">Radio Warning</label>
                        </div>
                        <div class="rdio rdio-danger">
                            <input id="radio-danger" type="radio" name="radio">
                            <label for="radio-danger">Radio Danger</label>
                        </div>
                        <div class="rdio rdio-lilac">
                            <input id="radio-lilac" type="radio" name="radio">
                            <label for="radio-lilac">Radio Lilac</label>
                        </div>
                        <div class="rdio rdio-teal">
                            <input id="radio-teal" type="radio" name="radio">
                            <label for="radio-teal">Radio Teal</label>
                        </div>
                        <div class="rdio rdio-inverse">
                            <input id="radio-inverse" type="radio" name="radio">
                            <label for="radio-inverse">Radio Inverse</label>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label>Radios Type</label>
                        <div class="rdio rdio-theme">
                            <input id="radio-type-default1" checked="checked" type="radio" name="radiotype1">
                            <label for="radio-type-default1">Radio Default</label>
                        </div>
                        <div class="rdio rdio-theme rounded">
                            <input id="radio-type-rounded1" type="radio" name="radiotype1">
                            <label for="radio-type-rounded1">Radio Rounded</label>
                        </div>
                        <div class="rdio rdio-theme circle">
                            <input id="radio-type-circle1" type="radio" name="radiotype1">
                            <label for="radio-type-circle1">Radio Circle</label>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!-- End radio - basic form -->

</div>
<div class="col-md-6">

    <!-- Start radio - horizontal form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">Radio</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">

            <form class="form-horizontal form-bordered">
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Radios</label>
                        <div class="col-md-8">
                            <div class="radio">
                                <label>
                                    <input type="radio">
                                    Unchecked
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input checked="checked" type="radio">
                                    Checked
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input disabled="disabled" type="radio">
                                    Disabled Unchecked
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input disabled="disabled" checked="checked" type="radio">
                                    Disabled Checked
                                </label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Radios Inline</label>
                        <div class="col-md-8">
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio">
                                    A
                                </label>
                                <label class="radio-inline">
                                    <input checked="checked" type="radio">
                                    B
                                </label>
                                <label class="radio-inline">
                                    <input disabled="disabled" type="radio">
                                    C
                                </label>
                                <label class="radio-inline">
                                    <input disabled="disabled" checked="checked" type="radio">
                                    D
                                </label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Radios Enhanced</label>
                        <div class="col-md-8">
                            <div class="rdio rdio-theme">
                                <input id="radio-unchecked2" type="radio">
                                <label for="radio-unchecked2">Unchecked</label>
                            </div>
                            <div class="rdio rdio-theme">
                                <input id="radio-checked2" checked="checked" type="radio">
                                <label for="radio-checked2">Checked</label>
                            </div>
                            <div class="rdio rdio-theme">
                                <input id="radio-disabled-unchecked2" type="radio" disabled="disabled">
                                <label for="radio-disabled-unchecked2">Disabled Unchecked</label>
                            </div>
                            <div class="rdio rdio-theme">
                                <input id="radio-disabled-checked2" checked="checked" type="radio" disabled="disabled">
                                <label for="radio-disabled-checked2">Disabled Checked</label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Radios Colors</label>
                        <div class="col-md-8">
                            <div class="rdio rdio-default">
                                <input id="radio-default2" checked="checked" type="radio" name="radio">
                                <label for="radio-default2">Radio Default</label>
                            </div>
                            <div class="rdio rdio-primary">
                                <input id="radio-primary2" type="radio" name="radio">
                                <label for="radio-primary2">Radio Primary</label>
                            </div>
                            <div class="rdio rdio-success">
                                <input id="radio-success2" type="radio" name="radio">
                                <label for="radio-success2">Radio Success</label>
                            </div>
                            <div class="rdio rdio-info">
                                <input id="radio-info2" type="radio" name="radio">
                                <label for="radio-info2">Radio Info</label>
                            </div>
                            <div class="rdio rdio-warning">
                                <input id="radio-warning2" type="radio" name="radio">
                                <label for="radio-warning2">Radio Warning</label>
                            </div>
                            <div class="rdio rdio-danger">
                                <input id="radio-danger2" type="radio" name="radio">
                                <label for="radio-danger2">Radio Danger</label>
                            </div>
                            <div class="rdio rdio-lilac">
                                <input id="radio-lilac2" type="radio" name="radio">
                                <label for="radio-lilac2">Radio Lilac</label>
                            </div>
                            <div class="rdio rdio-teal">
                                <input id="radio-teal2" type="radio" name="radio">
                                <label for="radio-teal2">Radio Teal</label>
                            </div>
                            <div class="rdio rdio-inverse">
                                <input id="radio-inverse2" type="radio" name="radio">
                                <label for="radio-inverse2">Radio Inverse</label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Radios Type</label>
                        <div class="col-md-8">
                            <div class="rdio rdio-theme">
                                <input id="radio-type-default2" checked="checked" type="radio" name="radiotype2">
                                <label for="radio-type-default2">Radio Default</label>
                            </div>
                            <div class="rdio rdio-theme rounded">
                                <input id="radio-type-rounded2" type="radio" name="radiotype2">
                                <label for="radio-type-rounded2">Radio Rounded</label>
                            </div>
                            <div class="rdio rdio-theme circle">
                                <input id="radio-type-circle2" type="radio" name="radiotype2">
                                <label for="radio-type-circle2">Radio Circle</label>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!-- End radio - horizontal form -->

</div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            <p>Use the default option, or add <code>multiple</code> to show multiple options at once.</p>
        </div>
    </div>
</div><!-- /.row -->

<div class="row">
<div class="col-md-6">

<!-- Start select fields - basic form -->
<div class="panel rounded shadow no-overflow">
<div class="panel-heading">
    <div class="pull-left">
        <h3 class="panel-title">Select Fields</h3>
    </div>
    <div class="pull-right">
        <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
        <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
    </div>
    <div class="clearfix"></div>
</div><!-- /.panel-heading -->
<div class="panel-body no-padding">
<form action="#">
<div class="form-body">
<div class="form-group">
    <label for="disabledSelect1" class="control-label">Disabled select menu</label>
    <select id="disabledSelect1" class="form-control" disabled="disabled">
        <option>Disabled select</option>
    </select>
</div><!-- /.form-group -->

<div class="form-group">
    <label class="control-label">Select Sizing</label>
    <select class="form-control input-sm mb-15">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
    </select>
    <select class="form-control mb-15">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
    </select>
    <select class="form-control input-lg">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
    </select>
</div><!-- /.form-group -->

<div class="form-group">
    <label class="control-label">Multiple Select</label>
    <select multiple class="form-control mb-15">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
    </select>
</div><!-- /.form-group -->

<div class="form-group">
<label class="control-label">Chosen Select</label>
<select data-placeholder="Choose a Country" class="chosen-select mb-15" tabindex="2">
<option value="">Country</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
<select data-placeholder="Choose Your Favorite Football Team" class="chosen-select" tabindex="5">
    <option value="0">Choose Your Favorite Football Team</option>
    <optgroup label="NFC EAST">
        <option>Dallas Cowboys</option>
        <option>New York Giants</option>
        <option>Philadelphia Eagles</option>
        <option>Washington Redskins</option>
    </optgroup>
    <optgroup label="NFC NORTH">
        <option>Chicago Bears</option>
        <option>Detroit Lions</option>
        <option>Green Bay Packers</option>
        <option>Minnesota Vikings</option>
    </optgroup>
    <optgroup label="NFC SOUTH">
        <option>Atlanta Falcons</option>
        <option>Carolina Panthers</option>
        <option>New Orleans Saints</option>
        <option>Tampa Bay Buccaneers</option>
    </optgroup>
    <optgroup label="NFC WEST">
        <option>Arizona Cardinals</option>
        <option>St. Louis Rams</option>
        <option>San Francisco 49ers</option>
        <option>Seattle Seahawks</option>
    </optgroup>
    <optgroup label="AFC EAST">
        <option>Buffalo Bills</option>
        <option>Miami Dolphins</option>
        <option>New England Patriots</option>
        <option>New York Jets</option>
    </optgroup>
    <optgroup label="AFC NORTH">
        <option>Baltimore Ravens</option>
        <option>Cincinnati Bengals</option>
        <option>Cleveland Browns</option>
        <option>Pittsburgh Steelers</option>
    </optgroup>
    <optgroup label="AFC SOUTH">
        <option>Houston Texans</option>
        <option>Indianapolis Colts</option>
        <option>Jacksonville Jaguars</option>
        <option>Tennessee Titans</option>
    </optgroup>
    <optgroup label="AFC WEST">
        <option>Denver Broncos</option>
        <option>Kansas City Chiefs</option>
        <option>Oakland Raiders</option>
        <option>San Diego Chargers</option>
    </optgroup>
</select>
</div><!-- /.form-group -->

<div class="form-group">
<label class="control-label">Multiple Chosen Select</label>
<select data-placeholder="Choose a Country" class="chosen-select" multiple tabindex="4">
<option value="0">Choose a Country</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
<select data-placeholder="Choose Your Favorite Football Teams" class="chosen-select" multiple tabindex="6">
    <option value="0">Choose Your Favorite Football Team</option>
    <optgroup label="NFC EAST">
        <option>Dallas Cowboys</option>
        <option>New York Giants</option>
        <option>Philadelphia Eagles</option>
        <option>Washington Redskins</option>
    </optgroup>
    <optgroup label="NFC NORTH">
        <option>Chicago Bears</option>
        <option>Detroit Lions</option>
        <option>Green Bay Packers</option>
        <option>Minnesota Vikings</option>
    </optgroup>
    <optgroup label="NFC SOUTH">
        <option>Atlanta Falcons</option>
        <option>Carolina Panthers</option>
        <option>New Orleans Saints</option>
        <option>Tampa Bay Buccaneers</option>
    </optgroup>
    <optgroup label="NFC WEST">
        <option>Arizona Cardinals</option>
        <option>St. Louis Rams</option>
        <option>San Francisco 49ers</option>
        <option>Seattle Seahawks</option>
    </optgroup>
    <optgroup label="AFC EAST">
        <option>Buffalo Bills</option>
        <option>Miami Dolphins</option>
        <option>New England Patriots</option>
        <option>New York Jets</option>
    </optgroup>
    <optgroup label="AFC NORTH">
        <option>Baltimore Ravens</option>
        <option>Cincinnati Bengals</option>
        <option>Cleveland Browns</option>
        <option>Pittsburgh Steelers</option>
    </optgroup>
    <optgroup label="AFC SOUTH">
        <option>Houston Texans</option>
        <option>Indianapolis Colts</option>
        <option>Jacksonville Jaguars</option>
        <option>Tennessee Titans</option>
    </optgroup>
    <optgroup label="AFC WEST">
        <option>Denver Broncos</option>
        <option>Kansas City Chiefs</option>
        <option>Oakland Raiders</option>
        <option>San Diego Chargers</option>
    </optgroup>
</select>
</div><!-- /.form-group -->
</div><!-- /.form-body -->
<div class="form-footer">
    <div class="pull-right">
        <button class="btn btn-danger mr-5">Cancel</button>
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
    <div class="clearfix"></div>
</div><!-- /.form-footer -->
</form>
</div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End select fields - basic form -->

</div>
<div class="col-md-6">

<!-- Start select fields - horizontal form -->
<div class="panel rounded shadow no-overflow">
<div class="panel-heading">
    <div class="pull-left">
        <h3 class="panel-title">Select Fields</h3>
    </div>
    <div class="pull-right">
        <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
        <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
    </div>
    <div class="clearfix"></div>
</div><!-- /.panel-heading -->
<div class="panel-body no-padding">
<form action="#" class="form-horizontal form-bordered">
<div class="form-body">
<div class="form-group">
    <label for="disabledSelect2" class="col-sm-3 control-label">Disabled select menu</label>
    <div class="col-sm-9">
        <select id="disabledSelect2" class="form-control" disabled="disabled">
            <option>Disabled select</option>
        </select>
    </div>
</div><!-- /.form-group -->

<div class="form-group">
    <label class="col-sm-3 control-label">Select Sizing</label>
    <div class="col-sm-9">
        <select class="form-control input-sm mb-15">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
        </select>
        <select class="form-control mb-15">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
        </select>
        <select class="form-control input-lg">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
        </select>
    </div>
</div><!-- /.form-group -->

<div class="form-group">
    <label class="col-sm-3 control-label">Multiple Select</label>
    <div class="col-sm-9">
        <select multiple class="form-control mb-15">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
        </select>
    </div>
</div><!-- /.form-group -->

<div class="form-group">
<label class="col-sm-3 control-label">Chosen Select</label>
<div class="col-sm-9">
<select data-placeholder="Choose a Country" class="chosen-select mb-15" tabindex="2">
<option value="">Country</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
<select data-placeholder="Choose Your Favorite Football Team" class="chosen-select" tabindex="5">
    <option value="0">Choose Your Favorite Football Team</option>
    <optgroup label="NFC EAST">
        <option>Dallas Cowboys</option>
        <option>New York Giants</option>
        <option>Philadelphia Eagles</option>
        <option>Washington Redskins</option>
    </optgroup>
    <optgroup label="NFC NORTH">
        <option>Chicago Bears</option>
        <option>Detroit Lions</option>
        <option>Green Bay Packers</option>
        <option>Minnesota Vikings</option>
    </optgroup>
    <optgroup label="NFC SOUTH">
        <option>Atlanta Falcons</option>
        <option>Carolina Panthers</option>
        <option>New Orleans Saints</option>
        <option>Tampa Bay Buccaneers</option>
    </optgroup>
    <optgroup label="NFC WEST">
        <option>Arizona Cardinals</option>
        <option>St. Louis Rams</option>
        <option>San Francisco 49ers</option>
        <option>Seattle Seahawks</option>
    </optgroup>
    <optgroup label="AFC EAST">
        <option>Buffalo Bills</option>
        <option>Miami Dolphins</option>
        <option>New England Patriots</option>
        <option>New York Jets</option>
    </optgroup>
    <optgroup label="AFC NORTH">
        <option>Baltimore Ravens</option>
        <option>Cincinnati Bengals</option>
        <option>Cleveland Browns</option>
        <option>Pittsburgh Steelers</option>
    </optgroup>
    <optgroup label="AFC SOUTH">
        <option>Houston Texans</option>
        <option>Indianapolis Colts</option>
        <option>Jacksonville Jaguars</option>
        <option>Tennessee Titans</option>
    </optgroup>
    <optgroup label="AFC WEST">
        <option>Denver Broncos</option>
        <option>Kansas City Chiefs</option>
        <option>Oakland Raiders</option>
        <option>San Diego Chargers</option>
    </optgroup>
</select>
</div>
</div><!-- /.form-group -->

<div class="form-group">
<label class="col-sm-3 control-label">Multiple Chosen Select</label>
<div class="col-sm-9">
<select data-placeholder="Choose a Country" class="chosen-select" multiple tabindex="4">
<option value="0">Choose a Country</option>
<option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="South Sudan">South Sudan</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
<select data-placeholder="Choose Your Favorite Football Teams" class="chosen-select" multiple tabindex="6">
    <option value="0">Choose Your Favorite Football Team</option>
    <optgroup label="NFC EAST">
        <option>Dallas Cowboys</option>
        <option>New York Giants</option>
        <option>Philadelphia Eagles</option>
        <option>Washington Redskins</option>
    </optgroup>
    <optgroup label="NFC NORTH">
        <option>Chicago Bears</option>
        <option>Detroit Lions</option>
        <option>Green Bay Packers</option>
        <option>Minnesota Vikings</option>
    </optgroup>
    <optgroup label="NFC SOUTH">
        <option>Atlanta Falcons</option>
        <option>Carolina Panthers</option>
        <option>New Orleans Saints</option>
        <option>Tampa Bay Buccaneers</option>
    </optgroup>
    <optgroup label="NFC WEST">
        <option>Arizona Cardinals</option>
        <option>St. Louis Rams</option>
        <option>San Francisco 49ers</option>
        <option>Seattle Seahawks</option>
    </optgroup>
    <optgroup label="AFC EAST">
        <option>Buffalo Bills</option>
        <option>Miami Dolphins</option>
        <option>New England Patriots</option>
        <option>New York Jets</option>
    </optgroup>
    <optgroup label="AFC NORTH">
        <option>Baltimore Ravens</option>
        <option>Cincinnati Bengals</option>
        <option>Cleveland Browns</option>
        <option>Pittsburgh Steelers</option>
    </optgroup>
    <optgroup label="AFC SOUTH">
        <option>Houston Texans</option>
        <option>Indianapolis Colts</option>
        <option>Jacksonville Jaguars</option>
        <option>Tennessee Titans</option>
    </optgroup>
    <optgroup label="AFC WEST">
        <option>Denver Broncos</option>
        <option>Kansas City Chiefs</option>
        <option>Oakland Raiders</option>
        <option>San Diego Chargers</option>
    </optgroup>
</select>
</div>
</div><!-- /.form-group -->
</div><!-- /.form-body -->
<div class="form-footer">
    <div class="pull-right">
        <button class="btn btn-danger mr-5">Cancel</button>
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
    <div class="clearfix"></div>
</div><!-- /.form-footer -->
</form>
</div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End select fields - horizontal form -->

</div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            <p>The file input plugin allows you to create a visually appealing file or image input widgets.</p>
        </div>
    </div>
</div><!-- /.row -->

<div class="row">
<div class="col-md-6">

    <!-- Start file input - basic form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">File Input</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">

            <form action="#">
                <div class="form-body">
                    <div class="form-group">
                        <label for="exampleInputFile" class="control-label">File input basic</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">File input widget type 1</label>
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                            <span class="input-group-addon btn btn-success btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                            <a href="#" class="input-group-addon btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">File input widget type 2</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <span class="btn btn-warning btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                            <span class="fileinput-filename"></span>
                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Image upload widget type 1</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Image upload widget type 2</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img data-src="holder.js/200x150/blankon/text:Static image" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-label">Image upload widget type 3</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img data-src="holder.js/100%x100%/blankon/text:Fluid image" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput" style="max-width: 200px; max-height: 150px;"></div>
                            <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!-- End file input - basic form -->

</div>
<div class="col-md-6">

    <!-- Start file input - horizontal form -->
    <div class="panel rounded shadow">
        <div class="panel-heading">
            <div class="pull-left">
                <h3 class="panel-title">File Input</h3>
            </div>
            <div class="pull-right">
                <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="clearfix"></div>
        </div><!-- /.panel-heading -->
        <div class="panel-body no-padding">

            <form action="#" class="form-horizontal form-bordered">
                <div class="form-body">
                    <div class="form-group">
                        <label for="exampleInputFile2" class="col-md-4 control-label">File input basic</label>
                        <div class="col-md-8">
                            <input type="file" id="exampleInputFile2">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">File input widget type 1</label>
                        <div class="col-md-8">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-success btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                <a href="#" class="input-group-addon btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">File input widget type 2</label>
                        <div class="col-md-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-warning btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Image upload widget type 1</label>
                        <div class="col-md-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Image upload widget type 2</label>
                        <div class="col-md-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img data-src="holder.js/200x150/blankon/text:Static image" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Image upload widget type 3</label>
                        <div class="col-md-8">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img data-src="holder.js/100%x100%/blankon/text:Fluid image" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.form-body -->
                <div class="form-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger mr-5">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.form-footer -->
            </form>

        </div><!-- /.panel-body -->
    </div><!-- /.panel -->
    <!-- End file input - horizontal form -->

</div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
        </div>
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-6">

        <!-- Start textare - basic form -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Textarea</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form action="#">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label">Textarea</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-label">Without character count</label>
                            <textarea class="form-control" maxlength="20" rows="5" placeholder="20 character limit with no count character limit"></textarea>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-label">Character limit</label>
                            <textarea class="form-control character-limit" maxlength="20" rows="5" placeholder="20 character limit"></textarea>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-label">Textarea autosize</label>
                            <textarea class="form-control autosize" rows="1" placeholder="Try typing something..."></textarea>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="pull-right">
                            <button class="btn btn-danger mr-5">Cancel</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!-- End textare - basic form -->

    </div>
    <div class="col-md-6">

        <!-- Start textare - horizontal form -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Textarea</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form action="#" class="form-horizontal form-bordered">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Textarea</label>
                            <div class="col-md-8">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Without character count</label>
                            <div class="col-md-8">
                                <textarea class="form-control" maxlength="20" rows="5" placeholder="20 character limit with no count character limit"></textarea>
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Character limit</label>
                            <div class="col-md-8">
                                <textarea class="form-control character-limit" maxlength="20" rows="5" placeholder="20 character limit"></textarea>
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Textarea autosize</label>
                            <div class="col-md-8">
                                <textarea class="form-control autosize" rows="1" placeholder="Try typing something..."></textarea>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="pull-right">
                            <button class="btn btn-danger mr-5">Cancel</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!-- End textare - horizontal form -->

    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            <p>Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
        </div>
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <!-- Start input grid -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Input Grid</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form action="#">
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input placeholder=".col-md-12" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input placeholder=".col-md-6" class="form-control" type="text">
                                </div>
                                <div class="col-md-6">
                                    <input placeholder=".col-md-6" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <input placeholder=".col-md-4" class="form-control" type="text">
                                </div>
                                <div class="col-md-4">
                                    <input placeholder=".col-md-4" class="form-control" type="text">
                                </div>
                                <div class="col-md-4">
                                    <input placeholder=".col-md-4" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <input placeholder=".col-md-3" class="form-control" type="text">
                                </div>
                                <div class="col-md-3">
                                    <input placeholder=".col-md-3" class="form-control" type="text">
                                </div>
                                <div class="col-md-3">
                                    <input placeholder=".col-md-3" class="form-control" type="text">
                                </div>
                                <div class="col-md-3">
                                    <input placeholder=".col-md-3" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <input placeholder=".col-md-2" class="form-control" type="text">
                                </div>
                                <div class="col-md-2">
                                    <input placeholder=".col-md-2" class="form-control" type="text">
                                </div>
                                <div class="col-md-2">
                                    <input placeholder=".col-md-2" class="form-control" type="text">
                                </div>
                                <div class="col-md-2">
                                    <input placeholder=".col-md-2" class="form-control" type="text">
                                </div>
                                <div class="col-md-2">
                                    <input placeholder=".col-md-2" class="form-control" type="text">
                                </div>
                                <div class="col-md-2">
                                    <input placeholder=".col-md-2" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group no-margin">
                            <div class="row">
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                                <div class="col-md-1">
                                    <input placeholder=".col-md-1" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="pull-right">
                            <button class="btn btn-danger mr-5">Cancel</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End input grid -->
    </div>
</div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->