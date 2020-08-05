<?php

namespace App\Entity\Comments\UseCase\CreateComment;

use App\Entity\Users\User;

class Command
{
    private $info;
    private $addDate;
    private $user;
    private $responder;

    public function __construct(
        string $info,
        \DateTime $addDate,
        User $user
    ){
        $this->info = $info;
        $this->addDate = $addDate;
        $this->user = $user;
        $this->responder = new NullResponder();
    }

    public function getInfo(): string{
        return $this->info;
    }

    public function getAddDate(): \DateTime{
        return $this->addDate;
    }

    public function getUser(): User{
        return $this->user;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function setResponder(Responder $responder): void{
        $this->responder = $responder;

        return $this;
    }
}