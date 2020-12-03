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
    <insert name="show_css" files="style.min.css"></insert>
    <link rel="shortcut icon" href="/<insert name="custom">img/pic-logo.png" type="image/x-icon">
</head>

<body class="page">
<div class="page-wrapper">

    <insert name="show_include" file="header">

        <main class="page-main">

            <section class="breadcrumbs">
                <div class="container">
                    <insert name="show_breadcrumb" current="true"></insert>
                </div>
            </section>

            <section class="section-content">
                <div class="container">
                    <insert name="show_body"></insert>
                </div>
            </section>

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
        </main>

        <section id="map" class="map"></section>

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