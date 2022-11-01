<?php

declare(strict_types=1);

namespace App\Models;

class Summary extends Model
{
    protected int $userId;
    protected string $position;
    protected string $description;
    protected string $skills;
    protected $createdAt;

    protected array $fillable = ['user_id', 'position', 'description', 'skills', 'created_at'];

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getSkills(): string
    {
        return $this->skills;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function __construct(array $data)
    {
        $this->userId = $data['user_id'];
        $this->position = $data['position'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->skills = $data['skills'] ?? '';
    }

    public function toStorage(): array
    {
        return [
            'user_id' => $this->userId,
            'position' => $this->position ?? null,
            'description' => $this->description ?? null,
            'skills' => $this->skills ?? null,
            'created_at' => $this->createdAt ?? null,
        ];
    }

    public static function transformToModel(array $data): Model
    {
        return (new Summary($data))
            ->setId($data['id'])
            ->setCreatedAt($data['created_at']);
    }
}