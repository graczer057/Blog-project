<?php


namespace App\Entity\Users\UseCase\LoginUser;

use App\Entity\Users\User;

class NullResponder implements Responder
{

    public function userLogged(User $user)
    {
        // TODO: Implement userLogged() method.
    }

    public function providedDataIsInUse(string $username, string $mail, string $password)
    {
        // TODO: Implement providedDataIsInUse() method.
    }
}