<?php

namespace App\Adapter\Comment;

use App\Entity\Comments\Comment;
use App\Entity\Comments\ReadModel\CommentsQueryInterface;
use App\Entity\Comments\ReadModel\Comments;
use App\Entity\Posts\Post;
use App\Entity\Users\User;
use Doctrine\DBAL\Driver\Connection;

class CommentsQuery implements CommentsQueryInterface
{
    private $connection;

    public function __construct(
        Connection $connection
    ){
        $this->connection = $connection;
    }

    public function getById(int $id)
    {
        return $this->connection->project(
        /**
         * @param array $result
         * @return Comments
         */
            'SELECT c.id as id, c.info as info, c.addDate as addDate, c.user as user, c.post as post
                FROM comment as c 
                WHERE c.id = :id',
            [
                'id' => $id
            ],
            function (array $result){
                return new Comments(
                    (int)$result['id'],
                    (string)$result['info'],
                    (new \DateTime($result['addDate'])),
                    (User($result['isActive'])),
                    (Post($result['post']))
                );
            }
         );
    }

    public function getUser(User $user)
    {
        return $this->connection->project(
            'SELECT c.id as id, c.info as info, c.addDate as addDate, c.user as user, c.post as post
                From comment as c
                WHERE c.user = :user',
            [
                'user' => $user
            ],
            function (array $result){
                return new Comments(
                    (int)$result['id'],
                    (string)$result['info'],
                    (new \DateTime($result['addDate'])),
                    (User($result['user'])),
                    (Post($result['post']))
                );
            }
        );
    }

    public function add(Comment $comment)
    {
        // TODO: Implement add() method.
    }

    public function getAll(Comment $comment)
    {
        return $this->connection->project(
        /**
         * @param array $result
         * @return Comments
         */
            'SELECT c.id as id, c.info as info, c.addDate as addDate, c.user as user, c.post as post
                FROM comment as c',
                [
                    'comment' => $comment
                ],
                function (array $result){
                    return new Comments(
                        (int)$result['id'],
                        (string)$result['info'],
                        (new \DateTime($result['addDate'])),
                        (User($result['isActive'])),
                        (Post($result['post']))
                    );
                }
        );
    }
}