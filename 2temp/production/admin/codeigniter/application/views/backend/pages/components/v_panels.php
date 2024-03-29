<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-list-alt"></i> Panel <span>general ui components</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url($this->config->item('link_url').'/dashboard')?>">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Components</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Panel</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

<!-- Start basic panel -->
<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info">
            While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.
        </div>
    </div>
</div>
<h3>Basic example</h3>
<p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>
<div class="panel panel-default">
    <div class="panel-body">
        Basic panel example
    </div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End basic panel -->

<!-- Start panel with header -->
<h3>Panel with heading</h3>
<p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading.</p>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="panel">
            <div class="panel-heading">Panel heading without title</div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body"><!-- /.panel-body -->
                Panel content
            </div><!-- /.panel -->
        </div><!-- /.panel -->
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Title left</h3>
                </div>
                <div class="pull-right">
                    <h3 class="panel-title">Title right</h3>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
<!--/ End panel with header -->

<!-- Start panel with footer -->
<h3>Panel with footer</h3>
<p>Wrap buttons or secondary text in <code>.panel-footer</code>. Note that panel footers <strong>do not</strong> inherit colors and borders when using contextual variations as they are not meant to be in the foreground.</p>
<div class="panel panel-default">
    <div class="panel-body">
        Panel content
    </div><!-- /.panel-body -->
    <div class="panel-footer">Panel footer</div><!-- /.panel-footer -->
</div><!-- /.panel -->
<!--/ End panel with footer -->

<!-- Start contextual alternatives -->
<h3>Contextual alternatives</h3>
<p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Default</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Primary</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Info</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Success</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Warning</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <div class="panel panel-lilac">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Lilac</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Danger</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <div class="panel panel-teal">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Teal</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Panel Blank</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
<!--/ End contextual alternatives -->

<!-- Start type panel -->
<h3>Type Panel</h3>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <!-- Start panel default -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Panel Box</h3>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End panel default -->
    </div>
    <div class="col-md-4 col-sm-4">
        <!-- Start panel default -->
        <div class="panel rounded">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Panel Rounded</h3>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End panel default -->
    </div>
    <div class="col-md-4 col-sm-4">
        <!-- Start panel default -->
        <div class="panel shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Panel Shadow</h3>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End panel default -->
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">

        <!-- Start icon left panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title"><i class="fa fa-apple"></i> Icon Left</h3>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End icon left panel -->

    </div>
    <div class="col-md-4 col-sm-4">

        <!-- Start icon right panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Icon Right</h3>
                </div>
                <div class="pull-right">
                    <i class="fa fa-apple"></i>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End icon right panel -->

    </div>
    <div class="col-md-4 col-sm-4">

        <!-- Start all trigger -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">All Trigger</h3>
                </div><!-- /.pull-left -->
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                    <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /.pull-right -->
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End all trigger -->

    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">

        <!-- Start refresh panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Refresh</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="refresh" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End refresh panel -->


    </div>
    <div class="col-md-4 col-sm-4">

        <!-- Start collapsible panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Collapsible</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End collapsible panel -->

    </div>
    <div class="col-md-4 col-sm-4">

        <!-- Start remove panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Remove</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End remove panel -->

    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">

        <!-- Start expand panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Expand</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="expand" data-toggle="tooltip" data-placement="top" data-title="Expand"><i class="fa fa-expand"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End expand panel -->

    </div>
    <div class="col-md-4 col-sm-4">

        <!-- Start search panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Search</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="search" data-toggle="tooltip" data-placement="top" data-title="Search"><i class="fa fa-search"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-search">
                <form>
                    <input class="form-control" placeholder="Search..." type="text">
                    <i class="fa fa-search"></i>
                </form>
            </div><!-- /.panel-sub-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End search panel -->

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Start scrollable panel -->
        <div class="panel panel-scrollable">
            <div class="panel-heading">
                <h3 class="panel-title">Scrollable</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                <h3>What is Lorem Ipsum?</h3>
                <p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <h3>Why do we use it?</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <h3>Where does it come from?</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End scrollable panel -->
    </div>
</div>
<!--/ End type panel -->

<!-- Start panel with toolbar -->
<h3>Panel with toolbar</h3>
<div class="row">
    <div class="col-md-4 col-sm-6">

        <!-- Start button panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Button</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm btn-primary">Default</button>
                    <button class="btn btn-sm btn-success disabled">Disabled</button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End button panel -->

    </div>
    <div class="col-md-4 col-sm-6">

        <!-- Start button dropdown panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Button Dropdown</h3>
                </div>
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End button dropdown panel -->

    </div>
    <div class="col-md-4 col-sm-6">

        <!-- Start pagination panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Pagination</h3>
                </div>
                <div class="pull-right">
                    <ul class="pagination pagination-sm no-margin">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End pagination panel -->

    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-6">

        <!-- Start dropdown panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Dropdown</h3>
                </div>
                <div class="pull-right">
                    <div class="dropdown">
                        <a data-toggle="dropdown" data-target="#">
                            Link <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End dropdown panel -->

    </div>
    <div class="col-md-4 col-sm-6">

        <!-- Start popover panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Popover</h3>
                </div>
                <div class="pull-right">
                    <span class="label label-success" data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover" data-title="Lorem ipsum" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><i class="fa fa-smile-o"></i> Hover me</span>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End popover panel -->

    </div>
    <div class="col-md-4 col-sm-6">

        <!-- Start label and badge panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Label & Badge</h3>
                </div>
                <div class="pull-right">
                    <span class="label label-info">It's label</span>
                    <span class="badge badge-danger">It's badge</span>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ Start label and badge panel -->

    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-6">

        <!-- Start tooltip panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Tooltip</h3>
                </div>
                <div class="pull-right">
                    <span class="label label-success" data-toggle="tooltip" data-placement="right" title="32 article">32 article</span>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End tooltip panel -->

    </div>
    <div class="col-md-4 col-sm-6">

        <!-- Start progress bar panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Progress Bar</h3>
                </div>
                <div class="pull-right">
                    <div class="progress no-margin mt-5">
                        <div class="progress-bar progress-bar-theme" style="width: 50%;">50%</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End progress bar panel -->

    </div>
    <div class="col-md-4 col-sm-6">

        <!-- Start search panel -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Search</h3>
                </div>
                <div class="pull-right">
                    <form class="form-horizontal" action="#">
                        <div class="form-group no-margin no-padding has-success has-feedback">
                            <input class="form-control input-sm" type="text">
                            <span class="fa fa-search form-control-feedback no-right lh-30"></span>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End search panel -->

    </div>
</div>
<!--/ End panel with toolbar -->

<!-- Start panel toolbar location-->
<h3>Panel Toolbar Location</h3>
<div class="row">
    <div class="col-md-3 col-sm-6">

        <!-- Start toolbar location top left -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-left">
                    <div class="btn-group">
                        <button class="btn btn-default"><i class="fa fa-align-center"></i></button>
                        <button class="btn btn-default"><i class="fa fa-align-justify"></i></button>
                        <button class="btn btn-default"><i class="fa fa-align-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-align-right"></i></button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End toolbar location top left -->

    </div>
    <div class="col-md-3 col-sm-6">

        <!-- Start toolbar location top right -->
        <div class="panel">
            <div class="panel-heading">
                <div class="pull-right">
                    <div class="btn-group">
                        <button class="btn btn-default"><i class="fa fa-align-center"></i></button>
                        <button class="btn btn-default"><i class="fa fa-align-justify"></i></button>
                        <button class="btn btn-default"><i class="fa fa-align-left"></i></button>
                        <button class="btn btn-default"><i class="fa fa-align-right"></i></button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End toolbar location top right -->

    </div>
    <div class="col-md-3 col-sm-6">
        <!-- Start toolbar location top sub -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Toolbar Top Sub</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-sub-heading inner-all">
                <div class="pull-left">
                    <button type="button" class="btn btn-sm btn-primary">Left position</button>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-sm btn-danger">Right position</button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-sub-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End toolbar location top sub -->
    </div>
    <div class="col-md-3 col-sm-6">

        <!-- Start toolbar location bottom -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Toolbar Bottom</h3>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
                Panel content
            </div><!-- /.panel-body -->
            <div class="panel-footer">
                <div class="pull-left">
                    <button type="button" class="btn btn-sm btn-primary">Left position</button>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-sm btn-danger">Right position</button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
        <!--/ End toolbar location bottom -->

    </div>
</div>
<!--/ End panel toolbar location-->

</div><!-- /.body-content -->
<!--/ End body content -->