<?php


namespace App\Entity\Users\UseCase\PasswordChangeUser;

use App\Entity\Users\User;
use DateTime;

class Command
{
    private $user;
    private $password;
    private $isActive;
    private $token;
    private $expireToken;
    private $responder;

    /**
     * Command constructor
     * @param string $password
     * @param bool $isActive
     * @param string $token
     * @param DateTime $expireToken
     */
    public function __construct(
        User $user,
        string $password,
        bool $isActive,
        ?string $token,
        ?\DateTime $expireToken
    ){
        $this->user=$user;
        $this->password=$password;
        $this->isActive=$isActive;
        $this->token=$token;
        $this->expireToken=$expireToken;
        $this->responder=new NullResponder();
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getPassword(): string{
        return $this->password;
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