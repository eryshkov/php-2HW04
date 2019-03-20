<?php

namespace App\Controllers;

class ArticleDelete extends Controller
{
    protected function handle(): void
    {
        if (isset($_GET['id'])) {
            $article = \App\Models\Article::findById($_GET['id']);
            if (false !== $article) {
                $article->delete();
                header('Location:' . '/?ctrl=admin');
                return;
            }
        }

        header('Location:' . '/?ctrl=admin');
    }
}