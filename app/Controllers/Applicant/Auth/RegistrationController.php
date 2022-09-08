<?php

declare(strict_types=1);

namespace App\Controllers\Applicant\Auth;

use App\Controllers\AbstractController;

class RegistrationController extends AbstractController
{
    public function showRegisterForm(): self
    {
        return $this->view('layouts/auth/applicant/registration');
    }

    public function register(array $data): self
    {

        return $this->view('layouts/auth/applicant/registration');
    }
}