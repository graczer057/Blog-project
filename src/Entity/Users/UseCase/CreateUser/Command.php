<?php


namespace App\Entity\Users\UseCase\CreateUser;


use App\Entity\Posts\UseCase\CreatePost\NullResponder;
use App\Entity\Posts\UseCase\CreatePost\Responder;

class Command
{
    private $username;
    private $mail;
    private $password;
    private $token;
    private $tokenExpire;
    private $isActive;
    private $role;
    private $responder;

    public function __construct(
        string $username,
        string $mail,
        string $password,
        string $token,
        \DateTime $tokenExpire,
        bool $isActive,
        string $role
    ){
        $this->username=$username;
        $this->mail=$mail;
        $this->password=$password;
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
        $this->isActive=$isActive;
        $this->role=$role;
        $this->responder=new NullResponder();
    }

    public function setResponder(Responder $responder){
        $this->responder=$responder;
        return $this;
    }
    public function setUsername(): string{
        return $this->username;
    }
    public function setMail(): string{
        return $this->mail;
    }
    public function setPassword(): string{
        return $this->password;
    }
    public function setToken(): string{
        return $this->token;
    }
    public function setTokenExpire(): \DateTime{
        return $this->tokenExpire;
    }
    public function setIsActive(): bool{
        return $this->isActive;
    }
    public function setURole(): string{
        return $this->role;
    }
}