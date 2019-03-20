<?php

namespace App\Controllers;

class ArticleInsert extends Controller
{
    protected function handle(): void
    {
        $this->view->display(__DIR__ . '/../../templates/news_create.php');
    }
}