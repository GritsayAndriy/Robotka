<?php

declare(strict_types=1);

namespace App\Controllers;

class LogoutController extends AbstractController
{
    public function logout()
    {
        session_destroy();
        $this->redirect('/');
    }
}