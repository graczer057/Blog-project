<?php

namespace App\Entity\Comments\ReadModel;

use App\Entity\Posts\Post;
use App\Entity\Users\User;

class Comments
{
    private $id;
    private $info;
    private $addDate;
    private $user;
    private $post;

    public function __construct(
        int $id,
        string $info,
        \DateTime $addDate,
        User $user,
        Post $post
    ){
        $this->id = $id;
        $this->info = $info;
        $this->addDate = $addDate;
        $this->user = $user;
        $this->post = $post;
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

    public function getPost(): ?Post{
        return $this->post;
    }
}