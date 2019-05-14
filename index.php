<?php
require __DIR__ . '/autoload.php';

$router = new \App\Router();
$ctrlClass = $router->getControllerName();

/** @var \App\Controllers\Controller $ctrl */
$ctrl = new $ctrlClass;
$ctrl->setParameters($router->getParameters());
$ctrl->action();
