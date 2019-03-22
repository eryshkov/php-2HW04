<?php
require __DIR__ . '/autoload.php';

$router = new \App\Router();
$ctrlClass = $router->getControllerName();
$params = $router->getParameters();
var_dump($ctrlClass);
var_dump($params);
die();

$ctrl = new $ctrlClass;
$ctrl->action();
