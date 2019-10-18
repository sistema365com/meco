@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-columns"></i> Grid Layout <span>grid system support</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Layout</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Grid</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="callout callout-info mb-20">
                    <p>Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases.</p>
                </div>
            </div>
        </div>

        <!-- Start grid option -->
        <h4>Grid options</h4>
        <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>
                                    Extra small devices
                                    <small>Phones (&lt;768px)</small>
                                </th>
                                <th>
                                    Small devices
                                    <small>Tablets (≥768px)</small>
                                </th>
                                <th>
                                    Medium devices
                                    <small>Desktops (≥992px)</small>
                                </th>
                                <th>
                                    Large devices
                                    <small>Desktops (≥1200px)</small>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Grid behavior</th>
                                <td>Horizontal at all times</td>
                                <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
                            </tr>
                            <tr>
                                <th>Container width</th>
                                <td>None (auto)</td>
                                <td>750px</td>
                                <td>970px</td>
                                <td>1170px</td>
                            </tr>
                            <tr>
                                <th>Class prefix</th>
                                <td><code>.col-xs-</code></td>
                                <td><code>.col-sm-</code></td>
                                <td><code>.col-md-</code></td>
                                <td><code>.col-lg-</code></td>
                            </tr>
                            <tr>
                                <th># of columns</th>
                                <td colspan="4">12</td>
                            </tr>
                            <tr>
                                <th>Column width</th>
                                <td class="text-muted">Auto</td>
                                <td>60px</td>
                                <td>78px</td>
                                <td>95px</td>
                            </tr>
                            <tr>
                                <th>Gutter width</th>
                                <td colspan="4">30px (15px on each side of a column)</td>
                            </tr>
                            <tr>
                                <th>Nestable</th>
                                <td colspan="4">Yes</td>
                            </tr>
                            <tr>
                                <th>Offsets</th>
                                <td colspan="4">Yes</td>
                            </tr>
                            <tr>
                                <th>Column ordering</th>
                                <td colspan="4">Yes</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div>
        </div><!-- /.row -->
        <!--/ End grid option -->

        <!-- Start stacked to horizontal -->
        <h4>Stacked-to-horizontal</h4>
        <p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>. Turn any fixed-width grid layout into a full-width layout by changing your outermost <code>.container</code> to <code>.container-fluid</code>.</p>
        <div class="show-grid">
            <div class="row">
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
                <div class="col-md-1">.col-md-1</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-8">.col-md-8</div>
                <div class="col-md-4">.col-md-4</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4">.col-md-4</div>
                <div class="col-md-4">.col-md-4</div>
                <div class="col-md-4">.col-md-4</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6">.col-md-6</div>
                <div class="col-md-6">.col-md-6</div>
            </div><!-- /.row -->
        </div><!-- /.show-grid -->
        <!--/ End stacked to horizontal -->
        <br/>
        <!-- Start mobile and desktop -->
        <h4>Mobile and desktop</h4>
        <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
        <div class="show-grid">
            <div class="row">
                <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-xs-6">.col-xs-6</div>
                <div class="col-xs-6">.col-xs-6</div>
            </div><!-- /.row -->
        </div><!-- /.show-grid -->
        <!--/ End mobile and desktop -->
        <br/>
        <!-- Start mobile, tablet, desktops -->
        <h4>Mobile, tablet, desktops</h4>
        <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
        <div class="show-grid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                <!-- Optional: clear the XS cols if their content doesn't match in height -->
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
            </div><!-- /.row -->
        </div><!-- /.show-grid -->
        <!--/ End mobile, tablet, desktops -->
        <br/>

        <!-- Start responsive column resets -->
        <h4>Responsive column resets</h4>
        <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code>.</p>
        <div class="show-grid">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    .col-xs-6 .col-sm-3
                    <br>
                    Resize your viewport or check it out on your phone for an example.
                </div>
                <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

                <!-- Add the extra clearfix for only the required viewport -->
                <div class="clearfix visible-xs"></div>

                <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
            </div><!-- /.row -->
        </div><!-- /.show-grid -->
        <!--/ End responsive column resets -->
        <br/>

        <!-- Start offsetting columns -->
        <h4>Offsetting columns</h4>
        <p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
        <div class="show-grid">
            <div class="row">
                <div class="col-md-4">.col-md-4</div>
                <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
            </div><!-- /.row -->
        </div><!-- /.show-grid -->
        <!--/ End offsetting columns -->
        <br/>

        <!-- Start nesting columns -->
        <h4>Nesting columns</h4>
        <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-md-*</code> columns within an existing <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12 or less.</p>
        <div class="show-grid">
            <div class="row">
                <div class="col-md-9">
                    Level 1: .col-md-9
                    <div class="row show-grid">
                        <div class="col-md-6">
                            Level 2: .col-md-6
                        </div>
                        <div class="col-md-6">
                            Level 2: .col-md-6
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.show-grid -->
        <!--/ End nesting columns -->
        <br/>

        <!-- Start column ordering -->
        <h4>Column ordering</h4>
        <p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
        <div class="show-grid">
            <div class="row">
                <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
                <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
            </div><!-- /.row -->
        </div><!-- /.show-grid -->
        <!--/ End column ordering -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
