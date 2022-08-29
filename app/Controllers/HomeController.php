<?php

declare(strict_types=1);

namespace App\Controllers;

class HomeController extends AbstractController
{
    public function index(): self
    {
        return $this->view('profile/developer');
    }
}