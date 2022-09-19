<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Model;
use App\Models\User;

class UserRepository extends DBRepository
{
    protected $filePath = '';
    protected string $modelName = User::class;
    protected string $tableName = 'users';

    public function __construct()
    {
        parent::__construct();
        $this->filePath = config('app', 'user_json_path');
    }

    public function findByEmail(string $email): ?Model
    {
        $statement = $this->dbConnection->prepare("SELECT * FROM $this->tableName WHERE email = ?");
        $statement->execute([$email]);
        $result = $statement->fetch();
        if ($result) {
            return $this->modelName::transformToModel($result);
        }
        return null;
    }
}