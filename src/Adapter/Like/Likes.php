<?php

namespace App\Adapter\Like;

use App\Entity\Likes\Like;
use App\Entity\Likes\ReadModel\LikesQueryInterface;
use App\Entity\Posts\Post;
use App\Entity\Users\User;
use Doctrine\ORM\EntityManagerInterface;

class Likes implements LikesQueryInterface
{
    private $manager;

    public function __construct(
        EntityManagerInterface $manager
    ){
        $this->manager = $manager;
    }

    public function add(Like $like)
    {
        $this->manager->persist($like);
    }

    public function delete(Like $like)
    {
        $this->manager->remove($like);
    }

    public function getByPost(Post $post)
    {
        return $this->manager->getRepository(Like::class)->findOneBy(['post' => $post]);
    }

    public function getByUser(User $user){
        return $this->manager->getRepository(Like::class)->findOneBy(['user' => $user]);
    }

    public function getAll(Like $like)
    {
        return $this->manager->getRepository(Like::class)->findAll();
    }
}