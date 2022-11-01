<?php

declare(strict_types=1);

namespace App\Models;

class Vacancy extends Model
{
    protected ?int $id;
    protected string $name;
    protected string $description;
    protected ?int $company_id;
    protected \DateTime $created_at;
    protected \DateTime $updated_at;
    protected array $fillable = ['name', 'description', 'company_id', 'created_at'];

    public function __construct(array $data)
    {
        $this->id = $data['id']?? null;
        $this->name = $data['name']?? '';
        $this->description = $data['description']?? '';
        $this->company_id = $data['company_id']?? null;
        $this->created_at = new \DateTime($data['created_at']?? 'now');
        $this->updated_at = new \DateTime($data['updated_at']?? 'now');
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getCompanyId(): ?int
    {
        return $this->company_id;
    }

    public function setCompanyId(?int $company_id): self
    {
        $this->company_id = $company_id;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTime $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    public function toStorage(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'company_id' => $this->company_id,
            'created_at' => $this->created_at->format('Y-m-d H:i:s')
        ];
    }

    public static function transformToModel(array $data): Model
    {
        return new self($data);
    }
}