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
                <li><a href="">LOGIN</a></li>
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

        <!-- /Top Nav -->
    @include('layouts.frontend.fnavbar')

    <section class="page-header page-header-xs">
        <div class="container">
            <div class="col-md-12">
                <h1>INTERNAL RESULT</h1>
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
            <div class="col-md-12">

                <div class="toggle toggle-transparent-body toggle-accordion">

                    <div class="toggle active">
                        <label>Class One</label>
                        <div class="toggle-content" style="display: block;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-vertical-middle">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>Class Two</label>
                        <div class="toggle-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-vertical-middle">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="toggle">
                        <label>Class Three</label>
                        <div class="toggle-content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-vertical-middle">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course Two</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-danger">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>Course One</td>
                                        <td>C12345</td>
                                        <td><div class="rating rating-0 size-13 width-100"><!-- rating-0 ... rating-5 --></div></td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    </tbody>
                                </table>
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
{{--<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div>--}}
<!-- /PRELOADER -->

<!-- JAVASCRIPT FILES -->
@include('layouts.frontend.javascript')
</div>
</body>
</html>