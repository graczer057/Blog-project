<?php

namespace App\Entity\Users\UseCase\PasswordChangeUser;

use App\Entity\Users\User;

interface Responder
{
    public function passwordChanged(User $user);
}