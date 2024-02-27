<!DOCTYPE html>
<html lang="ru">
@include('block.head')
@include('block.main_top')
<body>
@include('block.main_menu')
{{ $slot }}
<!-- Start Top Search -->
{{--<div class="top-search">--}}
{{--    <div class="container">--}}
{{--        <div class="input-group">--}}
{{--            <span class="input-group-addon"><i class="fa fa-search"></i></span>--}}
{{--            <input type="text" class="form-control" placeholder="Search">--}}
{{--            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Top Search -->
<!-- End Instagram Feed  -->
<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Время работы</h3>
                        <ul class="list-time">
                            <li>Понедельник - Пятница: 08:00 до 17:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Новости и акции</h3>
                        <form class="newsletter-box">
                            <div class="form-group">
                                <input class="" type="email" name="Email" placeholder="Email Address*" />
                                <i class="fa fa-envelope"></i>
                            </div>
                            <button class="btn hvr-hover" type="submit">Подписаться</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Социальные сети</h3>
                        <p>Подпишитесь на наши социальные сети, чтобы быть в курсе событий.</p>
                        <ul>
                            <li><a href="#"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>О сайте</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Информация</h4>
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Продукция</a></li>
                            <li><a href="#">Портфолио</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Контакты</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">Все права защищены. &copy; 2024 <a href="#">Oil Machine</a> Design By :
        <a href="#">html design</a></p>
</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="/js/jquery.superslides.min.js"></script>
<script src="/js/bootstrap-select.js"></script>
<script src="/js/inewsticker.js"></script>
<script src="/js/bootsnav.js."></script>
<script src="/js/images-loded.min.js"></script>
<script src="/js/isotope.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/baguetteBox.min.js"></script>
<script src="/js/form-validator.min.js"></script>
<script src="/js/contact-form-script.js"></script>
<script src="/js/custom.js"></script>
</body>

</html>
