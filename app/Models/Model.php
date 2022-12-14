<?php

declare(strict_types=1);

namespace App\Models;

abstract class Model
{
    protected int $id;

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public abstract function toStorage(): array;

    public abstract static function transformToModel(array $data): Model;
}