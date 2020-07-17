<?php


namespace App\Entity\Users\UseCase;

use App\Controller\users\ExpireController;
use App\Controller\users\RegisterController;
use App\Entity\Users\User;
use App\Adapter\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\ExpireUser\Command;
use phpDocumentor\Reflection\Types\False_;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Generator\UrlGenerator;

class ExpireUser
{
    private $users;
    private $transaction;

    public function __construct(
        Users $users,
        Transaction $transaction
    ){
        $this->users=$users;
        $this->transaction=$transaction;
    }

    public function expire(Command $command, string $mail, MailerInterface $mailer){
        $this->transaction->begin();

        /** @var User $currentUser */
        $currentUser = $this->users->findOneByToken($command->getMail());

        if($currentUser==false){
            $this->transaction->rollback();
            $command->getResponder()->providedMailIsInUse($command->getMail());
            return;
        }

        $this->users->findOneByToken($mail);

        $date=new \DateTime("now");

        if($currentUser->getTokenExpire()->getTimeStamp() > $date->getTimestamp()){
            $email = (new Email())
                ->from('bartlomiej.szyszkowski@yellows.eu')
                ->to($currentUser->getMail())
                ->subject('Congrats! You are registered on our website!')
                ->text('Welcome, dear User. We glad you join our family of ToDo Project. On this page you can easily start making some of your tasks in dedicated time. Have a nice day!');

            $mailer->send($email);
            $currentUser->expireUser();
        }else{
            $this->registerController->expire();
        }

        try{
            $this->transaction->commit();
        }catch(\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->userExpired($currentUser);
    }
}