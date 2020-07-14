<?php


namespace App\Entity\Posts\UseCase\CreatePost;


class Command
{
    private $info;

    public function __construct(
        string $info,
        string $title,
        \DateTime $adddate,
        bool $isactive
    )
    {
        $this->info = $info;
        $this->title = $title;
        $this->adddate = $adddate;
        $this->isactive = $isactive;
        $this->responder = new NullResponder();
    }

    public function setResponder(Responder $responder){
        $this->responder = $responder;
        return $this;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getInfo(): string{
        return $this->info;
    }

    public function getAddDate(): \DateTime
    {
        return $this->adddate;
    }

    public function getIsActive(): bool{
        return $this->isactive;
    }
}