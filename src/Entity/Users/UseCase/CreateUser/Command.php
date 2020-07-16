<?php


namespace App\Entity\Users\UseCase\CreateUser;


use App\Entity\Users\UseCase\CreateUser\NullResponder;
use App\Entity\Users\UseCase\CreateUser\Responder;

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
    private $date;

    public function __construct(
        string $username,
        string $mail,
        string $password
    ){
        $this->username=$username;
        $this->mail=$mail;
        $this->password=$password;
        $this->token=md5(uniqid());
        $this->date=new \DateTime("now");
        $this->date->modify('+60 minutes');
        $this->tokenExpire=$this->date;
        $this->isActive=("0");
        $this->role=("user");
        $this->responder=new NullResponder();
    }

    public function setResponder(Responder $responder){
        $this->responder=$responder;
        return $this;
    }
    public function getResponder(): Responder{
        return $this->responder;
    }
    public function setUsername(string $username){
        $this->username=$username;
        return $this;
    }
    public function getUsername(): string{
        return $this->username;
    }
    public function setMail(string $mail){
        $this->mail=$mail;
        return $this;
    }
    public function getMail(): string{
        return $this->mail;
    }
    public function setPassword(string $password){
        $this->password=$password;
        return $this;
    }
    public function getPassword(): string{
        return $this->password;
    }
    public function setToken(string $token){
        $this->token=$token;
        return $this;
    }
    public function getToken(): string{
        return $this->token;
    }
    public function setTokenExpire(\DateTime $tokenExpire){
        $this->tokenExpire=$tokenExpire;
        return $this;
    }
    public function getTokenExpire(): \DateTime{
        return $this->tokenExpire;
    }
    public function setIsActive(bool $isActive){
        $this->isActive=$isActive;
        return $this;
    }
    public function getIsActive(): bool{
        return $this->isActive;
    }
    public function setRole(string $role){
        $this->role=$role;
        return $this;
    }
    public function getRole(): string{
        return $this->role;
    }
}