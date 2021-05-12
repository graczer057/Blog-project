<?php

namespace App\Entity\Likes;

use App\Entity\Posts\Post;

interface LikesInterface
{
    public function countLikesByPost(Post $post);
}