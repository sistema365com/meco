<!-- Start page div -->
<div class="header-content">
    <h2><i class="fa fa-pencil"></i> Compose <span>mail compose sample</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url($this->config->item('link_url').'/dashboard')?>">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Mail</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Compose</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page div -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <!-- Start mail page -->
    <div class="row compose-mail-wrapper">
        <div class="col-sm-3">
            <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                <li class="active">
                    <a href="mail-inbox.html">
                        <i class="fa fa-inbox"></i> Inbox  <span class="label pull-right">7</span>
                    </a>
                </li>
                <li>
                    <a href="mail-compose.html"><i class="fa fa-envelope-o"></i> Send Mail</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-certificate"></i> Important</a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">35</span>
                    </a>
                </li>
                <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
            </ul>

            <h5 class="nav-email-subtitle">More</h5>
            <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                <li>
                    <a href="#">
                        <i class="fa fa-folder-open"></i> Promotions  <span class="label label-danger pull-right">3</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder-open"></i> Job list
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder-open"></i> Backup
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">
            <!-- Star form compose mail -->
            <form class="form-horizontal">
                <div class="panel rounded shadow panel-danger">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">View message</h3>
                        </div>
                        <div class="pull-right">
                            <form action="#" class="form-horizontal mr-5 mt-3">
                                <div class="form-group no-margin no-padding has-feedback search-mail">
                                    <input type="text" class="form-control no-border" placeholder="Search mail">
                                    <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-sub-heading inner-all">
                        <div class="pull-left">
                            <ul class="list-inline no-margin">
                                <li>
                                    <a href="mail-inbox.html" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save Draft</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-send"></i> Send Email</button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-sub-heading -->
                    <div class="panel-body">
                        <div class="compose-mail">
                            <div class="form-group">
                                <label for="to" class="col-sm-2 control-label">To:</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" id="to">
                                        <div class="input-group-btn">
                                            <button type="button" data-toggle="collapse" data-target="#ccbcc" class="btn btn-default btn-sm">CC/BCC <span class="caret"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.form-group -->
                            <div id="ccbcc" class="collapse">
                                <div class="form-group">
                                    <label for="Cc" class="col-sm-2 control-label">Cc:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" id="Cc">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Bcc" class="col-sm-2 control-label">Bcc:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input-sm" id="Bcc">
                                    </div>
                                </div>
                            </div><!-- /.collapse -->
                            <div class="form-group">
                                <label for="subject" class="col-sm-2 control-label">Subject:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="subject" class="form-control input-sm">
                                </div>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <textarea name="" id="compose-editor" class="form-control" rows="10" placeholder="Write your content here..."></textarea>
                                </div>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="file" class="col-sm-2 control-label">Attach file:</label>
                                <div class="col-sm-10">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="input-append">
                                            <div class="uneditable-input">
                                                <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                                <span class="fileupload-preview"></span>
                                            </div>
                                                        <span class="btn btn-theme btn-sm btn-success btn-file">
                                                            <span class="fileupload-new">Select file</span>
                                                            <span class="fileupload-exists">Change</span>
                                                            <input type="file" id="file" />
                                                        </span>
                                            <a href="#" class="btn btn-danger btn-sm fileupload-exists" data-dismiss="fileupload">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.form-group -->
                        </div><!-- /.compose-mail -->
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">
                        <div class="pull-right">
                            <button class="btn btn-danger btn-sm">Cancel</button>
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-send"></i> Send Email</button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-footer -->
                </div><!-- /.panel -->
            </form>
            <!--/ End form compose mail -->
        </div>
    </div><!-- /.row -->
    <!--/ End mail page -->

</div><!-- /.body-content -->
<!--/ End body content -->