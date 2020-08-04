<?php


namespace App\Entity\Posts\UseCase\CreatePost;

class Command
{
    private $id;
    private $info;
    private $title;
    private $responder;
    private $is_active;
    private $add_date;

    public function __construct(
        string $info,
        string $title
    )
    {
        $this->info = $info;
        $this->title = $title;
        $this->responder = new NullResponder();
    }

    public function setResponder(Responder $responder){
        $this->responder = $responder;
        return $this;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function getId(): string {
        return $this->id;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
        return $this;
    }

    public function getInfo(): string{
        return $this->info;
    }

    public function setInfo(string $info){
        $this->info = $info;
        return $this;
    }

    public function getAddDate(): \DateTime{
        return $this->add_date;
    }

    public function setAddDate(\DateTime $add_date){
        $this->info = $add_date;
        return $this;
    }

    public function getIsActive(): bool{
        return $this->is_active;
    }

    public function setIsActive(bool $is_active){
        $this->info = $is_active;
        return $this;
    }
}