<?php
define('CURRENT_PAGE', isset( $_GET['p'] ) ? $_GET['p'] : '/');

function getMenu($main = true){
	require ('routes.conf.php');
	
	$ret = array();
	
	foreach ($routes as $path => $route) {
		if($main == $route['main-menu']){
			$ret[$path] = $route;
		}
	}

	return $ret;
}

function getPage(){
	require ('routes.conf.php');

	$p = isset( $_GET['p'] ) ? $_GET['p'] : '/';
	if( array_key_exists($p, $routes) && file_exists('./pages/'.$routes[$p]['content']) ) {
		return $routes[$p];
	}
	else {
		header("HTTP/1.0 404 Not Found");
		
		return array(
			'title' => 'страница не найдена',
			'content' => '404.html',
			'addCSS'  => array(),
			'addJS'   => array()
		);
	}
}
?>