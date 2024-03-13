<x-app-layout>
    <x-main-slider :sliders="$sliders"></x-main-slider>
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/category-oil-press.png" alt="" />
                        <a class="btn hvr-hover" href="#">Маслопрессы</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="app/product_category/oil_filter.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Маслофильтры</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="app/product_category/thumbs_zarovniy.png" alt="" />
                        <a class="btn hvr-hover" href="#">Жаровня паровая</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-content-center">
                    <div class="title-all text-center">
                        <h1><a href="/catalog">Все категории</a></h1>
                        <p>Купить оборудование для производства растительного масла.</p>
                    </div>
                </div>
                <!--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">-->
                <!--                    <div class="shop-cat-box">-->
                <!--                        <img class="img-fluid" src="images/category-oil-press.png" alt="" />-->
                <!--                        <a class="btn hvr-hover" href="#">Запчасти для маслопрессов, маслофильтров и жаровен</a>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">-->
                <!--                    <div class="shop-cat-box">-->
                <!--                        <img class="img-fluid" src="images/category-oil-press.png" alt="" />-->
                <!--                        <a class="btn hvr-hover" href="#">Экструдеры</a>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!--	<div class="box-add-products">-->
    <!--		<div class="container">-->
    <!--			<div class="row">-->
    <!--				<div class="col-lg-6 col-md-6 col-sm-12">-->
    <!--					<div class="offer-box-products">-->
    <!--						<img class="img-fluid" src="images/add-img-01.jpg" alt="" />-->
    <!--					</div>-->
    <!--				</div>-->
    <!--				<div class="col-lg-6 col-md-6 col-sm-12">-->
    <!--					<div class="offer-box-products">-->
    <!--						<img class="img-fluid" src="images/add-img-02.jpg" alt="" />-->
    <!--					</div>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--		</div>-->
    <!--	</div>-->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Популярные товары</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
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
