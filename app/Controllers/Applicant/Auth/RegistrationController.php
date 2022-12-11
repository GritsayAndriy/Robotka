<?php

declare(strict_types=1);

namespace App\Controllers\Applicant\Auth;

use App\Controllers\AbstractController;
use App\Models\User;
use App\Repositories\ApplicantRepository;

class RegistrationController extends AbstractController
{
    public function showRegisterForm(): self
    {
        return $this->view('layouts/applicant/auth/registration');
    }

    public function register(array $data): self
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        try {
            (new ApplicantRepository())->create(new User($data));
        }
        catch(\PDOException $exception){
            $validation = ['error' => 'Failed registration!'];
            return $this->view('layouts/applicant/auth/registration', compact('validation'));
        }
        $this->redirect('/login');
        return $this;
    }
}