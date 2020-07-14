<?php


namespace App\Entity\Posts\ReadModel;


use phpDocumentor\Reflection\Types\String_;

class PostsReadModel
{
    private $id;
    private $title;
    private $info;

    public function __construct(
        int $id,
        string $info,
        string $title,
        \DateTime $adddate,
        bool $isactive
    ){
        $this->id=$id;
        $this->info=$info;
        $this->title=$title;
        $this->adddate=$adddate;
        $this->isactive=$isactive;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getInfo(): string{
        return $this->info;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getAddDate(): \DateTime{
        return $this->adddate;
    }

    public function getIsActive(): bool{
        return $this->isactive;
    }
}