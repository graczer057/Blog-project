<?php


namespace App\Entity\Users\UseCase;

use App\Entity\Users\User;
use App\Adapter\Core\Transaction;
use App\Adapter\User\Users;
use App\Entity\Users\UseCase\CreateUser\Command;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CreateUser
{
    private $users;
    private $mailer;
    private $urlGenerator;
    private $transaction;

    public function __construct(Users $users, MailerInterface $mailer, UrlGeneratorInterface $urlGenerator, Transaction $transaction)
    {

        $this->users = $users;
        $this->mailer = $mailer;
        $this->urlGenerator = $urlGenerator;
        $this->transaction = $transaction;
    }

    public function execute(Command $command){
        $this->transaction->begin();

        $user = new User(
            $command->getUsername(),
            $command->getMail(),
            $command->getPassword(),
            $command->getToken(),
            $command->getTokenExpire(),
            $command->getIsActive(),
            $command->getRole()
        );

        $this->users->add($user);

        try{
            $this->transaction->commit();
        }catch(\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }

        $url = $this->urlGenerator->generate('activate', array('token' => $command->getToken()), UrlGenerator::ABSOLUTE_URL);

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($command->getMail())
            ->subject('Activate your account')
            ->html($url);

        $this->mailer->send($email);

        $command->getResponder()->userCreated($user);
    }
}