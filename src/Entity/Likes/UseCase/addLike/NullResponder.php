<?php

namespace App\Entity\Likes\UseCase\addLike;

use App\Entity\Likes\Like;

class NullResponder implements Responder
{
    public function likeAdded(Like $like)
    {
        // TODO: Implement likeAdded() method.
    }
}