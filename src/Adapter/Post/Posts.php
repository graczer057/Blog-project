<?php


namespace App\Adapter\Post;

use App\Entity\Posts\PostsInterface;
use App\Entity\Posts\Post;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class Posts implements PostsInterface
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager=$manager;
    }
    public function add(Post $post){
        $this->manager->persist($post);
    }
    public function findOneByName(string $info)
    {
        return $this->manager->getRepository('App:Posts\Post')->findOneBy(['info'=>$info]);
    }
}