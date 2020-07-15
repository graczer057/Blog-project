<?php


namespace App\Adapter\Post;

use App\Entity\Posts\Post;
use App\Entity\Posts\ReadModel\PostsQueryInterface;
use App\Entity\Posts\ReadModel\PostsReadModel;
use App\Entity\Posts\PostsInterface;
use Doctrine\DBAL\Driver\Connection;
use PhpParser\Comment;

class PostsQuery implements PostsQueryInterface
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection=$connection;
    }

    /**
     * @param int $id
     * @return PostsReadModel[]
     */
    public function getAll(string $info){
        return $this->connection->project(
            'SELECT p.id as id, p.info as info, p.add_date as add_date, p.is_active as is_active, p.title as title
                        FROM post as p',
            [
                'info' => $info
            ],
            function (array $result){
                return new PostsReadModel(
                    (int)$result['id'],
                    (string)$result['info'],
                    (string)$result['title'],
                    (new \DateTime($result['add_date'])),
                    (bool)$result['is_active']
                );
            }
        );
    }

    public function getById(int $id)
    {
        return $this->connection->project(
            'SELECT p.id as id, p.info as info, p.add_date as add_date, p.is_active as is_active, p.title as title
                        FROM post as p
                        WHERE p.id = :id',
            [
                'id' => $id
            ],
            function (array $result){
                return new PostsReadModel(
                    (int)$result['id'],
                    (string)$result['info'],
                    (string)$result['title'],
                    (new \DateTime($result['add_date'])),
                    (bool)$result['is_active']
                );
            }
        );
    }

    public function getByAbbreviationCode(string $info, \DateTime $add_time)
    {
        // TODO: Implement getByAbbreviationCode() method.
    }

    public function generateAbbreviationCode(string $info, bool $is_active)
    {
        // TODO: Implement generateAbbreviationCode() method.
    }
}