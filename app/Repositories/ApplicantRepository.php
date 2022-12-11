<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Model;
use App\Models\User;

class ApplicantRepository extends DBRepository
{
    protected $filePath = '';
    protected string $modelName = User::class;
    protected string $tableName = 'applicants';

    public function __construct()
    {
        parent::__construct();
        $this->filePath = config('app', 'user_json_path');
    }
}