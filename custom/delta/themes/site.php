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
            <div class="container">
                <insert name="show_body"></insert>
            </div>
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