<?php
require __DIR__ . '/autoload.php';

echo '44';
$ctrl = new \App\Controllers\Index();
$ctrl->action();
