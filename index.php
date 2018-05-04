<?php

require_once('controllers/HomeController.php');
require_once('models/Search.php');
require_once('controllers/ListeFilmController.php');
require_once('controllers/ListeGenreController.php');
require_once('controllers/ListeDistributeurController.php');
require_once('controllers/MembresController.php');

$_controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$_action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller_name = ucfirst($_controller) . "Controller";
if(class_exists($controller_name)) {
$controller = new $controller_name();
}
if(class_exists($controller_name)){
$controller = new $controller_name();
	if(method_exists($controller, $_action)){
		$controller->{ $_action }();
	}
}
else{
	die('Class '. $controller_name . ' not found');
}
?>