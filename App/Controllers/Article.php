<?php

namespace App\Controllers;

class Article extends Controller
{
    protected function handle()
    {
        $this->view->article = \App\Models\Article::findById((int)$_GET['id']);
        echo $this->view->render(__DIR__ . '/../../templates/article.php');
    }
}