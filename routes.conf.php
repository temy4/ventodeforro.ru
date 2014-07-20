<?php
$routes = array(
	'/' => array(
		'title' => 'Главная',
		'content' => 'index.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'portfolio' => array(
		'title' => 'Наши работы',
		'content' => 'portfolio.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'services' => array(
		'title' => 'Услуги и цены',
		'content' => 'services.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'order' => array(
		'title' => 'Оставить заказ',
		'content' => 'order.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'contacts' => array(
		'title' => 'Связаться с нами',
		'content' => 'contacts.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'develop' => array(
		'title' => 'Создание сайтов',
		'content' => 'develop.html',
		'addCSS'  => array('pricing.css'),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'support' => array(
		'title' => 'Техническая поддержка',
		'content' => 'support.html',
		'addCSS'  => array('pricing.css'),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'setup' => array(
		'title' => 'Настройка',
		'content' => 'setup.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	// Errors
	'forbidden' => array(
		'title' => 'Доступ запрещен',
		'content' => '403.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => true,
		'code' => 403
	),
	'notfound' => array(
		'title' => 'Страница не найдена',
		'content' => '404.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => true,
		'code' => 404
	)
);
?>