<?php


namespace App\Entity\Users\UseCase\ExpireUser;

use App\Entity\Users\User;

class NullResponder implements Responder
{
    public function UserTokenExpire(User $user)
    {
        // TODO: Implement userExpired() method.
    }
}