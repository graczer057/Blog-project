<?php

namespace App\Entity\Likes\UseCase;

use App\Adapter\Like\Likes;
use App\Adapter\Core\Transaction;
use App\Entity\Likes\UseCase\unlike\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class unlike extends AbstractController
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

        $this->likes->delete($command->getLike());

        try {
            $this->transaction->commit();
        } catch (\Throwable $e) {
            $this->transaction->rollback();
            throw $e;
        }
    }
}