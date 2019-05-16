<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Controller;

class EditDisplayer extends Controller
{
    protected function handle(): void
    {
        $parameter = $this->getParameters();
        
        if (!empty($parameter)) {
            $this->view->article = \App\Models\Article::findById(reset($parameter));
            if (false === $this->view->article) {
                header('Location:' . '/admin');
                return;
            }
        }
        
        $this->view->display(__DIR__ . '/../../../../templates/news_edit.php');
    }
}