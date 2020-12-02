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

<header class="page-header">
    <div class="container">
        <div class="page-header__wrapper">
            <a class="logo logo--header" href="/">
                <img class="logo__picture logo__picture--header" src="/<insert name="custom">img/pic-logo.png" alt="Логотип">
                <div class="logo__detail">
                    <p class="logo__title"><insert value="Delta-M"></insert></p>
                    <p class="logo__description logo__description--header"><insert value="Аренда спецтехники"></insert></insert></p>
                </div>
            </a>
            <ul class="contacts">
                <li class="contacts__item contacts__item--location contacts-icon contacts-icon--location"><insert name="show_block" module="site" id="8"></insert></li>
                <li class="contacts__item contacts__item--clock contacts-icon contacts-icon--clock"><insert name="show_block" module="site" id="7"></li>
                <li class="contacts__item contacts__item--mail"><insert name="show_block" module="site" id="9"></li>
                <li class="contacts__item contacts__item--phone"><insert name="show_block" module="site" id="10"></li>
                <li class="contacts__item contacts__item--call"><a href="#"><insert value="Получить консультацию"></insert></a></li>
            </ul>
            <button class="js--menu-trigger menu-trigger" type="button">
        <span class="visually-hidden">
          Открыть меню
        </span>
                <svg class="menu-trigger__icon menu-trigger__icon--default" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="18" cy="2" r="2"></circle>
                    <circle cx="18" cy="10" r="2"></circle>
                    <circle cx="18" cy="18" r="2"></circle>
                    <circle cx="10" cy="2" r="2"></circle>
                    <circle cx="10" cy="10" r="2"></circle>
                    <circle cx="10" cy="18" r="2"></circle>
                    <circle cx="2" cy="2" r="2"></circle>
                    <circle cx="2" cy="10" r="2"></circle>
                    <circle cx="2" cy="18" r="2"></circle>
                </svg>
                <svg class="menu-trigger__icon menu-trigger__icon--close" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1.84766" y="-0.000488281" width="26.1434" height="2.61434" transform="rotate(45 1.84766 -0.000488281)"></rect>
                    <rect x="20.3359" y="1.84814" width="26.1434" height="2.61434" transform="rotate(135 20.3359 1.84814)"></rect>
                </svg>
            </button>
            <nav class="navigation">
                <insert name="show_block" module="menu" template="topmenu" id="1"></insert>
            </nav>
        </div>
    </div>
</header>
