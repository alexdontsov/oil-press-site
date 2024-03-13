<div class="col-lg-3 col-md-6 special-grid new best-seller">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">
                <p class="sale">Акция</p>
            </div>
            <a href="{{$product->slug}}">
                <img src="{{URL::asset('/app/' . $product->images[0])}}" class="img-fluid" alt="Image" height="370px" width="350px">
            </a>
        </div>
        <div class="why-text">
            <a href="/products/category/{{$product->slug}}"><h4>{{$product->title}}</h4></a>
            <p>Маслопресс предварительного отжима с возможностью регулировки толщины жмыха без остановки</p>
        </div>
    </div>
</div>
