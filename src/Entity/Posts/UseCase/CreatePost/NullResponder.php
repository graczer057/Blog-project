<?php


namespace App\Entity\Posts\UseCase\CreatePost;


use App\Entity\Posts\Post;

class NullResponder implements Responder
{

    public function postCreated(Post $post)
    {
        // TODO: Implement postCreated() method.
    }

    public function providedNameIsInUse(string $info)
    {
        // TODO: Implement providedNameIsInUse() method.
    }
}