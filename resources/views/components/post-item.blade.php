<div class="col-md-6 col-lg-4 col-xl-4">
    <div class="blog-box">
        <div class="blog-img">
            <img class="img-fluid" src="{{URL::asset('/app/' . $post->thumbnail)}}" alt="" width="350" height="296"/>
        </div>
        <div class="blog-content">
            <div class="title-blog">
                <span>{{ date('d/m/Y', strtotime($post->published_at)) }}</span>
                <h3><a href="/news/{{$post->slug}}">{{Str::limit($post->title, 35, '...')}}</a></h3>
                <p>{!! Str::limit($post->body, 95, '...') !!}</p>
            </div>
        </div>
    </div>
</div>
