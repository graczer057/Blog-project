<?php

namespace App\Entity\Users\UseCase;

use App\Adapter\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\ActivateUser\Command;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ActivateUser extends AbstractController
{
    private $transaction;
    private $entityManager;
    private $mailer;

    public function __construct(
        Users $users,
        Transaction $transaction,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ){
        $this->Users=$users;
        $this->transaction=$transaction;
        $this->entityManager=$entityManager;
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
            ->text('Welcome, dear User. We glad you join our family of ToDo Project. On this page you can easily start making some of your tasks in dedicated time. Have a nice day!');

        $mailer->send($email);

        $command->getResponder()->userActivated($User);
    }
}