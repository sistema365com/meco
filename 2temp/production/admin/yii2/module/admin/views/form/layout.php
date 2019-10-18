<?php

use app\assets\admin\form\LayoutAsset;

LayoutAsset::register($this);

$this->title = 'FORM LAYOUT | BLANKON - Fullpack Admin Theme';
?>


<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-list-alt"></i> Form Layouts <span>variant form layouts</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Forms</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Form Layouts</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <!-- Start inline form -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Inline Form <code>.form-inline</code></h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">

                        <form class="form-inline">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div class="ckbox ckbox-theme mt-10">
                                        <input id="rememberme1" value="1" type="checkbox">
                                        <label for="rememberme1">Remember me</label>
                                    </div>
                                </div><!-- /.form-group -->
                                <button type="submit" class="btn btn-success">Sign in</button>
                            </div><!-- /.form-body -->
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End inline form -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">

                <!-- Start horizontal form -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Horizontal Form <code>.form-horizontal</code></h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">

                        <form class="form-horizontal mt-10">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-7">
                                        <div class="ckbox ckbox-theme">
                                            <input id="rememberme2" value="1" type="checkbox">
                                            <label for="rememberme2">Remember me</label>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.form-body -->
                            <div class="form-footer">
                                <div class="col-sm-offset-3">
                                    <button type="submit" class="btn btn-success">Sign in</button>
                                </div>
                            </div><!-- /.form-footer -->
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End horizontal form -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start bordered form -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Bordered Form <code>.form-bordered</code></h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">

                        <form class="form-horizontal form-bordered" role="form">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="firstname-1" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" id="firstname-1">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="password-1" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control input-sm" id="password-1">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-7">
                                        <div class="ckbox ckbox-theme">
                                            <input id="rememberme-3" value="1" type="checkbox">
                                            <label for="rememberme-3">Remember me</label>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.form-body -->
                            <div class="form-footer">
                                <div class="col-sm-offset-3">
                                    <button type="submit" class="btn btn-success">Sign in</button>
                                </div>
                            </div><!-- /.form-footer -->
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End bordered form -->

            </div>
            <div class="col-md-6">

                <!-- Start striped form -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Striped Form <code>.form-striped</code></h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">

                        <form class="form-horizontal form-striped" role="form">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="firstname-2" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" id="firstname-2">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="password-2" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control input-sm" id="password-2">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group no-margin">
                                    <div class="col-sm-offset-3 col-sm-7">
                                        <div class="ckbox ckbox-theme">
                                            <input id="rememberme-4" value="1" type="checkbox">
                                            <label for="rememberme-4">Remember me</label>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.form-body -->
                            <div class="form-footer">
                                <div class="col-sm-offset-3">
                                    <button type="submit" class="btn btn-success">Sign in</button>
                                </div>
                            </div><!-- /.form-footer -->
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End striped form -->

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-6">

                <!-- Start comment form -->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Comment Form</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body no-padding">

                        <form class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group no-margin">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mb-15" placeholder="Name"/>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mb-15" placeholder="Email"/>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control mb-15" placeholder="Website"/>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Title"/>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Comment goes here ..."></textarea>
                                </div><!-- /.form-group -->
                            </div><!-- /.form-body -->
                            <div class="form-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div><!-- /.form-footer -->
                        </form>

                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End comment form -->

            </div>
            <div class="col-md-6">

                <!-- Start register form -->
                <div class="panel rounded shadow no-overflow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Register Form</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body no-padding">

                        <form class="form-horizontal form-bordered" role="form">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">File Upload</label>
                                    <div class="col-sm-8">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-success btn-file btn-sm">
                                                    <span class="fileupload-new">Upload profile</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" />
                                                </span>
                                                <a href="#" class="btn btn-danger fileupload-exists btn-sm" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="name" class="col-sm-4 control-label">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" id="name" placeholder="First and last name">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="email" class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" id="email" placeholder="example@domain.com">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="username" class="col-sm-4 control-label">Create a username</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" id="username" placeholder="username">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="create-password" class="col-sm-4 control-label">Create a password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control input-sm" id="create-password">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="confirm-password" class="col-sm-4 control-label">Confirm your password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control input-sm" id="confirm-password">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group form-group-divider">
                                    <div class="form-inner">
                                        <h4 class="no-margin">Additional Information</h4>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Birthday</label>
                                    <div class="col-sm-7">
                                        <select class="chosen-select">
                                            <option value="" selected="selected">Month</option>
                                            <option value="january">January</option>
                                            <option value="february">February</option>
                                            <option value="march">March</option>
                                            <option value="april">April</option>
                                            <option value="may">May</option>
                                            <option value="june">June</option>
                                            <option value="july">July</option>
                                            <option value="august">August</option>
                                            <option value="september">September</option>
                                            <option value="october">October</option>
                                            <option value="november">November</option>
                                            <option value="december">December</option>
                                        </select>
                                        <select class="chosen-select">
                                            <option value="0" selected="selected">Day</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <select class="chosen-select">
                                            <option value="0" selected="selected">Year</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                            <option value="1969">1969</option>
                                            <option value="1968">1968</option>
                                            <option value="1967">1967</option>
                                            <option value="1966">1966</option>
                                            <option value="1965">1965</option>
                                            <option value="1964">1964</option>
                                            <option value="1963">1963</option>
                                            <option value="1962">1962</option>
                                            <option value="1961">1961</option>
                                            <option value="1960">1960</option>
                                            <option value="1959">1959</option>
                                            <option value="1958">1958</option>
                                            <option value="1957">1957</option>
                                            <option value="1956">1956</option>
                                            <option value="1955">1955</option>
                                            <option value="1954">1954</option>
                                            <option value="1953">1953</option>
                                            <option value="1952">1952</option>
                                            <option value="1951">1951</option>
                                            <option value="1950">1950</option>
                                            <option value="1949">1949</option>
                                            <option value="1948">1948</option>
                                            <option value="1947">1947</option>
                                            <option value="1946">1946</option>
                                            <option value="1945">1945</option>
                                            <option value="1944">1944</option>
                                            <option value="1943">1943</option>
                                            <option value="1942">1942</option>
                                            <option value="1941">1941</option>
                                            <option value="1940">1940</option>
                                            <option value="1939">1939</option>
                                            <option value="1938">1938</option>
                                            <option value="1937">1937</option>
                                            <option value="1936">1936</option>
                                            <option value="1935">1935</option>
                                            <option value="1934">1934</option>
                                            <option value="1933">1933</option>
                                            <option value="1932">1932</option>
                                            <option value="1931">1931</option>
                                            <option value="1930">1930</option>
                                            <option value="1929">1929</option>
                                            <option value="1928">1928</option>
                                            <option value="1927">1927</option>
                                            <option value="1926">1926</option>
                                            <option value="1925">1925</option>
                                            <option value="1924">1924</option>
                                            <option value="1923">1923</option>
                                            <option value="1922">1922</option>
                                            <option value="1921">1921</option>
                                            <option value="1920">1920</option>
                                            <option value="1919">1919</option>
                                            <option value="1918">1918</option>
                                            <option value="1917">1917</option>
                                            <option value="1916">1916</option>
                                            <option value="1915">1915</option>
                                            <option value="1914">1914</option>
                                            <option value="1913">1913</option>
                                            <option value="1912">1912</option>
                                            <option value="1911">1911</option>
                                            <option value="1910">1910</option>
                                            <option value="1909">1909</option>
                                            <option value="1908">1908</option>
                                            <option value="1907">1907</option>
                                            <option value="1906">1906</option>
                                            <option value="1905">1905</option>
                                        </select>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="gender" class="col-sm-4 control-label">Gender</label>
                                    <div class="col-sm-7">
                                        <select id="gender" class="chosen-select">
                                            <option value="">i am..</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Other</option>
                                        </select>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="mobile-phone" class="col-sm-4 control-label">Mobile phone</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control input-sm" id="mobile-phone">
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.form-body -->
                            <div class="form-footer">
                                <div class="col-sm-offset-4">
                                    <button type="submit" class="btn btn-success">Sign up</button>
                                </div>
                            </div><!-- /.form-footer -->
                        </form>

                    </div>
                </div>
                <!--/ End register form -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin'); ?>
    <!--/ End footer content -->

</section><!-- /#page-content -->