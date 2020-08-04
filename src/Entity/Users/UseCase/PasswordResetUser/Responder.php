<?php

namespace App\Entity\Users\UseCase\PasswordResetUser;

use App\Entity\Users\User;

interface Responder
{
    public function UserPasswordReset(User $user);
}