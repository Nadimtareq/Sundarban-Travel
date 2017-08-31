<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{asset('assetsh/img/favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('assetsh/img/favicon-32x32.png')}}" sizes="32x32">

    <title>{{ config('app.name') }} - Login Page</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('bower_components/uikit/css/uikit.almost-flat.min.css') }}"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="{{ asset('assetsh/css/login_page.min.css') }}" />

</head>


<body class="login_page">

<div class="login_page_wrapper">
@include('layout.backend.includes.notice')
    <br/>
    <br/>
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                    <div class="user_avatar"></div>
                </div>
                <form>
                    <div class="uk-form-row">
                        <label for="login_username">Phone</label>
                        <input class="md-input" type="text" id="login_username" name="phone" />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Password</label>
                        <input class="md-input" type="password" id="login_password" name="password" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign In</a>
                    </div>
                    <div class="uk-margin-top uk-text-center" id="forget_form">
                        <a href="#" id="forget_form" >Forget Password</a>
                    </div>
                    <div class="uk-margin-top">
                        <span class="icheck-inline">
                            <input type="checkbox" name="login_page_stay_signed" id="login_page_stay_signed" data-md-icheck />
                            <label for="login_page_stay_signed" class="inline-label">Stay signed in</label>
                        </span>
                    </div>
                </form>
            </div>


            <!-- <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_b uk-text-success">Can't log in?</h2>
                <p>Here’s the info to get you back in to your account as quickly as possible.</p>
                <p>First, try the easiest thing: if you remember your password but it isn’t working, make sure that Caps Lock is turned off, and that your username is spelled correctly, and then try again.</p>
                <p>If your password still isn’t working, it’s time to <a href="#" id="password_reset_show">reset your password</a>.</p>
            </div> -->
            <!-- <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
                <form>
                    <div class="uk-form-row">
                        <label for="login_email_reset">Your email address</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                    </div>
                </form>
            </div> -->

              <div class="md-card-content large-padding" id="forget_form">
              <form>
                    <div class="uk-form-row">
                        <label for="login_username">Phone</label>
                        <input class="md-input" type="text" id="phone" name="phone" />
                        <div class="uk-margin-medium-top">
                        <a href="#" class="md-btn md-btn-primary md-btn-block md-btn-large">send</a>
                    </div>
                    </div>
                     </form>
            </div>

            <div class="md-card-content large-padding" id="register_form" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-medium-bottom">Create an account</h2>
                <form>
                    <div class="uk-form-row">
                        <label for="register_username">Name</label>
                        <input class="md-input" type="text" id="register_username" name="name" />
                    </div>
                    <div class="uk-form-row">
                        <label for="register_password">Email</label>
                        <input class="md-input" type="password" id="register_password" name="email" />
                    </div>
                    <div class="uk-form-row">
                        <label for="register_password_repeat">Phone</label>
                        <input class="md-input" type="password" id="register_password_repeat" name="phone" />
                    </div>
                    <div class="uk-form-row">
                        <label for="register_email">Address</label>
                         <textarea class="md-input" id="details" name="address" required cols="10" rows="3" data-parsley-trigger="keyup" ></textarea>
                    </div>
                     <div class="uk-form-row">
                        <label for="register_password">Password</label>
                        <input class="md-input" type="password" id="password" name="password" />
                    </div>
                    <div class="uk-form-row">
                        <label for="register_password_repeat">Confirm Password</label>
                        <input class="md-input" type="password" id="register_password_repeat" name="cpassword" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="uk-margin-top uk-text-center">
            <a href="#" id="signup_form_show">Create an account</a>
        </div>
    </div>

<!-- common functions -->
<script src=" {{ asset('assetsh/js/common.min.js') }}"></script>
<!-- uikit functions -->
<script src="{{ asset('assetsh/js/uikit_custom.min.js') }}"></script>
<!-- altair core functions -->
<script src="{{ asset('assetsh/js/altair_admin_common.min.js') }}"></script>

<!-- altair login page functions -->
<script src="{{ asset('assetsh/js/pages/login.min.js') }}"></script>

<script>
    // check for theme
    if (typeof(Storage) !== "undefined") {
        var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
        if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
            root.className += ' app_theme_dark';
        }
    }
</script>

</body>
</html>