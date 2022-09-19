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
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        try {
            (new UserRepository())->create(new User($data));
        }
        catch(\PDOException $exception){
            $validation = ['error' => 'Failed registration!'];
            return $this->view('layouts/auth/applicant/registration', compact('validation'));
        }
        $this->redirect('/login');
        return $this;
    }
}