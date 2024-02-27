<div class="col-md-6 col-lg-4 col-xl-4">
    <div class="blog-box">
        <div class="blog-img">
            <img class="img-fluid" src="{{URL::asset('/app/' . $post->thumbnail)}}" alt="" width="350" height="296"/>
        </div>
        <div class="blog-content">
            <div class="title-blog">
                <h3><a href="/news/{{$post->slug}}">{{$post->title}}</a></h3>
                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
            </div>
        </div>
    </div>
</div>
