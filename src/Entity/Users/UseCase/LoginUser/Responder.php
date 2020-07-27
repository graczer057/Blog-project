<?php


namespace App\Entity\Users\UseCase\LoginUser;

use App\Entity\Users\User;

interface Responder
{
    public function userLogged(User $user);
    public function providedDataIsInUse(string $username, string $mail, string $password);
}