<?php


namespace App\Entity\Users\ReadModel;


interface UsersQueryInterface
{
    /**
     * @return Users[]
     */
    public function getByToken(string $token);
    public function getByMail(string $mail);
    public function getByLogin(string $mail, string $password);
}