<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\BaseController;
use App\Models\Article;

class Update extends BaseController
{
    protected function handle(): void
    {
        if (isset($_POST['title'], $_POST['content'], $_POST['id'])) {
            $article = Article::findById($_POST['id']);
            if (false === $article) {
                header('Location:' . '/admin');
                exit();
            }
            
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->update();
            
            header('Location:' . '/admin');
            return;
        }
    }
}