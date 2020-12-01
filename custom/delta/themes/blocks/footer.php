<?php

if (! defined('DIAFAN'))
{
    $path = __FILE__; $i = 0;
    while(! file_exists($path.'/includes/404.php'))
    {
        if($i == 10) exit; $i++;
        $path = dirname($path);
    }
    include $path.'/includes/404.php';
}
?>

<footer class="page-footer">
    <div class="page-footer__main">
        <div class="container">
            <div class="page-footer__row">
                <a class="logo logo--footer" href="/">
                    <img class="logo__picture" src="<insert name="custom">img/pic-logo--light.png" alt="">
                    <div class="logo__detail">
                        <p class="logo__description logo__description--footer">Аренда спецтехники</p>
                    </div>
                </a>
                <div class="footer-item">
                    <p class="footer-item__title">Техника в аренду</p>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="#">Экскаваторы</a></li>
                        <li class="footer-menu__item"><a href="#">Вибропогружатели</a></li>
                        <li class="footer-menu__item"><a href="#">Экскаваторы погрузчики</a></li>
                        <li class="footer-menu__item"><a href="#">Катки</a></li>
                        <li class="footer-menu__item"><a href="#">Краны</a></li>
                        <li class="footer-menu__item"><a href="#">Буровая установка</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <p class="footer-item__title">Услуги</p>
                    <ul class="footer-menu">
                        <li class="footer-menu__item"><a href="#">Устройство буронабивных и буросекущих свай</a></li>
                        <li class="footer-menu__item"><a href="#">Монтаж распорного крепления стен котлована</a></li>
                        <li class="footer-menu__item"><a href="#">Шпунтовое ограждение котлована</a></li>
                        <li class="footer-menu__item"><a href="#">Аренда спецтехники</a></li>
                        <li class="footer-menu__item"><a href="#">«Стена в грунте»</a></li>
                        <li class="footer-menu__item"><a href="#">Монолитные работы</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <p class="footer-item__title">Контакты</p>
                    <a class="footer-item__phone" href="tel:+77777777777">+7(777) 777 77 77</a>
                    <a class="footer-call" href="#">Заказать консультацию</a>
                    <ul class="footer-contacts">
                        <li class="footer-contacts__item">г. Москва, Цветной бульвар, <br>д. 30, стр.1, пом.I, комн.14</li>
                        <li class="footer-contacts__item"><a href="mailto:info@дельта.москва">info@дельта.москва</a></li>
                        <li class="footer-contacts__item">
                            <span class="footer-contacts__label">Режим работы:</span> Без выходных
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright__row">
                <p>© 2020 Copyright «Дельта-17»</p>
                <p class="offer">Информация, размещенная на сайте, носит  информационный характер и не является публичной офертой</p>
                <p>Создание и продвижение сайта <a href="#">SAYGONA</a></p>
            </div>
        </div>
    </div>
</footer>