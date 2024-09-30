<?php

class Router {
    private $routes = [];

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function dispatch() {
        $uri = $this->getCurrentUri();
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] as $route => $controller) {
            $routePattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $route);
            if (preg_match("#^{$routePattern}$#", $uri, $matches)) {
                array_shift($matches); // Remove the full match
                $controllerAction = explode('@', $controller);
                $controllerName = $controllerAction[0];
                $action = $controllerAction[1];
                $controllerInstance = new $controllerName;
                call_user_func_array([$controllerInstance, $action], $matches);
                return;
            }
        }

        echo "404 Not Found";
    }

    private function getCurrentUri() {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = strtok($uri, '?'); // Remove query string
        $uri = rtrim($uri, '/'); // Remove trailing slash

        // Handle the root URI
        if ($uri === '') {
            $uri = '/';
        }

        return $uri;
    }
}


