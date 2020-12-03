<?php
/**
 * Шаблон первой страницы модуля, если в настройках модуля подключен параметр «Использовать категории»
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

if (empty($result["categories"]))
	return false;

echo '<div>'.$this->htmleditor('<insert name="show_block" id="16" module="site">').'</div>';
echo '<div class="tech-list grid-layout">';

//начало большого цикла, вывод категорий и товаров в них
foreach ($result["categories"] as $cat_id => $cat)
{
	echo '<a href="'.BASE_PATH_HREF.$cat["link_all"].'" class="tech-list__item grid-layout__item grid-layout__item--three">';

	//вывод изображений категории
	if(! empty($cat["img"]))
	{
		foreach ($cat["img"] as $img)
		{
			echo '<img src="'.$img["src"].'" width="370" height="246" alt="'.$img["alt"].'" title="'.$img["title"].'">';
		}
	}

    echo '<div class="tech-list__label">'.$cat["name"].'</div>';

    echo '</a>';
}

echo '</div>';
echo '<div>'.$this->htmleditor('<insert name="show_block" id="17" module="site">').'</div>';

//Кнопка "Показать ещё"
if(! empty($result["show_more"]))
{
	echo $result["show_more"];
}

//постраничная навигация
if(! empty($result["paginator"]))
{
	echo $result["paginator"];
}