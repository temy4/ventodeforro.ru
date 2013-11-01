<?php
$routes = array(
	'/' => array(
		'title' => 'Главная',
		'content' => 'index.html',
		'addCSS'  => array('index.css'),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'about-forro' => array(
		'title' => 'Форро',
		'content' => 'about-forro.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'trips' => array(
		'title' => 'Путешествия',
		'content' => 'trips.html',
		'addCSS'  => array('photos.css', 'vendor/jquery.lightbox-0.5.css'),
		'addJS'   => array('vendor/jquery.lightbox-0.5.pack.js'),
		'main-menu' => true,
		'hidden' => false
	),
	'classes' => array(
		'title' => 'Занятия',
		'content' => 'classes.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'faq' => array(
		'title' => 'Вопрос-ответ',
		'content' => 'faq.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	// 'teachers' => array(
	// 	'title' => 'преподаватели',
	// 	'content' => 'teachers.html',
	// 	'addCSS'  => array(),
	// 	'addJS'   => array(),
	// 	'main-menu' => true,
	// 	'hidden' => false
	// ),
	'usefull' => array(
		'title' => 'Копилочка',
		'content' => 'usefull.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'photos' => array(
		'title' => 'Фотографии',
		'content' => 'photos.html',
		'addCSS'  => array('photos.css', 'vendor/jquery.lightbox-0.5.css'),
		'addJS'   => array('vendor/jquery.lightbox-0.5.pack.js'),
		'main-menu' => true,
		'hidden' => false
	),
	'events' => array(
		'title' => 'События',
		'content' => 'events.html',
		'addCSS'  => array('events.css', 'vendor/events_map.css', 'vendor/mosaic.css'),
		'addJS'   => array('vendor/craftmap.js', 'vendor/mosaic.1.0.1.min.js'),
		'main-menu' => false,
		'hidden' => false
	),
	'contacts' => array(
		'title' => 'Контакты',
		'content' => 'contacts.html',
		'addCSS'  => array('contacts.css'),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'forbidden' => array(
		'title' => 'Доступ запрещен',
		'content' => '403.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => true,
		'code' => 403
	),
	'notfound' => array(
		'title' => 'Страница не найдена',
		'content' => '404.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => true,
		'code' => 404
	)
);
?>