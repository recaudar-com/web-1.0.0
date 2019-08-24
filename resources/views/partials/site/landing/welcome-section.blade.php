<!-- welcome section -->
<section class="xs-screen-height xs-welcome-section xs-bg fundpress-welcome-section">
	<div class="xs-banner-slider owl-carousel">
		

		@include('partials.site.landing.slider', [
			'title'				=>		'Ayuda al hogar de perritos San Jose',
			'percent'			=>		65,
			'founded'			=>		'Q13,000',
			'goal'				=>		'Q20,000',
			'backers'			=>		25,
			'image'				=> 		'assets/images/slider/1.jpg'
		])

		@include('partials.site.landing.slider', [
			'title'				=>		'Reforesta Árboles en Petén',
			'percent'			=>		32,
			'founded'			=>		'Q3,520',
			'goal'				=>		'Q11,000',
			'backers'			=>		19,
			'image'				=> 		'assets/images/slider/2.jpg'
		])

		@include('partials.site.landing.slider', [
			'title'				=>		'Ayuda a los niños del hogar Madre Teresa',
			'percent'			=>		80,
			'founded'			=>		'Q48,000',
			'goal'				=>		'Q60,000',
			'backers'			=>		19,
			'image'				=> 		'assets/images/slider/3.jpg'
		])

	</div>
</section>
<!-- End welcome section -->