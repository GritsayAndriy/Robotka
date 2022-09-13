<?php

declare(strict_types=1);

namespace App\Controllers;

class AbstractController
{
    private ?string $viewPath;

    public function view(string $name): self
    {
        $this->viewPath = $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $name . '.php';
        return $this;
    }

    public function render(): void
    {
        include($this->viewPath);
    }

    public function redirect(string $path)
    {
        header('Location: ' . $path);
        die();
    }
}