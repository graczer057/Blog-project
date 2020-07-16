<?php


namespace App\Entity\Posts\UseCase;

use App\Entity\Posts\Post;
use App\Adapter\Core\Transaction;
use App\Adapter\Post\Posts;
use App\Entity\Posts\UseCase\CreatePost\Command;

class CreatePost
{
    private $posts;
    private $transaction;

    public function __construct(Posts $posts, Transaction $transaction)
    {
        $this->posts = $posts;
        $this->transaction = $transaction;
    }

    public function execute(Command $command){
        $this->transaction->begin();

        $currentPost = $this->posts->findOneByName($command->getInfo());

        if($currentPost){
            $this->transaction->rollback();
            $command->getResponder()->providedNameIsInUse($command->getInfo());
            return;
        }

        $post = new Post(
          $command->getInfo(),
          $command->getTitle()
        );
        $this->posts->add($post);

        try{
            $this->transaction->commit();
        }catch(\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->postCreated($post);
    }
}