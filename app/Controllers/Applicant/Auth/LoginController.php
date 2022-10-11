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
        if ($user->getPassword() == $data['password']) {
            $this->rememberUser($user);
            $this->redirect('/dashboard');
        }
        return $this->view('layouts/auth/applicant/login');
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