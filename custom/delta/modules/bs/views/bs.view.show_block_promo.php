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


<section class="promo">
    <div class="container">
        <div class="promo__grid">
            <? foreach ($result as $row) { ?>
                <div class="promo__content">
                    <p class="promo__title"><?=$row["name"]?></p>
                    <p class="promo__description"><?=$row["text"]?></p>
                </div>
                <img class="promo__thumbnail" src="<?=BASE_PATH.USERFILES.'/bs/'.$row['image']?>" alt="<?=$row["name"]?>" width="912" height="728">
            <? } ?>
        </div>
    </div>
</section>
