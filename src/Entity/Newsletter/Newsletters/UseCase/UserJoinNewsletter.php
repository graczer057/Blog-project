<?php


namespace App\Entity\Newsletter\Newsletters\UseCase;

use App\Adapter\Newsletter\Newsletters;
use App\Adapter\User\Users;
use App\Adapter\Core\Transaction;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter\Command;
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

    public function execute(Command $command, MailerInterface $mailer){
        $this->transaction->begin();

        $user = $command->getUser();

        $newsletter = new Newsletter(
            $this->getUser()->getMail(),
            1,
            $user
        );

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($user->getMail())
            ->subject('Newsletter add')
            ->text('Dear user. You just join ours newsletter family. Welcome! :)');

        $mailer->send($email);

        $this->newsletters->add($newsletter);

        try {
            $this->transaction->commit();
        } catch (\Throwable $e) {
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->JoinNewsletter($newsletter);
    }
}