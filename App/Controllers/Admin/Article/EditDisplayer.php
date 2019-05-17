<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\BaseController;

class EditDisplayer extends BaseController
{
    protected function handle(): void
    {
        $parameter = $this->getRequestParameters();
        
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