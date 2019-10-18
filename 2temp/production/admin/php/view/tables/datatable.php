<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-table"></i> {page}<span>{info}</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="dashboard.html">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Tables</a>
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

            <!-- Start repeater -->
            <div class="panel rounded shadow no-overflow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Product List</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Start repeater -->
                    <div class="fuelux">
                        <div class="repeater" data-staticheight="400" id="myRepeater">
                            <div class="repeater-header">
                                <div class="repeater-header-left">
                                    <div class="repeater-search">
                                        <div class="search input-group">
                                            <input type="search" class="form-control" placeholder="Search"/>
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button">
                                                                <span class="glyphicon glyphicon-search"></span>
                                                                <span class="sr-only">Search</span>
                                                            </button>
                                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="repeater-header-right">
                                    <div class="btn-group selectlist repeater-filters" data-resize="auto">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                            <span class="selected-label">&nbsp;</span>
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Filters</span>
                                        </button>
                                        <ul id="test" class="dropdown-menu" role="menu">
                                            <li data-value="all" data-selected="true" class="text-left"><a href="#">All Filter</a></li>
                                            <li data-value="music"><a href="#">Music</a></li>
                                            <li data-value="electronics"><a href="#">Electronics</a></li>
                                            <li data-value="fashion"><a href="#">Fashion</a></li>
                                            <li data-value="home_garden"><a href="#">Home & garden</a></li>
                                            <li data-value="sport"><a href="#">Sporting goods</a></li>
                                        </ul>
                                        <input class="hidden hidden-field" name="filterSelection" readonly="readonly" aria-hidden="true" type="text"/>
                                    </div>
                                    <div class="btn-group repeater-views" data-toggle="buttons">
                                        <label class="btn btn-success active">
                                            <input name="repeaterViews" type="radio" value="list"><span class="glyphicon glyphicon-list"></span>
                                        </label>
                                        <label class="btn btn-success">
                                            <input name="repeaterViews" type="radio" value="thumbnail"><span class="glyphicon glyphicon-th"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="repeater-viewport">
                                <div class="repeater-canvas"></div>
                                <div class="loader repeater-loader"></div>
                            </div>
                            <div class="repeater-footer">
                                <div class="repeater-footer-left">
                                    <div class="repeater-itemization">
                                        <span><span class="repeater-start"></span> - <span class="repeater-end"></span> of <span class="repeater-count"></span> items</span>
                                        <div class="btn-group selectlist" data-resize="auto">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="selected-label">&nbsp;</span>
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li data-value="5"><a href="#">5</a></li>
                                                <li data-value="10" data-selected="true"><a href="#">10</a></li>
                                                <li data-value="20"><a href="#">20</a></li>
                                                <li data-value="50" data-foo="bar" data-fizz="buzz"><a href="#">50</a></li>
                                                <li data-value="100"><a href="#">100</a></li>
                                            </ul>
                                            <input class="hidden hidden-field" name="itemsPerPage" readonly="readonly" aria-hidden="true" type="text"/>
                                        </div>
                                        <span>Per Page</span>
                                    </div>
                                </div>
                                <div class="repeater-footer-right">
                                    <div class="repeater-pagination">
                                        <button type="button" class="btn btn-default btn-sm repeater-prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous Page</span>
                                        </button>
                                        <label class="page-label" id="myPageLabel">Page</label>
                                        <div class="repeater-primaryPaging active">
                                            <div class="input-group input-append dropdown combobox">
                                                <input type="text" class="form-control" aria-labelledby="myPageLabel">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right"></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control repeater-secondaryPaging" aria-labelledby="myPageLabel">
                                        <span>of <span class="repeater-pages"></span></span>
                                        <button type="button" class="btn btn-default btn-sm repeater-next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next Page</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End repeater -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End repeater -->

            <!-- Start datatable using ajax -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Employee List <span class="label label-danger">AJAX Support</span></h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Start datatable -->
                    <table id="datatable-ajax" class="table table-striped table-primary">
                        <thead>
                        <tr>
                            <th data-class="expand">Name</th>
                            <th data-hide="phone">Position</th>
                            <th data-hide="phone">Office</th>
                            <th data-hide="phone">Age</th>
                            <th data-hide="phone,tablet">Start date</th>
                            <th data-hide="phone,tablet">Salary</th>
                        </tr>
                        </thead>
                        <!--tbody section is required-->
                        <tbody></tbody>
                        <!--tfoot section is optional-->
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </tfoot>
                    </table>
                    <!--/ End datatable -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End datatable using ajax -->

            <!-- Start datatable using dom -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Post List <span class="label label-danger">DOM Support</span></h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Start datatable -->
                    <table id="datatable-dom" class="table table-striped table-lilac">
                        <thead>
                        <tr>
                            <th data-class="expand" class="text-center">Image</th>
                            <th data-hide="phone">Title</th>
                            <th data-hide="phone">Description</th>
                            <th data-hide="phone,tablet" class="text-center">Comments</th>
                            <th data-hide="phone,tablet">Date</th>
                            <th data-hide="phone,tablet" style="min-width: 200px" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>Built Using Bootstrap 3</td>
                            <td>A front-end toolkit for creating websites. It is a collection of CSS, HTML and other interface components...</td>
                            <td class="text-center"><span class="label label-info">32</span></td>
                            <td>10/28/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>Development Using LESS</td>
                            <td>Blankon admin easy to use and re-developed because blankon admin developed using LESS...</td>
                            <td class="text-center"><span class="label label-info">5</span></td>
                            <td>10/30/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>Code Quality</td>
                            <td>Quality source Code nicely formatted and commented to make editing this template...</td>
                            <td class="text-center"><span class="label label-info">67</span></td>
                            <td>11/03/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>40+ JQuery Plugins</td>
                            <td>Blankon includes custom plugins, forms, validations, charts, tables, datatables, notifications...</td>
                            <td class="text-center"><span class="label label-info">132</span></td>
                            <td>11/04/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>5+ Widget Types</td>
                            <td>5 Widget types available on this template. like as overview, social, blog, weather and miscellaneous widget...</td>
                            <td class="text-center"><span class="label label-info">45</span></td>
                            <td>11/09/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>5 Icon Types</td>
                            <td>5 Kind of icons available on this template. Glyphicons Pro (save $59)...</td>
                            <td class="text-center"><span class="label label-info">332</span></td>
                            <td>11/13/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>Easy to Customize</td>
                            <td>Blankon admin is a simple design and very user friendly. In each section of the script we provide...</td>
                            <td class="text-center"><span class="label label-info">32</span></td>
                            <td>11/15/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 1%"><img src="http://img.djavaui.com/?create=160x100,81B71A?f=ffffff" alt="..." width="160" class="mt-5 mb-5"/></td>
                            <td>Playing Sounds</td>
                            <td>Today websites are full of events (new mail, new chat-message, content update etc.)...</td>
                            <td class="text-center"><span class="label label-info">116</span></td>
                            <td>11/20/2014</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                <a href="#" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th data-class="expand" class="text-center">Image</th>
                            <th data-hide="phone">Title</th>
                            <th data-hide="phone">Description</th>
                            <th data-hide="phone,tablet" class="text-center">Comments</th>
                            <th data-hide="phone,tablet">Date</th>
                            <th data-hide="phone,tablet" class="text-center">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                    <!--/ End datatable -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End datatable using dom -->

        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->
