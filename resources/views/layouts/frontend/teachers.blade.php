@include('layouts.frontend.fhead')
<body class="smoothscroll enable-animation">

<!-- SLIDE TOP -->

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
                <h1>PAGE TITLE</h1>
                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li class="active">Page Title</li>
                </ol><!-- /breadcrumbs -->
            </div>
        </div>
    </section>

    <section style="padding: 30px 0;">
        <div class="container">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('assetsh/images/demo/thematics/medical/t1-min.jpg')}}" alt="">
                            <div class="caption">
                                <h4 class="nomargin">John Doe</h4>
                                <small class="margin-bottom-20 block">Web Developer</small>

                                <p>Donec id elit non mi porta gravida at eget metus id dolor.</p>
                                <a href="#" class="btn btn-default btn-sm">READ MORE</a>
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
<!-- /PRELOADER -->

<!-- JAVASCRIPT FILES -->
@include('layouts.frontend.javascript')
</div>
</body>
</html>