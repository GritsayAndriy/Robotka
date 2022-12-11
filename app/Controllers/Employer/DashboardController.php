<?php

declare(strict_types=1);

namespace App\Controllers\Employer;

use App\Controllers\AbstractController;

class DashboardController extends AbstractController
{
    public function index()
    {
        return $this->view('layouts/employer/dashboard');
    }
}