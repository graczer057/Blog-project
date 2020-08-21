<?php

namespace App\Adapter\Comment;

use App\Entity\Comments\ReadModel\CommentsQueryInterface;
use App\Entity\Comments\Comment;
use App\Entity\Users\User;
use Doctrine\ORM\EntityManagerInterface;

class Comments implements CommentsQueryInterface
{
    private $manager;

    public function __construct(
        EntityManagerInterface $manager
    ){
       $this->manager = $manager;
    }

    public function add(Comment $comment){
        $this->manager->persist($comment);
    }

    public function getById(int $id){
        return $this->manager->getRepository(Comment::class)->findOneBy(['id' => $id]);
    }

    public function getUser(User $user){
        return $this->manager->getRepository(Comment::class)->findOneBy(['user' => $user]);
    }

    public function getAll(Comment $comment)
    {
        return $this->manager->getRepository(Comment::class)->findAll();
    }
}