<?php

declare(strict_types=1);

namespace App\Controllers\Employer\Auth;

use App\Controllers\AbstractController;
use App\Models\User;
use App\Repositories\ApplicantRepository;
use App\Repositories\EmployerRepository;

class RegistrationController extends AbstractController
{
    public function showForm(): self
    {
        return $this->view('layouts/employer/auth/registration');
    }

    public function register(array $data): self
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        try {
            (new EmployerRepository())->create(new User($data));
        }
        catch(\PDOException $exception){
            $validation = ['error' => 'Failed registration!'];
            return $this->view('layouts/employer/auth/registration', compact('validation'));
        }
        $this->redirect('/employer/login');
        return $this;
    }
}