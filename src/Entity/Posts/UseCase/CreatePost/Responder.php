<?php

namespace App\Entity\Posts\UseCase\CreatePost;

use App\Entity\Posts\Post;

interface Responder
{
    public function postCreated(Post $post);
    public function providedNameIsInUse(string $info);
}