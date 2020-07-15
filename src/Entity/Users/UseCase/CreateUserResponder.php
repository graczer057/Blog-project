<?php


namespace App\Entity\Users\UseCase;


use App\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\CreateUser\Command;

class CreateUserResponder
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

        $currentUser = $this->users->findOneByName($command->getUsername());
    }
}