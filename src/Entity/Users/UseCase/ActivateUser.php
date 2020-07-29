<?php

namespace App\Entity\Users\UseCase;

use App\Adapter\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\ActivateUser\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ActivateUser extends AbstractController
{
    private $transaction;
    private $mailer;

    public function __construct(
        Users $users,
        Transaction $transaction,
        MailerInterface $mailer
    ){
        $this->Users=$users;
        $this->transaction=$transaction;
        $this->mailer=$mailer;
    }

    public function execute(Command $command, MailerInterface $mailer){
        $this->transaction->begin();
        $User=$command->getUser();
        $User->activateUser(
            $command->getIsActive(),
            $command->getToken(),
            $command->getExpireToken()
        );

        try{
            $this->transaction->commit();
        }catch (\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->userActivated($User);

        $this->createNotFoundException();
        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($User->getMail())
            ->subject('Congrats! You are registered on our website!')
            ->text('Welcome, dear User. We glad you join our family of Blog Project. On this page you can easily start making some posts, comments and giving likes. Have a nice day!');

        $mailer->send($email);

        $command->getResponder()->userActivated($User);
    }
}