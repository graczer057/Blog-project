<?php


namespace App\Entity\Users\UseCase\ExpireUser;

use App\Entity\Users\User;
use DateTime;

class Command
{
    private $user;
    private $token;
    private $tokenExpire;
    private $responder;

    /**
     * Command constructor.
     * @param string $token
     * @param DateTime $tokenExpire
     */

    public function __construct(
        User $user,
        ?string $Token,
        ?\DateTime $tokenExpire
    ){
        $this->user = $user;
        $this->token = $Token;
        $this->tokenExpire = $tokenExpire;
        $this->responder=new NullResponder();
    }

    public function getUser(): User{
        return $this->user;
    }

    public function getToken(): ?string{
        return $this->token;
    }

    public function getTokenExpire(): ?\DateTime{
        return $this->tokenExpire;
    }

    /**
     * @param Responder $responder
     */

    public function setResponder(Responder $responder): void{
        $this->responder = $responder;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }
}