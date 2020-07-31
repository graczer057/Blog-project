<?php


namespace App\Entity\Newsletter\Newsletters\UseCase;

use App\Adapter\User\Users;
use App\Adapter\Newsletter\Newsletters;
use App\Adapter\Core\Transaction;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UserDeleteNewsletter extends AbstractController
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

    public function exeute(Command $command, MailerInterface $mailer){
        $this->transaction->begin();

        if($this->newsletters->finOneByMail($command->getMail())){
            $command->getResponder()->DeleteNewsletter($command->getMail());
            return;
        }
    }
}