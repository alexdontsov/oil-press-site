<x-app-layout>
    <x-main-slider :sliders="$sliders"></x-main-slider>
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <x-product-category-item :category="$category"></x-product-category-item>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-content-center">
                    <div class="title-all text-center">
                        <h1><a href="/catalog">Все категории</a></h1>
                        <p>Купить оборудование для производства растительного масла.</p>
                    </div>
                </div>
            </div>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Все</button>
                            <button data-filter=".new">Новинка</button>
                            <button data-filter=".best-seller">Акция</button>
                        </div>
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

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Последние новости</h1>
                        <p>Новости компании и компаний производителей оборудования по производству раститульного масла.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Blog  -->
</x-app-layout>
