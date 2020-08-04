<?php

namespace App\Entity\Users\UseCase;

use App\Adapter\Core\Transaction;
use App\Entity\Users\UseCase\PasswordResetUser\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGenerator;

class PasswordResetUser extends AbstractController
{
    private $transaction;

    public function __construct(
        Transaction $transaction
    ){
        $this->transaction=$transaction;
    }

    public function execute(
        Command $command,
        MailerInterface $mailer
    )
    {
        $this->transaction->begin();

        $User = $command->getUser();
        $User->PasswordReset(
            $command->getMail(),
            $command->getIsActive(),
            $command->getToken(),
            $command->getTokenExpire()
        );

        $this->createNotFoundException();

        $url = $this->generateUrl('change', array('token' => $command->getToken()), UrlGenerator::ABSOLUTE_URL);

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($User->getMail())
            ->subject('Change password')
            ->text($url);

        $mailer->send($email);

        $command->getResponder()->UserPasswordReset($User);

        try{
            $this->transaction->commit();
        }catch (\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }
    }
}