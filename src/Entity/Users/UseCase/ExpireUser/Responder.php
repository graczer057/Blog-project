<?php

namespace App\Entity\Users\UseCase\ExpireUser;

use App\Entity\Users\User;

interface Responder
{
    public function UserTokenExpire(User $user);
}