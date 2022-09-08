<?php

namespace App\Models;

class User extends Model
{
    protected $username;
    protected $password;

    public function __construct(array $data)
    {
        $this->username = $data['username']?? '';
        $this->email = $data['email'];
        $this->password = $data['password'];
    }

    public function toStorage(): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'password' => $this->password,
        ];
    }
}