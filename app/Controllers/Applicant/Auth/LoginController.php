<?php

declare(strict_types=1);

namespace App\Controllers\Applicant\Auth;

use App\Controllers\AbstractController;

class LoginController extends AbstractController
{
    public function showForm()
    {
        return $this->view('layouts/auth/applicant/login');
    }

    public function login(array $data)
    {

        return $this->view('layouts/auth/applicant/dashboard');
    }
}