<?php

declare(strict_types=1);

namespace App\Controllers\Applicant\Auth;

use App\Controllers\AbstractController;
use App\Repositories\UserRepository;

class LoginController extends AbstractController
{
    public function showForm()
    {
        return $this->view('layouts/auth/applicant/login');
    }

    public function login(array $data)
    {
        $user = (new UserRepository())->findByEmail($data['email']);
        if ($user->getPassword() == $data['password']){
            return $this->view('layouts/applicant/dashboard');
        }
        return $this->view('layouts/auth/applicant/login');
    }
}