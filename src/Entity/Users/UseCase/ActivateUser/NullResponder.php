<?php


namespace App\Entity\Users\UseCase\ActivateUser;

use App\Entity\Users\User;

class NullResponder implements Responder
{
    public function userActivated(User $user)
    {
        // TODO: Implement userActivated() method.
    }
}