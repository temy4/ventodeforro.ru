<?php
$routes = array(
	'/' => array(
		'title' => 'главная',
		'content' => 'index.html',
		'addCSS'  => array('index.css'),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'about-forro' => array(
		'title' => 'форро',
		'content' => 'about-forro.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'trips' => array(
		'title' => 'путешествия',
		'content' => 'trips.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'classes' => array(
		'title' => 'занятия',
		'content' => 'classes.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'faq' => array(
		'title' => 'вопрос-ответ',
		'content' => 'faq.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => false,
		'hidden' => false
	),
	'teachers' => array(
		'title' => 'преподаватели',
		'content' => 'teachers.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'usefull' => array(
		'title' => 'копилочка',
		'content' => 'usefull.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'photos' => array(
		'title' => 'фотографии',
		'content' => 'photos.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'events' => array(
		'title' => 'события',
		'content' => 'events.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'contacts' => array(
		'title' => 'контакты',
		'content' => 'contacts.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => false
	),
	'forbidden' => array(
		'title' => 'доступ запрещен',
		'content' => '403.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => true,
		'code' => 403
	),
	'notfound' => array(
		'title' => 'страница не найдена',
		'content' => '404.html',
		'addCSS'  => array(),
		'addJS'   => array(),
		'main-menu' => true,
		'hidden' => true,
		'code' => 404
	)
);
?>