<?php
/**
 * Шаблон страницы товара
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


echo '<section class="single-technique">';
echo '<div class="js_shop_id js_shop shop shop_id shop-item-container container">';

echo '<h1 class="single-technique__title page-title">'.$result["name"].'</h1>';

echo '<div class="single-technique__grid">';
echo '<div class="shop-item-left">';

//вывод изображений товара
if(! empty($result["img"]))
{
	echo '<div class="js_shop_all_img shop_all_img shop-item-big-images">';
	$k = 0;
	foreach($result["img"] as $img)
	{
		switch ($img["type"])
		{
			case 'animation':
				echo '<a class="js_shop_img shop-item-image'.(empty($k) ? ' active' : '').'" href="'.BASE_PATH.$img["link"].'" data-fancybox="gallery'.$result["id"].'shop" image_id="'.$img["id"].'">';
				break;
			case 'large_image':
				echo '<a class="js_shop_img shop-item-image'.(empty($k) ? ' active' : '').'" href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'" image_id="'.$img["id"].'">';
				break;
			default:
				echo '<a class="js_shop_img shop-item-image'.(empty($k) ? ' active' : '').'" href="'.BASE_PATH.$img["link"].'" image_id="'.$img["id"].'">';
				break;
		}
		echo '<img src="'.BASE_PATH.$img["link"].'" alt="'.$img["alt"].'" title="'.$img["title"].'" image_id="'.$img["id"].'" class="shop_id_img">';
		echo '</a>';
		$k++;
	}

	echo '</div>';
}

echo '</div>';

echo '<div class="shop-item-right single-technique__detail">';

        //характеристики товара
        if(! empty($result["param"]))
        {
            echo $this->get('paramidright', 'shop', array("rows" => $result["param"], "id" => $result["id"]));
        }
        ?>

        <div class="technique-item__price-wrapper">
            <p class="technique-item__price technique-item__price--hourly"><?=$result["ids_param"][6]["value"]?> <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label"><?=$result["ids_param"][6]["name"]?></span></p>
            <p class="technique-item__price technique-item__price--shift"><?=$result["ids_param"][7]["value"]?> <span class="technique-item__price-currency">руб.</span><span class="technique-item__price-label"><?=$result["ids_param"][7]["name"]?></span></p>
        </div>
        <div class="single-technique__active">
            <?= $this->get('buy_form_id', 'shop', array("row" => $result, "result" => $result)); ?>
            <a href="#free-consultation" class="js--modal-trigger single-technique__button single-technique__button--gray button" type="button">Консультация</a>
        </div>
</div>

    <div class="single-technique__custom technique-custom">
        <p class="technique-custom__title">Данная техника комплектуется:</p>
        <ul class="js--default-dots technique-custom__list grid-layout">
            <li class="grid-layout__item grid-layout__item--three technique-custom__item custom-card">
                <div class="custom-card__content">
                    <p class="custom-card__title">Вибропогружатель</p>
                    <p class="custom-card__option">ICE 5515</p>
                    <p class="custom-card__price" data-price="10000"><span class="custom-card__price-label">Цена</span> 10 000 руб/сутки</p>
                    <button class="js--add-cart custom-card__add" type="button">
                        <span class="custom-card__add-label">Добавить</span>
                        <span class="custom-card__add-icon"></span>
                    </button>
                </div>
                <img class="custom-card__thumbnail" src="images/data/pic-custom.png" alt="">
            </li>
            <li class="grid-layout__item grid-layout__item--three technique-custom__item custom-card">
                <div class="custom-card__content">
                    <p class="custom-card__title">Вибропогружатель</p>
                    <p class="custom-card__option">PVE 40 VM</p>
                    <p class="custom-card__price" data-price="20000"><span class="custom-card__price-label">Цена</span> 20 000 руб/сутки</p>
                    <button class="js--add-cart custom-card__add" type="button">
                        <span class="custom-card__add-label">Добавить</span>
                        <span class="custom-card__add-icon"></span>
                    </button>
                </div>
                <img class="custom-card__thumbnail" src="images/data/pic-custom.png" alt="">
            </li>
            <li class="grid-layout__item grid-layout__item--three technique-custom__item custom-card">
                <div class="custom-card__content">
                    <p class="custom-card__title">Вибропогружатель</p>
                    <p class="custom-card__option">МКТ 30 V</p>
                    <p class="custom-card__price" data-price="30000"><span class="custom-card__price-label">Цена</span> 30 000 руб/сутки</p>
                    <button class="js--add-cart custom-card__add" type="button">
                        <span class="custom-card__add-label">Добавить</span>
                        <span class="custom-card__add-icon"></span>
                    </button>
                </div>
                <img class="custom-card__thumbnail" src="images/data/pic-custom.png" alt="">
            </li>
            <li class="grid-layout__item grid-layout__item--three technique-custom__item custom-card">
                <div class="custom-card__content">
                    <p class="custom-card__title">Вибропогружатель</p>
                    <p class="custom-card__option">PVE 40 VM</p>
                    <p class="custom-card__price" data-price="40000"><span class="custom-card__price-label">Цена</span> 40 000 руб/сутки</p>
                    <button class="js--add-cart custom-card__add" type="button">
                        <span class="custom-card__add-label">Добавить</span>
                        <span class="custom-card__add-icon"></span>
                    </button>
                </div>
                <img class="custom-card__thumbnail" src="images/data/pic-custom.png" alt="">
            </li>
            <li class="grid-layout__item grid-layout__item--three technique-custom__item custom-card">
                <div class="custom-card__content">
                    <p class="custom-card__title">Вибропогружатель</p>
                    <p class="custom-card__option">PVE 40 VM</p>
                    <p class="custom-card__price" data-price="50000"><span class="custom-card__price-label">Цена</span> 50 000 руб/сутки</p>
                    <button class="js--add-cart custom-card__add" type="button">
                        <span class="custom-card__add-label">Добавить</span>
                        <span class="custom-card__add-icon"></span>
                    </button>
                </div>
                <img class="custom-card__thumbnail" src="images/data/pic-custom.png" alt="">
            </li>
            <li class="grid-layout__item grid-layout__item--three technique-custom__item custom-card">
                <div class="custom-card__content">
                    <p class="custom-card__title">Вибропогружатель</p>
                    <p class="custom-card__option">МКТ 30 V</p>
                    <p class="custom-card__price" data-price="60000"><span class="custom-card__price-label">Цена</span> 60 000 руб/сутки</p>
                    <button class="js--add-cart custom-card__add" type="button">
                        <span class="custom-card__add-label">Добавить</span>
                        <span class="custom-card__add-icon"></span>
                    </button>
                </div>
                <img class="custom-card__thumbnail" src="images/data/pic-custom.png" alt="">
            </li>
        </ul>
        <div class="technique-custom__active">
            <div class="technique-custom__price">
                <p class="technique-custom__price-label">Итого цена за комплект: </p>
                <p class="technique-custom__price-coast">
                    <span class="technique-custom__price-total">0</span>
                    <span class="technique-custom__price-currency">руб. смена</span>
                </p>
            </div>
            <button class="technique-custom__add button" type="button">Заказать</button>
        </div>
    </div>

    <div id="tabs" class="js--tabs technique-tabs">
        <ul class="technique-tabs__navigation">
            <li class="technique-tabs__link technique-tabs__link--active">
                <a href="#tab-1"><? echo $this->htmleditor("Описание"); ?></a>
            </li>
            <li class="technique-tabs__link">
                <a href="#tab-2"><? echo $this->htmleditor("Характеристики"); ?></a>
            </li>
        </ul>
        <div class="technique-tabs__content">
            <article id="tab-1" class="technique-tabs__item content open">
                <div class="shop_text"><?=$this->htmleditor($result['text'])?></div>
            </article>
            <article id="tab-2" class="technique-tabs__item">
                <div class="custom-table__wrapper">
                    <?= $this->get('paramid', 'shop', array("rows" => $result["param"], "id" => $result["id"])); ?>
                </div>
            </article>
        </div>
    </div>

<?

echo '</div>';
echo '</div>';
echo '</section>';
?>


<section class="choice-technique">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><? echo $this->htmleditor("Другие экскаваторы"); ?></h2>
        </header>
        <? echo $this->htmleditor('<insert images="1" name="show_block" module="shop" cat_id="current" count="6"></insert>'); ?>
    </div>
</section>

<section class="our-services our-services--light">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><? echo $this->htmleditor("Услуги оказываемые данной техникой"); ?></h2>
        </header>
        <? echo $this->htmleditor('<insert name="show_block" module="ab" site_id="164" template="mainservices" images="1" count="12"></insert>'); ?>
    </div>
</section>
