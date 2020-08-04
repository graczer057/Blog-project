<?php


namespace App\Entity\Posts\UseCase;

use App\Adapter\Newsletter\Newsletters;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Posts\Post;
use App\Adapter\Core\Transaction;
use App\Adapter\Post\Posts;
use App\Entity\Posts\UseCase\CreatePost\Command as Command;
use App\Entity\Newsletter\Newsletters\UseCase\SendingNewsletter\Command as NewsCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CreatePost extends AbstractController
{
    private $posts;
    private $newsletters;
    private $transaction;

    public function __construct(Posts $posts, Newsletters $newsletters, Transaction $transaction)
    {
        $this->posts = $posts;
        $this->newsletters = $newsletters;
        $this->transaction = $transaction;
    }

    public function execute(NewsCommand $newsCommand, Newsletter $newsletter,  Command $command, MailerInterface $mailer){
        $this->transaction->begin();

        $currentPost = $this->posts->findOneByName($command->getInfo());

        $mails = $this->newsletters->getAll($newsletter);

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

        $url = $this->generateUrl('see', array('id' => $this->get($command->getId())));

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($mails)
            ->subject('New post')
            ->text('Hello. New post on blog website is available, check it out! '.$url);

        $mailer->send($email);

        try{
            $this->transaction->commit();
        }catch(\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->postCreated($post);
    }
}