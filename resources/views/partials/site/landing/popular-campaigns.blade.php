<!-- popular campaigns version 2 -->
<section class="waypoint-tigger xs-section-padding fundpress-popular-campaigns-v2 xs-gray-bg-2" data-scrollax-parent="true">
	<div class="container">
		<div class="fundpress-heading-title-v3 text-center wow fadeInUp" data-wow-duration="1s">
			<div class="fundpress-heading-title-content">
				<h2>Campañas <span>Populares</span></h2>
				{{-- <p>A man of letters. A Platonic dreamer in a dream world. A masochist with <br> an idealized ego that denies reality.</p> --}}
			</div>
			<span class="parallax-title" data-scrollax="properties: { translateY: '-250px' }">Campañas</span>
		</div><!-- section heading -->
        <div class="row mb-3">

            @include('partials.site.landing.campaign-card', [
                'image'         =>    'assets/images/campaigns/1.jpg',
                'percent'       =>    65,
                'title'         =>    'Ayuda al hogar de perritos San José',
                'category'      =>    'Mascotas',
                'goal'          =>    'Q20,000',
                'remainingDays' =>    50
            ])

            @include('partials.site.landing.campaign-card', [
                'image'         =>    'assets/images/campaigns/2.jpg',
                'percent'       =>    32,
                'title'         =>    'Reforesta Árboles en Petén',
                'category'      =>    'Reforestación',
                'goal'          =>    'Q11,000',
                'remainingDays' =>    45
            ])

            @include('partials.site.landing.campaign-card', [
                'image'         =>    'assets/images/campaigns/3.jpg',
                'percent'       =>    80,
                'title'         =>    'Ayuda a los niños del hogar Madre Teresa',
                'category'      =>    'Fundación',
                'goal'          =>    'Q60,000',
                'remainingDays' =>    20
            ])

        </div>
        <div class="row">
            
            @include('partials.site.landing.campaign-card', [
                'image'         =>    'assets/images/campaigns/4.jpg',
                'percent'       =>    65,
                'title'         =>    'Juntos operamos a Carlos',
                'category'      =>    'Fundación',
                'goal'          =>    'Q21,000',
                'remainingDays' =>    45
            ])


            @include('partials.site.landing.campaign-card', [
                'image'         =>    'assets/images/campaigns/5.jpg',
                'percent'       =>    32,
                'title'         =>    'Reconstruyamos la escuela Dr. Jose Escriba',
                'category'      =>    'Fundación',
                'goal'          =>    'Q30,000',
                'remainingDays' =>    32
            ])

            @include('partials.site.landing.campaign-card', [
                'image'         =>    'assets/images/campaigns/6.jpg',
                'percent'       =>    80,
                'title'         =>    'Colaboremos con la inundación',
                'category'      =>    'Fundación',
                'goal'          =>    'Q20,000',
                'remainingDays' =>    25
            ])
            
        </div>
	</div>
</section>
<!-- End popular campaigns version 2 -->