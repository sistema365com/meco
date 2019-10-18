@extends('layouts.lay_admin')

<!-- START @PAGE CONTENT -->
@section('content')
<section id="page-content">

    <!-- Start header content -->
    <div class="header-content">
        <h2><i class="fa fa-pencil"></i> Search Course <span>Search Result Course Page</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{url('dashboard/index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Search Course</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End header content -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">

                <div class="panel rounded shadow no-overflow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Browse Skills</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="#">
                            <div class="form-group no-margin">
                                <select class="chosen-select" tabindex="2">
                                    <option value="web designer">Web Designer</option>
                                    <option value="graphic designer">Graphic Designer</option>
                                    <option value="web developer">Web Developer</option>
                                </select>
                                <select class="chosen-select" tabindex="2">
                                    <option value="html5">HTML5</option>
                                    <option value="bootstrap">Bootstrap</option>
                                    <option value="photoshop">Photoshop</option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </div><!-- /.form-group -->
                        </form>
                    </div><!-- /.panel-body -->
                    <div class="panel-footer">
                        <a href="#">Browse all topics <i class="fa fa-angle-right"></i></a>
                    </div><!-- /.panel-footer -->
                </div><!-- /.panel -->

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Price Range</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="#">
                            <div class="form-group no-margin">
                                <div class="rdio rdio-primary circle">
                                    <input id="price-range1" type="radio" name="price-range">
                                    <label for="price-range1">Any Price (100, 120)</label>
                                </div>
                                <div class="rdio rdio-primary circle">
                                    <input id="price-range2" type="radio" name="price-range">
                                    <label for="price-range2">Under $50 (100, 120)</label>
                                </div>
                                <div class="rdio rdio-primary circle">
                                    <input id="price-range3" type="radio" name="price-range">
                                    <label for="price-range3">Under $100 (100, 120)</label>
                                </div>
                                <div class="rdio rdio-primary circle">
                                    <input id="price-range4" type="radio" name="price-range">
                                    <label for="price-range4">Free (100, 120)</label>
                                </div>
                            </div><!-- /.form-group -->
                        </form>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Type <span class="label label-danger circle" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="right" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><i class="fa fa-info"></i></span></h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="#">
                            <div class="form-group no-margin">
                                <div class="rdio rdio-danger">
                                    <input id="type-course1" type="radio" name="type-course">
                                    <label for="type-course1">All Courses (50, 70)</label>
                                </div>
                                <div class="rdio rdio-danger">
                                    <input id="type-course2" type="radio" name="type-course">
                                    <label for="type-course2">Skill Based (50, 70)</label>
                                </div>
                                <div class="rdio rdio-danger">
                                    <input id="type-course3" type="radio" name="type-course">
                                    <label for="type-course3">Open Courses (50, 70)</label>
                                </div>
                                <div class="rdio rdio-danger">
                                    <input id="type-course4" type="radio" name="type-course">
                                    <label for="type-course4">Lectures (50, 70)</label>
                                </div>
                                <div class="rdio rdio-danger">
                                    <input id="type-course5" type="radio" name="type-course">
                                    <label for="type-course5">E-Books (50, 70)</label>
                                </div>
                            </div><!-- /.form-group -->
                        </form>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Learning Providers</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="#">
                            <div class="form-group no-margin">
                                <div class="ckbox ckbox-success">
                                    <input id="provider1" checked="checked" type="checkbox">
                                    <label for="provider1">All Courses</label>
                                </div>
                                <div class="ckbox ckbox-success">
                                    <input id="provider2" type="checkbox">
                                    <label for="provider2">Lynda (45)</label>
                                </div>
                                <div class="ckbox ckbox-success">
                                    <input id="provider3" type="checkbox">
                                    <label for="provider3">Treehouse (78)</label>
                                </div>
                                <div class="ckbox ckbox-success">
                                    <input id="provider4" type="checkbox">
                                    <label for="provider4">Codeschool (25)</label>
                                </div>
                                <div class="ckbox ckbox-success">
                                    <input id="provider5" type="checkbox">
                                    <label for="provider5">Ed2Go (120)</label>
                                </div>
                            </div><!-- /.form-group -->
                        </form>
                        <a href="#" class="btn btn-primary btn-block">Choose More</a>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">RELATED TOPICS TO HTML</h3>
                        </div><!-- /.pull-left -->
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        </div><!-- /.pull-right -->
                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body">
                        <ul class="list-unstyled no-margin">
                            <li>
                                <a href="#">Javascript</a>
                            </li>
                            <li>
                                <a href="#">CSS</a>
                            </li>
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                        </ul>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

            </div>
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="media-list list-search">
                    <div class="media rounded shadow no-overflow">
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider primary">TREEHOUSE</span>
                                <img src="http://img.djavaui.com/?create=230x150,81B71A?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Developing Internet Applications: HTML5, CSS3 & JQUERY</a></h4>
                            <p>This hands on course is intended for experienced Web designs...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 3 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> INTERMEDIATE</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">$15<small>/MO</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow selected">
                        <!-- Start ribbon wrapper -->
                        <div class="ribbon-wrapper">
                            <div class="ribbon ribbon-shadow ribbon-success">ACTIVE</div>
                        </div>
                        <!--/ End ribbon wrapper -->
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider danger">SKILLSHARE</span>
                                <img src="http://img.djavaui.com/?create=230x150,A90329?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">HTML5 & CSS3</a></h4>
                            <p>If you've been creating webpages and want to learn what's new in HTML5 & CSS3, this training if for you. There are new HTML...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 4 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> BEGINNER</span>
                                <span class="meta-selected text-muted">Live Course - Aug 14</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-check"></i></a>
                                <span class="meta-price pull-right">$25<small>/MO</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow">
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider warning">LYNDA</span>
                                <img src="http://img.djavaui.com/?create=230x150,F4645F?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Web Design Fundamentals</a></h4>
                            <p>This class will give you the basic knowledge in creating and designing websites.</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 1 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> BEGINNER</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">FREE</span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow">
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider info">FIZZLE</span>
                                <img src="http://img.djavaui.com/?create=230x150,6880B0?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Programming Custom User Interface with JQuery UI</a></h4>
                            <p>Students will learn how to exploit existing UI widgets such as...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 7 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> ADVANCED</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">$45<small>/MO</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow">
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider warning">LYNDA</span>
                                <img src="http://img.djavaui.com/?create=230x150,5a67a5?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Adobe Workflow Essentials</a></h4>
                            <p>Students will learn the fundamentals and essentials of Adobe workflow for Digital Graphic Design and Web Design, Photos...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 2 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> INTERMEDIATE</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">$15<small>/MO</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow">
                        <!-- Start ribbon wrapper -->
                        <div class="ribbon-wrapper">
                            <div class="ribbon ribbon-shadow ribbon-danger">HOT</div>
                        </div>
                        <!--/ End ribbon wrapper -->
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider danger">SKILLSHARE</span>
                                <img src="http://img.djavaui.com/?create=230x150,DD4814?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Mobile & Responsive Web Design</a></h4>
                            <p>In this training you'll learn important fundamentals by building a mobile specific website. Then you'll build a responsive site...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 6 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> INTERMEDIATE</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">$25<small>/MO</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow">
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider success">TREEHOUSE</span>
                                <img src="http://img.djavaui.com/?create=230x150,00B1E1?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Introduction to Javascript Weekend Workshop</a></h4>
                            <p>This workshop provides a full introduction of programming fundamentals using Javascript to create rich web application...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 2 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> ADVANCED</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">$30<small>/MO</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow">
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider primary">CODESCHOOL</span>
                                <img src="http://img.djavaui.com/?create=230x150,81B71A?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Learn HTML5 in 1 hour</a></h4>
                            <p>Learn how to program in HTML5 in 1 hour! HTML5 is one of the most important events to happen to web development...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 7 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> ADVANCED</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">$60<small>/MO</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="media rounded shadow no-overflow">
                        <div class="media-left">
                            <a href="#">
                                <span class="meta-provider warning">DJAVA UI</span>
                                <img src="http://img.djavaui.com/?create=230x150,D39174?f=ffffff" class="img-responsive media-object" alt="..."/>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Building HTML5 Forms - Everything You Need To Know!</a></h4>
                            <p>Learn How To Build Forms Using HTML5. A Practical Hands...</p>
                            <div class="meta-search">
                                <span class="meta-mounth text-muted"><i class="fa fa-clock-o"></i> 3 MONTHS</span>
                                <span class="meta-level text-muted"><i class="fa fa-user"></i> BEGINNER</span>
                                <a href="#" class="meta-action pull-right"><i class="fa fa-plus"></i></a>
                                <span class="meta-price pull-right">FREE</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><img src="{{$assetUrl}}global/img/loader/general/2.gif" alt="..."/> Load more courses</p>
                </div>
            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    @include('layouts._footer-admin')
    <!--/ End footer content -->

</section><!-- /#page-content -->
@stop
<!--/ END PAGE CONTENT -->
