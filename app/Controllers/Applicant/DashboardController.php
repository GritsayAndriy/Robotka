<?php

declare(strict_types=1);

namespace App\Controllers\Applicant;

use App\Controllers\AbstractController;
use App\Helpers\AuthHelper;

class DashboardController extends AbstractController
{
    public function index()
    {
        $authUser = AuthHelper::getAuthed();
        return $this->view('layouts/applicant/dashboard', compact('authUser'));
    }
}