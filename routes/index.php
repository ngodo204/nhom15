<?php

use Php2\Exam\Controllers\HomeController;
use Bramus\Router\Router;

// Create Router instance
$router = new Router();

$router->get( '/', HomeController::class . '@index');

// Run it!
$router->run();