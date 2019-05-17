<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\BaseController;
use App\Models\Article;

class Create extends BaseController
{
    protected function handle(): void
    {
        if (isset($_POST['title'], $_POST['content'])) {
            $article = new Article();
            
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->insert();
            
            header('Location:' . '/admin');
            return;
        }
    }
}