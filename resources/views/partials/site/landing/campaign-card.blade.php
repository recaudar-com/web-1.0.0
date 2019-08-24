<div class="col-lg-4">
    <div class="fundpress-grid-item-content wow fadeInUp animated" >
        <div class="fundpress-item-header xs-mb-30">
            <img src="{{ $image }}" alt="">
            <div class="xs-item-header-content">
                <div class="xs-skill-bar-v3" data-percent="65%">
                    <div class="xs-skill-track" style="width: 65%;">
                        <p>{{ $percent }}%</p>
                    </div>
                </div>
            </div>
        </div><!-- .fundpress-item-header END -->
        <div class="fundpress-item-content">
            <ul class="xs-simple-tag fundpress-simple-tag">
                <li><a href="">{{ $category }}</a></li>
                {{-- <li><a href="">Technology</a></li>
                <li><a href="">UI/UX</a></li> --}}
            </ul>
            <a href="#" class="d-block color-navy-blue fundpress-post-title">{{ $title }}</a>
            <ul class="xs-list-with-content fundpress-list-item-content">
                <li>{{ $goal }}<span>Meta</span></li>
                <li><span class="number-percentage-count">{{ $percent }}%</span><span>Recaudado</span></li>
                <li>{{ $remainingDays }}<span>Días restantes</span></li>
            </ul>
        </div><!-- .fundpress-item-content END -->
    </div>
</div>