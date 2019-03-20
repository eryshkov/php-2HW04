<?php
require __DIR__ . '/autoload.php';

$router = new \App\Router();
$ctrlClass = $router->getClassName();

$ctrl = new $ctrlClass;
$ctrl->action();
