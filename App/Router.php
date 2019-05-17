<?php

namespace App;

class Router
{
    /**
     * @return string|null
     */
    protected function getNormalUri(): ?string
    {
        $uri = $_SERVER['REQUEST_URI'];
        
        return preg_replace('~\/*$~', '', $uri);
    }
    
    /**
     * @return string|null
     */
    public function getControllerName(): ?string
    {
        $uri = $this->getNormalUri();
        
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
     * @return array|null
     */
    public function getParameters(): ?array
    {
        $config = Config::instance();
        $flipRoutes = array_flip($config->data['routes']);
        
        $controller = $this->getControllerName();
        if (!isset($controller)) {
            return null;
        }
        
        $route = $flipRoutes[$controller];
        
        if (!isset($route)) {
            return null;
        }
        
        preg_match_all('~(?:{.+})~U', $route, $parameterNames);
        foreach ($parameterNames as $key => $parameterName) {
            $parameterNames[$key] = str_replace(['{', '}'], '', $parameterName);
        }
        
        $parameterNames = reset($parameterNames);
        
        if (!isset($parameterNames)) {
            return null;
        }
        
        $regExp = '~' . $route . '~J';
        foreach ($parameterNames as $parameterName) {
            $regExp = str_replace($parameterName, sprintf('(?P<%s>.+)', $parameterName), $regExp);
        }
        $regExp = str_replace(['/', '{', '}'], ['\/', '', ''], $regExp);
        
        preg_match_all($regExp, $this->getNormalUri(), $matches);
        
        $result = null;
        foreach ($parameterNames as $parameterName) {
            if (isset($matches[$parameterName])) {
                $result[$parameterName] = reset($matches[$parameterName]);
            }
        }
        
        return $result;
    }
}
