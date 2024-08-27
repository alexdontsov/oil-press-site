<x-app-layout>
    <x-main-slider :sliders="$sliders"></x-main-slider>
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row" >
                <div style="text-align: center; width: 100%"><h2 style="color: #b66d00; font-size: 34px">
                        Купить оборудование для производства растительного масла</h2>
                </div>
                <div style="text-align: center; width: 100%"><h2 style="color: #b66d00; font-size: 34px">
                    +7-983-608-1133</h2>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <x-product-category-item-main :category="$category"></x-product-category-item-main>
                @endforeach
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-content-center">--}}
{{--                    <div class="title-all text-center">--}}
{{--                        <h1><a href="/catalog">Все категории</a></h1>--}}
{{--                        <p>Купить оборудование для производства растительного масла.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <!-- End Categories -->
    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Популярные товары</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row special-list">
                @foreach($products as $product)
                    <x-product-item :product="$product"></x-product-item>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Products  -->
    <!-- Start Instagram Feed  -->
    @if($slidersFeed1 !== [])
        <div class="instagram-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 style="color:#FFFFFF">История отправленного оборудования</h1>
                        <p>Примеры внедрения нашего оборудования на разных предприятиях.</p>
                    </div>
                </div>
            </div>
            {{$slidersFeedId = "main-feed-1"}}
            <x-feed-slider :slidersFeed="$slidersFeed1" :id="$slidersFeedId"></x-feed-slider>
        </div>
    @endif
    <!-- End Instagram Feed  -->

    <!-- Start Instagram Feed  -->
    @if($slidersFeed2 != [])
        <div class="instagram-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 style="color:#FFFFFF">Посещение завода в Китае</h1>
                        <p>Новости компании и компаний производителей оборудования по производству растительного масла.</p>
                    </div>
                </div>
            </div>
            {{$slidersFeedId2 = "main-feed-2"}}
            <x-feed-slider :slidersFeed="$slidersFeed2" :id="$slidersFeedId2"></x-feed-slider>
        </div>
    @endif
    <!-- End Instagram Feed  -->
</x-app-layout>
