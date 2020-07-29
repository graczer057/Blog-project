<?php


namespace App\Entity\Users\UseCase\PasswordResetUser;

use App\Entity\Users\User;

class NullResponder implements Responder
{

    public function UserPasswordReset(User $user)
    {
        // TODO: Implement UserPasswordReset() method.
    }
}