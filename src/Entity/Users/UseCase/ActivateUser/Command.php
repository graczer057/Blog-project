<?php


namespace App\Entity\Users\UseCase\ActivateUser;

use App\Entity\Users\User;
use DateTime;

class Command
{
    private $user;
    private $isActive;
    private $token;
    private $expireToken;
    private $responder;

    /**
     * Command constructor.
     * @param bool $isActive
     * @param string $token
     * @param DateTime $expireToken
     */
    public function __construct(
        User $user,
        bool $isActive,
        ?string $token,
        ?\DateTime $expireToken
    ){
        $this->user=$user;
        $this->isActive=$isActive;
        $this->token=$token;
        $this->expireToken=$expireToken;
        $this->responder=new NullResponder();
    }

    public function getUser(): User{
        return $this->user;
    }

    public function getIsActive(): ?bool{
        return $this->isActive;
    }

    public function getToken(): ?string{
        return $this->token;
    }

    public function getExpireToken(): ?\DateTime{
        return $this->expireToken;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    /**
     * @param Responder $responder
     */
    public function setResponder(Responder $responder){
        $this->responder=$responder;
    }
}