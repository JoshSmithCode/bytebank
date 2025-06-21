<?php

namespace App\Nibble\Events;

use Nibble\Event;
use Ramsey\Uuid\Uuid;

class UserSignupEvent extends Event
{
    private string $userId;
    private string $firstName;

    private string $lastName;

    private string $email;

    private string $password;

    public function __construct()
    {
        parent::__construct();
        $this->userId = UUID::uuid7();
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getPayload(): array
    {
        return [
            'userId' => $this->userId,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}
