<?php

declare(strict_types=1);

namespace App;

use App\Controllers\AbstractController;

class Kernel
{
    private array $routes;
    private ?AbstractController $response = null;

    public function registerRoutes(): self
    {
        $this->routes = array_merge(
            include(__DIR__ . '/../routes/api.php'),
            include(__DIR__ . '/../routes/web.php'),
            include(__DIR__ . '/../routes/web/employer.php'),
            include(__DIR__ . '/../routes/web/applicant.php'),
        );

        return $this;
    }

    public function executeController(): self
    {
        $uri = $_SERVER['PATH_INFO'] ?? '/';
        $method = mb_strtolower($_SERVER['REQUEST_METHOD']);

        if (isset($this->routes[$uri][$method])) {
            $controller = new $this->routes[$uri][$method]['controller'];
            $controllerMethod = $this->routes[$uri][$method]['method'];
            $this->response = $controller->$controllerMethod($_POST);
        }
        return $this;
    }

    public function renderResponse(): void
    {
        $this->response->render();
    }
}