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
        $this->manager=$manager;
    }

    public function add(User $user)
    {
        $this->manager->persist($user);
    }

    public function findOneByName(string $username)
    {
        return $this->manager->getRepository('App:Users\User')->findOneBy(['username'=>$username]);
    }
}