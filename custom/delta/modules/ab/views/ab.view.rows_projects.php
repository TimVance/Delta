<?php
/**
 * Шаблон блока объявлений
 * 
 * Шаблонный тег <insert name="show_block" module="ab" [count="количество"]
 * [cat_id="категория"] [site_id="страница_с_прикрепленным_модулем"]
 * [images="количество_изображений"] [images_variation="тег_размера_изображений"]
 * [sort="порядок_вывода"] [param="дополнительные_условия"]
 * [only_module="выводить_только_на_странице_модуля"] [template="шаблон"]>:
 * блок объявлений
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

if(empty($result["rows"])) return false;

foreach ($result["rows"] as $row)
{
	echo '<li class="gallery-item grid-layout__item grid-layout__item--four">';

        //изображения
        if (!empty($row["img"]))
        {
            foreach ($row["img"] as $img)
            {
                echo '<a class="gallery-item__thumbnail-wrapper" href="'.BASE_PATH_HREF.$img["link"].'">';
                echo '<img class="gallery-item__thumbnail" src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">'
                    . '</a> ';
            }
        }

	    echo '<a class="gallery-item__description" href="'.BASE_PATH_HREF.$row["link"].'">'.$row["name"].'</a>';

	echo '</li>';
}