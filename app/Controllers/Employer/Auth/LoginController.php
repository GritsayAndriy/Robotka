<?php

declare(strict_types=1);

namespace App\Controllers\Employer\Auth;

use App\Controllers\AbstractController;
use App\Models\User;
use App\Repositories\ApplicantRepository;
use App\Repositories\EmployerRepository;

class LoginController extends AbstractController
{
    public function showForm()
    {
        return $this->view('layouts/employer/auth/login');
    }

    public function login(array $data)
    {
        $user = (new EmployerRepository())->findByEmail($data['email']);
        if (password_verify($data['password'], $user->getPassword())) {
            $this->rememberUser($user);
            $this->redirect('/employer/dashboard');
        }
        $validation['error'] = 'Failed login';
        return $this->view('layouts/employer/auth/login', compact('validation'));
    }

    private function rememberUser(User $user)
    {
        $userData = [
            'id' => $user->getId(),
            'guard' => 'employer',
            'username' => $user->getUsername(),
            'email' => $user->getEmail()
        ];
        $_SESSION['auth'] = $userData;
    }
}