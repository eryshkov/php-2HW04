<?php

namespace App;

class Router
{
    public function getClassName(): string
    {
        $uri = $this->getAddrPart($_SERVER['REQUEST_URI']);
        $uriParts = explode('/', $uri);

        $cleanURIParts = [];
        foreach ($uriParts as $part) {
            if (!isset($part) || '' === $part) {
                continue;
            }

            $cleanURIParts[] = ucfirst($part);
        }

        if (empty($cleanURIParts)) {
            $cleanURIParts[] = 'Index';
        }

        return '\App\Controllers\\' . implode('\\', $cleanURIParts);
    }

    protected function getAddrPart(string $uri): ?string
    {
        $addr = explode('?', $uri);

        if (!empty($addr)) {
            return reset($addr);
        }

        return null;
    }
}