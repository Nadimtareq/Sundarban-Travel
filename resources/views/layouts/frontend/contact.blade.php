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
    @include('layouts.frontend.fnavbar')
    <section class="page-header page-header-xs">
        <div class="container">
            <div class="col-md-12">
                <h1>CONTACT</h1>
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

                <!-- FORM -->
                <div class="col-md-7">

                    <h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>


                    <!-- Alert Success -->
                    <div id="alert_success" class="alert alert-success margin-bottom-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Thank You!</strong> Your message successfully sent!
                    </div><!-- /Alert Success -->


                    <!-- Alert Failed -->
                    <div id="alert_failed" class="alert alert-danger margin-bottom-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>[SMTP] Error!</strong> Internal server error!
                    </div><!-- /Alert Failed -->


                    <!-- Alert Mandatory -->
                    <div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Sorry!</strong> You need to complete all mandatory (*) fields!
                    </div><!-- /Alert Mandatory -->


                   <form action="{{ route('fedback_store') }}"  method="post"  name="contact" class="uk-form-stacked" onsubmit="return validate();"  id="contact">
                        <fieldset>
                            {{ csrf_field() }}
                            {{--<input type="hidden" name="action" value="contact_send" />--}}

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="contact:name">Full Name *</label>
                                        <input type="text" value="" class="form-control" name="name" id="name">
                                        <label id="nam"></label>
                                        {{--@if($errors->has('name'))

                                            <span style="color:green">Name is Required</span>

                                        @endif--}}
                                    </div>

                                    <div class="col-md-4">
                                        <label for="contact:email">E-mail/Phone  *</label>
                                        <input  type="text" value="" class="form-control" name="email" id="con">
                                        <label id="lol"></label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label for="contact:subject">Subject *</label>
                                        <input  type="text" value="" class="form-control" name="subject" id="subject">
                                        <label id="sub"></label>
                                    </div>
                                </div>
                                {{--@if($errors->has('subject'))

                                    <span style="color:green">Subject is Required</span>

                                @endif--}}
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="contact:message">Message *</label>
                                        <textarea  maxlength="10000" rows="8" class="form-control" name="message" id="message"></textarea>
                                        <label id="mes"></label>
                                    </div>
                                </div>
                                {{--@if($errors->has('message'))

                                    <span style="color:green">Message is Required</span>

                                @endif--}}
                            </div>

                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>

                            </div>
                        </div>
                    </form>

                </div>
                <!-- /FORM -->

                <!-- INFO -->
                <div class="col-md-5">

                    <h2>Visit Us</h2>

                    <div id="map2" class="height-400 grayscale"></div>

                    <hr />

                    <p>
                        <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> {{$contact->address}}</span>
                        <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">{{$contact->phone_1}},{{$contact->phone_2}}</a></span>
                        <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="ontiktechnology@gmail.com">{{$contact->email_1}},<br>{{$contact->email_2}}</a></span>
                    </p>

                </div>
                <!-- /INFO -->
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
    <script type="text/javascript">


  function validate()
  {
       var input1 = document.getElementById('name').value;
       var input = document.getElementById('con').value;
       var input2 = document.getElementById('subject').value;
       var input3 = document.getElementById('message').value;
       var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
       var field="Name is Mandatory";
       var result= field.fontcolor("red");
       var field1="The field is required";
       var result1=field1.fontcolor("red");
       var field2="subject is mandatory";
       var result2=field2.fontcolor("red");
       var field3="Message is mandatory ";
       var result3=field3.fontcolor("red");
       var result4=true;
       /*var status=true;*/

      if(input1 == ""){
          document.getElementById("nam").innerHTML = result;
         // return false;
      }


      if(input != ""){

          if (isNaN(input)){
              if (!filter.test(input)) {
                  document.getElementById("lol").innerHTML = "E-mail not varified";
                  return false;
              }
          }
          else{
              if(input.length != 11){
                  document.getElementById("lol").innerHTML = "The contact must be 11 digits";
                 // return false;
              }
          }
      }
      else{
          document.getElementById("lol").innerHTML =result1 ;
         // return false;
      }

      if(input2 == ""){
          document.getElementById("sub").innerHTML =result2 ;
          //return false;
      }
      if(input3== ""){
          document.getElementById("mes").innerHTML = result3 ;
          return false;
      }
      if (result4) {
          document.write("suceess full");
      }

  }

    </script>
<!-- JAVASCRIPT FILES -->
@include('layouts.frontend.javascript')
</div>
</body>
</html>