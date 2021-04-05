<?php
if (isset($_GET['url'])) {

	// split URL
	$url = trim($_GET['url'], '/');
	$url = filter_var($url, FILTER_SANITIZE_URL);
	$url = explode('/', $url);

	$url_controller = isset($url[0]) ? $url[0] : null;
	$url_action = isset($url[1]) ? $url[1] : null;

	// Remove controller and action from the split URL
	unset($url[0], $url[1]);

	// Rebase array keys and store the URL params
	$url_params = array_values($url);

	// for debugging. uncomment this if you have problems with the URL
	// echo 'Controller: ' . $url_controller . '<br>';
	// echo 'Action: ' . $url_action . '<br>';
	// echo 'Parameters: ' . Listarray($url_params, true) . '<br>';
}


if (!isset($url_controller)) $url_controller = 'home';
elseif (!file_exists(APP . 'controller/' . $url_controller . '.php')) {
	header('location: ' . URL . 'error/404');
	die();
}

require APP . 'controller/' . $url_controller . '.php';
