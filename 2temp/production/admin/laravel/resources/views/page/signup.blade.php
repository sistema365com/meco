@extends('layouts.lay_account')

<!-- START @SIGN WRAPPER -->
@section('content')
<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <img src="http://img.djavaui.com/?create=220x100,4888E1?f=ffffff" alt="brand logo"/>
    </div>
    <!--/ Brand -->

    <!-- Register form -->
    <form class="form-horizontal rounded shadow no-overflow" action="{{url('page/signin')}}">
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Create a new account</span>
                </div>
            </div>
        </div>
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="text" class="form-control" placeholder="Username">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="password" class="form-control" placeholder="Confirm Password">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="email" class="form-control" placeholder="Your Email">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                </div>
            </div>
        </div>
        <div class="sign-footer">
            <div class="form-group">
                <div class="callout callout-info no-margin">
                    <p class="text-muted">To confirm and activate your new account, we will need to send the activation code to your e-mail.</p>
                </div>
            </div>
            <div class="form-group">
                <div class="ckbox ckbox-theme">
                    <input id="term-of-service" value="1" type="checkbox">
                    <label for="term-of-service" class="rounded">I agree with <a href="#">Term Of Service</a></label>
                </div>
                <div class="ckbox ckbox-theme">
                    <input id="newsletter" value="1" type="checkbox">
                    <label for="newsletter" class="rounded">Send me newsletter</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded">Sign Up</button>
            </div>
        </div>
    </form>
    <!--/ Register form -->

    <!-- Content text -->
    <p class="text-muted text-center sign-link">Already have an account? <a href="{{url('page/signin')}}"> Sign in here</a></p>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->
@stop
<!--/ END SIGN WRAPPER -->
