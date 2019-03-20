<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Controller;

class Edit extends Controller
{
    protected function handle(): void
    {
        if (isset($_GET['id'])) {
            $this->view->article = \App\Models\Article::findById($_GET['id']);
            if (false === $this->view->article) {
                header('Location:' . '/admin');
                return;
            }
        }

        $this->view->display(__DIR__ . '/../../templates/news_edit.php');
    }
}