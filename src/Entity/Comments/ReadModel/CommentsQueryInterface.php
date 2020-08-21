<?php

namespace App\Entity\Comments\ReadModel;

use App\Entity\Comments\Comment;
use App\Entity\Users\User;

interface CommentsQueryInterface
{
    public function add(Comment $comment);
    public function getById(int $id);
    public function getUser(User $user);
    public function getAll(Comment $comment);
}