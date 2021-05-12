<?php

namespace App\Entity\Comments\UseCase\CreateComment;

use App\Entity\Comments\Comment;

interface Responder
{
    public function CommentCreated(Comment $comment);
}