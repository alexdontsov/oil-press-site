<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.png" class="logo" alt="" width="145px"></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="/">Главная</a></li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a class="nav-link" href="/about">О нас</a></li>
                    <li class="nav-item {{ request()->is('catalog') ? 'active' : '' }}"><a href="/catalog" class="nav-link">Продукция</a></li>
{{--                    <li class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}"><a class="nav-link" href="/portfolio">Примеры внедрений</a></li>--}}
                    <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a class="nav-link" href="/contact">Контакты</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div class="right-phone-box">
            <a class="btn hvr-hover" href="tel:+79836081133" style="color: white">Телефон: +7-983-608-1133</a>
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->
