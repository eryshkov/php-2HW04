<?php

namespace App\Controllers;

class ArticleCreate extends Controller
{
    protected function handle(): void
    {
        if (isset($_POST['title'], $_POST['content'])) {
            $article = new \App\Models\Article();

            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->insert();

            header('Location:' . '/?ctrl=admin');
            return;
        }
    }
}