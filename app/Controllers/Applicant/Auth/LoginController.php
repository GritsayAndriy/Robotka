<?php

declare(strict_types=1);

namespace App\Controllers\Applicant\Auth;

use App\Controllers\AbstractController;
use App\Models\User;
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
        if (password_verify($data['password'], $user->getPassword())) {
            $this->rememberUser($user);
            $this->redirect('/dashboard');
        }
        $validation['error'] = 'Failed login';
        return $this->view('layouts/auth/applicant/login', compact('validation'));
    }

    private function rememberUser(User $user)
    {
        $userData = [
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail()
        ];
        $_SESSION['auth'] = $userData;
    }
}