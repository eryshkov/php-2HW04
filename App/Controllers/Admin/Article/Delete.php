<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\BaseController;

class Delete extends BaseController
{
    protected function handle(): void
    {
        $id = $this->getRequestParameters()['id'];
        
        if (!isset($id)) {
            $article = \App\Models\Article::findById($id);
            if (false !== $article) {
                $article->delete();
                header('Location:' . '/admin');
                return;
            }
        }
        
        header('Location:' . '/admin');
    }
}