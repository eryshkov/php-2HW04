<?php

use App\Router;

require __DIR__ . '/autoload.php';

$ctrlClass = (new Router())->getControllerName();

/** @var \App\Controllers\BaseController $ctrl */
$ctrl = new $ctrlClass;
$ctrl->action();
