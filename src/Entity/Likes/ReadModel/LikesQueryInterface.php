<?php

namespace App\Entity\Likes\ReadModel;

use App\Entity\Likes\Like;
use App\Entity\Posts\Post;
use App\Entity\Users\User;

interface LikesQueryInterface
{
    public function add(Like $like);
    public function delete(Like $like);
    public function getByPost(Post $post);
    public function getByUser(User $user);
    public function getAll(Like $like);
}