<?php


namespace App\Entity\Posts\ReadModel;


use App\Adapter\Post\Posts;

interface PostsQueryInterface
{
    /**
     * @param string $info
     * @param int $id
     * @return Posts
     */
    public function getAll(string $info):array;
    public function getById(int $id): Posts;
    public function getByAbbreviationCode(string $info, \DateTime $add_time): Posts;
    public function generateAbbreviationCode(string $info, bool $is_active): array;


}