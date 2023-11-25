<?php

namespace Root\PhpStringSortMvc;

use Root\PhpStringSortMvc\Router;
use Root\PhpStringSortMvc\Controllers\SortStringController;

$uri = $_SERVER['REQUEST_URI'];
$router = new Router();

$router->addRoute('/', SortStringController::class, 'index');
$router->addRoute('/sort', SortStringController::class, 'sort');

$router->dispatch($uri);

