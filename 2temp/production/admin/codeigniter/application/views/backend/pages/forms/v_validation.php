<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-warning"></i> Form Validations <span>form validation samples</span></h2>
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
            <li class="active">Form Validations</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

<div class="row">
    <div class="col-md-12">
        <div class="callout callout-info mb-20">
            <p>Bootstrap includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>
        </div>
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start validation states - horizontal form -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Validation States</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <form class="form-horizontal" role="form">
                    <div class="form-body">
                        <div class="form-group has-primary">
                            <label class="col-sm-3 control-label">Input with primary</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-info">
                            <label class="col-sm-3 control-label">Input with info</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-success">
                            <label class="col-sm-3 control-label">Input with success</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-warning">
                            <label class="col-sm-3 control-label">Input with warning</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-error">
                            <label class="col-sm-3 control-label">Input with error</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button class="btn btn-danger">Cancel</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End validation states -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start validation states with icon - horizontal form -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Validation States With Icons</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-container="body" data-action="collapse" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-container="body" data-action="remove" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <form action="#" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group has-primary has-feedback">
                            <label class="col-sm-3 control-label">Input with primary</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                                <span class="glyphicon glyphicon-globe form-control-feedback"></span>
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-info has-feedback">
                            <label class="col-sm-3 control-label">Input with info</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                                <span class="glyphicon glyphicon-question-sign form-control-feedback"></span>
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-success has-feedback">
                            <label class="col-sm-3 control-label">Input with success</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-warning has-feedback">
                            <label class="col-sm-3 control-label">Input with warning</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                            </div>
                        </div><!-- /.form-group -->

                        <div class="form-group has-error has-feedback">
                            <label class="col-sm-3 control-label">Input with error</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control">
                                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button class="btn btn-danger mr-5">Cancel</button>
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.form-footer -->
                </form>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End validation states with icon -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start basic validation -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Basic Validation</h3>
                </div><!-- /.pull-left -->
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /.pull-right -->
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form class="form-horizontal form-bordered" role="form" id="basic-validate" action="#">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Required <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="bv_required" placeholder="just type">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="bv_email" placeholder="your@mail.com">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="bv_date" placeholder="mm/dd/yyyy">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">URL</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="bv_url" placeholder="http://yourwebsite.com">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="bv_username" placeholder="just sample user ready : john, peter, bill, jokowi">
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-theme">Validate</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End basic validation -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start number validation -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Number Validation</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form class="form-horizontal form-bordered" role="form" id="number-validate">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Only number</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="nv_number">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Minimal value</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="nv_min">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Maximum value</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="nv_max">
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-theme">Validate</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End number validation -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start password validation -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Password Validation</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form class="form-horizontal form-bordered" role="form" id="password-validate">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control input-sm" name="pv_password">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Confirm password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control input-sm" name="pv_password2">
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-theme">Validate</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End password validation -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start checkboxes & radio buttons validation -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Checkboxes & Radio Buttons Validation</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form class="form-horizontal form-bordered" role="form" id="checkbox-radio-validate">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-7">
                                <div class="rdio rdio-theme">
                                    <input id="cr_gender1" type="radio" name="cr_gender">
                                    <label for="cr_gender1">Male</label>
                                </div>
                                <div class="rdio rdio-theme">
                                    <input id="cr_gender2" type="radio" name="cr_gender">
                                    <label for="cr_gender2">Female</label>
                                </div>
                                <label for="cr_gender" class="error"></label>
                                <input type="text" class="hide" id="cr_gender"/>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Skills</label>
                            <div class="col-sm-7">
                                <div class="ckbox ckbox-theme">
                                    <input id="cr_skill1" type="checkbox" name="cr_skill">
                                    <label for="cr_skill1">HTML5 & CSS3</label>
                                </div>
                                <div class="ckbox ckbox-theme">
                                    <input id="cr_skill2" type="checkbox" name="cr_skill">
                                    <label for="cr_skill2">Javascript</label>
                                </div>
                                <div class="ckbox ckbox-theme">
                                    <input id="cr_skill3" type="checkbox" name="cr_skill">
                                    <label for="cr_skill3">PHP</label>
                                </div>
                                <label for="cr_skill" class="error"></label>
                                <input type="text" class="hide" id="cr_skill"/>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-theme">Validate</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End checkboxes & radio buttons validation -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start select boxes validation -->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Select Boxes Validation</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">

                <form class="form-horizontal form-bordered" role="form" id="select-validate">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Skill programming <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <select class="form-control" name="sv_skill_programming">
                                    <option value="">Choose skill</option>
                                    <option value="HTML5 & CSS3">HTML5 & CSS3</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="PHP">PHP</option>
                                </select>
                                <label for="sv_skill_programming" class="error"></label>
                                <input type="text" class="hide" id="sv_skill_programming"/>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Position <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <select class="form-control" name="sv_position" multiple="multiple">
                                    <option value="">Choose position</option>
                                    <option value="accountant">Accountant</option>
                                    <option value="software engineer">Software Engineer</option>
                                    <option value="sales assistant">Sales Assistant</option>
                                </select>
                                <label for="sv_position" class="error"></label>
                                <input type="text" class="hide" id="sv_position"/>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-theme">Validate</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End select boxes validation -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start sample validation 1-->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Sample Validation 1</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body no-padding">
                <form class="form-horizontal form-bordered" role="form" id="sample-validation-1">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">First Name <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv1_firstname">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv1_lastname">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Username <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv1_username">
                                <span class="help-block">Just sample username already use : john, peter, bill, jokowi</span>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control input-sm" name="sv1_password">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Confirm Password <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control input-sm" name="sv1_password_confirm">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email Address <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control input-sm" name="sv1_email">
                                <span class="help-block">Just sample email already use : jokowi@jk.co.id, george@bush.gov, bill@gates.com</span>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Gender <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <div class="rdio rdio-theme">
                                    <input id="sv1_gender1" type="radio" name="sv1_gender">
                                    <label for="sv1_gender1">Male</label>
                                </div>
                                <div class="rdio rdio-theme">
                                    <input id="sv1_gender2" type="radio" name="sv1_gender">
                                    <label for="sv1_gender2">Female</label>
                                </div>
                                <label for="sv1_gender" class="error"></label>
                                <input type="text" class="hide" id="sv1_gender"/>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Privacy Police <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <div class="ckbox ckbox-theme">
                                    <input id="terms-of-use-1" type="checkbox" name="sv1_terms">
                                    <label for="terms-of-use-1">I have read and accept <a href="#">Terms of Use</a>.</label>
                                </div>
                                <label for="sv1_terms" class="error"></label>
                                <input type="text" class="hide" id="sv1_terms"/>
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-theme">Sign up</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>

            </div>
        </div><!-- /.panel -->
        <!--/ End sample validation 1 -->

    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <!-- Start sample validation 2-->
        <div class="panel rounded shadow">
            <div class="panel-heading">
                <div class="pull-left">
                    <h3 class="panel-title">Sample Validation 2</h3>
                </div>
                <div class="pull-right">
                    <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                    <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-sub-heading">
                <div class="callout callout-warning">
                    <p>This form is quick & easy to complete - in only 3 steps! <span class="text-danger">This is a sample form, no information is sent anywhere.</span></p>
                </div>
            </div><!-- /.panel-sub-heading -->
            <div class="panel-body no-padding">

                <form class="form-horizontal form-bordered" role="form" id="sample-validation-2">
                    <div class="form-body">
                        <div class="form-group form-group-divider">
                            <div class="form-inner">
                                <h4 class="no-margin"><span class="label label-success label-circle">1</span> General Information</h4>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Company Name <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv2_company_name">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Company URL</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" value="http://">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">First Name <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv2_firstname">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv2_lastname">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Company Address</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">City <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv2_city">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">State <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <select class="form-control" name="sv2_state">
                                    <option value="">Choose State:</option>
                                    <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
                                </select>
                                <label for="sv2_state" class="error"></label>
                                <input type="text" class="hide" id="sv2_state"/>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Zip</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv2_phone">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group form-group-divider">
                            <div class="form-inner">
                                <h4 class="no-margin"><span class="label label-info label-circle">2</span> Login Information</h4>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control input-sm" name="sv2_email">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control input-sm" name="sv2_password">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Retype Password <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control input-sm" name="sv2_password_confirm">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group form-group-divider">
                            <div class="form-inner">
                                <h4 class="no-margin"><span class="label label-danger label-circle">3</span> Billing Information</h4>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Credit Card Type <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <select class="form-control" name="sv2_credit_card">
                                    <option value="">Choose Credit Card</option>
                                    <option value="amex">American Express</option>
                                    <option value="discover">Discover</option>
                                    <option value="mastercard">MasterCard</option>
                                    <option value="visa">Visa</option>
                                </select>
                                <label for="sv2_credit_card" class="error"></label>
                                <input type="text" class="hide" id="sv2_credit_card"/>
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Expiration</label>
                            <div class="col-sm-7">
                                <select class="form-control inline" name="sv2_expiration">
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
                                <select class="form-control inline">
                                    <option value="2007">2007</option>
                                    <option value="2008" selected="selected">2008</option>
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
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Credit Card Number <span class="asterisk">*</span></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control input-sm" name="sv2_credit_card_number">
                            </div>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Security Code</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control input-sm">
                            </div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->
                    <div class="form-footer">
                        <div class="col-sm-offset-3">
                            <button type="submit" class="btn btn-theme">Finish</button>
                        </div>
                    </div><!-- /.form-footer -->
                </form>

            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
        <!--/ End sample validation 2 -->


    </div>
</div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->