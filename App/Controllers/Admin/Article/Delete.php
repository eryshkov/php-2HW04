<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Controller;

class Delete extends Controller
{
    protected function handle(): void
    {
        if (!empty($this->parameters)) {
            $article = \App\Models\Article::findById(reset($this->parameters));
            if (false !== $article) {
                $article->delete();
                header('Location:' . '/admin');
                return;
            }
        }

        header('Location:' . '/admin');
    }
}