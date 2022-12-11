<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Repositories\VacancyRepository;

class HomeController extends AbstractController
{
    public function home()
    {
        $vacancies = $this->getContainer()
            ->getVacancyRepository()
            ->findAll();
        return $this->view('layouts/home', compact('vacancies'));
    }

    public function index(): self
    {
        echo template_path();
        return $this->view('profile/developer');
    }
}