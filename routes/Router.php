<?php

class Router {
    private $routes = [];

    public function add($method, $uri, $action) {
        $this->routes[$uri][$method] = $action;
    }

    public function get($uri, $action) {
        $this->add('GET', $uri, $action);
    }

    public function post($uri, $action) {
        $this->add('POST', $uri, $action);
    }

    public function dispatch($method, $uri) {
        if (isset($this->routes[$uri]) && isset($this->routes[$uri][$method])) {
            return call_user_func($this->routes[$uri][$method]);
        }
        
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
    }
}
?>
