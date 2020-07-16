<?php


namespace App\Entity\Users\ReadModel;


interface UsersQueryInterface
{
    /**
     * @return Users[]
     */
    public function getAll(string $token);
    public function getById(string $username, int $id);
    public function getByAbbreviationCode(string $username, string $mail);
    public function generateAbbreviationCode(string $username, string $role);
}