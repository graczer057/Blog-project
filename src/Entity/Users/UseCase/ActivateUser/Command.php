<?php


namespace App\Entity\Users\UseCase\ActivateUser;

use App\Entity\Users\UseCase\ActivateUser\NullResponder;
use App\Entity\Users\UseCase\ActivateUser\Responder;

class Command
{
    private $username;
    private $token;
    private $responder;

    public function __construct(string $token){
        $this->token=$token;
        $this->responder=new NullResponder();
    }

    public function setResponder(Responder $responder){
        $this->responder=$responder;
        return $this;
    }
    public function getResponder(): Responder{
        return $this->responder;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}