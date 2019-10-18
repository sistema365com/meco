<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-th-list"></i> {page} <span>{info}</span></h2>
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
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            This <a href="http://vadimg.com/twitter-bootstrap-wizard-example/" target="_blank">twitter bootstrap plugin</a> builds a wizard out of a formatter tabbable structure. It allows to build a wizard functionality using buttons to go through the different wizard steps and using events allows to hook into each step individually.
        </div>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start basic wizard horizontal -->
        <div id="basic-wizard-horizontal">
            <h4>Basic Wizard Horizontal</h4>
            <div class="panel panel-tab rounded shadow">
                <!-- Start tabs heading -->
                <div class="panel-heading no-padding">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1-1" data-toggle="tab">
                                <i class="fa fa-user"></i>
                                <div>
                                    <span class="text-strong">Step 1</span>
                                    <span>Personal</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab1-2" data-toggle="tab">
                                <i class="fa fa-file-text"></i>
                                <div>
                                    <span class="text-strong">Step 2</span>
                                    <span>Product</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab1-3" data-toggle="tab">
                                <i class="fa fa-credit-card"></i>
                                <div>
                                    <span class="text-strong">Step 3</span>
                                    <span>Payment</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab1-4" data-toggle="tab">
                                <i class="fa fa-check-circle"></i>
                                <div>
                                    <span class="text-strong">Step 4</span>
                                    <span>Confirmation</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.panel-heading -->
                <!--/ End tabs heading -->

                <!-- Start tabs content -->
                <div class="panel-body">
                    <form action="#" class="tab-content form-horizontal">
                        <div class="tab-pane fade in active inner-all" id="tab1-1">
                            <h4 class="page-header">Personal</h4>
                            <div class="form-group">
                                <label class="col-sm-2">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Gender</label>
                                <div class="col-sm-4">
                                    <div class="rdio rdio-theme inline mr-10">
                                        <input checked="checked" id="male" name="radio" type="radio">
                                        <label for="male">Male</label>
                                    </div>
                                    <div class="rdio rdio-theme inline">
                                        <input id="female" name="radio" type="radio">
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab1-2">
                            <h4 class="page-header">Product</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Product ID</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Product Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Category</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">Choose One</option>
                                        <option value="Iphone">Iphone</option>
                                        <option value="Android">Android</option>
                                        <option value="Blackberry">Blackberry</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab1-3">
                            <h4 class="page-header">Payment</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Credit Card Type</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">Choose Credit Card</option>
                                        <option value="amex">American Express</option>
                                        <option value="discover">Discover</option>
                                        <option value="mastercard">MasterCard</option>
                                        <option value="visa">Visa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Expiration</label>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Date Month</option>
                                                <option value="01">01 - Jan</option>
                                                <option value="02">02 - Feb</option>
                                                <option value="03">03 - Mar</option>
                                                <option value="04">04 - Apr</option>
                                                <option value="05">05 - May</option>
                                                <option value="06">06 - Jun</option>
                                                <option value="07">07 - Jul</option>
                                                <option value="08">08 - Aug</option>
                                                <option value="09">09 - Sep</option>
                                                <option value="10">10 - Oct</option>
                                                <option value="11">11 - Nov</option>
                                                <option value="12">12 - Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Year</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Credit Card Number</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab1-4">
                            <h4 class="page-header">Confirmation</h4>
                            <div class="pl-10">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <button type="submit" class="btn btn-success ml-10">Submit</button>
                        </div>
                    </form>
                </div><!-- /.panel-body -->
                <!--/ End tabs content -->

                <!-- Start pager -->
                <div class="panel-footer">
                    <ul class="pager wizard no-margin">
                        <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                        <li class="next"><a href="javascript:void(0);">Next</a></li>
                    </ul>
                </div><!-- /.panel-footer -->
                <!--/ End pager -->

            </div><!-- /.panel -->
        </div><!-- /#basic-wizard-horizontal -->
        <!--/ End basic wizard horizontal-->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start basic wizard vertical -->
        <div id="basic-wizard-vertical">
            <h4>Basic Wizard Vertical</h4>
            <div class="panel panel-tab panel-tab-double panel-tab-vertical row no-margin rounded shadow">
                <!-- Start tabs heading -->
                <div class="panel-heading no-padding col-md-3">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab2-1" data-toggle="tab">
                                <i class="fa fa-user"></i>
                                <div>
                                    <span class="text-strong">Step 1</span>
                                    <span>Personal details</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2-2" data-toggle="tab">
                                <i class="fa fa-file-text"></i>
                                <div>
                                    <span class="text-strong">Step 2</span>
                                    <span>Product details</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2-3" data-toggle="tab">
                                <i class="fa fa-credit-card"></i>
                                <div>
                                    <span class="text-strong">Step 3</span>
                                    <span>Payment</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2-4" data-toggle="tab">
                                <i class="fa fa-check-circle"></i>
                                <div>
                                    <span class="text-strong">Step 4</span>
                                    <span>Confirmation</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.panel-heading -->
                <!--/ End tabs heading -->

                <!-- Start tabs content -->
                <div class="panel-body col-md-9">
                    <form action="#" class="tab-content form-horizontal">
                        <div class="tab-pane fade in active inner-all" id="tab2-1">
                            <h4 class="page-header">Personal details</h4>
                            <div class="form-group">
                                <label class="col-sm-2">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Gender</label>
                                <div class="col-sm-4">
                                    <div class="rdio rdio-theme inline mr-10">
                                        <input checked="checked" id="male2" name="radio" type="radio">
                                        <label for="male2">Male</label>
                                    </div>
                                    <div class="rdio rdio-theme inline">
                                        <input id="female2" name="radio" type="radio">
                                        <label for="female2">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab2-2">
                            <h4 class="page-header">Product details</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Product ID</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Product Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Category</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">Choose One</option>
                                        <option value="Iphone">Iphone</option>
                                        <option value="Android">Android</option>
                                        <option value="Blackberry">Blackberry</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab2-3">
                            <h4 class="page-header">Payment</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Credit Card Type</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">Choose Credit Card</option>
                                        <option value="amex">American Express</option>
                                        <option value="discover">Discover</option>
                                        <option value="mastercard">MasterCard</option>
                                        <option value="visa">Visa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Expiration</label>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Date Month</option>
                                                <option value="01">01 - Jan</option>
                                                <option value="02">02 - Feb</option>
                                                <option value="03">03 - Mar</option>
                                                <option value="04">04 - Apr</option>
                                                <option value="05">05 - May</option>
                                                <option value="06">06 - Jun</option>
                                                <option value="07">07 - Jul</option>
                                                <option value="08">08 - Aug</option>
                                                <option value="09">09 - Sep</option>
                                                <option value="10">10 - Oct</option>
                                                <option value="11">11 - Nov</option>
                                                <option value="12">12 - Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Year</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Credit Card Number</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab2-4">
                            <h4 class="page-header">Confirmation</h4>
                            <div class="ml-10">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <button type="submit" class="btn btn-success ml-10">Submit</button>
                        </div>
                    </form>
                    <!-- Start pager -->
                    <div class="panel-footer no-bg">
                        <ul class="pager wizard no-margin">
                            <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                            <li class="next"><a href="javascript:void(0);">Next</a></li>
                        </ul>
                    </div>
                    <!--/ End pager -->
                </div><!-- /.panel-body -->
                <!--/ End tabs content -->
            </div><!-- /.panel -->
        </div><!-- /#basic-wizard-vertical -->
        <!--/ End basic wizard vertical-->

    </div>
</div><!-- /.row -->
<br/>
<div class="row">
<div class="col-md-12">

    <!-- Start progress bar wizard -->
    <div id="progress-wizard">
        <h4>Progress Bar Wizard</h4>
        <div class="panel panel-tab rounded shadow">

            <!-- Start tabs heading -->
            <div class="panel-heading no-padding">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab3-1" data-toggle="tab">
                            <i class="fa fa-user"></i>
                            <div>
                                <span class="text-strong">Step 1</span>
                                <span>Personal</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab3-2" data-toggle="tab">
                            <i class="fa fa-file-text"></i>
                            <div>
                                <span class="text-strong">Step 2</span>
                                <span>Product</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab3-3" data-toggle="tab">
                            <i class="fa fa-credit-card"></i>
                            <div>
                                <span class="text-strong">Step 3</span>
                                <span>Payment</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab3-4" data-toggle="tab">
                            <i class="fa fa-check-circle"></i>
                            <div>
                                <span class="text-strong">Step 4</span>
                                <span>Confirmation</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!-- /.panel-heading -->
            <!--/ End tabs heading -->

            <div class="panel-sub-heading">
                <div class="inner-all">
                    <div class="progress progress-striped active no-margin progress-xs">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div><!-- /.panel-sub-heading -->

            <!-- Start tabs content -->
            <div class="panel-body">
                <form action="#" class="tab-content form-horizontal">
                    <div class="tab-pane fade in active inner-all" id="tab3-1">
                        <h4 class="page-header">Personal</h4>
                        <div class="form-group">
                            <label class="col-sm-2">First Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Last Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="col-sm-2">Gender</label>
                            <div class="col-sm-4">
                                <div class="rdio rdio-theme inline mr-10">
                                    <input checked="checked" id="male3" name="radio" type="radio">
                                    <label for="male3">Male</label>
                                </div>
                                <div class="rdio rdio-theme inline">
                                    <input id="female3" name="radio" type="radio">
                                    <label for="female3">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade inner-all" id="tab3-2">
                        <h4 class="page-header">Product</h4>
                        <div class="form-group">
                            <label class="col-sm-2">Product ID</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Product Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="col-sm-2">Category</label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option value="">Choose One</option>
                                    <option value="Iphone">Iphone</option>
                                    <option value="Android">Android</option>
                                    <option value="Blackberry">Blackberry</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade inner-all" id="tab3-3">
                        <h4 class="page-header">Payment</h4>
                        <div class="form-group">
                            <label class="col-sm-2">Credit Card Type</label>
                            <div class="col-sm-4">
                                <select class="form-control">
                                    <option value="">Choose Credit Card</option>
                                    <option value="amex">American Express</option>
                                    <option value="discover">Discover</option>
                                    <option value="mastercard">MasterCard</option>
                                    <option value="visa">Visa</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Expiration</label>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option value="">Date Month</option>
                                            <option value="01">01 - Jan</option>
                                            <option value="02">02 - Feb</option>
                                            <option value="03">03 - Mar</option>
                                            <option value="04">04 - Apr</option>
                                            <option value="05">05 - May</option>
                                            <option value="06">06 - Jun</option>
                                            <option value="07">07 - Jul</option>
                                            <option value="08">08 - Aug</option>
                                            <option value="09">09 - Sep</option>
                                            <option value="10">10 - Oct</option>
                                            <option value="11">11 - Nov</option>
                                            <option value="12">12 - Dec</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option value="">Year</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label class="col-sm-2">Credit Card Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade inner-all" id="tab3-4">
                        <h4 class="page-header">Confirmation</h4>
                        <div class="ml-10">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <button type="submit" class="btn btn-success ml-10">Submit</button>
                    </div>
                </form>
            </div><!-- /.panel-body -->
            <!--/ End tabs content -->

            <!-- Start pager -->
            <div class="panel-footer">
                <ul class="pager wizard no-margin">
                    <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                    <li class="next"><a href="javascript:void(0);">Next</a></li>
                </ul>
            </div><!-- /.panel-footer -->
            <!--/ End pager -->

        </div>
    </div><!-- /#progress-wizard -->
    <!--/ End progress bar wizard-->

</div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start disabled tab click wizard -->
        <div id="disabled-tab-wizard">
            <h4>Disabled Tab Click Wizard</h4>
            <div class="panel panel-tab rounded shadow">

                <!-- Start tabs heading -->
                <div class="panel-heading no-padding">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab4-1" data-toggle="tab">
                                <i class="fa fa-user"></i>
                                <div>
                                    <span class="text-strong">Step 1</span>
                                    <span>Personal</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab4-2" data-toggle="tab">
                                <i class="fa fa-file-text"></i>
                                <div>
                                    <span class="text-strong">Step 2</span>
                                    <span>Product</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab4-3" data-toggle="tab">
                                <i class="fa fa-credit-card"></i>
                                <div>
                                    <span class="text-strong">Step 3</span>
                                    <span>Payment</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab4-4" data-toggle="tab">
                                <i class="fa fa-check-circle"></i>
                                <div>
                                    <span class="text-strong">Step 4</span>
                                    <span>Confirmation</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.panel-heading -->
                <!--/ End tabs heading -->

                <!-- Start tabs content -->
                <div class="panel-body">
                    <form action="#" class="tab-content form-horizontal">
                        <div class="tab-pane fade in active inner-all" id="tab4-1">
                            <h4 class="page-header">Personal</h4>
                            <div class="form-group">
                                <label class="col-sm-2">First Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Gender</label>
                                <div class="col-sm-4">
                                    <div class="rdio rdio-theme inline mr-10">
                                        <input checked="checked" id="male4" name="radio" type="radio">
                                        <label for="male4">Male</label>
                                    </div>
                                    <div class="rdio rdio-theme inline">
                                        <input id="female4" name="radio" type="radio">
                                        <label for="female4">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab4-2">
                            <h4 class="page-header">Product</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Product ID</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Product Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Category</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">Choose One</option>
                                        <option value="Iphone">Iphone</option>
                                        <option value="Android">Android</option>
                                        <option value="Blackberry">Blackberry</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab4-3">
                            <h4 class="page-header">Payment</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Credit Card Type</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">Choose Credit Card</option>
                                        <option value="amex">American Express</option>
                                        <option value="discover">Discover</option>
                                        <option value="mastercard">MasterCard</option>
                                        <option value="visa">Visa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Expiration</label>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Date Month</option>
                                                <option value="01">01 - Jan</option>
                                                <option value="02">02 - Feb</option>
                                                <option value="03">03 - Mar</option>
                                                <option value="04">04 - Apr</option>
                                                <option value="05">05 - May</option>
                                                <option value="06">06 - Jun</option>
                                                <option value="07">07 - Jul</option>
                                                <option value="08">08 - Aug</option>
                                                <option value="09">09 - Sep</option>
                                                <option value="10">10 - Oct</option>
                                                <option value="11">11 - Nov</option>
                                                <option value="12">12 - Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Year</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Credit Card Number</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab4-4">
                            <h4 class="page-header">Confirmation</h4>
                            <div class="ml-10">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <button type="submit" class="btn btn-success ml-10">Submit</button>
                        </div>
                    </form>
                </div><!-- /.panel-body -->
                <!--/ End tabs content -->

                <!-- Start pager -->
                <div class="panel-footer">
                    <ul class="pager wizard no-margin">
                        <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                        <li class="next"><a href="javascript:void(0);">Next</a></li>
                    </ul>
                </div><!-- /.panel-footer -->
                <!--/ End pager -->

            </div><!-- /.panel -->
        </div><!-- /#disabled-tab-wizard -->
        <!--/ End disabled tab click wizard-->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start form validation wizard -->
        <div id="validation-wizard">
            <h4>Form Validation Wizard</h4>
            <div class="panel panel-tab rounded shadow">

                <!-- Start tabs heading -->
                <div class="panel-heading no-padding">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab5-1" data-toggle="tab">
                                <i class="fa fa-user"></i>
                                <div>
                                    <span class="text-strong">Step 1</span>
                                    <span>Personal</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab5-2" data-toggle="tab">
                                <i class="fa fa-file-text"></i>
                                <div>
                                    <span class="text-strong">Step 2</span>
                                    <span>Product</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab5-3" data-toggle="tab">
                                <i class="fa fa-credit-card"></i>
                                <div>
                                    <span class="text-strong">Step 3</span>
                                    <span>Payment</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab5-4" data-toggle="tab">
                                <i class="fa fa-check-circle"></i>
                                <div>
                                    <span class="text-strong">Step 4</span>
                                    <span>Confirmation</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.panel-heading -->
                <!--/ End tabs heading -->

                <!-- Start tabs content -->
                <div class="panel-body">
                    <form action="#" id="form-wizard" class="tab-content form-horizontal">
                        <div class="tab-pane fade in active inner-all" id="tab5-1">
                            <h4 class="page-header">Personal</h4>
                            <div class="form-group">
                                <label class="col-sm-2">First Name <span class="asterisk">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="firstname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Last Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="lastname">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Gender <span class="asterisk">*</span></label>
                                <div class="col-sm-4">
                                    <div class="rdio rdio-theme inline mr-10">
                                        <input id="male5" name="gender" type="radio">
                                        <label for="male5">Male</label>
                                    </div>
                                    <div class="rdio rdio-theme inline">
                                        <input id="female5" name="gender" type="radio">
                                        <label for="female5">Female</label>
                                    </div>
                                    <label for="gender" class="error"></label>
                                    <input type="text" class="hide" id="gender"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab5-2">
                            <h4 class="page-header">Product</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Product ID <span class="asterisk">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="productid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Product Name <span class="asterisk">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="productname">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Category <span class="asterisk">*</span></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="category">
                                        <option value="">Choose One</option>
                                        <option value="Iphone">Iphone</option>
                                        <option value="Android">Android</option>
                                        <option value="Blackberry">Blackberry</option>
                                    </select>
                                    <label for="category" class="error"></label>
                                    <input type="text" class="hide" id="category"/>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab5-3">
                            <h4 class="page-header">Payment</h4>
                            <div class="form-group">
                                <label class="col-sm-2">Credit Card Type <span class="asterisk">*</span></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="creditcard">
                                        <option value="">Choose Credit Card</option>
                                        <option value="amex">American Express</option>
                                        <option value="discover">Discover</option>
                                        <option value="mastercard">MasterCard</option>
                                        <option value="visa">Visa</option>
                                    </select>
                                    <label for="creditcard" class="error"></label>
                                    <input type="text" class="hide" id="creditcard"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Expiration</label>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Date Month</option>
                                                <option value="01">01 - Jan</option>
                                                <option value="02">02 - Feb</option>
                                                <option value="03">03 - Mar</option>
                                                <option value="04">04 - Apr</option>
                                                <option value="05">05 - May</option>
                                                <option value="06">06 - Jun</option>
                                                <option value="07">07 - Jul</option>
                                                <option value="08">08 - Aug</option>
                                                <option value="09">09 - Sep</option>
                                                <option value="10">10 - Oct</option>
                                                <option value="11">11 - Nov</option>
                                                <option value="12">12 - Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option value="">Year</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label class="col-sm-2">Credit Card Number <span class="asterisk">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="creditcardnumber">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade inner-all" id="tab5-4">
                            <h4 class="page-header">Confirmation</h4>
                            <div class="ml-10">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <button type="submit" class="btn btn-success ml-10">Submit</button>
                        </div>
                    </form>
                </div><!-- /.panel-body -->
                <!--/ End tabs content -->

                <!-- Start pager -->
                <div class="panel-footer">
                    <ul class="pager wizard no-margin">
                        <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                        <li class="next"><a href="javascript:void(0);">Next</a></li>
                    </ul>
                </div><!-- /.panel-footer -->
                <!--/ End pager -->

            </div><!-- /.panel -->
        </div>
        <!--/ End form validation wizard-->

    </div>
</div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->