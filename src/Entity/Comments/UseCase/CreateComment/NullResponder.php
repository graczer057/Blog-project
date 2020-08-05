<?php

namespace App\Entity\Comments\UseCase\CreateComment;

use App\Entity\Comments\Comment;

class NullResponder implements Responder
{
    public function CommentCreated(Comment $comment)
    {
        // TODO: Implement CommentCreated() method.
    }
}