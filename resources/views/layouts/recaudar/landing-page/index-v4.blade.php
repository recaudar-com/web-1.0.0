<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>{{ config('app.name', 'Recaudar.com') }}</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CPoppins:200,400,500,600,700%7CPlayfair+Display:400,700i" rel="stylesheet">
		<link rel="icon" type="image/png" href="favicon.ico">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- Icon foont list -->
		<link rel="stylesheet" href="{{ asset('assets/css/iconfont.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

		<!-- bootstrap -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<!-- isotope -->
		<link rel="stylesheet" href="{{ asset('assets/css/isotope.css') }}">
		<!-- magnific -->
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
		<!-- owl carousel -->
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
		<!-- woocommerce -->
		<link rel="stylesheet" href="{{ asset('assets/css/woocommerce.css') }}">
		

		<!--For Plugins external css-->
		<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />

		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

		<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
	</head>
	<body class="woocommerce">
		<!--[if lt IE 10]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		<div id="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div><!-- #preloader -->
<!-- section -->
<!-- header version inner menu -->
<header class="xs-header-section xs-header-height fundpress-header-main-version">
	<div class="container">
		<nav class="xs-menus fundpress-menu fundpress-menu-v2">
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a class="nav-brand nav-logo" href="index-v2.html">
					<img src="assets/images/logo_new.png" alt="">
				</a>
			</div><!-- . END -->
			<div class="nav-menus-wrapper">
				<div class="xs-logo-wraper">
					<a class="nav-brand xs-logo fundpress-logo-v2" href="index-v2.html">
						<img src="assets/images/logo_new.png" alt="">
					</a>
				</div>
				<ul class="nav-menu">
					<li><a href="">Home</a>
						<ul class="nav-dropdown">
							<li><a href="index.html">home version 1</a></li>
							<li><a href="index-v2.html">home version 2</a></li>
							<li><a href="index-v3.html">home version 3</a></li>
						</ul>
					</li>
					<li><a href="about.html">about</a></li>
					<li><a href="portfolio.html">portfolio</a></li>
					<li><a href="#">Shop</a>
						<ul class="nav-dropdown">
							<li><a href="shop.html">Shop</a></li>
							<li><a href="single-shop.html">single Shop</a></li>
						</ul>
					</li>
					<li><a href="#">Blog</a>
						<ul class="nav-dropdown">
							<li><a href="news-feed.html ">blog version 1</a></li>
							<li><a href="news-feed-v2.html ">blog version 2</a></li>
							<li><a href="news-feed-v3.html">blog version 3</a></li>
							<li><a href="blog-single.html">blog details </a></li>
						</ul>
					</li>
					<li><a href="contact.html">contact</a></li>
					<li><a href="#">pages</a>
						<ul class="nav-dropdown">
							<li><a href="team-member-details.html ">team details</a></li>
							<li><a href="progress.html ">progress</a></li>
							<li><a href="progress-successful.html">progress successful</a></li>
							<li><a href="progress-explore.html">progress explore</a></li>
							<li><a href="events.html">events</a></li>
							<li><a href="faq.html">faq</a></li>
							<li><a href="fund-details.html ">fund-details</a></li>
							<li><a href="we-do.html">we do</a></li>
						</ul>
					</li>
				</ul>
				<div class="xs-navs-button">
					<ul class="xs-icon-with-text fundpress-icon-menu">
						<li><a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-unlock-alt"></i>Log In</a></li>
					</ul>
				</div>
			</div><!-- .nav-menus-wrapper END -->
		</nav><!-- .xs-menus .fundpress-menu END -->
	</div>
</header>
<!-- header version inner menu closed -->

<div class="modal xs-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="fundpress-tab-nav-v5">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#login" role="tab" data-toggle="tab">
							Login
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#signup" role="tab" data-toggle="tab">
							Signup
						</a>
					</li>
				</ul>
			</div><!-- fundpress-tab-nav-v3 -->
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="login">
					<form action="#" method="POST" id="xs-login-form">
						<div class="xs-input-group-v2">
							<i class="icon icon-profile-male"></i>
							<input type="text" name="name" id="xs_user_login_name" class="xs-input-control" placeholder="Enter your username">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input type="password" name="name" id="xs_login_password" class="xs-input-control" placeholder="Enter your password">
						</div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="login now" id="xs_contact_get_action" class="btn btn-warning btn-block">
						</div>
						<p class="xs-mb-20">or</p>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="Login with facebook account" id="xs_facebook" class="btn btn-info btn-block">
						</div>
						<div class="xs-submit-wraper">
							<input type="submit" name="submit" value="Login with twitter account" id="xs_twitter" class="btn btn-success btn-block">
						</div>
					</form>
				</div><!-- tab-pane -->
				<div role="tabpanel" class="tab-pane fadeInRights fade" id="signup">
					<form action="#" method="POST" id="xs-register-form">
						<div class="xs-input-group-v2">
							<i class="icon icon-profile-male"></i>
							<input type="text" name="name" id="xs_register_name" class="xs-input-control" placeholder="Enter your username">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-envelope2"></i>
							<input type="email" name="email" id="xs_register_email" class="xs-input-control" placeholder="Enter your email">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input type="password" name="name" id="xs_register_password" class="xs-input-control" placeholder="Enter your password">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input type="password" name="name" id="xs_register_repeat_pass" class="xs-input-control" placeholder="Enter your confirm password">
						</div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="login now" id="xs__register_get_action" class="btn btn-warning btn-block">
						</div>
						<p class="xs-mb-20">or</p>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="Login with facebook account" id="xs_register_facebook" class="btn btn-info btn-block">
						</div>
						<div class="xs-submit-wraper">
							<input type="submit" name="submit" value="Login with twitter account" id="xs_register_twitter" class="btn btn-success btn-block">
						</div>
					</form>
				</div><!-- tab-pane -->
			</div><!-- tab-content -->
		</div>
	</div>
</div><!-- End section -->

<!-- welcome section -->
<section class="xs-screen-height xs-welcome-section xs-bg fundpress-welcome-section" style="background-image: url(assets/images/welcome-bg.png);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="xs-welcome-content fundpress-welcome-content-v2">
					<div class="xs-welcome-wraper">
						<h2>Bring New Ideas To Life, Anywhere</h2>
						<ul class="fundpress-welcome-list-content">
							<li>US $45,280.00<span class="d-block">Pledged</span></li>
							<li>US $87,000.00<span class="d-block">Goal</span></li>
						</ul>
						<div class="xs-btn-wraper">
							<a href="#" class="xs-btn btn btn-primary round-btn">See idea</a>
							<a href="#" class="xs-btn btn btn-outline-primary round-btn">start a campaign</a>
						</div>
					</div><!-- .xs-welcome-wraper .fundpress-welcome-wraper END -->
				</div><!-- .xs-welcome-content .fundpress-welcome-content END -->
			</div>
			<div class="col-lg-5">
				<div class="xs-welcome-content">
					<div class="text-center fundpress-animate xs-welcome-wraper">
						<img src="assets/images/speaker_1.png" alt="">
					</div><!-- .xs-welcome-wraper .fundpress-welcome-wraper END -->
				</div><!-- .xs-welcome-content .fundpress-welcome-content END -->
			</div>
		</div>
	</div>
</section><!-- End welcome section -->

<!-- version 2 caouse matters -->
<section  class="xs-section-padding fundpress-cause-matters-v2" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Big of small your <span>cause matters</span></h2>
				<p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p>
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">Features</span>
		</div><!-- section heading -->
		<div class="row">
			<div class="col-md-4">
				<div class="fundpress-icon-with-square-service-v2 wow fadeInUp" data-wow-duration="1.2s">
					<i class="icon icon-cogwheel-outline xs-check-mark"></i>
					<h4>Most Money Raised. </h4>
					<p>The advertising business is not an equal one. Our goal is to change that by highlighting female creatives globally.</p>
				</div><!-- .fundpress-icon-with-square-service-v2 END -->
			</div>
			<div class="col-md-4">
				<div class="fundpress-icon-with-square-service-v2 wow fadeInUp" data-wow-duration="1.4s">
					<i class="icon icon-symbol xs-check-mark"></i>
					<h4>Safety Garanted</h4>
					<p>The advertising business is not an equal one. Our goal is to change that by highlighting female creatives globally.</p>
				</div><!-- .fundpress-icon-with-square-service-v2 END -->
			</div>
			<div class="col-md-4">
				<div class="fundpress-icon-with-square-service-v2 wow fadeInUp" data-wow-duration="1.6s">
					<i class="icon icon-shopping-cart xs-check-mark"></i>
					<h4>Product Sale</h4>
					<p>The advertising business is not an equal one. Our goal is to change that by highlighting female creatives globally.</p>
				</div><!-- .fundpress-icon-with-square-service-v2 END -->
			</div>
			<div class="col-md-4">
				<div class="fundpress-icon-with-square-service-v2 wow fadeInUp" data-wow-duration="1.8s">
					<i class="icon icon-man xs-check-mark"></i>
					<h4>Get Founded</h4>
					<p>The advertising business is not an equal one. Our goal is to change that by highlighting female creatives globally.</p>
				</div><!-- .fundpress-icon-with-square-service-v2 END -->
			</div>
			<div class="col-md-4">
				<div class="fundpress-icon-with-square-service-v2 wow fadeInUp" data-wow-duration="2s">
					<i class="icon icon-users2 xs-check-mark"></i>
					<h4>1000+ Backers</h4>
					<p>The advertising business is not an equal one. Our goal is to change that by highlighting female creatives globally.</p>
				</div><!-- .fundpress-icon-with-square-service-v2 END -->
			</div>
			<div class="col-md-4">
				<div class="fundpress-icon-with-square-service-v2 wow fadeInUp" data-wow-duration="2.2s">
					<i class="icon icon-support xs-check-mark"></i>
					<h4>24/7 Online Support</h4>
					<p>The advertising business is not an equal one. Our goal is to change that by highlighting female creatives globally.</p>
				</div><!-- .fundpress-icon-with-square-service-v2 END -->
			</div>
		</div>
	</div>
</section><!-- End version 2 caouse matters -->

<!-- feature ideas -->
<section class="xs-gray-bg-2 xs-section-padding" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Fundpress <span>featured ideas</span></h2>
				<p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p>
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">Featured</span>
		</div><!-- section heading -->
		<div class="fundpress-tab-wraper">
			<div class="fundpress-tab-nav-v3 xs-tab-nav wow fadeInUp" data-wow-duration="1.3s">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#comics" role="tab" data-toggle="tab">Comics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#crafts" role="tab" data-toggle="tab">Crafts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#dance" role="tab" data-toggle="tab">Dance</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#design" role="tab" data-toggle="tab">Design</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#fashion" role="tab" data-toggle="tab">Fashion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#food" role="tab" data-toggle="tab">Food</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#games" role="tab" data-toggle="tab">Games</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#film_and_video" role="tab" data-toggle="tab">Film And Video</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#journalism" role="tab" data-toggle="tab">Journalism</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#music" role="tab" data-toggle="tab">Music</a>
					</li>
				</ul>
			</div><!-- .xs-isotope-nav .fundpress-isotope-nav END -->
			<div class="tab-content wow fadeInUp" data-wow-duration="1.5s">
				<div role="tabpanel" class="tab-pane fade in active show" id="comics">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="crafts">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="dance">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="design">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="fashion">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="food">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="games">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="film_and_video">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="journalism">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="music">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product1.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_1.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Ema Watson</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">179 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">79 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$14000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product2.jpg" alt="">
									<div class="xs-item-header-content">
										<a href="" class="badge badge-v1 badge-pill badge-primary">See idea</a>
									</div>
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_2.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Sufia Aijan</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Zumex Watch</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">130 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">33 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$99000</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content-v2">
								<div class="fundpress-item-header">
									<img src="assets/images/product/feature-product3.jpg" alt="">
								</div><!-- .fundpress-item-header END -->
								
								<div class="fundpress-item-content text-center">
									<div class="row xs-margin-0 justify-content-center xs-mb-20">
										<div class="full-round fundpress-avatar">
											<img src="assets/images/avatar/avatar_3.jpg" alt="">
										</div>
										<div class="xs-avatar-title">
											<a href="#"><span>By</span>Tilta Hamid</a>
										</div>
									</div>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Rolling framing toy</a>
									<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

									<span class="xs-separetor"></span>

									<div class="fundpress-list-cat">
										<span><i class="icon icon-man"></i><a href="">200 Backers</a></span>
										<span><i class="icon icon-favorites"></i><a href="">100 Ratings</a></span>
										<span class="badge badge-v2 badge-pill badge-primary">$17900</span>
									</div>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End feature ideas -->

<!-- popular campaigns version 2 -->
<section class="waypoint-tigger xs-section-padding fundpress-popular-campaigns-v2" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Popular <span>campaigns</span></h2>
				<p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p>
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">Campaigns</span>
		</div><!-- section heading -->
		<div class="row">
			<div class="col-lg-4">
				<div class="fundpress-grid-item-content-v2 xs-mb-30 wow fadeInUp" data-wow-duration="1.2s">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/popular-campaigns1.jpg" alt="">
						<div class="xs-item-header-content">
							<span class="badge badge-sm badge-v1 badge-pill badge-primary">$13000</span>
						</div>
					</div><!-- .fundpress-item-header END -->
					
					<div class="fundpress-item-content text-center border border-top-0">
						<div class="row xs-margin-0 justify-content-center xs-mb-20">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_1.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Tilta Hamid</a>
							</div>
						</div>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Fiona Lio Cosmetics</a>
						<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

						<span class="xs-separetor"></span>

						<ul class="xs-list-with-content fundpress-list-item-content-v2">
							<li class="xs-pie-chart-v2" data-percent="75">
								<div class="icon-position-center">
									<div class="xs-pie-chart-percent"></div>
									<span>%</span>
								</div>
							</li>
							<li>179<span>Backers</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="75" data-animation-duration="3500">0</span>% <span>Founded</span></li>
						</ul>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="fundpress-grid-item-content-v2 xs-mb-30 wow fadeInUp" data-wow-duration="1.4s">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/popular-campaigns2.jpg" alt="">
						<div class="xs-item-header-content">
							<span class="badge badge-sm badge-v1 badge-pill badge-primary">$90000</span>
						</div>
					</div><!-- .fundpress-item-header END -->
					
					<div class="fundpress-item-content text-center border border-top-0">
						<div class="row xs-margin-0 justify-content-center xs-mb-20">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_2.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Frokost</a>
							</div>
						</div>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Xurex Minimal Chair</a>
						<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

						<span class="xs-separetor"></span>

						<ul class="xs-list-with-content fundpress-list-item-content-v2">
							<li class="xs-pie-chart-v2" data-percent="62">
								<div class="icon-position-center">
									<div class="xs-pie-chart-percent"></div>
									<span>%</span>
								</div>
							</li>
							<li>109<span>Backers</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="62" data-animation-duration="3500">0</span>% <span>Founded</span></li>
						</ul>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="fundpress-grid-item-content-v2 xs-mb-30 wow fadeInUp" data-wow-duration="1.6s">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/popular-campaigns3.jpg" alt="">
						<div class="xs-item-header-content">
							<span class="badge badge-sm badge-v1 badge-pill badge-primary">$19000</span>
						</div>
					</div><!-- .fundpress-item-header END -->
					
					<div class="fundpress-item-content text-center border border-top-0">
						<div class="row xs-margin-0 justify-content-center xs-mb-20">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_3.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Hannan Hamdy</a>
							</div>
						</div>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Jilio Wood Bookshelf</a>
						<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

						<span class="xs-separetor"></span>

						<ul class="xs-list-with-content fundpress-list-item-content-v2">
							<li class="xs-pie-chart-v2" data-percent="57">
								<div class="icon-position-center">
									<div class="xs-pie-chart-percent"></div>
									<span>%</span>
								</div>
							</li>
							<li>657<span>Backers</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="57" data-animation-duration="3500">0</span>% <span>Founded</span></li>
						</ul>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="fundpress-grid-item-content-v2 wow fadeInUp" data-wow-duration="1.8s">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/popular-campaigns4.jpg" alt="">
						<div class="xs-item-header-content">
							<span class="badge badge-sm badge-v1 badge-pill badge-primary">$23000</span>
						</div>
					</div><!-- .fundpress-item-header END -->
					
					<div class="fundpress-item-content text-center border border-top-0">
						<div class="row xs-margin-0 justify-content-center xs-mb-20">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_4.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Abrino Haino</a>
							</div>
						</div>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Zirox Furniture</a>
						<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

						<span class="xs-separetor"></span>

						<ul class="xs-list-with-content fundpress-list-item-content-v2">
							<li class="xs-pie-chart-v2" data-percent="12">
								<div class="icon-position-center">
									<div class="xs-pie-chart-percent"></div>
									<span>%</span>
								</div>
							</li>
							<li>455<span>Backers</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="12" data-animation-duration="3500">0</span>% <span>Founded</span></li>
						</ul>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="fundpress-grid-item-content-v2 wow fadeInUp" data-wow-duration="2s">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/popular-campaigns5.jpg" alt="">
						<div class="xs-item-header-content">
							<span class="badge badge-sm badge-v1 badge-pill badge-primary">$13000</span>
						</div>
					</div><!-- .fundpress-item-header END -->
					
					<div class="fundpress-item-content text-center border border-top-0">
						<div class="row xs-margin-0 justify-content-center xs-mb-20">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_5.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>julia</a>
							</div>
						</div>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Zirox Haska Speaker</a>
						<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

						<span class="xs-separetor"></span>

						<ul class="xs-list-with-content fundpress-list-item-content-v2">
							<li class="xs-pie-chart-v2" data-percent="30">
								<div class="icon-position-center">
									<div class="xs-pie-chart-percent"></div>
									<span>%</span>
								</div>
							</li>
							<li>23<span>Backers</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="30" data-animation-duration="3500">0</span>% <span>Founded</span></li>
						</ul>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="fundpress-grid-item-content-v2 wow fadeInUp" data-wow-duration="2.2s">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/popular-campaigns6.jpg" alt="">
						<div class="xs-item-header-content">
							<span class="badge badge-sm badge-v1 badge-pill badge-primary">$13000</span>
						</div>
					</div><!-- .fundpress-item-header END -->
					
					<div class="fundpress-item-content text-center border border-top-0">
						<div class="row xs-margin-0 justify-content-center xs-mb-20">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_6.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Julian Hilion</a>
							</div>
						</div>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Kilin Minimal Watch</a>
						<p>What adventures do you get yourself into everyday, but people with disability gets into some pretty seriously.</p>

						<span class="xs-separetor"></span>

						<ul class="xs-list-with-content fundpress-list-item-content-v2">
							<li class="xs-pie-chart-v2" data-percent="49">
								<div class="icon-position-center">
									<div class="xs-pie-chart-percent"></div>
									<span>%</span>
								</div>
							</li>
							<li>56<span>Backers</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="49" data-animation-duration="3500">0</span>% <span>Founded</span></li>
						</ul>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
		</div>
	</div>
</section><!-- End popular campaigns version 2 -->

<!-- side by side product section -->
<section class="xs-side-by-side-product-v2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-lg-6 xs-padding-0">
				<div class="fundpress-full-width-wraper-v2" style="background-image: url(assets/images/back_other_bg.jpg)">
					<div class="fundpress-product-hover-content-v2">
						<div class="fundpress-sub-title">
							<h2>Back Others</h2>
						</div>
						<div class="fundpress-product-text-content">
							<p>We recently we discovered a major problem –  organizing accessories for these Apple devices while on the road or in our workspace was a major.</p>
						</div>
						<div class="xs-btn-wrapre">
							<a href="#" class="xs-btn btn xs-box-shadow btn-primary btn-lg round-btn">create a project</a>
						</div>
					</div><!-- .fundpress-product-hover-content-v2 END -->
					<div class="xs-solid-overlay xs-bg-black"></div>
				</div><!-- .fundpress-full-width-wraper-v2 END -->
			</div>
			<div class="col-md-12 col-lg-6 xs-padding-0">
				<div class="fundpress-full-width-wraper-v2" style="background-image: url(assets/images/get_funded_bg.jpg)">
					<div class="fundpress-product-hover-content-v2">
						<div class="fundpress-sub-title">
							<h2>Get Funded</h2>
						</div>
						<div class="fundpress-product-text-content">
							<p>We recently we discovered a major problem –  organizing accessories for these Apple devices while on the road or in our workspace was a major.</p>
						</div>
						<div class="xs-btn-wrapre">
							<a href="#" class="xs-btn xs-box-shadow btn btn-primary btn-lg round-btn">create a project</a>
						</div>
					</div><!-- .fundpress-product-hover-content-v2 END -->
					<div class="xs-solid-overlay xs-bg-black"></div>
				</div><!-- .fundpress-full-width-wraper-v2 END -->
			</div>
		</div>
	</div>
</section><!-- End side by side product section -->

<!-- events version 2 section -->
<section class="xs-section-padding" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Upcoming <span>events</span></h2>
				<p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p>
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">Envents</span>
		</div><!-- section heading -->
		<div class="fundpress-tab-wraper">
			<div class="fundpress-tab-nav-v4 xs-tab-nav wow fadeInUp" data-wow-duration="1.3s">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#day_one" role="tab" data-toggle="tab">Day  001 <span>11th January 2018</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#day_two" role="tab" data-toggle="tab">Day  002 <span>12th January 2018</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#day_three" role="tab" data-toggle="tab">Day  003 <span>13th January 2018</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#day_four" role="tab" data-toggle="tab">Day  004 <span>14th January 2018</span></a>
					</li>
				</ul>
			</div><!-- .xs-isotope-nav .fundpress-isotope-nav END -->
			<div class="tab-content wow fadeInUp" data-wow-duration="1.5s">
				<div role="tabpanel" class="tab-pane fadeInRights fade in active show" id="day_one">
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_1.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>09:00AM - 11:45AM</h5>
										<a href="">Recovery Using HRV and CorSense</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_2.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>1200PM - 01:45PM</h5>
										<a href="">Fundrising Base Communation</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/05/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->
				</div>
				<div role="tabpanel" class="tab-pane fadeInRights fade" id="day_two">
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_1.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>09:00AM - 11:45AM</h5>
										<a href="">Recovery Using HRV and CorSense</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_2.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>1200PM - 01:45PM</h5>
										<a href="">Fundrising Base Communation</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/05/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->
				</div>
				<div role="tabpanel" class="tab-pane fadeInRights fade" id="day_three">
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_1.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>09:00AM - 11:45AM</h5>
										<a href="">Recovery Using HRV and CorSense</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_2.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>1200PM - 01:45PM</h5>
										<a href="">Fundrising Base Communation</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/05/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->	
				</div>
				<div role="tabpanel" class="tab-pane fadeInRights fade" id="day_four">
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_1.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>09:00AM - 11:45AM</h5>
										<a href="">Recovery Using HRV and CorSense</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/01/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->
					<div class="fundpress-single-event rounded">
						<div class="row xs-margin-0">
							<div class="col-md-12 col-lg-4 xs-padding-0">
								<img src="assets/images/event/event_img_2.jpg" alt="">
							</div>
							<div class="col-md-12 col-lg-8 row fundpress-event-wraper-v2">
								<div class="col-md-8 xs-padding-0">
									<div class="fundpress-event-content">
										<h5>1200PM - 01:45PM</h5>
										<a href="">Fundrising Base Communation</a>
									</div>
								</div>
								<div class="col-md-4 xs-padding-0">
									<div class="xs-btn-wraper text-right">
										<a href="" class="xs-btn btn btn-primary btn-lg round-btn">buy tickets</a>
									</div>
								</div>
								<div class="col-md-5 xs-padding-0">
									<div class="xs-countdown-timer xs-countdown-timer-v3" data-countdown="2020/05/14"></div>
								</div>
								<div class="col-md-7 xs-padding-0">
									<div class="fundpress-event-text-content text-left">
										<p class="xs-mb-10"><strong>Speaker:</strong> WIlliam Hannah, CEO, Xpeedstudio</p>
										<p><strong>Hall Name:</strong> Hall of fame, 124/ Zigzag City</p>
									</div>
								</div>
							</div>
						</div>
					</div><!-- fundpress-single-event rounded -->
				</div>
			</div>
		</div>
	</div>
</section><!-- End events version 2 section -->

<!-- news feeds version 2 section -->
<section class="xs-section-padding xs-gray-bg-2" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Get new  <span>updates</span></h2>
				<p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p>
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">news</span>
		</div><!-- section heading -->
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="xs-mb-30 fundpress-from-journal fundpress-from-journal-v2 rounded wow fadeInUp" data-wow-duration="1.2s">
					<div class="fundpress-item-header entry-thumbnail">
						<img src="assets/images/news-feed/news_1.jpg" alt="">
					</div><!-- .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<div class="entry-header xs-mb-30">
							<div class="post-author">
								<ul class="xs-simple-tag xs-simple-tag-v2 fundpress-simple-tag author-links">
									<li><span>By</span><a href="" class="color-blue-v2" rel="author">XpeedStudio</a></li>
								</ul>
							</div>
							<h4 class="entry-title">
								<a href="blog-details.html" class="xs-mb-0 xs-post-title color-navy-blue fundpress-post-title">Newman's Own Foundation teams up with FundPress for...</a>
							</h4>
						</div>

						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor xs-mb-20"></span>

						<div class="entry-content xs-spilit-container xs-footer-content">
							<div class="xs-col-6 text-left">
								<span class="date">
									<a href="" title="" rel="bookmark">
										<i class="fa fa-calendar"></i>
										<span class="entry-date xs-entry-date">12 May 2017</span>
									</a>
								</span>
							</div>
							<div class="xs-col-6 text-right">
								<span class="categories-links">
									<a href="" class="xs-blog-meta-tag blue-bg-v2" rel="category tag">technology</a>
								</span>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="xs-mb-30 fundpress-from-journal fundpress-from-journal-v2 rounded wow fadeInUp" data-wow-duration="1.4s">
					<div class="fundpress-item-header entry-thumbnail">
						<img src="assets/images/news-feed/news_2.jpg" alt="">
					</div><!-- .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<div class="entry-header xs-mb-30">
							<div class="post-author">
								<ul class="xs-simple-tag xs-simple-tag-v2 fundpress-simple-tag author-links">
									<li><span>By</span><a href="" class="color-blue-v2" rel="author">Themewinter</a></li>
								</ul>
							</div>
							<h4 class="entry-title">
								<a href="blog-details.html" class="xs-mb-0 xs-post-title color-navy-blue fundpress-post-title">Specializes in creative projects with robust reward level feature</a>
							</h4>
						</div>

						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor xs-mb-20"></span>

						<div class="entry-content xs-spilit-container xs-footer-content">
							<div class="xs-col-6 text-left">
								<span class="date">
									<a href="" title="" rel="bookmark">
										<i class="fa fa-calendar"></i>
										<span class="entry-date xs-entry-date">13 February 2017</span>
									</a>
								</span>
							</div>
							<div class="xs-col-6 text-right">
								<span class="categories-links">
									<a href="" class="xs-blog-meta-tag blue-bg-v2" rel="category tag">Software</a>
								</span>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="xs-mb-30 fundpress-from-journal fundpress-from-journal-v2 rounded wow fadeInUp" data-wow-duration="1.6s">
					<div class="fundpress-item-header entry-thumbnail">
						<img src="assets/images/news-feed/news_3.jpg" alt="">
					</div><!-- .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<div class="entry-header xs-mb-30">
							<div class="post-author">
								<ul class="xs-simple-tag xs-simple-tag-v2 fundpress-simple-tag author-links">
									<li><span>By</span><a href="" class="color-blue-v2" rel="author">Themes</a></li>
								</ul>
							</div>
							<h4 class="entry-title">
								<a href="blog-details.html" class="xs-mb-0 xs-post-title color-navy-blue fundpress-post-title">Can withdraw immediately add and deposits take 2-5 business</a>
							</h4>
						</div>

						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor xs-mb-20"></span>

						<div class="entry-content xs-spilit-container xs-footer-content">
							<div class="xs-col-6 text-left">
								<span class="date">
									<a href="" title="" rel="bookmark">
										<i class="fa fa-calendar"></i>
										<span class="entry-date xs-entry-date">8 March 2017</span>
									</a>
								</span>
							</div>
							<div class="xs-col-6 text-right">
								<span class="categories-links">
									<a href="" class="xs-blog-meta-tag blue-bg-v2" rel="category tag">innovation</a>
								</span>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
		</div>
	</div>
</section><!-- End news feeds version 2 section -->

<!-- sponsor section -->
<section class="xs-section-padding" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Event <span>sponsors</span></h2>
				<p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p>
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">sponsors</span>
		</div><!-- section heading -->
		<div class="row">
			<div class="col-lg-3 text-center">
				<a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.2s">
					<img src="assets/images/partner/sponsor_new_1.png" alt="">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.4s">
					<img src="assets/images/partner/sponsor_new_2.png" alt="">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.6s">
					<img src="assets/images/partner/sponsor_new_3.png" alt="">
				</a>
			</div>
			<div class="col-lg-3 text-center">
				<a href="#" class="fundpress-single-sponsor-v2 wow fadeInUp" data-wow-duration="1.8s">
					<img src="assets/images/partner/sponsor_new_4.png" alt="">
				</a>
			</div>
		</div>
	</div>
</section><!-- End sponsor section -->


	<footer class="fundpress-footer-version-2">
		<div class="fundpress-footer-top-layer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="fundpress-single-footer-v2-content wow fadeInUp" data-wow-duration="1s">
							<div class="xs-footer-logo xs-mb-40">
								<a href="index.html">
									<img src="assets/images/logo_new.png" alt="">
								</a>
							</div>
							<div class="fundpress-footer-content xs-mb-30">
								<p class="color-white xs-mb-0">Each and every Fundpress project is the independent creation of someone like you.Want to know more.</p>
							</div><!-- . END -->
							<a href="#" class="xs-btn btn text-capitalize btn-primary btn-lg round-btn">Discover Innovative Idea</a>
						</div><!-- .fundpress-single-footer-v2 END -->
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="fundpress-single-footer-v2 wow fadeInUp" data-wow-duration="1.2s">
							<div class="xs-footer-title">
								<h4 class="color-white">Explore</h4>
							</div><!-- .xs-footer-title END -->
							<nav class="xs-footer-menu xs-footer-menu-v2">
								<ul>
									<li><a href="index.html">What We Do</a></li>
									<li><a href="#">Funding</a></li>
									<li><a href="#">Marketplace</a></li>
									<li><a href="#">Investing</a></li>
									<li><a href="#">Generosity</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Art and Design</a></li>
								</ul>
							</nav><!-- .xs-footer-menu .xs-block-menu END -->
						</div><!-- .fundpress-single-footer-v2 END -->
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="fundpress-single-footer-v2 wow fadeInUp" data-wow-duration="1.4s">
							<div class="xs-footer-title">
								<h4 class="color-white">Company</h4>
							</div><!-- .xs-footer-title END -->
							<nav class="xs-footer-menu xs-footer-menu-v2">
								<ul>
									<li><a href="">Startup Idea</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="#">What Is This</a></li>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Career</a></li>
									<li><a href="#">Press</a></li>
									<li><a href="#">News Feeds</a></li>
								</ul>
							</nav><!-- .xs-footer-menu .xs-block-menu END -->
						</div><!-- .fundpress-single-footer-v2 END -->
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="fundpress-single-footer-v2 wow fadeInUp" data-wow-duration="1.6s">
							<div class="xs-footer-title">
								<h4 class="color-white">Contact</h4>
							</div><!-- .xs-footer-title END -->
							<ul class="xs-list-item-icon-text-v2">
								<li>
									<i class="icon icon-paper-plane"></i>
									<div class="xs-contact-contet">
										786/A PW Townhall, New York, <br>United States
									</div>
								</li>
								<li>
									<i class="icon icon-phone-call"></i>
									<div class="xs-contact-contet">
										+88 001 2466 (90) <br> (908) 67598 980-12
									</div>
								</li>
								<li>
									<i class="icon icon-email"></i>
									<div class="xs-contact-contet">
										<a href="mailto:yourname@domain.com" class="d-block">yourname@domain.com</a>
										<a href="mailto:yourname@domain.com" class="d-block">yourname@domain.com</a>
									</div>
								</li>
								<li>
									<i class="icon icon-internet"></i>
									<div class="xs-contact-contet">
										<a href="">yourname.com</a>
									</div>
								</li>
							</ul>
						</div><!-- .fundpress-single-footer-v2 END -->
					</div>
				</div>
			</div>
		</div><!-- .xs-footer-wraper .fundpress-footer-top-layer END -->
		<div class="fundpress-footer-bottom-v2">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="fundpress-copyright-text-v2 wow fadeInUp" data-wow-duration="1.8s">
							<p>Built with <i class="fa fa-heart"></i> by <a href="https://xpeedstudio.com/">XpeedStudio</a></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="xs-footer-bottom-wraper text-right wow fadeInUp" data-wow-duration="2s">
							<ul class="xs-social-list xs-social-list-v7">
								<li class="xs-text-content">Follow us</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .xs-footer-bottom-layer .fundpress-footer-bottom END -->
	</footer>


	<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/js/Popper.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
	<script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('assets/js/spectragram.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/scrollax.js') }}"></script>

	<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>