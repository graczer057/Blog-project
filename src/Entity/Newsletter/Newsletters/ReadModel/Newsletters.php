<?php


namespace App\Entity\Newsletter\Newsletters\ReadModel;

use App\Entity\Users\User;

class Newsletters
{
    private $id;
    private $mail;
    private $isActive;
    private $user;

    public function __construct(
        string $id,
        string $mail,
        bool $isActive,
        User $user
    ){
        $this->id=$id;
        $this->mail=$mail;
        $this->isActive=$isActive;
        $this->user=$user;
    }

    public function getId(): string{
        return $this->id;
    }

    public function getMail(): string{
        return $this->mail;
    }

    public function getIsActive(): bool{
        return $this->isActive;
    }

    public function getUser(): User{
        return $this->user;
    }
}