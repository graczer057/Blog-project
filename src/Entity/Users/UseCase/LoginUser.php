<?php


namespace App\Entity\Users\UseCase;

use App\Entity\Users\UseCase\LoginUser\Command;
use App\Entity\Users\User;
use App\Adapter\User\Users;
use App\Adapter\Core\Transaction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginUser extends AbstractController
{
    private $transaction;

    public function __construct(Users $users, Transaction $transaction)
    {
        $this->Users = $users;
        $this->transaction = $transaction;
    }

    public function execute(Command $command){
        $this->transaction->begin();

        $users=$command->getUsername();
        $users->loginUser(
            $command->getUsername(),
            $command->getMail(),
            $command->getPassword()
        );

        try{
            $this->transaction->commit();
        }catch (\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->userLogged($User);

        $this->createNotFoundException();
    }
}