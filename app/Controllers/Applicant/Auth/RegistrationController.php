<?php

declare(strict_types=1);

namespace App\Controllers\Applicant\Auth;

use App\Controllers\AbstractController;
use App\Models\User;
use App\Repositories\UserRepository;

class RegistrationController extends AbstractController
{
    public function showRegisterForm(): self
    {
        return $this->view('layouts/auth/applicant/registration');
    }

    public function register(array $data): self
    {
        (new UserRepository())->create(new User($data));
        return $this->view('layouts/auth/applicant/login');
    }
}