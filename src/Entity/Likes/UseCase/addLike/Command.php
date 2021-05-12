<?php

namespace App\Entity\Likes\UseCase\addLike;

use App\Entity\Users\User;
use App\Entity\Posts\Post;

class Command
{
    private $user;
    private $post;
    private $responder;

    public function __construct(
        User $user,
        Post $post
    ){
        $this->user = $user;
        $this->post = $post;
        $this->responder = new NullResponder();
    }

    public function getUser(): User{
        return $this->user;
    }

    public function getPost(): Post{
        return $this->post;
    }

    public function getResponder(): Responder{
        return $this->responder;
    }

    public function setResponder(Responder $responder){
        $this->responder = $responder;

        return $this;
    }
}