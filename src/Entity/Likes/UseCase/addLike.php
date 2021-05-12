<?php

namespace App\Entity\Likes\UseCase;

use App\Adapter\Core\Transaction;
use App\Adapter\Like\Likes;
use App\Entity\Likes\Like;
use App\Entity\Likes\UseCase\addLike\Command;

class addLike
{
    private $likes;
    private $transaction;

    public function __construct(
        Likes $likes,
        Transaction $transaction
    ){
        $this->likes = $likes;
        $this->transaction = $transaction;
    }

    public function execute(Command $command){
        $this->transaction->begin();

        $like = new Like(
            $command->getUser(),
            $command->getPost()
        );

        $this->likes->add($like);

        try {
            $this->transaction->commit();
        } catch (\Throwable $e) {
            $this->transaction->rollback();
            throw $e;
        }
    }
}