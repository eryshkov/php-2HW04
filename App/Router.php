<?php

namespace App;

class Router
{
    protected $parametersGET = [];
    
    /**
     * @return string|null
     */
    public function getControllerName(): ?string
    {
        $uri = $_SERVER['REQUEST_URI'];
    
        $uri = preg_replace('~\/*$~', '', $uri);
    
        $config = Config::instance();
        $routes = $config->data['routes'];
    
        $regExps = [];
        foreach ($routes as $routePattern => $className) {
            $res = str_replace('/', '\/', $routePattern);
            $res = preg_replace('~{.+}~', '.+', $res);
            if (isset($res)) {
                $regExps[$className] = '~^' . $res . '$~';
            }
        }
    
        foreach ($regExps as $className => $regExp) {
            if (1 === preg_match($regExp, $uri)) {
                return $className;
            }
        }
        
        return null;
    }
    
    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parametersGET;
    }
}
