<?php

namespace App;

class Router
{
    protected $parameters = [];
    protected $controllerName = '';

    public function __construct()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uriParts = explode('/', $uri);

        $cleanURIParts = [];
        foreach ($uriParts as $part) {
            if (!isset($part) || '' === $part) {
                continue;
            }

            if (is_numeric($part)) {
                $this->parameters[] = $part;
                continue;
            }

            $cleanURIParts[] = ucfirst($part);
        }

        if (empty($cleanURIParts)) {
            $cleanURIParts[] = 'Index';
        }

        $this->controllerName = '\App\Controllers\\' . implode('\\', $cleanURIParts);
    }

    /**
     * @return string
     */
    public function getControllerName(): string
    {
        return $this->controllerName;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
}
