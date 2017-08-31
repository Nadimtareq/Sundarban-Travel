@include('layouts.frontend.fhead')
<body class="smoothscroll enable-animation">


<!-- /SLIDE TOP -->

<!-- WRAPPER -->
<div id="wrapper">

    <!-- Top Bar -->
    <div id="topBar">
        <div class="container">

            <!-- right -->
            <ul class="top-links list-inline pull-right">
                <li>

                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">MY ACCOUNT</a>
                    <ul class="dropdown-menu pull-right">
                        <li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> WISHLIST</a></li>
                        <li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> SETTINGS</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                    </ul>

                </li>
                <li><a href="{{route('Auth_login')}}">LOGIN</a></li>
            </ul>

            <!-- left -->


        </div>
    </div>
    <!-- /Top Bar -->

    <!-- TOP BAR -->
    <div class="text-center padding-5" id="top">
        <!-- LOGO -->
        <a class="logo" href="index.html"><img alt="" src="{{asset('assetsh/images/logo_dark.png')}}"></a>
    </div>
    <!-- /TOP BAR -->

    <!-- STICKY HEADER -->
 @include('layouts.frontend.fnavbar')

    <section style="padding: 30px 0;">
        <div class="container">

            <div class="col-md-12">
                <div class="alert alert-mini alert-primary margin-bottom-30">

                    <strong>BREAKING NEWS:</strong>

                    <div class="owl-carousel controlls-over nomargin" data-plugin-options='{"autoPlay":3000, "stopOnHover":true, "items": 1, "singleItem": true, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
                        @foreach($notice as $item)
                            <div class="text-left size-14">
                                <a href="#">{!! $item->title !!}.</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /BREAKING NEWS -->

            <!-- CONTENT AREA -->
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-12">
                        <!-- SLIDER AREA -->


                        <div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"backSlide", "progressBar":"true"}'>

                            @foreach($slider as $value)


                                <a href="#">
                                    <img alt="" class="img-responsive" src="{!! $value->img_url !!}">
                                </a>
                                {{--<a href="#">
                                    <img alt="" class="img-responsive" src="assetsh/images/demo/magazine/1-min.jpg">
                                </a>
                                <a href="#">
                                    <img alt="" class="img-responsive" src="assetsh/images/demo/magazine/2-min.jpg">
                                </a>
                                <a href="#">
                                    <img alt="" class="img-responsive" src="assetsh/images/demo/magazine/3-min.jpg">
                                </a>--}}
                            @endforeach
                        </div>
                        <!-- /SLIDER AREA -->
                    </div>
                </div>

            </div>
            <!-- /CONTENT AREA -->

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">

                        <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-0">
                            <h4>Principal's Message</h4>
                        </div>

                        @foreach($message as $value)
                            @if($value->m_type=='Principal')
                                <p>
                                    {!! $value->message !!}
                                </p>
                            @endif
                        @endforeach
                        <a href="" class="btn btn-reveal btn-primary margin-top-0">
                            <i class="fa fa-plus"></i>
                            <span>Read More</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 30px 0;">
        <div class="container">


            <div class="col-md-6">
                <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-0">
                    <h4>Student Attendance</h4>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-static box-border-top">
                            <div class="row countTo-lg text-center">
                                <div class="col-md-12">
                                    <span class="countTo" data-speed="3000" style="color:#1693A5">{!! $Totalst !!}</span>
                                    <h4>Total</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-static box-border-top">
                            <div class="row countTo-lg text-center">
                                <div class="col-md-12">
                                    <span class="countTo" data-speed="3000" style="color:#1693A5">{!! $satten !!}</span>
                                    <h4>Present</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-static box-border-top">
                            <div class="row countTo-lg text-center">
                                <div class="col-md-12">
                                    <span class="countTo" data-speed="3000" style="color:#1693A5">{!! $satten1 !!}</span>
                                    <h4>Absent</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-20">
                    <h4>Employee Attendance</h4>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-static box-border-top">
                            <div class="row countTo-lg text-center">
                                <div class="col-md-12">
                                    <span class="countTo" data-speed="3000" style="color:#1693A5">{!! $Totalsf !!}</span>
                                    <h4>Total</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-static box-border-top">
                            <div class="row countTo-lg text-center">
                                <div class="col-md-12">
                                    <span class="countTo" data-speed="3000" style="color:#1693A5">{!! $stfatten !!}</span>
                                    <h4>Present</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-static box-border-top">
                            <div class="row countTo-lg text-center">
                                <div class="col-md-12">
                                    <span class="countTo" data-speed="3000" style="color:#1693A5">{!! $stfatten1 !!}</span>
                                    <h4>Absent</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-0">
                            <h4>Recent Notice</h4>
                        </div>

                        <div class="box-inner">
                            <h3>
                                <a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
                                Notice List
                            </h3>
                            <div class="height-350 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">

                                <div class="clearfix margin-bottom-10">
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis, eligendi error et fuga fugit, itaque laboriosam modi neque non.</p>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div>

                                <hr>

                                <div class="clearfix margin-bottom-10">
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis, eligendi error et fuga fugit, itaque laboriosam modi neque non.</p>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div>

                                <hr>

                                <div class="clearfix margin-bottom-10">
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis, eligendi error et fuga fugit, itaque laboriosam modi neque non.</p>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div>

                                <hr>

                                <div class="clearfix margin-bottom-10">
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis, eligendi error et fuga fugit, itaque laboriosam modi neque non.</p>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div>

                                <hr>

                                <div class="clearfix margin-bottom-10">
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab debitis, eligendi error et fuga fugit, itaque laboriosam modi neque non.</p>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section style="padding: 30px 0;">
        <div class="container">

            <!--EVENTS-->
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-0">
                            <h4>Events</h4>
                        </div>

                        <div class="tabs nomargin-top hidden-xs margin-bottom-60">

                            <!-- tabs -->
                            <ul class="nav nav-tabs nav-bottom-border nav-justified">
                                <li class="active">
                                    <a href="#tab_1" data-toggle="tab" aria-expanded="true">
                                        Recent
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#tab_2" data-toggle="tab" aria-expanded="false">
                                        Upcoming
                                    </a>
                                </li>
                            </ul>

                            <!-- tabs content -->
                            <div class="tab-content margin-bottom-60 margin-top-30">

                                <!-- POPULAR -->
                                <div id="tab_1" class="tab-pane active">

                                    <div class="row tab-post"><!-- post -->
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <a href="">
                                                <img src="assets/images/demo/people/300x300/1-min.jpg" alt="" width="50">
                                            </a>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <a href="" class="tab-post-link">Maecenas metus nulla</a>
                                            <small>June 29 2014</small>
                                        </div>
                                    </div><!-- /post -->

                                    <div class="row tab-post"><!-- post -->
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <a href="">
                                                <img src="assets/images/demo/people/300x300/2-min.jpg" alt="" width="50">
                                            </a>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <a href="" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
                                            <small>June 29 2014</small>
                                        </div>
                                    </div><!-- /post -->

                                    <div class="row tab-post"><!-- post -->
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <a href="">
                                                <img src="assets/images/demo/people/300x300/3-min.jpg" alt="" width="50">
                                            </a>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <a href="" class="tab-post-link">Nam et lacus neque. Ut enim massa, sodales</a>
                                            <small>June 29 2014</small>
                                        </div>
                                    </div><!-- /post -->

                                </div>
                                <!-- /POPULAR -->


                                <!-- RECENT -->
                                <div id="tab_2" class="tab-pane">

                                    <div class="row tab-post"><!-- post -->
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <a href="">
                                                <img src="assets/images/demo/people/300x300/4-min.jpg" alt="" width="50">
                                            </a>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <a href="" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
                                            <small>June 29 2014</small>
                                        </div>
                                    </div><!-- /post -->

                                    <div class="row tab-post"><!-- post -->
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <a href="">
                                                <img src="assets/images/demo/people/300x300/5-min.jpg" alt="" width="50">
                                            </a>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <a href="" class="tab-post-link">Maecenas metus nulla</a>
                                            <small>June 29 2014</small>
                                        </div>
                                    </div><!-- /post -->

                                    <div class="row tab-post"><!-- post -->
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <a href="">
                                                <img src="assets/images/demo/people/300x300/6-min.jpg" alt="" width="50">
                                            </a>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <a href="" class="tab-post-link">Quisque ut nulla at nunc</a>
                                            <small>June 29 2014</small>
                                        </div>
                                    </div><!-- /post -->
                                </div>
                                <!-- /RECENT -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/EVENTS-->

            <!--IMPORTANT LINKS-->
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-0">
                            <h4>Important Links</h4>
                        </div>

                        <div class="box-inner">
                            <h3>
                                <a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
                                Most Recent
                            </h3>
                            <div class="height-300 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-success label-square pull-left">
													<i class="fa fa-comment"></i>
												</span>
                                    <span class="size-14 text-muted"><b>New Comment</b>: <a href="blog-single-default.html">Lorem ipsum Dolor</a></span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-danger label-square pull-left">
													<i class="glyphicon glyphicon-remove"></i>
												</span>
                                    <span class="size-14 text-muted"><b>Rejected</b>: <a href="#">Joana Doe</a> rejected friendship</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-warning label-square pull-left">
													<i class="fa fa-warning"></i>
												</span>
                                    <span class="size-14 text-muted"><b>Warning</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-info label-square pull-left">
													<i class="fa fa-info-circle"></i>
												</span>
                                    <span class="size-14 text-muted"><b>Info</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-primary label-square pull-left">
													<i class="fa fa-check"></i>
												</span>
                                    <span class="size-14 text-muted"><b>Primary</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-default label-square pull-left">
													<i class="fa fa-heart-o"></i>
												</span>
                                    <span class="size-14 text-muted"><b>Default</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-purple label-square pull-left">
													<i class="fa fa-clock-o"></i>
												</span>
                                    <span class="size-14 text-muted"><b>Various</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/IMPORTANT LINKS-->

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title heading-dotted text-center margin-bottom-20 margin-top-0">
                            <h4>Popular Contents</h4>
                        </div>

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
                                            <i class="fa fa-heart-o"></i>
                                            Most Viewed
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse in" aria-expanded="true" style="">
                                    <div class="panel-body">
                                        <ul class="list-unstyled list-icons margin-bottom-10">
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                                            <i class="fa fa-star"></i>
                                            Most Rated
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse" aria-expanded="false">
                                    <div class="panel-body">
                                        <ul class="list-unstyled list-icons margin-bottom-10">
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                                            <i class="fa fa-comment"></i>
                                            Most Recent
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse" aria-expanded="false">
                                    <div class="panel-body">
                                        <ul class="list-unstyled list-icons margin-bottom-10">
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                            <li class="margin-top-6"><i class="fa fa-angle-right"></i> <a href="#">Australia to dump dredged sand in Great Barrier Reef Park</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->

@include('layouts.frontend.footer')

<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>

<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>


@include('layouts.frontend.javascript')
</div>
</body>
</html>