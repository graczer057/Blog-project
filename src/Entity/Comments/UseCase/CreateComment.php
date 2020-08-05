<?php

namespace App\Entity\Comments\UseCase;

use App\Adapter\Comment\Comments;
use App\Entity\Comments\Comment;
use App\Adapter\Core\Transaction;
use App\Entity\Comments\UseCase\CreateComment\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreateComment extends AbstractController
{
    private $comments;
    private $transaction;

    public function __construct(
        Comments $comments,
        Transaction $transaction
    ){
        $this->comments = $comments;
        $this->transaction = $transaction;
    }

    public function execute(
        Command $command
    )
    {
        $this->transaction->begin();

        $comment = new Comment(
            $command->getInfo(),
            $command->getAddDate()
        );
    }
}