<?php

namespace App\Entity\Users\UseCase;

use App\Adapter\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\PasswordChangeUser\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class PasswordChangeUser extends AbstractController
{
    private $transaction;

    public function __construct(
        Users $users,
        Transaction $transaction
    ){
        $this->Users=$users;
        $this->transaction=$transaction;
    }

    public function execute(
        Command $command,
        MailerInterface $mailer
    )
    {
        $this->transaction->begin();

        $User = $command->getUser();
        $User->PasswordChange(
            $command->getPassword(),
            $command->getIsActive(),
            $command->getToken(),
            $command->getExpireToken()
        );

        $this->createNotFoundException();

        $mail = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($User->getMail())
            ->subject('Congrats! You are registered on our website!')
            ->text('hello');

        $mailer->send($mail);

        $command->getResponder()->passwordChanged($User);

        try{
            $this->transaction->commit();
        }catch(\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

    }
}