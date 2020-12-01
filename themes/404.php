<?php
/**
 * Ошибка 404. Страница не найдена
 *
 * Шаблон оформления страниц 404 (Не найдено)
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
	$path = __FILE__;
	while(! file_exists($path.'/includes/404.php'))
	{
		$parent = dirname($path);
		if($parent == $path) exit;
		$path = $parent;
	}
	include $path.'/includes/404.php';
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <insert name="show_head"></insert>
    <insert name="show_css" files="style.min.css"></insert>
    <link rel="shortcut icon" href="/<insert name="custom">img/pic-logo.png" type="image/x-icon">
</head>

<body class="page page--404">
    <div class="page-wrapper">
        <main class="page-main">
            <div class="container">
                <div class="not-found">
                    <div class="not-found__content">
                        <p class="not-found__title">Что-то пошло не так...</p>
                        <p class="not-found__description">К сожалению мы не можем найти страницу которую вы ищите Обновите страницу или попробуйте позже</p>
                    </div>
                    <div class="not-found__active">
                        <a class="button not-found__link" href="#">Перейти к услугам</a>
                        <a class="button not-found__link" href="/">Перейти на главную</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>