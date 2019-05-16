<?php

$result = [
    'db' => [
        'driver'   => 'mysql',
        'host'     => 'php-2hw04.mac',
        'port'     => '8889',
        'dbname'   => 'php2hw04',
        'userName' => 'eug',
        'password' => '123',
    ],
    'routes' => [
        '/admin/article/add' => \App\Controllers\Admin\Article\InsertDisplayer::class,
        '/article/{id}' => \App\Controllers\Article::class,
        '/admin/article/{id}/edit' => \App\Controllers\Admin\Article\EditDisplayer::class,
        '/admin/article/{id}/edit/{cd}' => \App\Controllers\Admin\Article\EditDisplayer::class,
        '/admin/article/{id}/delete' => \App\Controllers\Admin\Article\Delete::class,
        '/admin' => \App\Controllers\Admin::class,
    ]
];

return $result;