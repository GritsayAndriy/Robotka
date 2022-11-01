<?php

declare(strict_types=1);

namespace App\Controllers\Employer;

use App\Controllers\AbstractController;
use App\Models\Vacancy;
use App\Repositories\DBRepository;

class VacancyController extends AbstractController
{
    public function __construct(
        private ?DBRepository $vacancyRepository = null
    )
    {
        parent::__construct();
        $this->vacancyRepository = $this->container->getVacancyRepository();
    }

    public function index()
    {
        $vacancies = $this->vacancyRepository->findAll();
        return $this->view('layouts/employer/vacancy/index', compact('vacancies'));
    }

    public function create()
    {
        return $this->view('layouts/employer/vacancy/create');
    }

    public function store($request)
    {
        $vacancy = new Vacancy([
            'name' => $request['name'],
            'description' => $request['description'],
        ]);
        $this->vacancyRepository->create($vacancy);

        return $this->redirect('/employer/vacancies');
    }

    public function destroy()
    {

    }
}