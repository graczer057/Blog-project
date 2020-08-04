<?php

namespace App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter;

use App\Entity\Newsletter\Newsletter;

class Command
{
    private $Newsletter;
    private $responder;

    public function __construct(
        Newsletter $newsletter
    ){
        $this->Newsletter = $newsletter;
        $this->responder = new NullResponder();
    }

    public function getNewsletter(): Newsletter{
        return $this->Newsletter;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function setResponder(Responder $responder): void {
        $this->responder = $responder;
    }
}