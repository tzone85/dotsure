<?php

use App\Controllers\UserController;

require __DIR__ . "/../vendor/autoload.php";

//$controller = new UserController();
//
//$controller->showCreate();

if (!empty($_POST['action']) && $_POST['action'] === 'create') {
	$controller = new UserController();
	$controller->create($_POST);
} else {
	$controller = new UserController();
	$controller->showCreate();
}