<?php
/**
 * Настройки модуля
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

/**
 * Custom_admin_config
 */
class Custom_admin_config extends Frame_admin
{
	/**
	 * @var array поля в базе данных для редактирования
	 */
	public $variables = array (
		'base' => array (
			'logo' => array(
				'type' => 'function',
				'name' => 'Логотип',
				'help' => 'Изображения будут загружены автоматически после выбора. После загрузки изображения будут обработаны автоматически, согласно настройкам модуля. Параметр выводится, если в настройках модуля отмечена опция «Использовать изображения».',
			),
			'phone' => array(
				'type' => 'text',
				'name' => 'Телефон',
				'help' => "Контактный телефон.",
				'multilang' => true
			),
			'address' => array(
				'type' => 'text',
				'name' => 'Адрес',
				'help' => "Адрес организации.",
				'multilang' => true
			),
			'title_block' => array(
				'type' => 'title',
				'name' => 'Блоки',
			),
			'show_favorite' => array(
				'type' => 'checkbox',
				'name' => 'Показывать избранное',
			),
			'show_lk' => array(
				'type' => 'checkbox',
				'name' => 'Показывать личный кабинет',
			),
			'show_slider' => array(
				'type' => 'checkbox',
				'name' => 'Показывать слайдер',
			),
			'title_inside' => array(
				'type' => 'title',
				'name' => 'Внутренние страницы',
			),
			'start_text' => array(
				'type' => 'editor',
				'name' => 'Описание на главной',
				'multilang' => true
			),
		),
		'images' => array (
			'images' => array(
				'type' => 'module',
				'element_type' => array('element'),
				'hide' => true,
			),
			'images_element' => array(
				'type' => 'none',
				'name' => 'Использовать изображения',
				'help' => 'Позволяет включить/отключить загрузку изображений.',
				'no_save' => true,
			),
			'images_variations_element' => array(
				'type' => 'none',
				'name' => 'Генерировать размеры изображений',
				'help' => 'Размеры изображений, заданные в модуле «Изображения» и тег латинскими буквами для подключения изображения на сайте. Обязательно должны быть заданы два размера: превью изображения в списке товаров (тег medium) и полное изображение (тег large). Если задан дополнительный вариант, помеченный тегом preview, то на странице товара будет выводиться уменьшенные изображения (preview), при нажатии на которые обновленится основное изображение товара (medium).',
				'no_save' => true,
			),
		),
	);

	/**
	 * @var array названия табов
	 */
	public $tabs_name = array(
		'base' => 'Основные настройки',
		'images' => 'Изображения',
	);

	/**
	 * @var array настройки модуля
	 */
	public $config = array (
		'tab_card', // использование вкладок
		'config', // файл настроек модуля
	);

	/**
	 * Подготавливает конфигурацию модуля
	 * @return void
	 */
	public function prepare_config()
	{
		$this->diafan->element_type = 'element';
	}

	/**
	 * Редактирование поля "Формат цены"
	 *
	 * @return void
	 */
	function edit_config_variable_logo()
	{
		$key = 'images';
		if (in_array($key, $this->diafan->installed_modules)
			&& Custom::exists('modules/'.$key.'/admin/'.$key.'.admin.inc.php'))
		{
			Custom::inc('modules/'.$key.'/admin/'.$key.'.admin.inc.php');
			$func = 'edit';
			$class = ucfirst($key).'_admin_inc';
			if (method_exists($class, $func))
			{
				$module_class = new $class($this->diafan);
				call_user_func_array (array(&$module_class, $func), array());
			}
			$path = 'modules/'.$key.'/admin/js/'.$key.'.admin.inc.js';
			if(Custom::exists($path))
			{
				$this->diafan->_admin->js_view[] = Custom::path($path);
			}
		}
	}
}
