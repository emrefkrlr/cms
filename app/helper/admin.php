<?php

/*
parameters: controllor name string
return: controller path
*/

function get_admin_controller_path($controllerName){
	$controllerName = strtolower($controllerName);
	return PATH . '/admin/controller/' . $controllerName . '.php';
}

/*
parameters: view name string
return: view path
*/

function get_admin_view_path($viewName){
	return PATH . '/admin/view/' . $viewName . '.php';
}

// get admin site url pat
function get_admin_site_url_path($url = FALSE){
    return URL . '/admin/' . $url;
}

// get admin assets url path
function get_admin_public_url_path($url = FALSE){
    return URL . '/admin/public/' . $url;
}

?>