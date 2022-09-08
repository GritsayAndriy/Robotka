<?php
declare(strict_types=1);

namespace App\Repositories;

class UserRepository extends JsonRepository
{
    protected $filePath = '';
    public function __construct()
    {
        $this->filePath = config('app', 'user_json_path');
    }
}