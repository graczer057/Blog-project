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
        $this->connection = $connection;
    }

    /**
     * @return Users[]
     */

    public function getByToken(string $token)
    {
        return $this->connection->project(
            'SELECT u.id as id, u.username as username, u.mail as mail, u.password as password, u.token as token, u.tokenExpire as tokenExpire, u.isActive as isActive, u.role as role
                    FROM user as u 
                    WHERE u.token = :token',
                [
                    'token'=>$token
                ],
                function ($result){
                    return new Users(
                        (int) $result['id'],
                        (string) $result['username'],
                        (string) $result['mail'],
                        (string) $result['password'],
                        (string) $result['token'],
                        (new \DateTime ($result['tokenExpire'])),
                        (bool) $result['isActive'],
                        (string) $result['role']
                    );
                }
        );
    }

    public function getByMail(string $mail)
    {
        return $this->connection->project(
            'SELECT u.id as id, u.username as username, u.mail as mail, u.password as password, u.token as token, u.tokenExpire as tokenExpire, u.isActive as isActive, u.role as role
                    FROM user as u 
                    WHERE u.token = :token',
            [
                'mail'=>$mail
            ],
            function ($result){
                return new Users(
                    (int) $result['id'],
                    (string) $result['username'],
                    (string) $result['mail'],
                    (string) $result['password'],
                    (string) $result['token'],
                    (new \DateTime ($result['tokenExpire'])),
                    (bool) $result['isActive'],
                    (string) $result['role']
                );
            }
        );
    }

    public function getByLogin(string $mail, string $password){
        return $this->connection->project(
            'SELECT u.id as id, u.username as username, u.mail as mail, u.password as password, u.token as token, u.tokenExpire as tokenExpire, u.isActive as isActive, u.role as role
                    FROM user as u 
                    WHERE u.token = :token',
            [
                'mail'=>$mail,
                'password'=>$password
            ],
            function ($result){
                return new Users(
                    (int) $result['id'],
                    (string) $result['username'],
                    (string) $result['mail'],
                    (string) $result['password'],
                    (string) $result['token'],
                    (new \DateTime ($result['tokenExpire'])),
                    (bool) $result['isActive'],
                    (string) $result['role']
                );
            }
        );
    }
}