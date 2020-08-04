<?php

namespace App\Entity\Users\UseCase\PasswordChangeUser;

use App\Entity\Users\User;

class NullResponder implements Responder
{
    public function passwordChanged(User $user)
    {
        // TODO: Implement passwordChanged() method.
    }
}