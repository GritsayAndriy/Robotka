<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Summary;

class SummaryRepository extends DBRepository
{
    protected $filePath = '';
    protected string $modelName = Summary::class;
    protected string $tableName = 'summaries';
}