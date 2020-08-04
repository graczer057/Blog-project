<?php

namespace App\Entity\Posts;

interface PostsInterface
{
    public function add(Post $post);
    public function findOneByName(string $info);
}