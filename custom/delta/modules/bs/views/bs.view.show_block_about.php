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


<section class="about-firm">
    <div class="container">
        <div class="about-firm__grid">
            <? foreach ($result as $row) { ?>
                <img class="about-firm__thumbnail" src="<?=BASE_PATH.USERFILES.'/bs/'.$row['image']?>" alt="<?=$row["name"]?>" width="852" height="669">
                <div class="about-firm__content">
                    <h2 class="section-title"><?=$row["name"]?></h2>
                    <?=$row["text"]?>
                </div>
            <? } ?>
        </div>
    </div>
</section>
