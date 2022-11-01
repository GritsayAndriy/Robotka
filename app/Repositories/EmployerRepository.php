<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

class EmployerRepository extends DBRepository
{
    protected $filePath = '';
    protected string $modelName = User::class;
    protected string $tableName = 'employers';
}