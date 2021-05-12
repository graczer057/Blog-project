<?php

namespace App\Adapter\Like;

use App\Entity\Likes\Like;
use App\Entity\Likes\LikesInterface;
use App\Entity\Posts\Post;
use Doctrine\ORM\EntityManagerInterface;

class LikesQuery implements LikesInterface
{
    private $manager;

    public function __construct(
        EntityManagerInterface $manager
    ){
        $this->manager = $manager;
    }

    public function countLikesByPost(Post $post)
    {
        return $this->manager->getRepository(Like::class)->count(['post' => $post]);
    }
}