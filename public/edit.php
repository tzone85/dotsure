<?php

use App\Controllers\UserController;

require __DIR__ . "/../vendor/autoload.php";


if (!empty($_GET['id']) && !empty($_POST['action']) && $_POST['action'] === 'update') {
	$controller = new UserController();
	$controller->update($_GET['id'], $_POST);
} elseif (!empty($_GET['id'])) {
	$controller = new UserController();
	$controller->showUpdate($_GET['id']);
} else {
	 header("Location: /");
}