<?php

namespace App\Entity\Likes\ReadModel;

use App\Entity\Posts\Post;
use App\Entity\Users\User;

class Likes
{
    private $id;
    private $user;
    private $post;

    public function __construct(
        int $id,
        User $user,
        Post $post
    ){
        $this->id = $id;
        $this->user = $user;
        $this->post = $post;
    }

    public function getId(): ?int{
        return $this->id;
    }

    public function getUser(): ?User{
        return $this->user;
    }

    public function getPost(): ?Post{
        return $this->post;
    }
}