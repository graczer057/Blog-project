<?php

namespace App\Entity\Likes\UseCase\addLike;

use App\Entity\Likes\Like;

interface Responder
{
    public function likeAdded(Like $like);
}