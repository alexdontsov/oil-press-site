<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        @foreach($sliders as $slider)
            <x-main-slider-item :slider="$slider"></x-main-slider-item>
        @endforeach
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next d-none d-md-block"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev d-none d-md-block""><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->
