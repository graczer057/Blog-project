<?php

namespace App\Entity\Posts\ReadModel;

interface PostsQueryInterface
{
    public function getAll(string $info);
    public function getById(int $id);
}