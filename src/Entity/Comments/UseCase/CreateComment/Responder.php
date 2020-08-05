<?php
/**
 * Created by PhpStorm.
 * User: bartl
 * Date: 05.08.2020
 * Time: 14:55
 */

namespace App\Entity\Comments\UseCase\CreateComment;


use App\Entity\Comments\Comment;

interface Responder
{
    public function CommentCreated(Comment $comment);
}