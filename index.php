<?php
require __DIR__ . '/autoload.php';

//$ctrlName = isset($_GET['ctrl']) ? ucfirst($_GET['ctrl']) : 'Index';
//$ctrlClass = '\App\Controllers\\' . $ctrlName;

$uriExtractor = new \App\UriExtractor();
$ctrlClass = $uriExtractor->getClassName();

$ctrl = new $ctrlClass;
$ctrl->action();
