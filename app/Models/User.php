<?php

declare(strict_types=1);

namespace App\Models;

class User extends Model
{
    protected $username;
    protected $email;
    protected $password;
    protected $birthday;
    protected $createdAt;
    protected array $fillable = ['username', 'email', 'password', 'birthday', 'created_at'];

    public function __construct(array $data)
    {
        $this->username = $data['username'] ?? '';
        $this->email = $data['email'];
        $this->password = $data['password'];
    }

    public function setBirthday(?\DateTime $data): self
    {
        $this->birthday = $data;
        return $this;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setUsername(mixed $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getUsername(): mixed
    {
        return $this->username;
    }

    public function setEmail(mixed $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail(): mixed
    {
        return $this->email;
    }

    public function setPassword(mixed $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function toStorage(): array
    {
        return [
            'username' => $this->username ?? null,
            'email' => $this->email,
            'password' => $this->password,
            'birthday' => $this->birthday ?? null,
            'created_at' => $this->createdAt ?? null,
        ];
    }

    public static function transformToModel(array $data): Model
    {
        return (new User($data))
            ->setId($data['id'])
            ->setBirthday(isset($data['birthday']) ?
                (new \DateTime())->setTimestamp(strtotime($data['birthday'])) : null)
            ->setCreatedAt($data['created_at']);
    }
}