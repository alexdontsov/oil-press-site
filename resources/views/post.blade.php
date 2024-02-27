<x-app-layout>
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$post->title}}</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Новости</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="images/about-img.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    {{$post->body}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
