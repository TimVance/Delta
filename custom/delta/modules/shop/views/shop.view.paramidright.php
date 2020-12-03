<?php
/**
 * Шаблон дополнительных характеристик товара
 *
 * Шаблон вывода дополнительных характеристик товара
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

$show_param = 6;

echo '<table class="js--table-spoiler technique-specifications">';
foreach ($result["rows"] as $param)
{
    if ($param["id"] == 6 || $param["id"] == 7) continue;

    if ($show_param > 1) $show_param--;
    else break;

	echo '<tr class="technique-specifications__item '.($param["type"] == 'title' ? 'shop_param_title' : '').'"><td>'.$param["name"].'</td>';
	if ($param["value"])
	{
		if($param["type"] == "attachments")
		{
			foreach ($param["value"] as $a)
			{
				if ($a["is_image"])
				{
					if($param["use_animation"])
					{
						echo ' <a href="'.$a["link"].'" data-fancybox="gallery'.$result["id"].'shop"><img src="'.$a["link_preview"].'"></a> <a href="'.$a["link"].'" data-fancybox="gallery'.$result["id"].'shop_link">'.$a["name"].'</a>';
					}
					else
					{
						echo ' <a href="'.$a["link"].'"><img src="'.$a["link_preview"].'"></a> <a href="'.$a["link"].'">'.$a["name"].'</a>';
					}
				}
				else
				{
					echo ' <a href="'.$a["link"].'">'.$a["name"].'</a>';
				}
			}
		}
		elseif($param["type"] == "images")
		{
			foreach ($param["value"] as $img)
			{
				echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">';
			}
		}
		elseif(! empty($param["link"]))
		{
			echo '<a href="'.BASE_PATH_HREF.$param["link"].'">'.$param["value"].'</a>';
		}
		elseif (is_array($param["value"]))
		{
			foreach ($param["value"] as $p)
			{
				if ($param["value"][0] != $p)
				{
					echo ', ';
				}
				if (is_array($p))
				{
					if ($p["link"])
					{
						echo '<a href="'.BASE_PATH_HREF.$p["link"].'">'.$p["name"].'</a>';
					}
					else
					{
						echo $p["name"];
					}
				}
				else
				{
					echo $p;
				}
			}
		}
		else
		{
			echo '<td>'.$param["value"].'</td>';
		}
		//единицы измерения
		if(! empty($param["measure_unit"]) && $param["type"] == 'numtext')
		{
			echo ' '.$param["measure_unit"];
		}
	}	
	if($param["text"])
	{
		echo '<div class="shop_param_text">'.$param["text"].'</div>';
	}
	echo '</tr>';
}?>

<tr class="technique-specifications__item">
    <td colspan="2">
        <a href="#tabs" class="technique-specifications__more" type="button">Смотреть все технические характеристики</a>
    </td>
</tr>
</table>