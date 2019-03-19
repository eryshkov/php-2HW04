<?php

namespace App\Controllers;

use App\View;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action()
    {
        if ($this->access()) {
            return $this->handle();
        }
        die('Access denied');
    }

    abstract protected function handle();
}