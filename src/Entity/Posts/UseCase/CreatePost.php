<?php

namespace App\Entity\Posts\UseCase;

use App\Adapter\Newsletter\Newsletters;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Posts\Post;
use App\Adapter\Core\Transaction;
use App\Adapter\Post\Posts;
use App\Entity\Posts\UseCase\CreatePost\Command as Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CreatePost extends AbstractController
{
    private $posts;
    private $newsletters;
    private $transaction;

    public function __construct(
        Posts $posts,
        Newsletters $newsletters,
        Transaction $transaction
    ){
        $this->posts = $posts;
        $this->newsletters = $newsletters;
        $this->transaction = $transaction;
    }

    public function execute(
        Command $command,
        MailerInterface $mailer
    )
    {
        $this->transaction->begin();

        $currentPost = $this->posts->findOneByName($command->getTitle());

        $mails = $this->newsletters->getAll();

        if($currentPost){
            $this->transaction->rollback();
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

        $url = $this->generateUrl('see', array('id' => $post->getId()));

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->subject('New post')
            ->text('Hello. New post on blog website is available, check it out! ' . $url);

        /** @var Newsletter $mail */
        foreach ($mails as $mail) {
            $email->addBcc($mail->getMail());
        }

        $mailer->send($email);

        $command->getResponder()->postCreated($post);
    }
}