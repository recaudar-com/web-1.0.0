<!-- header version inner menu -->
<header class="xs-header-height xs-menu-style-transparent xs-menu-style-border fundpress-header-main-version color-navy-blue v3">
	<div class="container">
		<nav class="xs-menus fundpress-menu">
			<div class="nav-header">
				<div class="nav-toggle"></div>
				<a class="nav-brand nav-logo" href="index.html">
					<img src="{{ asset('assets/images/logo-recaudar.png') }}" alt="">
				</a>
			</div><!-- . END -->
			<div class="nav-menus-wrapper">
				<div class="xs-logo-wraper d-flex align-items-center">
					<a class="nav-brand xs-logo" href="index.html">
						<img src="{{ asset('assets/images/logo-recaudar.png') }}" alt="">
					</a>
				</div>
				<ul class="nav-menu">
					<li><a href="contact.html">Inicio</a></li>
					{{-- <li><a href="">Inicio</a>
						<ul class="nav-dropdown">
							<li><a href="index.html">home version 1</a></li>
							<li><a href="index-v2.html">home version 2</a></li>
							<li><a href="index-v3.html">home version 3</a></li>
						</ul>
					</li> --}}
					<li><a href="about.html">Quienes somos</a></li>
					<li><a href="contact.html">Blog</a></li>
					{{-- <li><a href="#">Blog</a>
						<ul class="nav-dropdown">
							<li><a href="news-feed.html ">blog version 1</a></li>
							<li><a href="news-feed-v2.html ">blog version 2</a></li>
							<li><a href="news-feed-v3.html">blog version 3</a></li>
							<li><a href="blog-single.html">blog details </a></li>
						</ul>
					</li> --}}
					<li><a href="contact.html">Contacto</a></li>
					{{-- <li><a href="#">pages</a>
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
					</li> --}}
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
								</i>Iniciar Sesión
							</a>
						</li>
						@if (Route::has('register'))
							<li
								class="d-block d-lg-none d-xl-block">
								<a
									href="{{ route('register') }}"
									data-toggle="modal"
									data-target=".register-modal"
									class="xs-btn round-btn green-btn">Crea tu campaña
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