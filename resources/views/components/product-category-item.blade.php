<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="shop-cat-box">
        <img class="img-fluid" src="{{URL::asset('/app/' . $category->image)}}" alt="{{$category->description}}" />
        <a class="btn hvr-hover" href="{{$category->slug}}">{{$category->title}}</a>
    </div>
</div>
