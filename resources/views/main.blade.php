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
                        <img class="img-fluid" src="images/category-oil-press.png" alt="" />
                        <a class="btn hvr-hover" href="#">Маслофильтры</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/category-oil-press.png" alt="" />
                        <a class="btn hvr-hover" href="#">Жаровня паровая</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-content-center">
                    <div class="title-all text-center">
                        <h1>Все категории</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
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
                            <button data-filter=".top-featured">Маслопрессы</button>
                            <button data-filter=".best-seller">Маслофильтры</button>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @endforeach
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-6 col-lg-4 col-xl-4">--}}
{{--                    <div class="blog-box">--}}
{{--                        <div class="blog-img">--}}
{{--                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="blog-content">--}}
{{--                            <div class="title-blog">--}}
{{--                                <h3>Fusce in augue non nisi fringilla</h3>--}}
{{--                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 col-lg-4 col-xl-4">--}}
{{--                    <div class="blog-box">--}}
{{--                        <div class="blog-img">--}}
{{--                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />--}}
{{--                        </div>--}}
{{--                        <div class="blog-content">--}}
{{--                            <div class="title-blog">--}}
{{--                                <h3>Fusce in augue non nisi fringilla</h3>--}}
{{--                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- End Blog  -->
    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
