<?php

namespace App\Entity\Users\UseCase\PasswordResetUser;

use App\Entity\Users\User;

class Command
{
    private $user;
    private $mail;
    private $token;
    private $tokenExpire;
    private $isActive;
    private $responder;

    public function __construct(
        User $user,
        string $mail,
        string $token,
        \DateTime $tokenExpire,
        bool $isActive
    ){
        $this->user=$user;
        $this->mail=$mail;
        $this->token=$token;
        $this->tokenExpire=$tokenExpire;
        $this->isActive=$isActive;
        $this->responder=new NullResponder();
    }

    public function getUser(): User{
        return $this->user;
    }

    public function getMail(): string{
        return $this->mail;
    }

    public function getToken(): string{
        return $this->token;
    }

    public function getTokenExpire(): \DateTime{
        return $this->tokenExpire;
    }

    public function getIsActive(): bool{
        return $this->isActive;
    }

    public function setResponder(Responder $responder): void{
        $this->responder=$responder;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

}