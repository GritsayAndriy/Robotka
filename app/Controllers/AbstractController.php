<?php

declare(strict_types=1);

namespace App\Controllers;

use App\DI\Container;

class AbstractController
{
    private ?string $viewPath;
    private ?array $param = [];

    public $container;

    public function __construct()
    {
        $this->container = Container::getInstance();
    }

    public function view(string $name, array $param = []): self
    {
        $this->viewPath = $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $name . '.php';
        $this->param = $param;
        return $this;
    }

    public function render(): void
    {
        ob_start();
        extract($this->param);
        include($this->viewPath);
        echo ob_get_clean();
    }

    public function redirect(string $path)
    {
        header('Location: ' . $path);
        die();
    }

    public function getContainer(): Container
    {
        return Container::getInstance();
    }
}