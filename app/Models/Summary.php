<?php

declare(strict_types=1);

namespace App\Models;

class Summary extends Model
{
    protected array $fillable = ['user_id', 'position', ];

    public function toStorage(): array
    {
        // TODO: Implement toStorage() method.
    }

    public static function transformToModel(array $data): Model
    {
        // TODO: Implement transformToModel() method.
    }
}