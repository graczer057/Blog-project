<?php


namespace App\Adapter\User;

use App\Entity\Users\User;
use App\Entity\Users\UsersInterface;
use Doctrine\Persistence\ObjectManager;

final class Users implements UsersInterface
{

    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function add(User $user)
    {
        $this->manager->persist($user);
    }

    public function findByToken(string $token){
        return $this->manager->getRepository('App:Users\User')->findOneBy(['token'=>$token]);
    }

    public function findByMail(string $mail){
        return $this->manager->getRepository('App:Users\User')->findOneBy(['mail'=>$mail]);
    }

    public function findByUserName(string $username){
        return $this->manager->getRepository('App:Users\User')->findOneBy(['username'=>$username]);
    }
}