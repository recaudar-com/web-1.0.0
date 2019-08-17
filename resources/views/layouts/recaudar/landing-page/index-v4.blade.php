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
        <!-- #preloader -->
		<div id="preloader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
        </div>
        <!-- #preloader -->

<!-- section -->
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
					<!-- Authentication Links -->
					<ul class="xs-icon-with-text fundpress-icon-menu">
					@guest
						<li>
							<a
								href="{{ route('login') }}"
								data-toggle="modal"
								data-target=".bd-example-modal-lg"
							>
								<i class="fa fa-unlock-alt color-green">
								</i>Log In
							</a>
						</li>
						@if (Route::has('register'))
							<li
								class="d-block d-lg-none d-xl-block">
								<a
									href="{{ route('register') }}"
									data-toggle="modal"
									data-target=".register-modal"
									class="xs-btn round-btn green-btn">start a campaign
								</a>
							</li>
						@endif
					@else

						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
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
					<form method="POST" action="{{ route('login') }}" >
						@csrf

							@error('email')
							<div class="xs-input-group-v2 alert alert-danger">
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							</div>
							@enderror

							@error('password')
							<div class="xs-input-group-v2 alert alert-danger">
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							</div>
							@enderror

						<div class="xs-input-group-v2">
							<i class="icon icon-profile-male"></i>
							<input id="email" type="email"
								class="form-control @error('email') is-invalid @enderror xs-input-control"
								name="email" value="{{ old('email') }}" required autocomplete="email"
								autofocus placeholder="Ingresa tu Email">
						</div>
						<div class="xs-input-group-v2">
							<i class="icon icon-key2"></i>
							<input id="password" type="password"
								class="form-control @error('password') is-invalid @enderror xs-input-control" name="password"
								required autocomplete="current-password" placeholder="Ingresa tu password">
						</div>
						<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="{{ __('Login') }}" id="xs_contact_get_action" class="btn btn-warning btn-block">
						</div>
						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
						{{-- <p class="xs-mb-20">or</p>
						<div class="xs-submit-wraper xs-mb-20">
							<input type="submit" name="submit" value="Login with facebook account" id="xs_facebook" class="btn btn-info btn-block">
						</div>
						<div class="xs-submit-wraper">
							<input type="submit" name="submit" value="Login with twitter account" id="xs_twitter" class="btn btn-success btn-block">
						</div> --}}
					</form>
				</div><!-- tab-pane -->
			</div><!-- tab-content -->
		</div>
	</div>
</div>
<!-- End modal --><!-- End home section -->
<!-- modal -->
<div class="modal fade register-modal xs-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="fundpress-tab-nav-v5">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" href="#signup" role="tab" data-toggle="tab">
							Signup
						</a>
					</li>
				</ul>
			</div>
			<form  method="POST" action="{{ route('register') }}" id="xs-register-form">
					@csrf
					@error('name')
					<div class="xs-input-group-v2 alert alert-danger">
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					</div>
					@enderror
					@error('email')
					<div class="xs-input-group-v2 alert alert-danger">
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					</div>
					@enderror
					@error('password')
					<div class="xs-input-group-v2 alert alert-danger">
						<span class="text-danger" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					</div>
					@enderror
					<div class="xs-input-group-v2">
						<i class="icon icon-profile-male"></i>
						<input id="name" type="text" class="form-control xs-input-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tu nombre">
					</div>
					<div class="xs-input-group-v2">
						<i class="icon icon-envelope2"></i>
						<input  id="email" type="email" class="form-control xs-input-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Tu email">
					</div>
					<div class="xs-input-group-v2">
						<i class="icon icon-key2"></i>
						<input id="password" type="password" class="form-control xs-input-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Tu password">
					</div>
					<div class="xs-input-group-v2">
						<i class="icon icon-key2"></i>
						<input id="password-confirm" type="password" class="form-control xs-input-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repite tu password">
					</div>
					<div class="xs-submit-wraper xs-mb-20">
						<input type="submit" name="submit" value="{{ __('Register') }}" id="xs_register_get_action" class="btn btn-warning btn-block">
					</div>
					{{-- <p class="xs-mb-20">or</p>
					<div class="xs-submit-wraper xs-mb-20">
						<input type="submit" name="submit" value="Login with facebook account" id="xs_register_facebook" class="btn btn-info btn-block">
					</div>
					<div class="xs-submit-wraper">
						<input type="submit" name="submit" value="Login with twitter account" id="xs_register_twitter" class="btn btn-success btn-block">
					</div> --}}
				</form>
		</div>
	</div>
</div>
<!-- End modal --><!-- End home section -->

{{-- Temporary video --}}
<div class="showVideo">

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
</section>
<!-- End welcome section -->

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
</section>
<!-- End side by side product -->

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
</section>
<!-- End version 2 caouse matters -->

<!-- popular campaigns version 2 -->
<section class="waypoint-tigger xs-section-padding fundpress-popular-campaigns-v2 xs-gray-bg-2" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Popular <span>campaigns</span></h2>
				<p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p>
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">Campaigns</span>
		</div><!-- section heading -->
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="fundpress-grid-item-content wow fadeInUp animated" >
                    <div class="fundpress-item-header xs-mb-30">
                        <img src="assets/images/product/products-1.jpg" alt="">
                        <div class="xs-item-header-content">
                            <div class="xs-skill-bar-v3" data-percent="65%">
                                <div class="xs-skill-track" style="width: 65%;">
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
                <div class="fundpress-grid-item-content wow fadeInUp animated">
                    <div class="fundpress-item-header xs-mb-30">
                        <img src="assets/images/product/products-2.jpg" alt="">
                        <div class="xs-item-header-content">
                            <div class="xs-skill-bar-v3" data-percent="32%">
                                <div class="xs-skill-track" style="width: 32%;">
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
                <div class="fundpress-grid-item-content wow fadeInUp animated">
                    <div class="fundpress-item-header xs-mb-30">
                        <img src="assets/images/product/products-3.jpg" alt="">
                        <div class="xs-item-header-content">
                            <div class="xs-skill-bar-v3" data-percent="80%">
                                <div class="xs-skill-track" style="width: 80%;">
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
        <div class="row">
            <div class="col-lg-4">
                <div class="fundpress-grid-item-content wow fadeInUp animated">
                    <div class="fundpress-item-header xs-mb-30">
                        <img src="assets/images/product/products-1.jpg" alt="">
                        <div class="xs-item-header-content">
                            <div class="xs-skill-bar-v3" data-percent="65%">
                                <div class="xs-skill-track" style="width: 65%;">
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
                <div class="fundpress-grid-item-content wow fadeInUp animated">
                    <div class="fundpress-item-header xs-mb-30">
                        <img src="assets/images/product/products-2.jpg" alt="">
                        <div class="xs-item-header-content">
                            <div class="xs-skill-bar-v3" data-percent="32%">
                                <div class="xs-skill-track" style="width: 32%;">
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
                <div class="fundpress-grid-item-content wow fadeInUp animated">
                    <div class="fundpress-item-header xs-mb-30">
                        <img src="assets/images/product/products-3.jpg" alt="">
                        <div class="xs-item-header-content">
                            <div class="xs-skill-bar-v3" data-percent="80%">
                                <div class="xs-skill-track" style="width: 80%;">
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
</section>
<!-- End popular campaigns version 2 -->

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
</section>
<!-- End sponsor section -->

<!-- Footer section -->
<footer class="xs-footer-section fundpress-footer-section">
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
<!-- End Footer section -->


<div class="modal fade xs-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h3>Suscribete</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AfYC0R8hYiE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="mt-2 mb-2 text-dark" style="font-size: 18px"> Asiste al evento de lanzamiento </p>
            <form method="POST" action="{{ route('newsletter') }}">
                @csrf
                <input type="email" name="email" id="email" class="form-control" placeholder="Aqui escribe tu email">
                <input type="submit" value="Suscribete" class="btn btn-primary btn-block mt-3">
            </form>
        </div>
    </div>
</div>

<div class="modal fade xs-modal" id="infoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @if ($message = Session::get('info'))
                <h1 class="text-center">{{ $message }}</h1>
            @endif
        </div>
    </div>
</div>





</div>
{{-- end show video --}}

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
        const allPage = document.querySelector('.showVideo')
        allPage.addEventListener('click', showVideo, false)
        function showVideo() {
            $('#myModal').modal('show')
        }

    </script>

@if ($message = Session::get('info'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
<script>
    $('#infoModal').modal('show')
</script>
@endif

</body>
</html>
