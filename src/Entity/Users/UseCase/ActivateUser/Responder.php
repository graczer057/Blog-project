<?php

namespace App\Entity\Users\UseCase\ActivateUser;

use App\Entity\Users\User;

interface Responder
{
    public function userActivated(User $user);
}