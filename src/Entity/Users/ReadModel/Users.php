<?php


namespace App\Entity\Users\ReadModel;


class Users
{
    private $id;
    private $username;
    private $mail;
    private $password;
    private $token;
    private $tokenExpire;
    private $isActive;
    private $role;

    public function __construct(
        int $id,
        string $username,
        string $mail,
        string $password,
        string $token,
        \DateTime $tokenExpire,
        bool $isActive,
        string $role
    ){
        $this->id=$id;
        $this->username=$username;
        $this->mail=$mail;
        $this->password=$password;
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
        $this->isActive=$isActive;
        $this->role=$role;
    }

    public function getId(): ?int{
        return $this->id;
    }
    public function getUsername(): ?string{
        return $this->username;
    }
    public function getMail(): ?string{
        return $this->mail;
    }
    public function getPassword(): ?string{
        return $this->password;
    }
    public function getToken(): ?string{
        return $this->token;
    }
    public function getTokenExpire(): ?\DateTime{
        return $this->tokenExpire;
    }
    public function getIsActive(): ?bool{
        return $this->isActive;
    }
    public function getRole(): ?string{
        return $this->role;
    }
}