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
                <h1>ONLINE ADMISSION</h1>
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
            <div class="row">

                <!-- RIGHT - FORM -->
                <div class="col-md-6 col-md-offset-3">

                    <div class="heading-title heading-border-bottom">
                        <h2 class="size-20">APPLY NOW</h2>
                    </div>


                    <form class="validate" id="careers_apply" action="" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
                        <fieldset>
                            <!-- required [php action request] -->
                            <input type="hidden" name="action" value="contact_send" />

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>First Name *</label>
                                        <input type="text" name="contact[first_name]" value="" class="form-control required">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Last Name *</label>
                                        <input type="text" name="contact[last_name]" value="" class="form-control required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Email *</label>
                                        <input type="email" name="contact[email]" value="" class="form-control required">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Phone *</label>
                                        <input type="text" name="contact[phone]" value="" class="form-control required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12">
                                        <label>Position *</label>
                                        <select name="contact[position]" class="form-control pointer required">
                                            <option value="">--- Select ---</option>
                                            <option value="Marketing">PR &amp; Marketing</option>
                                            <option value="Developer">Web Developer</option>
                                            <option value="php">PHP Programmer</option>
                                            <option value="Javascript">Javascript Programmer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6">
                                        <label>Expected Salary *</label>
                                        <input type="text" name="contact[expected_salary]" value="" class="form-control required">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label>Start Date *</label>
                                        <input type="text" name="contact[start_date]" value="" class="form-control datepicker required" data-format="yyyy-mm-dd" data-lang="en" data-RTL="false">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12">
                                        <label>Experience *</label>
                                        <textarea name="contact[experience]" rows="4" class="form-control required"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12">
                                        <label>
                                            Website
                                            <small class="text-muted">- optional</small>
                                        </label>
                                        <input type="text" name="contact[website]" placeholder="http://" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>
                                            File Attachment
                                            <small class="text-muted">Curriculum Vitae - optional</small>
                                        </label>

                                        <!-- custom file upload -->
                                        <div class="fancy-file-upload fancy-file-primary">
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);" />
                                            <input type="text" class="form-control" placeholder="no file selected" readonly="" />
                                            <span class="button">Choose File</span>
                                        </div>
                                        <small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
                                    SEND APPLICATION
                                    <span class="block font-lato">We'll get back to you within 48 hours</span>
                                </button>
                            </div>
                        </div>

                    </form>
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
</body>
</html>