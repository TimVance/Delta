<?php
/**
 * Шаблон блока баннеров
 * 
 * Шаблонный тег <insert name="show_block" module="bs" [count="all|количество"]
 * [cat_id="категория"] [id="номер_баннера"] [template="шаблон"]>:
 * блок баннеров
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

if (empty($result))
{
	return false;
}
?>


<ul class="advantages grid-layout">
    <? foreach ($result as $row) { ?>
        <li class="advantages-item grid-layout__item grid-layout__item--four">
            <p class="advantages-item__label"><?=strip_tags($row["text"])?></p>
            <img class="advantages-item__icon" src="<?=$row['html']?>" alt="<?=strip_tags($row["name"])?>">
            <p class="advantages-item__description"><?=strip_tags($row["name"])?></p>
        </li>
    <? } ?>
</ul>
