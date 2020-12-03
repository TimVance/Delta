<?php
/**
 * Шаблон списка товаров
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

if(! empty($result["error"]))
{
	echo '<p>'.$result["error"].'</p>';
	return;
}

//вывод описания текущей категории
if(! empty($result["text"]))
{
	echo '<div class="shop_text text">';
	echo $result['text'].'</div>';
}

//вывод подкатегории
if(! empty($result["children"]))
{
    echo '<div class="tech-list grid-layout">';
	foreach($result["children"] as $child)
	{
		echo '<a href="'.BASE_PATH_HREF.$child["link"].'" class="tech-list__item grid-layout__item grid-layout__item--three">';

		//вывод изображений подкатегории
		if(! empty($child["img"]))
		{
			foreach($child["img"] as $img)
			{
				echo '<img class="tech-list__thumbnail" src="'.$img["src"].'" width="370" height="246" alt="'.$img["alt"].'" title="'.$img["title"].'">';
			}
		}

		//название и ссылка подкатегории
		echo '<div class="tech-list__label">'.$child["name"].'</div>';

		echo '</a>';

	}
	echo '</div>';
}

//вывод списка товаров
if(! empty($result["rows"]))
{

	echo '<div class="js--default technique-list grid-layout">';
	echo $this->get($result["view_rows"], 'shop', $result);
	echo '</div>';
}

//постраничная навигация
if(! empty($result["paginator"]))
{
	echo $result["paginator"];
}