<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Controller;

class Edit extends Controller
{
    protected function handle(): void
    {
        if (!empty($this->parameters)) {
            $this->view->article = \App\Models\Article::findById(reset($this->parameters));
            if (false === $this->view->article) {
                header('Location:' . '/admin');
                return;
            }
        }

        $this->view->display(__DIR__ . '/../../../../templates/news_edit.php');
    }
}