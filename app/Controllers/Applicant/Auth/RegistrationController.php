<?php

declare(strict_types=1);

namespace App\Controllers\Applicant\Auth;

use App\Controllers\AbstractController;

class RegistrationController extends AbstractController
{
    public function register(): self
    {
        return $this->view('');
    }
}