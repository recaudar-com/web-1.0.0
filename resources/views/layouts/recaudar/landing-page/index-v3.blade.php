<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>FundPress - Home Three</title>
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
<!-- home section -->
<!-- header version inner menu -->
<header class="xs-header-height xs-menu-style-transparent xs-menu-style-border fundpress-header-main-version color-navy-blue v3">
	<div class="container">
		<nav class="xs-menus fundpress-menu">
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a class="nav-brand nav-logo" href="index.html">
					<img src="assets/images/logo.png" alt="">
				</a>
			</div><!-- . END -->
			<div class="nav-menus-wrapper">
				<div class="xs-logo-wraper">
					<a class="nav-brand xs-logo fundpress-logo-v1" href="index.html">
						<img src="assets/images/logo.png" alt="">
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
							<li><a href="portfolio.html">portfolio</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="single-shop.html">single Shop</a></li>
						</ul>
					</li>
				</ul>
				<div class="xs-navs-button">
					<ul class="xs-icon-with-text fundpress-icon-menu">
						<li><a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-unlock-alt color-green"></i>Log In</a></li>
						<li class="d-block d-lg-none d-xl-block"><a href="#" class="xs-btn round-btn green-btn">start a campaign</a></li>
					</ul>
				</div>
			</div><!-- .nav-menus-wrapper END -->
		</nav><!-- .xs-menus .fundpress-menu END -->
	</div>
</header>
<!-- header version inner menu closed -->


<!-- modal -->
<div class="modal fade bd-example-modal-lg xs-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
							<input type="submit" name="submit" value="login now" id="xs_register_get_action" class="btn btn-warning btn-block">
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
</div><!-- End modal --><!-- End home section -->

<!-- welcome section -->
<section class="xs-screen-height xs-welcome-section xs-bg fundpress-welcome-section">
	<div class="xs-banner-slider owl-carousel">
		<div class="xs-banner-slider-item" style="background-image: url(assets/images/welcome-bg-3.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-welcome-content version-3">
							<div class="xs-welcome-wraper">
								<h2>Nion Powerful Minimal Device</h2>
								<div class="xs-skill-bar-v2" data-percent="65%">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count">65</span>%</p>
									</div>
								</div>
								<ul class="fundpress-welcome-list-content list-inline">
									<li>$45,280<span class="d-block">Pledged</span></li>
									<li>$87,000<span class="d-block">Goal</span></li>
									<li>119<span class="d-block">Backers</span></li>
								</ul>
								<div class="xs-btn-wraper">
									<a href="#" class="xs-btn navy-blue-btn round-btn">see campaign</a>
								</div>
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
					<div class="col-lg-6" >
						<div class="xs-welcome-content">
							<div class="xs-welcome-wraper">
								<img src="assets/images/slider_3_1.png" alt="">
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
				</div>
			</div>
		</div>
		<div class="xs-banner-slider-item" style="background-image: url(assets/images/welcome-bg-3.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-welcome-content version-3">
							<div class="xs-welcome-wraper">
								<h2>Nion Powerful Minimal Device</h2>
								<div class="xs-skill-bar-v2" data-percent="65%">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count">65</span>%</p>
									</div>
								</div>
								<ul class="fundpress-welcome-list-content list-inline">
									<li>$10,280<span class="d-block">Pledged</span></li>
									<li>$50,000<span class="d-block">Goal</span></li>
									<li>19<span class="d-block">Backers</span></li>
								</ul>
								<div class="xs-btn-wraper">
									<a href="#" class="xs-btn navy-blue-btn round-btn">see campaign</a>
								</div>
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
					<div class="col-lg-6" >
						<div class="xs-welcome-content">
							<div class="xs-welcome-wraper">
								<img src="assets/images/slider_3_2.png" alt="">
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
				</div>
			</div>
		</div>
		<div class="xs-banner-slider-item" style="background-image: url(assets/images/welcome-bg-3.png);">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="xs-welcome-content version-3">
							<div class="xs-welcome-wraper">
								<h2>Nion Powerful Minimal Device</h2>
								<div class="xs-skill-bar-v2" data-percent="65%">
									<div class="xs-skill-track">
										<p><span class="number-percentage-count">65</span>%</p>
									</div>
								</div>
								<ul class="fundpress-welcome-list-content list-inline">
									<li>$55,280<span class="d-block">Pledged</span></li>
									<li>$80,000<span class="d-block">Goal</span></li>
									<li>100<span class="d-block">Backers</span></li>
								</ul>
								<div class="xs-btn-wraper">
									<a href="#" class="xs-btn navy-blue-btn round-btn">see campaign</a>
								</div>
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
					<div class="col-lg-6" >
						<div class="xs-welcome-content">
							<div class="xs-welcome-wraper">
								<img src="assets/images/slider_3_3.png" alt="">
							</div><!-- .xs-welcome-wraper END -->
						</div><!-- .xs-welcome-content END -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End welcome section -->

<!-- side by side product -->
<section class="xs-full-width-section fundpress-full-width-section">
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
</section><!-- End side by side product -->

<!-- cause matters -->
<section id="cause-matters" class="waypoint-tigger xs-section-padding v3">
	<div class="container">
		<div class="xs-section-heading row xs-margin-0">
			<div class="fundpress-heading-title xs-padding-0 col-md-9 col-xl-9">
				<h2 class="color-navy-blue">Big of small your cause matters</h2>
				<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
				<p>Fundpress site thoughtfully designed for real humans which means the best user experience for your entire community of donors, fundraisers, customers, and staff.</p>
			</div><!-- .fundpress-heading-title .xs-col-9 END -->
			<div class="xs-btn-wraper xs-padding-0 col-xl-3 col-md-3 d-flex-center-end">
				<a href="progress.html" class="xs-btn round-btn navy-blue-btn">all Projects</a>
			</div><!-- .xs-btn-wraper .xs-col-3 .d-flex-center-end END -->
		</div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
		<div class="xs-tab-wraper fundpress-tab-wraper">
			<div class="fundpress-tab-nav xs-tab-nav">
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
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active show" id="comics">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="crafts">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="dance">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="design">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="fashion">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="food">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="games">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="film_and_video">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="journalism">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="music">
					<div class="row">
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-1.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="65%">
											<div class="xs-skill-track">
												<p>65%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Music</a></li>
										<li><a href="">Technology</a></li>
										<li><a href="">UI/UX</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$15,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">65%</span><span>Funded</span></li>
										<li>50<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-2.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="32%">
											<div class="xs-skill-track">
												<p>32%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Craft</a></li>
										<li><a href="">Handmade</a></li>
										<li><a href="">Photography</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Water Colors: Kim Keever's First-Ever Monograph</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$45,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">32%</span><span>Funded</span></li>
										<li>45<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
						<div class="col-lg-4">
							<div class="fundpress-grid-item-content">
								<div class="fundpress-item-header xs-mb-30">
									<img src="assets/images/product/products-3.jpg" alt="">
									<div class="xs-item-header-content">
										<div class="xs-skill-bar-v3" data-percent="80%">
											<div class="xs-skill-track">
												<p>80%</p>
											</div>
										</div>
									</div>
								</div><!-- .fundpress-item-header END -->
								<div class="fundpress-item-content">
									<ul class="xs-simple-tag fundpress-simple-tag">
										<li><a href="">Lifestyle</a></li>
										<li><a href="">Photography</a></li>
										<li><a href="">Games</a></li>
									</ul>
									<a href="#" class="d-block color-navy-blue fundpress-post-title">Dress up Box— Make-Believe inform Clothing for Girls</a>
									<ul class="xs-list-with-content fundpress-list-item-content">
										<li>$76,280<span>Pledged</span></li>
										<li><span class="number-percentage-count">80%</span><span>Funded</span></li>
										<li>79<span>Days to go</span></li>
									</ul>
								</div><!-- .fundpress-item-content END -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End cause matters -->

<!-- square service -->
<section  class="xs-navy-blue-bg fundpress-square-service-section v3">
	<div class="container">
		<div class="fundpress-section-heading fundpress-heading-title fundpress-heading-title-v2 content-left">
			<h2 class="color-white">Asking for money is hard. FundPress makes it easier. </h2>
		</div><!-- .xs-heading-title .fundpress-heading-title-v2 .fundpress-heading-title END -->
		<div class="row">
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-1.png" alt="">
					<a href="#" class="color-white">Free & Simple Setup. </a>
					<p>Start fundraising in minutes. No goal requirements, no deadlines.  </p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-2.png" alt="">
					<a href="#" class="color-white">Most Money Raised.</a>
					<p>Join the millions who have raised more than $2 billion on FundPress.</p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-3.png" alt="">
					<a href="#" class="color-white">Expert Advice, 24/7.</a>
					<p>Our campaign coaches will answer your questions in 5 minutes, day or night.</p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
			<div class="col-md-6 col-sm-12 col-lg-3">
				<div class="fundpress-icon-with-square-service">
					<img src="assets/images/icon-4.png" alt="">
					<a href="#" class="color-white">Safety. Guaranteed.</a>
					<p>The GoFundMe Guarantee protects your donations and supporters. </p>
				</div><!-- .fundpress-icon-with-square-service END -->
			</div>
		</div>
	</div>
	<div class="xs-shape-background">
		<div class="xs-waves">
			<div class="xs-wave xs-wave_1"></div>
			<div class="xs-wave xs-wave_2"></div>
			<div class="xs-wave xs-wave_3"></div>
			<div class="xs-wave xs-wave_4"></div>
			<div class="xs-wave xs-wave_5"></div>
		</div>
	</div>
</section><!-- End square service -->

<!-- popular campaigns -->
<section id="popular-campaigns" class="xs-gray-bg waypoint-tigger xs-section-padding v3">
	<div class="container">
		<div class="xs-section-heading row xs-margin-0">
			<div class="fundpress-heading-title xs-padding-0 col-xl-9 col-md-9">
				<h2 class="color-navy-blue">Popular Campaigns</h2>
				<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
				<p>FundPress has built a platform focused on aiding entrepreneurs, startups, and companies raise capital from anyone.</p>
			</div><!-- .xs-heading-title .fundpress-heading-title .xs-col-9 END -->
			<div class="xs-btn-wraper xs-padding-0 col-xl-3 col-md-3 d-flex-center-end">
				<a href="#" class="xs-btn round-btn navy-blue-btn">all Campaigns</a>
			</div><!-- .xs-btn-wraper .xs-col-3 .d-flex-center-end END -->
		</div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
		<div class="row">
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-1.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="">Technology</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Splash Drone 3 a Fully Waterproof Drone that floats</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$67,000<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>3<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_1.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Ema Watson</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-2.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="">Charity</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">The Read Read: Braille Literacy Tool for the Blind</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$33,600<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="59" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>10<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_2.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Kene Williamson</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-3.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="">Funding</a></li>
							<li><a href="">Charity</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">BuildOne: $99 3D Printer w/ WiFi and Auto Bed Leveling!</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$12,760<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>66<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_3.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Leo Baddabes</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-4.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="85" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="">Games</a></li>
							<li><a href="">Technology</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">DACBerry PRO – Professional Soundcard for Raspberry Pi</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$99,980<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="85" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>2<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_4.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Jhung Li</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-5.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="74" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="">Charity</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">BIKI: First Bionic Wireless Under water Fish Drone</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$40,000<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="74" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>70<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_5.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Chirstina Perry</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
			<div class="col-lg-4">
				<div class="xs-box-shadow fundpress-popular-item xs-bg-white">
					<div class="fundpress-item-header">
						<img src="assets/images/campaigns/campaigns-6.jpg" alt="">
						<div class="xs-item-header-content">
							<div class="xs-skill-bar">
								<div class="xs-skill-track">
									<p><span class="number-percentage-count number-percentage" data-value="90" data-animation-duration="3500">0</span>%</p>
								</div>
							</div>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<ul class="xs-simple-tag fundpress-simple-tag">
							<li><a href="">Charity</a></li>
						</ul>
						<a href="#" class="d-block color-navy-blue fundpress-post-title">Brilliant After All, A New Album by Rebecca: Help poor people</a>
						<ul class="xs-list-with-content fundpress-list-item-content">
							<li>$98,900<span>Pledged</span></li>
							<li><span class="number-percentage-count number-percentage" data-value="85" data-animation-duration="3500">0</span>% <span>Funded</span></li>
							<li>2<span>Days to go</span></li>
						</ul>
						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor"></span>
						<div class="row xs-margin-0">
							<div class="full-round fundpress-avatar">
								<img src="assets/images/avatar/avatar_6.jpg" alt="">
							</div>
							<div class="xs-avatar-title">
								<a href="#"><span>By</span>Prekina William</a>
							</div>
						</div>
					</div><!-- .fundpress-item-content END -->
				</div>
			</div>
		</div>
	</div>
</section><!-- End popular campaigns -->

<!-- event section -->
<section class="xs-bg fundpress-event-section xs-section-padding v3" style="background-image: url(assets/images/icons-background-1.png);">
	<div class="container">
		<div class="xs-section-heading row xs-margin-0">
			<div class="fundpress-heading-title xs-padding-0 col-md-9 col-xl-9">
				<h2 class="color-navy-blue">You can join in Special Events</h2>
				<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
				<p>This equity FundPress platform allows businesses to sell shares in their company to accredited investors.</p>
			</div><!-- .xs-heading-title .fundpress-heading-title .xs-col-9 END -->
			<div class="xs-btn-wraper xs-padding-0 col-md-3 col-xl-3 d-flex-center-end">
				<a href="events.html" class="xs-btn round-btn navy-blue-btn">Events</a>
			</div><!-- .xs-btn-wraper .d-flex-center-end .xs-col-3 END -->
		</div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
		<div class="fundpress-event-wraper">
			<div class="fundpress-single-event-wraper row">
				<div class="col-md-3">
					<div class="fundpress-event-image">
						<img src="assets/images/event/event-1.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6 fundpress-event-details">
					<h3 class="color-white xs-post-title fundpress-post-title">Using HRV and CorSense to Otimize Training.</h3>
					<p>In a time of overwhelming emotions, sadness, and pain, the last thing the  families need to be worrying obligations associated with this tragic.</p>
					<div class="countdown-container xs-countdown-timer" data-countdown="2019/01/01"></div>
				</div>
				<div class="col-md-3">
					<div class="fundpress-btn-wraper">
						<a href="#" class="xs-btn round-btn green-btn">subscribe</a>
					</div>
				</div>
			</div><!-- .fundpress-single-event-wraper END -->
			<div class="fundpress-single-event-wraper row">
				<div class="col-md-3">
					<div class="fundpress-event-image">
						<img src="assets/images/event/event-2.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6 fundpress-event-details">
					<h3 class="color-white xs-post-title fundpress-post-title">Otimize Training & Recovery Using HRV</h3>
					<p>In a time of overwhelming emotions, sadness, and pain, the last thing the  families need to be worrying obligations associated with this tragic.</p>
					<div class="countdown-container xs-countdown-timer" data-countdown="2020/01/01"></div>
				</div>
				<div class="col-md-3">
					<div class="fundpress-btn-wraper">
						<a href="#" class="xs-btn round-btn green-btn">subscribe</a>
					</div>
				</div>
			</div><!-- .fundpress-single-event-wraper END -->
		</div>
	</div>
</section><!-- End event section -->

<!-- journal section -->
<section class="xs-gray-bg fundpress-journal-section xs-section-padding v3">
	<div class="container">
		<div class="xs-section-heading row xs-margin-0">
			<div class="fundpress-heading-title xs-padding-0 col-md-9 col-xl-9">
				<h2 class="color-navy-blue">From the Journal</h2>
				<span class="xs-separetor dashed-separetor fundpress-separetor"></span>
				<p>It allows you to gather monthly subscriptions from fans to help fund your creative projects. They also encourage their users to offer rewards to fans as a way to repay them for their support.</p>
			</div><!-- .xs-heading-title .fundpress-heading-title .xs-col-9 END -->
			<div class="xs-btn-wraper xs-padding-0 col-xl-3 col-md-3 d-flex-center-end">
				<a href="news-feed.html" class="xs-btn round-btn navy-blue-btn">Blog</a>
			</div><!-- .xs-btn-wraper .d-flex-center-end .xs-col-3 END -->
		</div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
		<div class="row">
			<div class="col-md-6 col-sm-12 col-lg-4">
				<div class="fundpress-grid-item-content xs-box-shadow fundpress-from-journal">
					<div class="xs-item-header fundpress-item-header entry-thumbnail">
						<img src="assets/images/journal/journal-1.jpg" alt="">
						<div class="xs-item-header-content">
							<a href="#" class="full-round icon-identify-btn green-btn"><i class="fa fa-play"></i></a>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<div class="entry-header xs-mb-30">
							<div class="post-author">
								<ul class="xs-simple-tag xs-simple-tag-v2 fundpress-simple-tag author-links">
									<li><span>By</span><a href="#" rel="author">Rose</a></li>
								</ul>
							</div>
							<h4 class="entry-title">
								<a href="#" class="xs-mb-0 xs-post-title color-navy-blue fundpress-post-title">Professional Soundcard</a>
							</h4>
							<p>Founded by berlin’s clubcommissioner alongside amsterdam’s with nightori mayor, the creative footprint.</p>
						</div>

						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor xs-mb-20"></span>

						<div class="entry-content xs-spilit-container xs-footer-content">
							<div class="xs-col-6 text-left">
								<span class="date">
									<a href="" title="" rel="bookmark">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<span class="entry-date xs-entry-date">March 15, 2018</span>
									</a>
								</span>
							</div>
							<div class="xs-col-6 text-right">
								<span class="categories-links">
									<a href="#" class="xs-blog-meta-tag green-bg bold color-white xs-border-radius" rel="category tag">Project</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">
				<div class="fundpress-grid-item-content xs-box-shadow fundpress-from-journal">
					<div class="xs-item-header fundpress-item-header entry-thumbnail">
						<img src="assets/images/journal/journal-2.jpg" alt="">
						<div class="xs-item-header-content">
							<a href="#" class="full-round icon-identify-btn green-btn"><i class="fa fa-image"></i></a>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<div class="entry-header xs-mb-30">
							<div class="post-author">
								<ul class="xs-simple-tag xs-simple-tag-v2 fundpress-simple-tag author-links">
									<li><span>By</span><a href="#" rel="author">Rose</a></li>
								</ul>
							</div>
							<h4 class="entry-title">
								<a href="#" class="xs-mb-0 xs-post-title color-navy-blue fundpress-post-title">A New Album by Rebecca</a>
							</h4>
							<p>Founded by berlin’s clubcommissioner alongside amsterdam’s with nightori mayor, the creative footprint.</p>
						</div>

						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor xs-mb-20"></span>

						<div class="entry-content xs-spilit-container xs-footer-content">
							<div class="xs-col-6 text-left">
								<span class="date">
									<a href="" title="" rel="bookmark">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<span class="entry-date xs-entry-date">March 15, 2018</span>
									</a>
								</span>
							</div>
							<div class="xs-col-6 text-right">
								<span class="categories-links">
									<a href="#" class="xs-blog-meta-tag green-bg bold color-white xs-border-radius" rel="category tag">Adoption</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">
				<div class="fundpress-grid-item-content xs-box-shadow fundpress-from-journal">
					<div class="xs-item-header fundpress-item-header entry-thumbnail">
						<img src="assets/images/journal/journal-3.jpg" alt="">
						<div class="xs-item-header-content">
							<a href="#" class="full-round icon-identify-btn green-btn"><i class="fa fa-video-camera"></i></a>
						</div>
					</div><!-- .xs-item-header .fundpress-item-header END -->
					<div class="fundpress-item-content xs-content-padding bg-color-white">
						<div class="entry-header xs-mb-30">
							<div class="post-author">
								<ul class="xs-simple-tag xs-simple-tag-v2 fundpress-simple-tag author-links">
									<li><span>By</span><a href="#" rel="author">Rose</a></li>
								</ul>
							</div>
							<h4 class="entry-title">
								<a href="#" class="xs-mb-0 xs-post-title color-navy-blue fundpress-post-title">First Bionic Wireless</a>
							</h4>
							<p>Founded by berlin’s clubcommissioner alongside amsterdam’s with nightori mayor, the creative footprint.</p>
						</div>

						<span class="xs-separetor border-separetor xs-separetor-v2 fundpress-separetor xs-mb-20"></span>

						<div class="entry-content xs-spilit-container xs-footer-content">
							<div class="xs-col-6 text-left">
								<span class="date">
									<a href="" title="" rel="bookmark">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<span class="entry-date xs-entry-date">March 15, 2018</span>
									</a>
								</span>
							</div>
							<div class="xs-col-6 text-right">
								<span class="categories-links">
									<a href="#" class="xs-blog-meta-tag green-bg bold color-white xs-border-radius" rel="category tag">Film</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End journal section -->

<!-- sponsor section -->
<section class="xs-bg xs-section-padding fundpress-sponsor-section" style="background-image: url(assets/images/background/sponsor_section_bg.jpg);">
	<div class="xs-solid-overlay xs-bg-white"></div>
	<div class="container fundpress-partners-wraper">
		<div class="fundpress-heading-title">
			<h2 class="color-navy-blue xs-mb-0">Trusted by the biggest nonprofits, companies in the world.</h2>
		</div><!-- .xs-heading-title .fundpress-heading-title END -->
		<div class="content-center">
			<ul class="fundpress-partners">
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-1.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-2.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-3.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-4.png" alt=""></a></li>
			</ul><!-- .fundpress-partners END -->
		</div>
		<div class="content-center">
			<ul class="fundpress-partners">
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-5.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-6.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-7.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-8.png" alt=""></a></li>
				<li><a href="#" class="full-round fundpress-single-partner"><img src="assets/images/partner/partner-9.png" alt=""></a></li>
			</ul><!-- .fundpress-partners END -->
		</div>
	</div>
</section><!-- End sponsor section -->


		<footer class="xs-footer-section fundpress-footer-section v3">
			<div class="fundpress-footer-top-layer">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="fundpress-single-footer">
								<div class="xs-footer-logo">
									<a href="index.html">
										<img src="assets/images/footer_logo.png" alt="">
									</a>
								</div>
								<div class="fundpress-footer-content">
									<p>FundPress online and raise money for charity and causes you’re passionate about. FundPress is an innovative, cost-effective online fundraising website for personal fundraising pages.</p>
								</div><!-- . END -->
								<ul class="xs-social-list fundpress-social-list">
									<li><a href="" class="color-facebook full-round"><i class="fa fa-facebook"></i></a></li>
									<li><a href="" class="color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
									<li><a href="" class="color-dribbble full-round"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="" class="color-pinterest full-round"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="" class="color-instagram full-round"><i class="fa fa-instagram"></i></a></li>
								</ul><!-- .xs-social-list .fundpress-social-list END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
						<div class="col-md-3">
							<div class="fundpress-single-footer">
								<div class="xs-footer-title">
									<h4 class="color-white">Explore Campaigns</h4>
								</div><!-- .xs-footer-title END -->
								<nav class="xs-footer-menu">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="#">Gadgets</a></li>
										<li><a href="#">Monuments</a></li>
										<li><a href="#">Travels</a></li>
										<li><a href="#">Accessoriers</a></li>
										<li><a href="#">Books</a></li>
										<li><a href="#">Community Programs</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</nav><!-- .xs-footer-menu .xs-block-menu END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
						<div class="col-md-2">
							<div class="fundpress-single-footer">
								<div class="xs-footer-title">
									<h4 class="color-white">About</h4>
								</div><!-- .xs-footer-title END -->
								<nav class="xs-footer-menu">
									<ul>
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">How It Works</a></li>
										<li><a href="#">Careers</a></li>
										<li><a href="#">Press</a></li>
										<li><a href="news-feed.html">Blog</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav><!-- .xs-footer-menu .xs-block-menu END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
						<div class="col-md-2">
							<div class="fundpress-single-footer">
								<div class="xs-footer-title">
									<h4 class="color-white">Help</h4>
								</div><!-- .xs-footer-title END -->
								<nav class="xs-footer-menu">
									<ul>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="#">Our Rules</a></li>
										<li><a href="#">Trust & Safety</a></li>
										<li><a href="#">Support</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Privacy Policy</a></li>
									</ul>
								</nav><!-- .xs-footer-menu .xs-block-menu END -->
							</div><!-- .fundpress-single-footer END -->
						</div>
					</div>
				</div>
			</div><!-- .xs-footer-wraper .fundpress-footer-top-layer END -->
			<div class="xs-footer-bottom-layer fundpress-footer-bottom">
				<div class="container">
					<div class="xs-footer-bottom-wraper">
						<div class="xs-copyright-text fundpress-copyright-text">
							<p>Built with <i class="fa fa-heart"></i> by <a href="https://xpeedstudio.com/">XpeedStudio</a></p>
						</div>
						<div class="xs-back-to-top-wraper">
							<a href="#" class="xs-back-to-top full-round green-btn xs-back-to-top-btn show-last-pos">
								<i class="fa fa-angle-up"></i>
							</a>
						</div><!-- .xs-back-to-top-wraper END -->
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
