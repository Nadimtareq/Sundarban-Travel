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

    <section class="page-header page-header-xs">
        <div class="container">
            <div class="col-md-12">
                <h1>Facilities</h1>
                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li class="active">Page Title</li>
                </ol>
                <!-- /breadcrumbs -->
            </div>
        </div>
    </section>

    <section style="padding: 30px 0;">
        <div class="container">
            <div class="col-md-3 pull-left">

                <!-- CATEGORIES -->
                <div class="side-nav margin-bottom-60">

                    <ul class="list-group list-group-bordered list-group-noicon uppercase">
                        <li class="list-group-item  "><a href="history.html"><span class="size-11 text-muted pull-right"></span> History</a></li>
                        <li class="list-group-item "><a href="our_message.html"><span class="size-11 text-muted pull-right"></span> our message</a></li>
                        <li class="list-group-item "><a href="mission_vission.html"><span class="size-11 text-muted pull-right"></span> mission & vission</a></li>
                        <li class="list-group-item"><a href="master_plan.html"><span class="size-11 text-muted pull-right"></span> master plan</a></li>
                        <li class="list-group-item"><a href="infrastructure.html"><span class="size-11 text-muted pull-right"></span> infrastructure</a></li>
                        <li class="list-group-item active"><a href="facilities.html"><span class="size-11 text-muted pull-right"></span>facilities</a></li>

                    </ul>

                </div>
                <!-- /CATEGORIES -->
            </div>

            <!-- CONTENT AREA -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="text-center">
                            <i class="ico-light ico-lg ico-rounded ico-hover et-circle-compass"></i>
                            <h4>Web Design</h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>

                            <a href="#">
                                Read
                                <!-- /word rotator -->
                                <span class="word-rotator" data-delay="2000">
                                        <span class="items">
                                            <span>more</span>
                                            <span>now</span>
                                        </span>
                                    </span><!-- /word rotator -->
                                <i class="glyphicon glyphicon-menu-right size-12"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="text-center">
                            <i class="ico-light ico-lg ico-rounded ico-hover et-piechart"></i>
                            <h4>Web Analytics</h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>

                            <a href="#">
                                Read
                                <!-- /word rotator -->
                                <span class="word-rotator" data-delay="2000">
                                        <span class="items">
                                            <span>more</span>
                                            <span>now</span>
                                        </span>
                                    </span><!-- /word rotator -->
                                <i class="glyphicon glyphicon-menu-right size-12"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="text-center">
                            <i class="ico-light ico-lg ico-rounded ico-hover et-strategy"></i>
                            <h4>Web Development</h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>

                            <a href="#">
                                Read
                                <!-- /word rotator -->
                                <span class="word-rotator" data-delay="2000">
                                        <span class="items">
                                            <span>more</span>
                                            <span>now</span>
                                        </span>
                                    </span><!-- /word rotator -->
                                <i class="glyphicon glyphicon-menu-right size-12"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="text-center">
                            <i class="ico-light ico-lg ico-rounded ico-hover et-streetsign"></i>
                            <h4>Marketing</h4>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>

                            <a href="#">
                                Read
                                <!-- /word rotator -->
                                <span class="word-rotator" data-delay="2000">
                                        <span class="items">
                                            <span>more</span>
                                            <span>now</span>
                                        </span>
                                    </span><!-- /word rotator -->
                                <i class="glyphicon glyphicon-menu-right size-12"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /CONTENT AREA -->
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
<!-- /PRELOADER -->

<!-- JAVASCRIPT FILES -->
@include('layouts.frontend.javascript')
</body>
</html>