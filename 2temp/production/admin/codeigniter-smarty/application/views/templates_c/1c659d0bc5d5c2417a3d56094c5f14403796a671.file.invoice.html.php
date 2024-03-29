<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-25 08:50:10
         compiled from "C:\xampp\htdocs\blankon-fullpack-admin-theme\production\admin\codeigniter-smarty\application\views\templates\contents\pages\invoice.html" */ ?>
<?php /*%%SmartyHeaderCode:158580f00a2a9bc43-36202429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c659d0bc5d5c2417a3d56094c5f14403796a671' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blankon-fullpack-admin-theme\\production\\admin\\codeigniter-smarty\\application\\views\\templates\\contents\\pages\\invoice.html',
      1 => 1477377992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158580f00a2a9bc43-36202429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_580f00a2ad25c8_22737838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f00a2ad25c8_22737838')) {function content_580f00a2ad25c8_22737838($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-file-o"></i> Invoice <span>invoice sample</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url('production/admin/codeigniter-smarty/dashboard');?>
">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Pages</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">Invoice</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-invoice rounded">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="no-margin">Invoice #PR9KL</h3>
                    </div>
                    <div class="pull-right">
                        <div class="logo-block"><img src="http://img.djavaui.com/?create=100x60,4888E1?f=ffffff" alt="Logo"></div>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading">
                    <div class="row inner-all">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="text-left mb-10">
                                <h3 class="mt-0">Company information</h3>
                                <strong>FROM</strong>
                                <address>
                                    <strong>Djava UI, Inc.</strong><br>
                                    Tambak bayan no.13, Babarsari, Sleman<br>
                                    Yogyakarta, DIY 94107<br>
                                    <abbr title="Phone">P:</abbr> (777) 777-66666
                                </address>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="text-right">
                                <h3 class="mt-0">Client information</h3>
                                <strong>TO</strong>
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                                <br/>
                                <p class="text-right"><strong>Invoice Date:</strong> June 07, 2014</p>
                                <p class="text-right"><strong>Due Date:</strong> June 08, 2014</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel-sub-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <h5>Invoice for Services Under Contract #777 from 12.08.2013</h5>
                        <table class="table table-striped table-theme">
                            <thead>
                            <tr>
                                <th>Product/Product description</th>
                                <th>Qty</th>
                                <th>Unit Price $</th>
                                <th>Tax Rate %</th>
                                <th>Tax</th>
                                <th>Total Price $</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><div class="product-name">
                                    <div class="product-num">1</div>
                                    <h4>Wordpress Theme Development</h4>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</small> </div></td>
                                <td>2</td>
                                <td>$600</td>
                                <td>Reverse Charge</td>
                                <td>0.00</td>
                                <td>$1200</td>
                            </tr>
                            <tr>
                                <td><div class="product-name">
                                    <div class="product-num rounded">2</div>
                                    <h4>Logo design and custom graphics design</h4>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small> </div></td>
                                <td>1</td>
                                <td>$400</td>
                                <td>Reverse Charge</td>
                                <td>0.00</td>
                                <td>$400</td>
                            </tr>
                            <tr>
                                <td><div class="product-name">
                                    <div class="product-num circle">3</div>
                                    <h4>Maintenance Contract</h4>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small> </div></td>
                                <td>3</td>
                                <td>$200</td>
                                <td>Reverse Charge</td>
                                <td>0.00</td>
                                <td>$600</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3" rowspan="3">&nbsp;</td>
                                <td colspan="2">Total (Net)</td>
                                <td colspan="2">$2200</td>
                            </tr>
                            <tr>
                                <td colspan="2">VAT</td>
                                <td colspan="2">0.00</td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                <td colspan="2"><b>$2200</b></td>
                            </tr>
                            </tfoot>

                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /.panel-body -->
                <div class="panel-footer">
                    <div class="pull-left hidden-sm hidden-xs">
                        <p class="no-margin">Thank you for your business. Please make sure all cheques payable with Account No. 7564534 </p>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-success pull-right rounded"><i class="fa fa-fw fa-arrow-right"></i> Proceed to Payment</button>
                        <button class="btn btn-default pull-right mr-5 rounded"><i class="fa fa-print"></i> Print</button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-footer -->
            </div><!-- /.panel-invoice -->
        </div>
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
