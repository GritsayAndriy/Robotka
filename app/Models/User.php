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