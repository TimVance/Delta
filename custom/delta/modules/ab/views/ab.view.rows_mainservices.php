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

echo '<ul class="js--default our-services__list grid-layout">';
foreach ($result["rows"] as $row)
{
	echo '<li class="services-item grid-layout__item grid-layout__item--four">';
	    echo '
              <a href="'.BASE_PATH_HREF.$row["link"].'">
                <img src="'.$row["img"][0]["src"].'" alt="'.$row["img"][0]["alt"].'" width="270" height="200">
                <div class="services-item__title">'.$row["name"].'</div>
              </a>
	    ';
	echo '</li>';
}
echo '</ul>';