<?php

use App\Controllers\UserController;

require __DIR__ . "/../vendor/autoload.php";


if (!empty($_POST['id']) && !empty($_POST['action']) && $_POST['action'] === 'delete') {
	$controller = new UserController();
	$controller->delete($_POST['id']);
}