<?php

declare(strict_types=1);

namespace App\Controllers\Applicant;

use App\Controllers\AbstractController;

class DashboardController extends AbstractController
{
    public function index()
    {
        return $this->view('layouts/applicant/dashboard');
    }
}