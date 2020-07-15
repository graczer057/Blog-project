<?php


namespace App\Adapter\User;

use App\Entity\Users\ReadModel\Users;
use App\Entity\Users\ReadModel\UsersQueryInterface;
use Doctrine\DBAL\Connection;

class UsersQuery implements UsersQueryInterface
{

    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection=$connection;
    }

    /**
     * @param string $username
     * @return Users[]
     */
    public function getAll(string $username)
    {
        return $this->connection->project(
            'SELECT u.id, u.username, u.mail, u.password, u.token, u.tokenExpire, u.isActive, u.role
                      FROM user as u
                      WHERE u.username = :username',
                   [
                       'username' => $username
                   ],
                   function (array $result){
                        return new Users(
                            (int)$result['id'],
                            (string)$result['username'],
                            (string)$result['mail'],
                            (string)$result['password'],
                            (string)$result['token'],
                            (new \DateTime($result['expireToken'])),
                            (bool)$result['isActive'],
                            (string)$result['role']
                        );
                   }
        );
    }

    public function getById(string $username, int $id)
    {
        // TODO: Implement getById() method.
    }

    public function getByAbbreviationCode(string $username, string $mail)
    {
        // TODO: Implement getByAbbreviationCode() method.
    }

    public function generateAbbreviationCode(string $username, string $role)
    {
        // TODO: Implement generateAbbreviationCode() method.
    }
}