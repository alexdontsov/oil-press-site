<x-app-layout>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Каталог продукции</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item"><a href="/catalog">Каталог</a></li>
                        <li class="breadcrumb-item active">{{$category->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!-- Start About Page  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <x-product-item :product="$product"></x-product-item>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-content-center">
                    <div class="title-all text-center">
                        <h1></h1>
                        <p>В каталоге оборудования представлены самые популярные позиции из нашего ассортимента.<br>
                            Более подробную информацию Вы можете получить, позвонив по номеру телефона
                            из раздела<br> "Контактная информация", либо воспользовавшись формой обратной связи. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->
</x-app-layout>
