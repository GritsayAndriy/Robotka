<?php

declare(strict_types=1);

namespace App\Controllers;

class HomeController extends AbstractController
{
    public function home()
    {
        return $this->view('layouts/home');
    }

    public function index(): self
    {
        echo template_path();
        return $this->view('profile/developer');
    }
}