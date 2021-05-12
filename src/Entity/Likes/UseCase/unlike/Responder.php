<?php

namespace App\Entity\Likes\UseCase\unlike;

use App\Entity\Likes\Like;

interface Responder
{
    public function deleteNewsletter(Like $like);
}