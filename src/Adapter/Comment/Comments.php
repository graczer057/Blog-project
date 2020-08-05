<?php

namespace App\Adapter\Comment;

use App\Entity\Comments\ReadModel\ComentsQueryInterface;
use App\Entity\Comments\Comment;
use App\Entity\Users\User;
use Doctrine\ORM\EntityManagerInterface;

class Comments implements ComentsQueryInterface
{
    private $manager;

    public function __construct(
        EntityManagerInterface $manager
    ){
       $this->manager = $manager;
    }

    public function getById(int $id){
        return $this->manager->getRepository(Comment::class)->findOneBy(['id' => $id]);
    }

    public function getUser(User $user){
        return $this->manager->getRepository(Comment::class)->findOneBy(['user' => $user]);
    }
}