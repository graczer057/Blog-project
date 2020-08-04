<?php

namespace App\Entity\Newsletter\Newsletters\UseCase\SendingNewsletter;

use App\Entity\Newsletter\Newsletter;

class Command
{
    private $mail;
    private $newsletter;
    private $responder;

    public function __construct(
        string $mail,
        Newsletter $newsletter
    ){
        $this->mail = $mail;
        $this->newsletter = $newsletter;
        $this->responder = new NullResponder();
    }

    public function getMail(): string {
        return $this->mail;
    }

    public function getNewsletter(): Newsletter {
        return $this->newsletter;
    }

    public function getResponder(): Responder {
        return $this->responder;
    }

    public function setResponder(Responder $responder): void {
        $this->responder = $responder;
    }
}