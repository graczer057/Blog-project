<?php

namespace App\Entity\Users\UseCase\CreateUser;

use App\Entity\Users\User;

class NullResponder implements Responder
{
    public function userCreated(User $user)
    {
        // TODO: Implement userCreated() method.
    }

    public function providedNameIsInUse(string $username)
    {
        // TODO: Implement providedNameIsInUse() method.
    }
}