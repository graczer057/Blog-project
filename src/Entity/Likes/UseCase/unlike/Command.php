<?php

namespace App\Entity\Likes\UseCase\unlike;

use App\Entity\Likes\Like;

class Command
{
    private $like;
    private $responder;

    public function __construct(
        Like $like
    ){
        $this->like = $like;
        $this->responder = new NullResponder();
    }

    public function getLike(): Like{
        return $this->like;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function setResponder(Responder $responder){
        $this->responder = $responder;

        return $this;
    }
}