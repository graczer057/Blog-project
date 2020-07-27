<?php


namespace App\Entity\Users\UseCase\LoginUser;

use App\Entity\Users\UseCase\LoginUser\NullResponder;
use App\Entity\Users\UseCase\LoginUser\Responder;
use App\Entity\Users\UseCase\LoginUser;

class Command
{
    private $username;
    private $mail;
    private $password;
    private $responder;

    public function __construct(string $username, string $mail, string $password)
    {
        $this->username = $username;
        $this->mail = $mail;
        $this->password = $password;
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
}