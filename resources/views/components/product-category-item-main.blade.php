<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="shop-cat-box">
        <a class="shop-cat-box-l" href="/catalog/{{$category->slug}}">
            <img class="img-fluid" src="{{URL::asset('/app/' . $category->image)}}" alt="{{$category->description}}" />
        </a>
        <a class="btn hvr-hover" href="/catalog/{{$category->slug}}">{{$category->title}}</a>
    </div>
</div>
