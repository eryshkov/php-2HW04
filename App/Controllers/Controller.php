<?php

namespace App\Controllers;

use App\View;

abstract class Controller
{
    protected $view;
    public $parameters = [];

    public function __construct()
    {
        $this->view = new View();
    }

    public function action(): void
    {
        if ($this->access()) {
            $this->handle();
            return;
        }

        die('Доступ закрыт');
    }

    protected function access(): bool
    {
        return true;
    }

    abstract protected function handle(): void;
}