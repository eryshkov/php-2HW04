<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\BaseController;
use App\Models\Article;

class EditPresenter extends BaseController
{
    protected function handle(): void
    {
        $id = $this->getRequestParameters()['id'];
        
        if (isset($id)) {
            $this->view->article = Article::findById($id);
            if (false === $this->view->article) {
                header('Location:' . '/admin');
                return;
            }
        }
        
        $this->view->display(__DIR__ . '/../../../../templates/news_edit.php');
    }
}