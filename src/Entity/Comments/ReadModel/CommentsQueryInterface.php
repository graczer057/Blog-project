<?php

namespace App\Entity\Comments\ReadModel;

use App\Entity\Users\User;

interface CommentsQueryInterface
{
    public function getById(int $id);
    public function getUser(User $user);
}