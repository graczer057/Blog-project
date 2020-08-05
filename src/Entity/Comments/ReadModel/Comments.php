<?php

namespace App\Entity\Comments\ReadModel;

use App\Entity\Users\User;

class Comments
{
    private $id;
    private $info;
    private $addDate;
    private $user;

    public function __construct(
        int $id,
        string $info,
        \DateTime $addDate,
        User $user
    ){
        $this->id = $id;
        $this->info = $info;
        $this->addDate = $addDate;
        $this->user = $user;
    }

    public function getId(): ?int{
        return $this->id;
    }

    public function getInfo(): ?string{
        return $this->info;
    }

    public function getAddDate(): ?\DateTime{
        return $this->addDate;
    }

    public function getUser(): ?User{
        return $this->user;
    }
}