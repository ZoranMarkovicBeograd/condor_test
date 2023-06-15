<?php

namespace App\Routes;

class Router
{
    protected $routes = [];

    public function __construct()
    {
        $this->loadRoutes();
    }

    public function get(string $path, $controller, string $action)
    {
        $this->addRoute('GET', $path, $controller, $action);
    }
    public function post(string $path, $controller, string $action)
    {
        $this->addRoute('POST', $path, $controller, $action);
    }

    public function put(string $path, $controller, string $action)
    {
        $this->addRoute('PUT', $path, $controller, $action);
    }

    public function delete(string $path, $controller, string $action)
    {
        $this->addRoute('DELETE', $path, $controller, $action);
    }

    public function dispatch()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['REQUEST_URI'];

        $routeAction = $this->routes[$method][$path] ?? null;
        if ($routeAction) {
            $controller = new $routeAction['controller'];
            $action = $routeAction['action'];
            $controller->$action();
        } else {
            // 404 Not Found
        }
    }

    protected function loadRoutes()
    {
        // Load routes from a file, database, or other source
    }

    private function addRoute($method, $path, $controller, $action)
    {
        $this->routes[$method][$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }
}
