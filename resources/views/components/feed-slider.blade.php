<div id="{{$id}}" class="main-instagram owl-carousel owl-theme">
    @foreach($slidersFeed as $slider)
       <x-feed-slider-item :slider="$slider"></x-feed-slider-item>
    @endforeach
</div>
