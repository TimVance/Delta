<?php
/**
 * Шаблон страница объявления
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2018 OOO «Диафан» (http://www.diafan.ru/)
 */

if (!defined('DIAFAN')) {
    $path = __FILE__;
    while (!file_exists($path . '/includes/404.php')) {
        $parent = dirname($path);
        if ($parent == $path) exit;
        $path = $parent;
    }
    include $path . '/includes/404.php';
}

$classes = [
    1 => "owner",
    2 => "time",
    3 => "desc",
    4 => "type"
];

?>

<ul class="project-detail grid-layout">
    <? foreach ($result["ids_param"] as $param): ?>
        <li class="grid-layout__item grid-layout__item--two project-detail__item project-detail__item--<?=$classes[$param["id"]]?>">
            <p class="project-detail__label"><?= $param["name"] ?></p>
            <p><?= $param["value"] ?></p>
        </li>
    <? endforeach; ?>
</ul>

<? if (!empty($result["img"])): ?>
    <ul class="js--default gallery grid-layout">
        <? foreach ($result["img"] as $img): ?>
            <li class="gallery-item grid-layout__item grid-layout__item--four">
                <a href="<?=$img["src"]?>" class="gallery-item__thumbnail-wrapper">
                    <img class="gallery-item__thumbnail" src="<?=$img["src"]?>" alt="<?= $img["alt"] ?>" width="270" height="250">
                </a>
            </li>
        <? endforeach; ?>
    </ul>
<? endif; ?>