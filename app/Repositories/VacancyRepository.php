<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Vacancy;

class VacancyRepository extends DBRepository
{
    protected string $tableName = 'vacancies';
    protected string $modelName = Vacancy::class;

}