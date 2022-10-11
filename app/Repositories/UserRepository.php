<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Model;
use App\Models\User;

class UserRepository extends JsonRepository
{
    protected $filePath = '';
    protected string $modelName = User::class;

    public function __construct()
    {
        $this->filePath = config('app', 'user_json_path');
    }

    public function findByEmail(string $email): ?Model
    {
        $users = json_decode(file_get_contents($this->filePath), true);
        foreach ($users as $user) {
            if ($user['email'] == $email) {
                return $this->modelName::transformToModel($user);
            }
        }
        return null;
    }
}