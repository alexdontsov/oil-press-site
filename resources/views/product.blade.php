<x-app-layout>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$product->title}}</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/catalog">Каталог</a></li>
                        <li class="breadcrumb-item active"><a href="/catalog/{{$product->category->slug}}">
                                {{$product->category->title}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($product->images as $image)
                                <div class="carousel-item
                                    @if ($loop->first) active @endif"> <img class="d-block w-100" src="{{URL::asset('/app/' . $image)}}" alt="{{$product->title}}"> </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-01.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{$product->title}}</h2>
                        <h4>Описание:</h4>
                        {!! $product->body !!}
                        <div class="add-to-btn">
                            <div class="add-comp">
                                <a class="btn hvr-hover" href="#"><i class="fas fa-dot-circle"></i> Получить подробную информацию</a>
                            </div>
                            <div class="share-bar">
                                <a class="btn hvr-hover" href="#"><i class="fab fa-vk" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-telegram" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
</x-app-layout>
