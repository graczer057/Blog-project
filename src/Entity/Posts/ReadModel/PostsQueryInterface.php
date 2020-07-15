<?php


namespace App\Entity\Posts\ReadModel;


use App\Adapter\Post\Posts;

interface PostsQueryInterface
{
    /**
     * @return Posts[]
     */
    public function getAll(string $info);
    public function getById(int $id);
    public function getByAbbreviationCode(string $info, \DateTime $add_time);
    public function generateAbbreviationCode(string $info, bool $is_active);
}