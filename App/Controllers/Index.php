<?php

namespace App\Controllers;

class Index
{
    public function action()
    {
        $view = new \App\View();
        $view->articles = \App\Models\Article::getAllLast(3);
        echo $view->render(__DIR__ . '/../../templates/news.php');
    }
}