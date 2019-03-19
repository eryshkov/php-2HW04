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
            var_dump($this->access());
            return $this->handle();
        }
        var_dump($this->access());
    }

    protected function access(): bool
    {
        return true;
    }

    abstract protected function handle();
}