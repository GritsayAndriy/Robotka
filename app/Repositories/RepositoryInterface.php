<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Model;

interface RepositoryInterface
{
    public function findAll();

    public function find(int $id): ?Model;

    public function create(Model $model): ?Model;

    public function update();

    public function delete();
}