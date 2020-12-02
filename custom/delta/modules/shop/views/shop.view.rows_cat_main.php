<?php
/**
 * Шаблон элементов в списке товаров
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

if(empty($result['rows'])) return false;
?>

<div class="js--default technique-list grid-layout">
<? foreach ($result['rows'] as $row)
{
	echo '<article class="technique-item grid-layout__item grid-layout__item--three">';

	//вывод изображений товара
	if(! empty($row["img"]))
	{
		echo '<div class="shop_img shop-photo">';
		foreach ($row["img"] as $img)
		{
			switch ($img["type"])
			{
				case 'animation':
					echo '<a href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$row["id"].'shop">';
					break;
				case 'large_image':
					echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'">';
					break;
				default:
					echo '<a href="'.BASE_PATH_HREF.$img["link"].'">';
					break;
			}
			echo '<img src="'.$img["src"].'" alt="'.$img["alt"].'" title="'.$img["title"].'" image_id="'.$img["id"].'" class="js_shop_img">';
			echo '</a> ';
			if(! empty($result['search']))
			{
				break;
			}
		}

		echo '</div>';
	}

	//вывод названия и ссылки на товар
	echo '<h2 class="technique-item__title"><a href="'.BASE_PATH_HREF.$row["link"].'" class="shop-item-title">'.$row["name"].'</a></h2>';

	//вывод параметров товара
	if(empty($result['search']) && ! empty($row["param"]))
	{
		echo $this->get('param', 'shop', array("rows" => $row["param"], "id" => $row["id"]));
	}

	if(empty($result['search']))
	{
		//вывод кнопки "Купить"
		echo $this->get('buy_form', 'shop', array("row" => $row, "result" => $result));
	}

	echo '</article>';
}
echo '</div>';
