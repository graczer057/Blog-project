<?php


namespace App\Entity\Newsletter\Newsletters\UseCase;

use App\Adapter\Newsletter\Newsletters;
use App\Adapter\User\Users;
use App\Adapter\Core\Transaction;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter\Command;
use App\Entity\Users\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UserJoinNewsletter extends AbstractController
{
    private $users;
    private $newsletters;
    private $transaction;

    public function __construct(
        Users $users,
        Newsletters $newsletters,
        Transaction $transaction
    ){
        $this->users = $users;
        $this->newsletters = $newsletters;
        $this->transaction = $transaction;
    }

    public function execute (User $user, Command $command, MailerInterface $mailer){
        $this->transaction->begin();

        if($this->newsletters->finOneByMail($command->getMail())){
            $command->getResponder()->UserJoined($command->getMail());
            return;
        }

        $newsletter = new Newsletter(
            $command->getMail(),
            1,
            $user
        );

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($newsletter->getMail())
            ->subject('Newsletter completed')
            ->text('Dear user. Thank you for joining our newsletter family :)');

        $mailer->send($email);

        $this->newsletters->add($newsletter);

        try{
            $this->transaction->commit();
        } catch (\throwable $e) {
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->UserJoined($newsletter);
    }
}