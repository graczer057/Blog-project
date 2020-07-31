<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter;

use App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter\Responder;
use App\Entity\Users\User;

class Command
{
    private $mail;
    private $isActive;
    private $user;
    private $responder;

    public function __construct(
        string $mail,
        bool $isActive,
        User $user
    ){
        $this->mail = $mail;
        $this->isActive = $isActive;
        $this->user = $user;
        $this->responder = new NullResponder();
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

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function setResponder(Responder $responder): void {
        $this->responder = $responder;
    }
}