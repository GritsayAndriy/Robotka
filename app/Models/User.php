<?php

namespace App\Models;

class User extends Model
{
    protected $username;
    protected $email;
    protected $password;
    protected $birthday;

    public function __construct(array $data)
    {
        $this->username = $data['username']?? '';
        $this->email = $data['email'];
        $this->password = $data['password'];
    }

    public function setBirthday(? \DateTime $data)
    {
        $this->birthday = $data;
        return $this;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setUsername(mixed $username): void
    {
        $this->username = $username;
    }

    public function getUsername(): mixed
    {
        return $this->username;
    }

    public function setEmail(mixed $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): mixed
    {
        return $this->email;
    }

    public function setPassword(mixed $password): void
    {
        $this->password = $password;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function toStorage(): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }

    public static function transformToModel(array $data): Model
    {
        return (new User($data))
            ->setId($data['id'])
            ->setBirthday(isset($data['birthday']) ? (new \DateTime())->setTimestamp($data['birthday']) : null);
    }
}