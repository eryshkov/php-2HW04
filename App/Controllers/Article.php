<?php

namespace App\Controllers;

class Article extends Controller
{
    protected function handle(): void
    {
        $id = $this->getParameters()['id'];
        
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}
