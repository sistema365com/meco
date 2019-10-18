<!-- START @SIGN WRAPPER -->
<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <img src="http://img.djavaui.com/?create=220x100,4888E1?f=ffffff" alt="brand logo"/>
    </div>
    <!--/ Brand -->

    <!-- Lock screen form -->
    <form class="lock form-horizontal rounded shadow" action="{url}production/admin/php/index.php?v=dashboard">
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <img src="http://img.djavaui.com/?create=100x100,4888E1?f=ffffff" alt="admin" class="img-circle">
                    <p>Welcome Back - <strong>Tol Lee</strong></p>
                </div>
            </div>
        </div>
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div>
        </div>
        <div class="sign-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="ckbox ckbox-theme">
                            <input id="rememberme" value="1" type="checkbox">
                            <label for="rememberme" class="rounded">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{url}production/admin/php/index.php?v=page-lost-password" title="lost password">Lost password?</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded">Unlock</button>
            </div>
        </div>
    </form>
    <!--/ Lock screen form -->

</div><!-- /#sign-wrapper -->
<!--/ END SIGN WRAPPER -->