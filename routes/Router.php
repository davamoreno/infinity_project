<?php

class Router {
    private $routes = [];

    public function add($methods, $uri, $action) {
        if (is_array($methods)) {
            foreach ($methods as $method) {
                $this->routes[] = [
                    'method' => $method,
                    'uri' => $uri,
                    'action' => $action
                ];
            }
        } else {
            $this->routes[] = [
                'method' => $methods,
                'uri' => $uri,
                'action' => $action
            ];
        }
    }

    public function dispatch($method, $uri) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['uri'] === $uri) {
                call_user_func($route['action']);
                return;
            }
        }
        
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
    }
}
?>
