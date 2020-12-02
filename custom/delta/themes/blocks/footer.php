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
                    <img class="logo__picture" src="/<insert name="custom">img/pic-logo--light.png" alt="Логотип">
                    <div class="logo__detail">
                        <p class="logo__description logo__description--footer"><insert value="Аренда спецтехники"></insert></p>
                    </div>
                </a>
                <div class="footer-item">
                    <p class="footer-item__title"><insert value="Техника в аренду"></insert></p>
                    <insert name="show_category" module="shop" template="footer"></insert>
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
                    <p class="footer-item__title"><insert value="Контакты"></insert></p>
                    <div><insert name="show_block" module="site" id="14"></div>
                    <a class="footer-call" href="#"><insert value="Заказать консультацию</a>"></insert>
                    <ul class="footer-contacts">
                        <li class="footer-contacts__item"><insert name="show_block" module="site" id="8"></li>
                        <li class="footer-contacts__item"><insert name="show_block" module="site" id="15"></li>
                        <li class="footer-contacts__item">
                            <span class="footer-contacts__label"><insert value="Режим работы:"></insert></span> <insert name="show_block" module="site" id="7">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright__row">
                <p><insert name="show_block" module="site" id="12"></p>
                <p class="offer"><insert name="show_block" module="site" id="13"></p>
                <p><insert name="show_block" module="site" id="11"></p>
            </div>
        </div>
    </div>
</footer>