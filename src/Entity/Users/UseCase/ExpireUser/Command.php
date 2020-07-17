<?php


namespace App\Entity\Users\UseCase\ExpireUser;

use App\Entity\Users\UseCase\ExpireUser\NullResponder;
use App\Entity\Users\UseCase\ExpireUser\Responder;
use App\Entity\Users\UseCase\ExpireUser;

class Command
{
    private $mail;
    private $responder;

    public function __construct(string $mail)
    {
        $this->mail=$mail;
        $this->responder=new NullResponder();
    }

    public function getResponder(): Responder
    {
        return $this->responder;
    }

    public function setResponder(Responder $responder)
    {
        $this->responder = $responder;
        return $this;
    }

    public function getMail(): string{
        return $this->mail;
    }
}