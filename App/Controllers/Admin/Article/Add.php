<?php

namespace App\Controllers\Admin\Article;

use App\Controllers\Controller;

class Add extends Controller
{
    protected function handle(): void
    {
        $this->view->display(__DIR__ . '/../../../../templates/news_create.php');
    }
}