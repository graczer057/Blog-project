<?php


namespace App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter;

class Command
{
    private $mail;
    private $isActive;
    private $responder;

    public function __construct(
        string $mail,
        bool $isActive
    ){
        $this->mail = $mail;
        $this->isActive = $isActive;
        $this->responder = new NullResponder();
    }

    public function getMail(): string{
        return $this->mail;
    }

    public function getIsActive(): bool{
        return $this->isActive;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function setResponder(Responder $responder): void{
        $this->responder = $responder;
    }
}