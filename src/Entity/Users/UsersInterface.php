<?php


namespace App\Entity\Users;


interface UsersInterface
{
    public function add(User $user);
    public function findOneByName(string $username);
}