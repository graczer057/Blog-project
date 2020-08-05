<?php

namespace App\Entity\Users;

interface UsersInterface
{
    public function add(User $user);
    public function findByToken(string $token);
    public function findByMail(string $mail);
    public function findByUsername(string $username);
}