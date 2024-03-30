<li class="text-center">
    <img src="{{URL::asset('/app/' . $slider->image)}}" alt="{{$slider->title}}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="m-b-20"><strong>{{$slider->title}}</strong></h1>
                <p class="m-b-40">{!! $slider->body !!}</p>
                <p><a class="btn hvr-hover" href="{{$slider->link_url}}">{{$slider->link_title}}</a></p>
            </div>
        </div>
    </div>
</li>
