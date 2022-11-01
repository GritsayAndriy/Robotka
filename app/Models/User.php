<?php

declare(strict_types=1);

namespace App\Models;

class User extends Model
{
    protected $username;
    protected $email;
    protected $password;
    protected $birthday;
    protected $firstName;
    protected $lastName;
    protected $country;
    protected $city;
    protected $phone;
    protected $createdAt;

    protected array $fillable = [
        'username',
        'email',
        'password',
        'birthday',
        'first_name',
        'last_name',
        'country',
        'city',
        'phone',
        'created_at'
    ];

    public function __construct(array $data)
    {
        $this->username = $data['username'] ?? '';
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->firstName = $data['first_name'] ?? '';
        $this->lastName = $data['last_name'] ?? '';
        $this->country = $data['country'] ?? '';
        $this->city = $data['city'] ?? '';
        $this->phone = $data['phone'] ?? '';
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

    public function getFirstName(): mixed
    {
        return $this->firstName;
    }

    public function setFirstName(mixed $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed|string
     */
    public function getLastName(): mixed
    {
        return $this->lastName;
    }

    public function setLastName(mixed $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getCountry(): mixed
    {
        return $this->country;
    }

    public function setCountry(mixed $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function getCity(): mixed
    {
        return $this->city;
    }

    public function setCity(mixed $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getPhone(): mixed
    {
        return $this->phone;
    }

    public function setPhone(mixed $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function toStorage(): array
    {
        return [
            'username' => $this->username ?? null,
            'email' => $this->email,
            'password' => $this->password,
            'birthday' => $this->birthday ?? null,
            'first_name' => $this->firstName ?? null,
            'last_name' => $this->lastName ?? null,
            'country' => $this->country ?? null,
            'city' => $this->city ?? null,
            'phone' => $this->phone ?? null,
            'created_at' => $this->createdAt ?? null,
        ];
    }

    public static function transformToModel(array $data): Model
    {
        return (new User($data))
            ->setId($data['id'])
            ->setBirthday(
                isset($data['birthday']) ?
                    (new \DateTime())->setTimestamp(strtotime($data['birthday'])) : null
            )
            ->setFirstName($data['first_name'])
            ->setLastName($data['last_name'])
            ->setCountry($data['country'])
            ->setCity($data['city'])
            ->setPhone($data['phone'])
            ->setCreatedAt($data['created_at']);
    }
}