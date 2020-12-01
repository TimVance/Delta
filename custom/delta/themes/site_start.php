<?php

if(! defined("DIAFAN"))
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
    <insert name="show_css" files="style.min.css, custom.css"></insert>
    <link rel="shortcut icon" href="/<insert name="custom">img/pic-logo.png" type="image/x-icon">
</head>

<body class="page page--home">
<div class="page-wrapper">

    <insert name="show_include" file="header">

	<main class="page-main">

        <insert name="show_block" module="bs" cat_id="3" count="1" template="promo"></insert>

		<section class="choice-technique">
			<div class="container">
				<button class="js--choice-technique choice-technique__trigger" type="button">
					Выберите технику
					<svg class="choice-technique__trigger-icon" width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.84492 5.13425L0.162605 0.0247826C0.147757 0.011325 0.129913 0.00296172 0.111122 0.000653095C0.0923312 -0.00165553 0.073356 0.00218416 0.0563753 0.0117313C0.0393947 0.0212784 0.0250976 0.0361458 0.0151257 0.0546258C0.00515376 0.0731059 -8.8503e-05 0.0944492 1.12949e-06 0.116205L1.12024e-06 1.23794C1.11965e-06 1.30904 0.0289926 1.37725 0.0768915 1.42078L4.61468 5.49994L0.0768914 9.5791C0.027732 9.62263 1.05055e-06 9.69084 1.04996e-06 9.76194L1.04071e-06 10.8837C1.03991e-06 10.9809 0.0970592 11.0346 0.162605 10.9751L5.84492 5.86563C5.89322 5.82226 5.93229 5.76678 5.95916 5.70341C5.98603 5.64004 6 5.57046 6 5.49994C6 5.42942 5.98603 5.35984 5.95916 5.29647C5.93229 5.2331 5.89322 5.17762 5.84492 5.13425Z"></path>
					</svg>
				</button>
				<ul class="horizontal-menu">
					<li class="horizontal-menu__item">
						<a href="#">Экскаватор-погрузчик</a>
					</li>
					<li class="horizontal-menu__item">
						<a href="#">Экскаватор-гусеничный</a>
					</li>
					<li class="horizontal-menu__item horizontal-menu__item--has-child">
						<a href="#">Вибро-погружатели</a>
						<ul class="vertical-menu">
							<li class="vertical-menu__item">
								<a href="#">Вибропогружатели кранового типа</a>
							</li>
							<li class="vertical-menu__item">
								<a href="#">Вибропогружатели с боковым захватом</a>
							</li>
						</ul>
					</li>
					<li class="horizontal-menu__item">
						<a href="#">Буровая установка</a>
					</li>
					<li class="horizontal-menu__item">
						<a href="#">Автокраны</a>
					</li>
					<li class="horizontal-menu__item">
						<a href="#">Виброкатки</a>
					</li>
					<li class="horizontal-menu__item">
						<a href="#">Виброкатки</a>
					</li>
					<li class="horizontal-menu__item">
						<a href="#">Манипуляторы</a>
					</li>
					<li class="horizontal-menu__item">
						<a href="#">Длинномеры</a>
					</li>
				</ul>
				<header class="section-header">
					<h2 class="section-title">Экскаваторы</h2>
					<p>Аренда дорожно-строительной техники <br>и спецтехники в Москве и МО</p>
				</header>
				<div class="js--default technique-list grid-layout">
					<article class="technique-item grid-layout__item grid-layout__item--three">
						<img class="technique-item__thumbnail" src="<insert name="custom">img/data/pic-technique.jpg" alt="" width="370" height="246">
						<h2 class="technique-item__title"><a href="#">Экскаватор HITACHI Zaxis-330 3</a></h2>
						<p class="technique-item__label">Тех. характеристики:</p>
						<table class="technique-specifications">
							<tr class="technique-specifications__item">
								<td>Мощьность двигателя</td>
								<td>97 кВт (130 л.с.)</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Объем ковша</td>
								<td>0.85 м3</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Глубина копания</td>
								<td>6.6 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота копания</td>
								<td>9.8 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота выгрузки</td>
								<td>7.5 м</td>
							</tr>
						</table>
						<div class="technique-item__price-wrapper">
							<p class="technique-item__price technique-item__price--hourly">11 900 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">в час</span></p>
							<p class="technique-item__price technique-item__price--shift">5 550 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">смена 8 часов</span></p>
						</div>
						<a class="technique-item__button button" href="#">Взять в аренду</a>
					</article>
					<article class="technique-item grid-layout__item grid-layout__item--three">
						<img class="technique-item__thumbnail" src="<insert name="custom">img/data/pic-technique.jpg" alt="" width="370" height="246">
						<h2 class="technique-item__title"><a href="#">Экскаватор HITACHI Zaxis-330 3</a></h2>
						<p class="technique-item__label">Тех. характеристики:</p>
						<table class="technique-specifications">
							<tr class="technique-specifications__item">
								<td>Мощьность двигателя</td>
								<td>97 кВт (130 л.с.)</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Объем ковша</td>
								<td>0.85 м3</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Глубина копания</td>
								<td>6.6 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота копания</td>
								<td>9.8 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота выгрузки</td>
								<td>7.5 м</td>
							</tr>
						</table>
						<div class="technique-item__price-wrapper">
							<p class="technique-item__price technique-item__price--hourly">11 900 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">в час</span></p>
							<p class="technique-item__price technique-item__price--shift">5 550 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">смена 8 часов</span></p>
						</div>
						<a class="technique-item__button button" href="#">Взять в аренду</a>
					</article>
					<article class="technique-item grid-layout__item grid-layout__item--three">
						<img class="technique-item__thumbnail" src="<insert name="custom">img/data/pic-technique.jpg" alt="" width="370" height="246">
						<h2 class="technique-item__title"><a href="#">Экскаватор HITACHI Zaxis-330 3</a></h2>
						<p class="technique-item__label">Тех. характеристики:</p>
						<table class="technique-specifications">
							<tr class="technique-specifications__item">
								<td>Мощьность двигателя</td>
								<td>97 кВт (130 л.с.)</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Объем ковша</td>
								<td>0.85 м3</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Глубина копания</td>
								<td>6.6 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота копания</td>
								<td>9.8 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота выгрузки</td>
								<td>7.5 м</td>
							</tr>
						</table>
						<div class="technique-item__price-wrapper">
							<p class="technique-item__price technique-item__price--hourly">11 900 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">в час</span></p>
							<p class="technique-item__price technique-item__price--shift">5 550 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">смена 8 часов</span></p>
						</div>
						<a class="technique-item__button button" href="#">Взять в аренду</a>
					</article>
					<article class="technique-item grid-layout__item grid-layout__item--three">
						<img class="technique-item__thumbnail" src="<insert name="custom">img/data/pic-technique.jpg" alt="" width="370" height="246">
						<h2 class="technique-item__title"><a href="#">Экскаватор HITACHI Zaxis-330 3</a></h2>
						<p class="technique-item__label">Тех. характеристики:</p>
						<table class="technique-specifications">
							<tr class="technique-specifications__item">
								<td>Мощьность двигателя</td>
								<td>97 кВт (130 л.с.)</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Объем ковша</td>
								<td>0.85 м3</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Глубина копания</td>
								<td>6.6 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота копания</td>
								<td>9.8 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота выгрузки</td>
								<td>7.5 м</td>
							</tr>
						</table>
						<div class="technique-item__price-wrapper">
							<p class="technique-item__price technique-item__price--hourly">11 900 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">в час</span></p>
							<p class="technique-item__price technique-item__price--shift">5 550 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">смена 8 часов</span></p>
						</div>
						<a class="technique-item__button button" href="#">Взять в аренду</a>
					</article>
					<article class="technique-item grid-layout__item grid-layout__item--three">
						<img class="technique-item__thumbnail" src="<insert name="custom">img/data/pic-technique.jpg" alt="" width="370" height="246">
						<h2 class="technique-item__title"><a href="#">Экскаватор HITACHI Zaxis-330 3</a></h2>
						<p class="technique-item__label">Тех. характеристики:</p>
						<table class="technique-specifications">
							<tr class="technique-specifications__item">
								<td>Мощьность двигателя</td>
								<td>97 кВт (130 л.с.)</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Объем ковша</td>
								<td>0.85 м3</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Глубина копания</td>
								<td>6.6 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота копания</td>
								<td>9.8 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота выгрузки</td>
								<td>7.5 м</td>
							</tr>
						</table>
						<div class="technique-item__price-wrapper">
							<p class="technique-item__price technique-item__price--hourly">11 900 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">в час</span></p>
							<p class="technique-item__price technique-item__price--shift">5 550 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">смена 8 часов</span></p>
						</div>
						<a class="technique-item__button button" href="#">Взять в аренду</a>
					</article>
					<article class="technique-item grid-layout__item grid-layout__item--three">
						<img class="technique-item__thumbnail" src="<insert name="custom">img/data/pic-technique.jpg" alt="" width="370" height="246">
						<h2 class="technique-item__title"><a href="#">Экскаватор HITACHI Zaxis-330 3</a></h2>
						<p class="technique-item__label">Тех. характеристики:</p>
						<table class="technique-specifications">
							<tr class="technique-specifications__item">
								<td>Мощьность двигателя</td>
								<td>97 кВт (130 л.с.)</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Объем ковша</td>
								<td>0.85 м3</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Глубина копания</td>
								<td>6.6 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота копания</td>
								<td>9.8 м</td>
							</tr>
							<tr class="technique-specifications__item">
								<td>Высота выгрузки</td>
								<td>7.5 м</td>
							</tr>
						</table>
						<div class="technique-item__price-wrapper">
							<p class="technique-item__price technique-item__price--hourly">11 900 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">в час</span></p>
							<p class="technique-item__price technique-item__price--shift">5 550 <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label">смена 8 часов</span></p>
						</div>
						<a class="technique-item__button button" href="#">Взять в аренду</a>
					</article>
				</div>
				<a class="choice-technique__button button" href="#">Перейти в каталог</a>
			</div>
		</section>

		<section class="about-firm">
			<div class="container">
				<div class="about-firm__grid">
					<img class="about-firm__thumbnail" src="<insert name="custom">img/data/pic-about.png" alt="" width="852" height="669">
					<div class="about-firm__content">
						<h2 class="section-title">Вибропогружатели</h2>
						<p>Дельта-М» – является поставщиком строительных услуг и аренды высокотехнологичной строительной техники, завоевавшее репутацию профессионального и надежного  партнера.</p>
						<p>Наша компания является членом саморегулируемой организации «Ассоциация «Архитектурное наследие» №СРО-С-230-07092010, выдано 09.04.2018г.</p>
						<p>Профессионализм и высокий уровень квалификации специалистов «Дельта-М», подтвержденный международными сертификатами,  гарантируют высокое качество подготовки техники, ее сопровождения и обслуживания.</p>
						<p>Компания «Дельта-М» оснащена собственной базой, строительными машинами и механизмами, ремонтным и сварочным цехом. Наш промышленный парк отвечает современным требованиям  строительного сегмента мирового рынка и состоит из машин ведущих мировых производителей – Группы компаний «Liebherr», транснациональной корпорации «Manitowoc» («GroveWorldwided»), компания Hitachi Construction Machinery, JCB Russia, PTC, MKT, PVE, ICE, Bauer.</p>
					</div>
				</div>
			</div>
		</section>

		<div class="container">
            <insert name="show_block" module="bs" cat_id="4" count="4" template="adv"></insert>

			<section class="projects">
				<header class="section-header">
					<h2 class="section-title">Выполненные проекты</h2>
					<p>Опишите вашу задачу и наши специалисты <br>проконсультируют вас по всем повпросам </p>
				</header>
				<ul class="js--default gallery grid-layout">
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-1.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-2.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-3.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-4.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-1.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-2.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-3.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
					<li class="gallery-item grid-layout__item grid-layout__item--four">
						<a href="#" class="gallery-item__thumbnail-wrapper">
							<img class="gallery-item__thumbnail" src="<insert name="custom">img/data/pic-gall-4.jpg" alt="" width="270" height="250">
						</a>
						<a href="#" class="gallery-item__description">Опишите вашу задачу и наши специалисты</a>
					</li>
				</ul>
			</section>
		</div>

		<section class="request">
			<div class="container">
				<div class="request__grid">
					<div class="request__content">
						<h2 class="section-title">Не знаете какая техника вам нужна?</h2>
						<p>Наши специалисты проконсультируют вас по всем вопросам </p>
					</div>
                    <insert name="show_form" module="feedback" site_id="161" template="consult"></insert>
				</div>
			</div>
		</section>

		<div class="container">
			<section class="our-services our-services--light">
				<header class="section-header">
					<h2 class="section-title">Наши услуги</h2>
					<p>Аренда дорожно-строительной техники и<br> спецтехники в Москве и МО</p>
				</header>
				<ul class="js--default our-services__list grid-layout">
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-1.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Шпунтовое ограждение котлована</span>
						</a>
					</li>
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-2.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Устройство буронабивных и буросекущих свай</span>
						</a>
					</li>
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-3.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Монтаж распорного крепления стен котлована</span>
						</a>
					</li>
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-4.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Монолитные работы</span>
						</a>
					</li>
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-4.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Монолитные работы</span>
						</a>
					</li>
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-2.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Устройство буронабивных и буросекущих свай</span>
						</a>
					</li>
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-3.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Монтаж распорного крепления стен котлована</span>
						</a>
					</li>
					<li class="services-item grid-layout__item grid-layout__item--four">
						<a href="#">
							<img src="<insert name="custom">img/data/pic-serv-4.jpg" alt="" width="270" height="200">
							<span class="services-item__title">Монолитные работы</span>
						</a>
					</li>
				</ul>
			</section>

			<section class="certificates">
				<header class="section-header">
					<h2 class="section-title">Сертификаты</h2>
					<p>Демонтаж зданий и сооружений от 130 р. м3 <br>
						Вам нужно избавиться от ветхого здания? Кирпичный дом пора сносить? <br>
						Старое сооружение давно не выполняют своих функций, а производственный цех в последний раз работал лет 15-ть назад? Во всех этих случаях, если вам нужена разборка зданий и сооружений – обращайтесь. В нашей компании «МДМ СТРОЙ» вам помогут решить любую задачу – срочно, качественно, профессионально.</p>
				</header>
                <insert name="show_block" module="bs" template="certificates" cat_id="2" count="99"></insert>
				<div class="certificates__count-wrapper">
					<span class="certificates__count"></span>
				</div>
			</section>

			<section class="partners">
				<header class="section-header">
					<h2 class="section-title"><insert value="Наши партнеры"></insert></h2>
					<p>Демонтаж зданий и сооружений от 130 р. м3 <br>
						Вам нужно избавиться от ветхого здания? Кирпичный дом пора сносить? <br>
						Старое сооружение давно не выполняют своих функций, а производственный цех в последний раз работал лет 15-ть назад? Во всех этих случаях, если вам нужена разборка зданий и сооружений – обращайтесь. В нашей компании «МДМ СТРОЙ» вам помогут решить любую задачу – срочно, качественно, профессионально.</p>
				</header>
                <insert name="show_block" module="bs" template="partners" cat_id="1" count="99"></insert>
			</section>
		</div>

		<section id="map" class="map"></section>
	</main>

    <insert name="show_include" file="footer"></insert>

</div>


<insert name="show_js"></insert>
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/main.js" absolute="true" compress="js">" charset="UTF-8"></script>
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/slick.min.js" absolute="true" compress="js">" charset="UTF-8"></script>
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/jquery.maskedinput.min.js" absolute="true" compress="js">" charset="UTF-8"></script>
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/script.js" absolute="true" compress="js">" charset="UTF-8"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=d2d40e06-38ff-4ef0-9613-eaf47cbf0282&lang=ru_RU"></script>

</body>
</html>