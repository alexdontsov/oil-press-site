<x-app-layout>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Контакты</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active"> Контакты </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>ФОРМА ОБРАТНОЙ СВЯЗИ</h2>
                        <p>Вы можете написать нам сообщение, мы обязательно прочтём его и ответим Вам.</p>
                        <form id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="submit-button text-center">
                                        <div id="msgSubmit" class="h3 text-center hidden alert-success"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required data-error="Введите Ваше имя">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Введите Ваш email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name" placeholder="Тема сообщения" required data-error="Введите тему Вашего сообщения">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Сообщение" rows="4" data-error="Напишите сообщение" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Отправить сообщение</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Контактная информация</h2>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Адрес: Алтайский край, г.Барнаул, ул.Челюскинцев 82, 2 этаж</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Телефон: <a href="tel:+7-938-608-1133">+7-983-608-1133</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:xcoilpress@mail.ru">xcoilpress@mail.ru</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
</x-app-layout>
