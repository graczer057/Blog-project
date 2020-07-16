<?php


namespace App\Entity\Users\UseCase;

use App\Entity\Users\User;
use App\Adapter\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\CreateUser\Command;

class CreateUser
{
    private $users;
    private $transaction;

    public function __construct(Users $users, Transaction $transaction)
    {
        $this->users=$users;
        $this->transaction=$transaction;
    }

    public function execute(Command $command){
        $this->transaction->begin();

        $currentUser = $this->users->findOneByToken($command->getToken());

        if($currentUser){
            $this->transaction->rollback();
            $command->getResponder()->providedNameIsInUse($command->getUsername());
            return;
        }

        $user = new User(
            $command->getUsername(),
            $command->getMail(),
            $command->getPassword(),
            $command->getToken(),
            $command->getTokenExpire(),
            $command->getIsActive(),
            $command->getRole()
        );

        $this->users->add($user);

        try{
            $this->transaction->commit();
        }catch(\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->userCreated($user);
    }
}