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

@include('partials.site.landing.navbar')

@include('partials.site.landing.login')

@include('partials.site.landing.sign-up')

{{-- Temporary video --}}
<div class="showVideo">

@include('partials.site.landing.welcome-section')

@include('partials.site.landing.side-by-side')

@include('partials.site.landing.grid-section')

@include('partials.site.landing.popular-campaigns')

@include('partials.site.landing.sponsors')

@include('partials.site.landing.footer')

@include('partials.site.landing.modal-newsletter')

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
