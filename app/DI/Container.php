<?php

declare(strict_types=1);

namespace App\DI;

use App\Repositories\ApplicantRepository;
use App\Repositories\EmployerRepository;
use App\Repositories\RepositoryInterface;
use App\Repositories\SummaryRepository;
use App\Repositories\VacancyRepository;
use App\Services\DB;

class Container
{
    private static ?Container $instance = null;

    public static function getInstance(): self
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function getDB()
    {
        return new DB();
    }

    public function getVacancyRepository(): RepositoryInterface
    {
        return new VacancyRepository();
    }

    public function getSummaryRepository(): RepositoryInterface
    {
        return new SummaryRepository();
    }

    public function getApplicantRepository(): RepositoryInterface
    {
        return new ApplicantRepository();
    }

    public function getEmployerRepository(): RepositoryInterface
    {
        return new EmployerRepository();
    }
}