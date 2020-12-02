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
                <div class="js-select-category-slider">
                    <insert name="show_category" module="shop" template="main"></insert>
                </div>
                <header class="section-header">
                    <h2 class="section-title js-select-category-title"></h2>
                    <div><insert name="show_block" module="site" id="5"></insert></div>
                </header>
                <div class="js-select-category-products"></div>
                <div><insert name="show_block" module="site" id="6"></insert></div>
			</div>
		</section>

        <insert name="show_block" cat_id="5" count="1" module="bs" template="about"></insert>

		<div class="container">
            <insert name="show_block" module="bs" cat_id="4" count="4" template="adv"></insert>

			<section class="projects">
				<header class="section-header">
					<h2 class="section-title"><insert value="Выполненные проекты"></insert></h2>
                    <div><insert name="show_block" module="site" id="4"></insert></div>
				</header>
                <insert name="show_block" count="8" module="ab" site_id="163" template="projects" images="1"></insert>
			</section>
		</div>

		<section class="request">
			<div class="container">
				<div class="request__grid">
					<div class="request__content">
						<h2 class="section-title"><insert value="Не знаете какая техника вам нужна?"></insert></h2>
						<div><p><insert value="Наши специалисты проконсультируют вас по всем вопросам"></insert></p></div>
					</div>
                    <insert name="show_form" module="feedback" site_id="161" template="consult"></insert>
				</div>
			</div>
		</section>

		<div class="container">
			<section class="our-services our-services--light">
				<header class="section-header">
					<h2 class="section-title"><insert value="Наши услуги"></insert></h2>
                    <div><insert name="show_block" module="site" id="3"></insert></div>
				</header>
                <insert name="show_block" module="ab" site_id="164" template="mainservices" images="1" count="12"></insert>
			</section>

			<section class="certificates">
				<header class="section-header">
					<h2 class="section-title"><insert value="Сертификаты"></insert></h2>
                    <div><insert name="show_block" module="site" id="2"></insert></div>
				</header>
                <insert name="show_block" module="bs" template="certificates" cat_id="2" count="99"></insert>
				<div class="certificates__count-wrapper">
					<span class="certificates__count"></span>
				</div>
			</section>

			<section class="partners">
				<header class="section-header">
					<h2 class="section-title"><insert value="Наши партнеры"></insert></h2>
					<div><insert name="show_block" module="site" id="1"></insert></div>
				</header>
                <insert name="show_block" module="bs" template="partners" cat_id="1" count="99"></insert>
			</section>
		</div>

		<section id="map" class="map"></section>
	</main>

    <insert name="show_include" file="footer"></insert>

</div>


<insert name="show_js"></insert>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/main.js" absolute="true" compress="js">" charset="UTF-8"></script>
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/jquery.maskedinput.min.js" absolute="true" compress="js">" charset="UTF-8"></script>
<script type="text/javascript" asyncsrc="<insert name="custom" path="js/script.js" absolute="true" compress="js">" charset="UTF-8"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=d2d40e06-38ff-4ef0-9613-eaf47cbf0282&lang=ru_RU"></script>

</body>
</html>