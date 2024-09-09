<div class="col-lg-3 col-md-6 special-grid new best-seller">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">
                @if ($product->sale) <p class="sale">Акция</p> @endif
                @if ($product->is_new) <p class="new">Новинка</p> @endif
            </div>
            <a href="/catalog/{{$product->category->slug}}/{{$product->slug}}">
                <img src="{{URL::asset('/app/' . $product->images[0])}}" class="img-fluid" alt="Image" height="370px" width="350px">
            </a>
        </div>
        <div class="why-text">
            <a href="/catalog/{{$product->category->slug}}/{{$product->slug}}"><h4>{{$product->title}}</h4></a>
            <p>{{$product->description}}</p>
            @if ($product->price) <span class="product-rice-item">{{$product->price}}&#8381;</span>@endif
        </div>
    </div>
</div>
