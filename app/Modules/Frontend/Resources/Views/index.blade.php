@extends('layout.frontend.master')

@section('title')
    sundarban
@endsection

@section('content')

<div id="header" class="sticky transparent header-md clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left scrollTo" href="#top">
							<img src="assets/images/logo_light.png" alt="" />
							<img src="assets/images/logo_dark.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li class="active"><!-- HOME -->
										<a href="#slider">
											HOME
										</a>
									</li>
									<li ><!-- ABOUT -->
										<a href="#about">
											ABOUT
										</a>

									</li>
									<li><!-- SERVICES -->
										<a href="#services">

											SERVICES
										</a>
									</li>
									<li><!-- WORK -->
										<a href="#work">
											PACKAGES
										</a>
									</li>


									<li><!-- TEAM -->
										<a href="#team">
											GALLERY

										</a>
									</li>
									

									<li><!-- CONTACT -->
										<a href="#contact">
											CONTACT
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			<!-- SLIDER -->
			<section id="slider" class="fullheight transparent">
				<div class="overlay dark-5"><!-- dark overlay [0 to 9 opacity] --></div>

				<!-- 
					video audio icon 
					.fa-volume-up 	= volume on
					.fa-volume-down = volume off
					Also, change for id="YTPlayer": mute:false OR mute:true
				-->
				<a href="#" id="video-volume"><i class="fa fa-volume-down"></i></a>

				<!-- Video Background - replace videoURL with your youtube video URL -->
				<a id="YTPlayer" class="player" data-property="{videoURL:'http://www.youtube.com/watch?v=A3PDXmYoF5U',containment:'body',autoPlay:true, mute:true, startAt:4, opacity:1}">youtube</a>
				<!--/Video Background -->

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container">

							<div class="slider-featured-text text-center">
								<h1 class="text-white wow fadeInUp" data-wow-delay="0.4s">

									<!--
										TEXT ROTATOR
										data-animation="fade|flip|flipCube|flipUp|spin"
									-->
									<span class="rotate" data-animation="flipCube" data-speed="3500">
										AIRLINES TICKETS, HAJJ & UMRAH, MANPOWER PROCESS,PACKAGE TOUR,PASSPORT AND VISA,STUDENT CONSULTANCY
									</span>
								</h1>
								<h2 class="weight-300 text-white wow fadeInUp" data-wow-delay="0.8s">Sundarban Air Tours & Travels</h2>
								<a class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="1s" href="#work">Our Packages</a>
							</div>

						</div>
					</div>
				</div>

			</section>
			<!-- /SLIDER -->




			<!-- CALLOUT -->
			<section class="callout-dark heading-title heading-arrow-bottom" style="z-index:100;">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Everything is designed, but some things are designed well.</h3>
						<p>We can't solve problems by using the same kind of thinking we used when we created them.</p>
					</div>

				</div>
			</section>
			<!-- /CALLOUT -->



			<!-- ABOUT -->
			<section id="about">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>We Are Smarty</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>


					<div class="row">

						<div class="col-sm-6">
							<img class="img-responsive" src="assets/images/demo/laptop.png" alt="" />
						</div>

						<div class="col-sm-6">
							<p class="dropcap">Lorem ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

							<hr />

							<div class="row countTo-sm text-center">

								<div class="col-xs-6 col-sm-4">
									<i class="fa fa-users size-20"></i> &nbsp; 
									<span class="countTo" data-speed="3000" style="color:#59BA41">1303</span>
									<h6>HAPPY CLIENTS</h6>
								</div>

								<div class="col-xs-6 col-sm-4">
									<i class="fa fa-briefcase size-20"></i> &nbsp; 
									<span class="countTo" data-speed="3000" style="color:#774F38">56000</span>
									<h6>FINISHED PROJECTS</h6>
								</div>

								<div class="col-xs-6 col-sm-4">
									<i class="fa fa-twitter size-20"></i> &nbsp; 
									<span class="countTo" data-speed="3000" style="color:#C02942">4897</span>
									<h6>TWITTER FOLLOWERS</h6>
								</div>

							</div>

						</div>

					</div>


				</div>
			</section>
			<!-- /ABOUT -->

			
			
			<!-- VISION/SKILL/SPECIAL -->
			<section id="skills" class="alternate">
				<div class="container">

					<div class="row">

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Vision</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquam id pariatur accusantium perspiciatis deserunt officiis similique nihil dolor blanditiis dignissimos iure praesentium vero suscipit doloribus aperiam unde hic non sint neque molestiae consectetur voluptatum beatae ratione corporis.</p>

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Skills</h3>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquam id pariatur accusantium perspiciatis deserunt officiis similique nihil dolor blanditiis dignissimos iure praesentium vero suscipit doloribus aperiam unde hic non sint neque molestiae consectetur voluptatum beatae ratione corporis.</p>

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Special</h3>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquam id pariatur accusantium perspiciatis deserunt officiis similique nihil dolor blanditiis dignissimos iure praesentium vero suscipit doloribus aperiam unde hic non sint neque molestiae consectetur voluptatum beatae ratione corporis.</p>

							<a href="#" class="btn btn-default btn-block btn-lg">Our Services</a>

						</div>

					</div>


				</div>
			</section>
			<!-- /VISION/SKILL/SPECIAL -->

					<!-- SERVICES -->
					<section id="services">
						<div class="container">

							<header class="text-center margin-bottom-60">
								<h2>Our Services</h2>
								<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
								<hr />
							</header>

							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>

							<div class="divider divider-center divider-color"><!-- divider -->
								<i class="fa fa-chevron-down"></i>
							</div>

							<!-- FEATURED BOXES 3 -->
							<div class="row">

								<div class="col-md-4 col-xs-6">
									<div class="text-center">
										<i class="ico-color ico-lg ico-rounded ico-hover et-circle-compass"></i>
										<h4>Web Design</h4>
										<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
									</div>
								</div>
								<div class="col-md-4 col-xs-6">
									<div class="text-center">
										<i class="ico-color ico-lg ico-rounded ico-hover et-piechart"></i>
										<h4>Web Analytics</h4>
										<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
									</div>
								</div>
								<div class="col-md-4 col-xs-6">
									<div class="text-center">
										<i class="ico-color ico-lg ico-rounded ico-hover et-strategy"></i>
										<h4>Development</h4>
										<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
									</div>
								</div>
								<div class="col-md-4 col-xs-6">
									<div class="text-center">
										<i class="ico-color ico-lg ico-rounded ico-hover et-streetsign"></i>
										<h4>Marketing</h4>
										<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
									</div>
								</div>

								<div class="col-md-4 col-xs-6">
									<div class="text-center">
										<i class="ico-color ico-lg ico-rounded ico-hover et-trophy"></i>
										<h4>Sales Booster</h4>
										<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
									</div>
								</div>
								<div class="col-md-4 col-xs-6">
									<div class="text-center">
										<i class="ico-color ico-lg ico-rounded ico-hover et-tools"></i>
										<h4>Design</h4>
										<p class="font-lato size-20">Donec id elit non mi porta gravida.</p>
									</div>
								</div>

							</div>
							<!-- /FEATURED BOXES 3 -->

						</div>
					</section>
					<!-- /SERVICES -->
			  <!-- WORK -->
			<section id="work">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Our Packages</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<!-- PORTFOLIO -->
					<div id="portfolio" class="portfolio-nogutter">
                       
						<ul class="nav nav-pills mix-filter margin-bottom-60">
						<li data-filter="all" class="filter active"><a href="#">All</a></li>
						@foreach ($common as $item) 
				      <li data-filter="{!! $item->title !!}" class="filter"><a href="#">{!! $item->title !!}</a></li>
						  @endforeach	
						</ul>
                         
						<div class="row mix-grid">
                            @foreach ($common as $item)   
							<div class="col-md-3 col-sm-3 mix {!! $item->title !!}">
								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
										<a class="ico-rounded lightbox" href="{!! $item->img_url !!}" data-plugin-options='{"type":"image"}'>

												</a>


											</span>
										</span>

										<!-- carousel -->
										<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										
											<div>
											<img class="img-responsive" src="{!! $item->img_url !!}" width="600" height="399" alt="">
											</div>
											<!-- <div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
											</div>
											<div>
												<img class="img-responsive" src="assets/images/demo/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
											</div> -->
										</div>
										


									</figure>

									<div class="item-box-desc">
										<h2>Kualal Lumpur</h2>
										<ul class="list-inline categories nomargin">
											<li> {!! $item->price !!}</li>
											<p> {!! $item->summary !!}
										        </p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>
										</ul>

									</div>
                                   
								</div>
                              
							</div>
                            @endforeach
                        </div>
                         
					</div>
							 <!-- <div class="col-md-3 col-sm-3 mix development">

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>

												</a>


											</span>
										</span>

										<img class="img-responsive" src="assets/images/demo/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h2>Singapore</h2>
										<ul class="list-inline categories nomargin">
											<li>43,500TK</li>
											<p>Package Includes:<br>
												Economy class return air ticket with tax
												Accommodation with breakfast (twin sharing basis)
												Airport-Hotel-Airport Transfer
												Half Day city tour (in maximum package)</p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>

										</ul>
									</div>

								</div>

							</div>


							 <div class="col-md-3 col-sm-3 mix photography">

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/10-min.jpg" data-plugin-options='{"type":"image"}'>

												</a>



											</span>
										</span>

										<img class="img-responsive" src="assets/images/demo/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h2>Bangkok</h2>
										<ul class="list-inline categories nomargin">
											<li>27,500TK</li>
											<p>Package Includes:<br>
												Economy class return air ticket with tax
												Accommodation with breakfast (twin sharing basis)
												Airport-Hotel-Airport Transfer
												Half Day city tour (in maximum package)</p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>
										</ul>
									</div>

								</div>

							</div>


							<div class="col-md-3 col-sm-3 mix design">

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>

												</a>

											</span>
										</span>

										<img class="img-responsive" src="assets/images/demo/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Kathmundu</h3>
										<ul class="list-inline categories nomargin">
											<li>26,500TK</li>
											<p>Package Includes:<br>
												Economy class return air ticket with tax
												Accommodation with breakfast (twin sharing basis)
												Airport-Hotel-Airport Transfer
												Half Day city tour (in maximum package)</p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>
										</ul>
									</div>

								</div>

							</div>


							<div class="col-md-3 col-sm-3 mix design">

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>

												</a>



											</span>
										</span>

										<img class="img-responsive" src="assets/images/demo/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Maldives & Colombo</h3>
										<ul class="list-inline categories nomargin">
											<li>26,500TK</li>
											<p>Package Includes:<br>
												Economy class return air ticket with tax
												Accommodation with breakfast (twin sharing basis)
												Airport-Hotel-Airport Transfer
												Half Day city tour (in maximum package)</p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>
										</ul>
									</div>

								</div>

							</div>
 -->
							<!-- <div class="col-md-3 col-sm-3 mix photography">

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>

												</a>

											</span>
										</span>

										<img class="img-responsive" src="assets/images/demo/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Agra & Goa</h3>
										<ul class="list-inline categories nomargin">
											<li>300,500TK</li>
											<p>Package Includes:<br>
												Economy class return air ticket with tax
												Accommodation with breakfast (twin sharing basis)
												Airport-Hotel-Airport Transfer
												Half Day city tour (in maximum package)</p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>
										</ul>
									</div>

								</div>

							</div> -->


							<!-- <div class="col-md-3 col-sm-3 mix design">

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/15-min.jpg" data-plugin-options='{"type":"image"}'>

												</a>



											</span>
										</span>

										<img class="img-responsive" src="assets/images/demo/mockups/600x399/15-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3> Darjeeling & Mussoorie</h3>
										<ul class="list-inline categories nomargin">
											<li>23,500TK</li>
											<p>Package Includes:<br>
												Economy class return air ticket with tax
												Accommodation with breakfast (twin sharing basis)
												Airport-Hotel-Airport Transfer
												Half Day city tour (in maximum package)</p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>
										</ul>
									</div>

								</div>

							</div> -->


							 <!-- <div class="col-md-3 col-sm-3 mix design">
								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												
												<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/16-min.jpg" data-plugin-options='{"type":"image"}'>

												</a>

											</span>
										</span>

										<img class="img-responsive" src="assets/images/demo/mockups/600x399/16-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Paris & Marseille</h3>
										<ul class="list-inline categories nomargin">
											<li>99,500TK</li>
											<p>Package Includes:<br>
												Economy class return air ticket with tax
												Accommodation with breakfast (twin sharing basis)
												Airport-Hotel-Airport Transfer
												Half Day city tour (in maximum package)</p>
											<a href="#contact" class="btn btn-3d btn-teal">Place Order</a>
										</ul>
									</div>

								</div>

							</div> --> <!-- 
					<!-- /PORTFOLIO -->

					<!-- CONTACT US -->
					<div class="callout alert alert-transparent noborder margin-top-60 margin-bottom-60">

						<div class="text-center">

							<h3>Call now at <strong>+800-565-2390</strong> and get 15% discount!</h3>
							<p class="font-lato size-20">
								We truly care about our users and our product.
							</p>
							
							<a href="#contact" class="scrollTo btn btn-default btn-lg margin-top-30">CONTACT US</a>

						</div>

					</div>
					<!-- /CONTACT US -->

				</div>
			</section>
			<!-- /WORK -->

			<!-- TEAM -->
			<section id="team">
				<div class="container">
					<header class="text-center margin-bottom-60">
						<h2>Gallery</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<div class="masonry-gallery columns-5 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
                          @foreach ($gallery as $item)
						<a class="image-hover" href="{{$item->img_url}}" title="{{$item->title}}">
							<img src="{{$item->img_url}}" alt="...">
						</a>

						 <!-- <a class="image-hover" href="assets/images/demo/1200x800/25-min.jpg">
							<img src="assets/images/demo/600x400/25-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/26-min.jpg">
							<img src="assets/images/demo/600x400/26-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/27-min.jpg">
							<img src="assets/images/demo/600x400/27-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/28-min.jpg">
							<img src="assets/images/demo/600x400/28-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/29-min.jpg">
							<img src="assets/images/demo/600x400/29-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/30-min.jpg">
							<img src="assets/images/demo/600x400/30-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/31-min.jpg">
							<img src="assets/images/demo/600x400/31-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/32-min.jpg">
							<img src="assets/images/demo/600x400/32-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/33-min.jpg">
							<img src="assets/images/demo/600x400/33-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/34-min.jpg">
							<img src="assets/images/demo/600x400/34-min.jpg" alt="...">
						</a>

						<a class="image-hover" href="assets/images/demo/1200x800/35-min.jpg">
							<img src="assets/images/demo/600x400/35-min.jpg" alt="...">
						</a>  -->
                      @endforeach
					</div>

				</div>
			</section>
			<!-- /TEAM -->


			<section class="parallax parallax-2" style="background-image: url('assets/images/demo/wall3-min.jpg');">
				<div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="nomargin">Share Your Thoughts</h3>
						<p class="font-lato weight-300 lead nomargin-top">We can't solve problems by using the same kind of thinking we used when we created them.</p>
					</div>

					<ul class="margin-top-80 social-icons list-unstyled list-inline">
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-facebook"></i>
								<h4>Facebook</h4>
								<span>Be Our Friend</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-twitter"></i>
								<h4>Twitter</h4>
								<span>Follow Us</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-youtube"></i>
								<h4>Youtube</h4>
								<span>Our Videos</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-instagram"></i>
								<h4>Instagram</h4>
								<span>See Our Images</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-linkedin"></i>
								<h4>Linkedin</h4>
								<span>Check Our Identity</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-pinterest"></i>
								<h4>Pinterest</h4>
								<span>Visual Discovery</span>
							</a>
						</li>
					</ul>

				</div>

			</section>
			<!-- /PARALLAX -->



			



			<!-- CONTACT -->
			          <section id="contact">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Contact Us</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>


					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>

							
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

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


							<form action="{{route('f_store')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />
                                       
									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="name">Full Name *</label>
												<input required type="text" value="" class="form-control" name="name" id="name">
											</div>
											<div class="col-md-4">
												<label for="email">E-mail Address *</label>
												<input required type="email" value="" class="form-control" name="email" id="email">
											</div>
											<div class="col-md-4">
												<label for="phone">Phone</label>
												<input type="text" value="" class="form-control" name="phone" id="phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-8">
												<label for="subject">Subject *</label>
												<input required type="text" value="" class="form-control" name="subject" id="subject">
											</div>
											<div class="col-md-4">
												<label for="contact_department">Packages</label>

												<select class="form-control pointer" name="package">
													<option value="">--- Select ---</option>
													@foreach ($common as $item)
													<option value="{{$item->id}}">{{$item->title}}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="message" id=" message"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<!--<label for="contact:attachment">File Attachment</label>

												&lt;!&ndash; custom file upload &ndash;&gt;
												<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>-->

											</div>
										</div>
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
						<div class="col-md-4 col-sm-4">

							<h2>Visit Us</h2>

							<!-- 
							Available heights
								height-100
								height-150
								height-200
								height-250
								height-300
								height-350
								height-400
								height-450
								height-500
								height-550
								height-600
							-->
							<div id="map2" class="height-400 grayscale"></div>

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> Street Name, City Name, Country</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">1800-555-1234</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">mail@yourdomain.com</a></span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- /CONTACT -->



			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							
							<img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

							
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										{{$basic->address}}
									</li>
									<li class="footer-sprite phone">
										{{$basic->phone}}
									</li>
									<li class="footer-sprite email">
										<a href="mailto:ontiktechnology@gmail.com">{{$basic->email}}</a>
									</li>
								</ul>
							</address>
							
						</div>

						<div class="col-md-3">

							
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2015</small>
								</li>
							</ul>
							
						</div>

						<div class="col-md-2">

							
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							
						</div>

						<div class="col-md-4">

							
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							
							
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
							
						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="sitemp.xml">Sitemap</a></li>
						</ul>

						<li>&copy; All Rights Reserved, Company LTD |<a href="http://ontiktechnology.com" target="_blank"> Developed and Maintained by Ontik Technology</a></li>
					</div>
				</div>
			</footer>
@endsection