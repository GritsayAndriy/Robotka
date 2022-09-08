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

    public abstract function toStorage(): array;
}