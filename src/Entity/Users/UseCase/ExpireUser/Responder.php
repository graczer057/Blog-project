<?php


namespace App\Entity\Users\UseCase\ExpireUser;

use App\Entity\Users\User;

interface Responder
{
    public function userExpired(User $user);
    public function providedMailIsInUse(string $mail);
}