<?php


namespace App\Entity\Users\UseCase;

use App\Entity\Users\User;
use App\Adapter\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\ActivateUser\Command;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Generator\UrlGenerator;

class ActivateUser
{
    private $users;
    private $transaction;
    private $userRepository;

    public function __construct(Users $users, Transaction $transaction, UserRepository $userRepository)
    {
        $this->users=$users;
        $this->transaction=$transaction;
        $this->userRepository=$userRepository;
    }

    public function execute(Command $command, string $token, MailerInterface $mailer){
        $this->transaction->begin();

        /** @var User $currentUser */
        $currentUser = $this->users->findOneByToken($command->getToken());

        if($currentUser){
            $this->transaction->rollback();
            $command->getResponder()->providedNameIsInUse($command->getUsername());
            return;
        }

        $this->users->findOneByToken('token' );

        $currentUser->activateUser();

        $date=new \DateTime("now");

        if($currentUser->getTokenExpire()->getTimestamp() > $date->getTimestamp()) {
            $email = (new Email())
                ->from('bartlomiej.szyszkowski@yellows.eu')
                ->to($currentUser->getMail())
                ->subject('Congrats! You are registered on our website!')
                ->text('Welcome, dear User. We glad you join our family of ToDo Project. On this page you can easily start making some of your tasks in dedicated time. Have a nice day!');

            $mailer->send($email);
        }
        try{
            $this->transaction->commit();
        }catch(\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->userActivated($currentUser);



    }
}