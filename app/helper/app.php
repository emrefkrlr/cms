<?php

/*
parameters: controllor name string
return: controller path
*/

function get_controller_path($controllerName){
	$controllerName = strtolower($controllerName);
	return PATH . '/app/controller/' . $controllerName . '.php';
}

/*
parameters: view name string
return: view path
*/

function get_view_path($viewName){
	return PATH . '/app/view/' . $viewName . '.php';
}

/*
parameters: index integer
return: route index 
*/

function route($index){
	global $route;
	return isset($route[$index]) ? $route[$index] : FALSE;
}

?>