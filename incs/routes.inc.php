<?php
define('CURRENT_PAGE', isset( $_GET['p'] ) ? $_GET['p'] : '/');

function getMenu($main = true){
	require ('routes.conf.php');
	
	$ret = array();
	
	foreach ($routes as $path => $route) {
		if($main == $route['main-menu'] && !$route['hidden']){
			$ret[$path] = $route;
		}
	}

	return $ret;
}

function getPage(){
	require ('routes.conf.php');

	$p = isset( $_GET['p'] ) ? $_GET['p'] : '/';
	if( array_key_exists($p, $routes) && file_exists('./pages/'.$routes[$p]['content']) ) {
		if(isset($routes[$p]['code'])){
			http_response_code($routes[$p]['code']);
		}
		return $routes[$p];
	}
	else {
		http_response_code(404);
		return $routes['notfound'];
	}
}
?>