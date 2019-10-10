<?php

use App\Controllers\UserController;

require __DIR__ . "/../vendor/autoload.php";

 $controller = new UserController();

 $controller->index();