<?php


namespace App\Entity\Users\UseCase\ExpireUser;

use App\Entity\Users\User;

class NullResponder implements Responder
{

    public function userExpired(User $user)
    {
        // TODO: Implement userExpired() method.
    }

    public function providedMailIsInUse(string $mail)
    {
        // TODO: Implement providedMailIsInUse() method.
    }
}