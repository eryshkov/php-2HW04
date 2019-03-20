<?php

namespace App\Controllers;

class ArticleEdit extends Controller
{
    protected function handle(): void
    {
        if (isset($_GET['id'])) {
            $this->view->article = \App\Models\Article::findById($_GET['id']);
            if (false === $this->view->article) {
                header('Location:' . '/?ctrl=admin');
                return;
            }
        }

        $this->view->display(__DIR__ . '/../../templates/news_edit.php');
    }
}