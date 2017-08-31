<footer id="footer">
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <!-- Footer Logo -->
                <img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

                <!-- Small Description -->
                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquid culpa cum.</p>

                <!-- Contact Address -->
                <address>
                    <ul class="list-unstyled">
                        <li class="footer-sprite address">
                           {{isset($contact->address) ? ($contact->address):null}}
                        </li>
                        <li class="footer-sprite phone">
                            {{isset($contact->phone_1) ? ($contact->phone_1):null}},{{isset($contact->phone_2) ? ($contact->phone_2):null}}
                        </li>
                        <li class="footer-sprite email">
                            <a href="ontiktechnology@gmail.com">
                            {{isset($contact->email_1)? ($contact->email_1):null}} {{isset($contact->email_2)?($contact->email_2):null}}
                                {{--{{$contact->email_1}}<br>{{$contact->email_2}}--}}
                        </li>
                    </ul>
                </address>
                <!-- /Contact Address -->

            </div>

            <div class="col-md-3">

                <!-- Latest Blog Post -->
                <h4 class="letter-spacing-1">LATEST NEWS</h4>
                @foreach($notice as $item)

                    <ul class="footer-posts list-unstyled">
                        <li>
                            <a href="#">{!! isset($item->details)? ($item->details):null !!} </a>
                            <small>{!! isset($item->created_at)? ($item->created_at):null !!}</small>
                        </li>

                    </ul>
                    <!-- /Latest Blog Post -->
           @endforeach
            <!-- /Latest Blog Post -->

            </div>

            <div class="col-md-2">

                <!-- Links -->
                <h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
                <ul class="footer-links list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Administration</a></li>
                    <li><a href="#">Academic</a></li>
                    <li><a href="#">Result</a></li>
                    <li><a href="#">Student Corner</a></li>
                    <li><a href="#">News &amp; Notice</a></li>
                    <li><a href="#">Admission</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <!-- /Links -->

            </div>

            <div class="col-md-4">

                <!-- Newsletter Form -->
                <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>


                <!-- /Newsletter Form -->

                <!-- Social Icons -->
                <div class="margin-top-20">
                    <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>

                </div>
                <!-- /Social Icons -->

            </div>

        </div>

    </div>

    <div class="copyright">
        <div class="container">
            <ul class="pull-right nomargin list-inline mobile-block">
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li>&bull;</li>
                <li><a href="#">Privacy</a></li>
                <li>&bull;</li>
                <li><a href="#">Sitemap</a></li>
            </ul>

            <ul class="pull-left nomargin list-inline mobile-block">
                <li>&copy; All Rights Reserved, Company LTD</li>
                <li>&bull;</li>
                <li><a href="#">Developed &amp; Maintained By Ontik Technology</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- /FOOTER -->
</div>
<!-- /Wrapper -->
