<div class="xs-banner-slider-item" style="background-image: url(assets/images/welcome-bg-3.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="xs-welcome-content version-3">
                    <div class="xs-welcome-wraper">
                        <h2>{{ $title }}</h2>
                        <div class="xs-skill-bar-v2" data-percent="65%">
                            <div class="xs-skill-track">
                                <p><span class="number-percentage-count">{{ $percent }}</span>%</p>
                            </div>
                        </div>
                        <ul class="fundpress-welcome-list-content list-inline">
                            <li>{{ $founded }}<span class="d-block">Recaudado</span></li>
                            <li>{{ $goal }}<span class="d-block">Meta</span></li>
                            <li>{{ $backers }}<span class="d-block">Donadores</span></li>
                        </ul>
                        <div class="xs-btn-wraper">
                            <a href="#" class="xs-btn navy-blue-btn round-btn">Ver campaña</a>
                        </div>
                    </div><!-- .xs-welcome-wraper END -->
                </div><!-- .xs-welcome-content END -->
            </div>
            <div class="col-lg-6" >
                <div class="xs-welcome-content">
                    <div class="xs-welcome-wraper">
                        <img src="{{ $image }}" alt="">
                    </div><!-- .xs-welcome-wraper END -->
                </div><!-- .xs-welcome-content END -->
            </div>
        </div>
    </div>
</div>