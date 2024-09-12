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
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div id="animated-thumbnails" class="carousel-inner" role="listbox">
                            @foreach ($product->images as $image)
                                <div class="carousel-item
                                    @if ($loop->first) active @endif" data-src="{{URL::asset('/app/' . $image)}}">
                                        <img class="d-block w-100" src="{{URL::asset('/app/' . $image)}}" alt="{{$product->title}}">
                                </div>
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
                            @foreach ($product->images as $image)
                                <li data-target="#carousel-example-1" data-slide-to="{{$loop->index}}" @if ($loop->first) class="active" @endif>
                                    <img class="d-block w-100 img-fluid" src="{{URL::asset('/app/' . $image)}}" alt="{{$product->title}}" />
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="single-product-details">
                        <h1>{{$product->title}}</h1>
                        <h5><span style="color: #0d0a0a">Цена:</span> @if ($product->price != null) от {{$product->price}}&#8381;
                            @else Уточните по телефону @endif</h5>

                        @if ($product->price != null) <span style="color: rgba(211,126,51,0.5)">Для уточнения цены свяжитесь с менеджером</span>@endif
                        <p>{{$product->description}}</p>
                        <br>
                        <br>
                        <hr>
                        <div class="add-to-btn">
                            <div class="add-comp">
                                <a class="btn hvr-hover" href="#"data-toggle="modal" data-target="#send-product-message" ><i class="fas fa-dot-circle"></i> Получить подробную информацию</a>
                            </div>
                            <div class="share-bar">
                                <script src="https://yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-curtain data-size="m" data-color-scheme=""
                                     data-services="vkontakte,odnoklassniki,telegram,whatsapp"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row my-5">
                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        <h2>Описание</h2>
                    </div>
                    <div class="card-body">
                        {!! $product->body !!}
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="send-product-message" tabindex="-1" role="dialog" aria-labelledby="send-product-message-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="send-product-message-title">Получить подробную информацию</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="product-info-form">
                    <div class="modal-body">
                        <div id="responsestatus" style="color: #00bb00; text-align: center"></div>
                        @csrf
                        <input type="hidden" name="product" value="{{$product->title}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ваш email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                       placeholder="Email" name="email">
                                </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Ваш телефон</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Телефон"
                                    name="phone"
                                >
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button id="submit" type="submit" class="btn btn-secondary">Получить информацию</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
