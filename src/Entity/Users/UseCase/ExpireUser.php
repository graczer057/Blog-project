<?php

namespace App\Entity\Users\UseCase;

use App\Adapter\Core\Transaction;
use App\Entity\Users\UseCase\ExpireUser\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGenerator;

class ExpireUser extends AbstractController
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
        $User->TokenExpire(
            $command->getToken(),
            $command->getTokenExpire()
        );

        $this->createNotFoundException();

        $url = $this->generateUrl('activate', array('token' => $command->getToken()), UrlGenerator::ABSOLUTE_URL);

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($User->getMail())
            ->subject('New link')
            ->text($url);

        $mailer->send($email);

        $command->getResponder()->UserTokenExpire($User);

        try{
            $this->transaction->commit();
        }catch (\Throwable $e){
            $this->transaction->rollback();
            throw $e;
        }
    }
}