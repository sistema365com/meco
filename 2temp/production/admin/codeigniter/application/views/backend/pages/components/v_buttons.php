<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-square"></i> Buttons <span>general ui components</span></h2>
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
            <li class="active">Buttons</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

<div class="row">
<div class="col-md-12">

<!-- Start creative button styles -->
<h4>Creative Button Styles</h4>
<p>Some creative and modern button styles and effects for your inspiration. </p>
<div class="panel rounded shadow">
    <div class="panel-body">
        <div class="inner-all">
            <button class="btn btn-default btn-lg btn-slidedown">btn-slidedown</button>
            <button class="btn btn-primary btn-lg btn-slideright">btn-slideright</button>
            <button class="btn btn-primary btn-lg btn-expand">btn-expand</button>
            <button class="btn btn-primary btn-lg btn-rotate">btn-rotate</button>
            <button class="btn btn-primary btn-lg btn-open">btn-open</button>
            <button class="btn btn-primary btn-lg btn-pushright mr-5">btn-pushright</button>
            <button class="btn btn-primary btn-lg btn-push">btn-push</button>
        </div>
    </div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End creative button styles -->

<!-- Start brand button -->
<div class="panel rounded shadow">
    <div class="panel-heading">
        <div class="pull-left">
            <h3 class="panel-title">Brand Button</h3>
        </div>
        <div class="pull-right">
            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
        </div>
        <div class="clearfix"></div>
    </div><!-- /.panel-heading -->
    <div class="panel-body no-padding">
        <div class="inner-all">
            <button type="button" class="btn btn-behance"><i class="fa fa-behance"></i> Behance</button>
            <button type="button" class="btn btn-bitbucket"><i class="fa fa-bitbucket"></i> Bitbucket</button>
            <button type="button" class="btn btn-delicious"><i class="fa fa-delicious"></i> Delicious</button>
            <button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble"></i> Dribbble</button>
            <button type="button" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</button>
            <button type="button" class="btn btn-flickr"><i class="fa fa-flickr"></i> Flickr</button>
            <button type="button" class="btn btn-foursquare"><i class="fa fa-foursquare"></i> Foursquare</button>
            <button type="button" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google Plus</button>
            <button type="button" class="btn btn-instagram"><i class="fa fa-instagram"></i> Instagram</button>
            <button type="button" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> Linkedin</button>
            <button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest"></i> Pinterest</button>
            <button type="button" class="btn btn-rss"><i class="fa fa-rss"></i> RSS</button>
            <button type="button" class="btn btn-skype"><i class="fa fa-skype"></i> Skype</button>
            <button type="button" class="btn btn-soundcloud"><i class="fa fa-soundcloud"></i> Soundcloud</button>
            <button type="button" class="btn btn-tumblr"><i class="fa fa-tumblr"></i> Tumblr</button>
            <button type="button" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</button>
            <button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo-square"></i> Vimeo</button>
            <button type="button" class="btn btn-wordpress"><i class="fa fa-wordpress"></i> Wordpress</button>
            <button type="button" class="btn btn-yahoo"><i class="fa fa-yahoo"></i> Yahoo</button>
            <button type="button" class="btn btn-youtube"><i class="fa fa-youtube"></i> Youtube</button>
        </div>
    </div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End brand button -->

<!-- Start button options -->
<h4>Options</h4>
<p>Use any of the available button classes to quickly create a styled button.</p>
<div class="panel rounded shadow">
    <div class="panel-body">

        <!-- Start regular buttons -->
        <div class="section-sample">
            <h4>Regular buttons</h4>
            <button type="button" class="btn btn-default">btn-default</button>
            <button type="button" class="btn btn-primary">btn-primary</button>
            <button type="button" class="btn btn-success">btn-success</button>
            <button type="button" class="btn btn-info">btn-info</button>
            <button type="button" class="btn btn-warning">btn-warning</button>
            <button type="button" class="btn btn-danger">btn-danger</button>
            <button type="button" class="btn btn-lilac">btn-lilac</button>
            <button type="button" class="btn btn-teal">btn-teal</button>
            <button type="button" class="btn btn-inverse">btn-inverse</button>
        </div>
        <!--/ End regular buttons -->

        <!-- Start button group & dropdowns -->
        <div class="section-sample">
            <h4>Button group + Dropdowns</h4>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Single dropdown <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-danger">Split dropdown</button>
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <div class="btn-group dropup">
                <button type="button" class="btn btn-success">Dropup</button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-default">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
            </div>
        </div>
        <!--/ End button group & dropdowns -->

        <!-- Start stroke buttons -->
        <div class="section-sample">
            <h4>Stroke buttons</h4>
            <button type="button" class="btn btn-default btn-stroke">btn-default</button>
            <button type="button" class="btn btn-primary btn-stroke">btn-primary</button>
            <button type="button" class="btn btn-success btn-stroke">btn-success</button>
            <button type="button" class="btn btn-info btn-stroke">btn-info</button>
            <button type="button" class="btn btn-warning btn-stroke">btn-warning</button>
            <button type="button" class="btn btn-danger btn-stroke">btn-danger</button>
            <button type="button" class="btn btn-lilac btn-stroke">btn-lilac</button>
            <button type="button" class="btn btn-teal btn-stroke">btn-teal</button>
            <button type="button" class="btn btn-inverse btn-stroke">btn-inverse</button>
            <button type="button" class="btn btn-facebook btn-stroke">btn-facebook</button>
            <button type="button" class="btn btn-twitter btn-stroke">btn-twitter</button>
        </div>
        <!--/ End stroke buttons -->

        <!-- Start variant stroke buttons -->
        <div class="section-sample">
            <h4>Variant Stroke buttons</h4>
            <button type="button" class="btn btn-default btn-stroke btn-solid">btn-solid</button>
            <button type="button" class="btn btn-primary btn-stroke btn-dashed">btn-dashed</button>
            <button type="button" class="btn btn-success btn-stroke btn-dotted">btn-dotted</button>
            <button type="button" class="btn btn-info btn-stroke btn-double">btn-double</button>
            <button type="button" class="btn btn-danger btn-stroke btn-inset">btn-inset</button>
        </div>
        <!--/ End variant stroke buttons -->

        <!-- Start circle buttons -->
        <div class="section-sample">
            <h4>Circle buttons</h4>
            <button class="btn btn-circle btn-default"><i class="fa fa-home"></i></button>
            <button class="btn btn-circle btn-danger"><i class="fa fa-lock"></i></button>
            <button class="btn btn-circle btn-facebook"><i class="fa fa-facebook"></i></button>
            <button class="btn btn-circle btn-twitter"><i class="fa fa-twitter"></i></button>
            <button class="btn btn-circle btn-danger"><i class="fa fa-google-plus"></i></button>
            <button class="btn btn-circle btn-lilac"><i class="fa fa-heart"></i></button>
        </div>
        <!--/ End circle buttons -->

        <!-- Start circle stroke buttons -->
        <div class="section-sample">
            <h4>Circle stroke buttons</h4>
            <button class="btn btn-circle btn-default btn-stroke"><i class="fa fa-home"></i></button>
            <button class="btn btn-circle btn-danger btn-stroke"><i class="fa fa-lock"></i></button>
            <button class="btn btn-circle btn-facebook btn-stroke"><i class="fa fa-facebook"></i></button>
            <button class="btn btn-circle btn-twitter btn-stroke"><i class="fa fa-twitter"></i></button>
            <button class="btn btn-circle btn-danger btn-stroke"><i class="fa fa-google-plus"></i></button>
            <button class="btn btn-circle btn-lilac btn-stroke"><i class="fa fa-heart"></i></button>
        </div>
        <!--/ End circle stroke buttons -->

        <!-- Start custom buttons -->
        <div class="section-sample">

            <h4>Custom buttons</h4>
            <button class="btn btn-facebook btn-icon-stacked">
                <i class="fa fa-2x fa-facebook"></i>
                <span>Join using your<br>Facebook Account</span>
            </button>
            <button class="btn btn-twitter btn-icon-stacked">
                <i class="fa fa-2x fa-twitter"></i>
                <span>Join using your<br>Twitter Account</span>
            </button>
            <button class="btn btn-googleplus btn-icon-stacked">
                <i class="fa fa-2x fa-google-plus"></i>
                <span>Join using your<br>Google Account</span>
            </button>
            <button class="btn btn-dribbble btn-icon-stacked">
                <i class="fa fa-2x fa-dribbble"></i>
                <span>Join using your<br>Dribbble Account</span>
            </button>
            <button class="btn btn-instagram btn-icon-stacked">
                <i class="fa fa-2x fa-instagram"></i>
                <span>Join using your<br>Instagram Account</span>
            </button>

        </div>
        <!--/ End custom buttons -->

        <!-- Start custom stroke buttons -->
        <div class="section-sample">
            <h4>Custom stroke buttons</h4>
            <button class="btn btn-facebook btn-icon-stacked btn-stroke">
                <i class="fa fa-2x fa-facebook"></i>
                <span>Join using your<br>Facebook Account</span>
            </button>
            <button class="btn btn-twitter btn-icon-stacked btn-stroke btn-dashed">
                <i class="fa fa-2x fa-twitter"></i>
                <span>Join using your<br>Twitter Account</span>
            </button>
            <button class="btn btn-danger btn-icon-stacked btn-stroke btn-dotted">
                <i class="fa fa-2x fa-google-plus"></i>
                <span>Join using your<br>Google Account</span>
            </button>
            <button class="btn btn-dribbble btn-icon-stacked btn-stroke btn-double">
                <i class="fa fa-2x fa-dribbble"></i>
                <span>Join using your<br>Dribbble Account</span>
            </button>
            <button class="btn btn-instagram btn-icon-stacked btn-stroke">
                <i class="fa fa-2x fa-instagram"></i>
                <span>Join using your<br>Instagram Account</span>
            </button>
        </div>
        <!--/ End custom stroke buttons -->

    </div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End button options -->

<!-- Start button sizes -->
<h4>Sizes</h4>
<p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes. Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>
<div class="panel panel-default rounded shadow">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <p>
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    <button type="button" class="btn btn-default btn-lg">Large button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary">Default button</button>
                    <button type="button" class="btn btn-default">Default button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-default btn-sm">Small button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                    <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                </p>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button (Large)</button>
                <button type="button" class="btn btn-default btn-block">Block level button (Medium)</button>
                <button type="button" class="btn btn-primary btn-sm btn-block">Block level button (Small)</button>
                <button type="button" class="btn btn-default btn-xs btn-block">Block level button (Extra small)</button>
            </div>
        </div>
    </div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End button sizes -->

<!-- Start button state -->
<h4>Button state</h4>
<p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. For <code>&lt;button&gt;</code> elements, this is done via <code>:active</code>. For <code>&lt;a&gt;</code> elements, it's done with <code>.active</code>. However, you may use <code>.active</code> on <code>&lt;button&gt;</code>s should you need to replicate the active state progammatically. If button disabled state, buttons look unclickable by fading them back 50%.</p>
<div class="panel rounded shadow">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <h4>Button element</h4>
                <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
                <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
                <button type="button" class="btn btn-default btn-lg active">Button</button>
            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <h4>Anchor element</h4>
                <p>Add the <code>.active</code> class to <code>&lt;a&gt;</code> buttons.</p>
                <a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a>
                <a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <h4>Button element</h4>
                <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
                <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary button</button>
                <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
            </div><!-- /.col-md-3 -->
            <div class="col-md-3">
                <h4>Anchor element</h4>
                <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
                <a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a>
                <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>
            </div><!-- /.col-md-3 -->
        </div>
    </div><!-- /.panel-body -->
</div><!-- /.panel -->
<!--/ End button state -->

</div>
</div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->