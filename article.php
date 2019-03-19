<?php
require __DIR__ . '/autoload.php';

var_dump('42');
$ctrl = new \App\Controllers\Article();
$ctrl->action();
