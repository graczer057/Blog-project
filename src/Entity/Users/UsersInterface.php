<?php

namespace App\Entity\Users;

interface UsersInterface
{
    public function add(User $user);
    public function findByToken(string $token);
    public function findbyMail(string $mail);
    public function findbyUsername(string $username);
}