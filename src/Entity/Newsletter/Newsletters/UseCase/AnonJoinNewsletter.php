<?php


namespace App\Entity\Newsletter\Newsletters\UseCase;

use App\Adapter\Newsletter\Newsletters;
use App\Adapter\Core\Transaction;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter\Command;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class AnonJoinNewsletter extends AbstractController
{
    private $newsletters;
    private $transaction;

    public function __construct(
        Newsletters $newsletters,
        Transaction $transaction
    ){
        $this->newsletters = $newsletters;
        $this->transaction = $transaction;
    }

    public function execute(Command $command, MailerInterface $mailer){
        $this->transaction->begin();

        if($this->newsletters->finOneByMail($command->getMail())){
            $command->getResponder()->mailAlreadyInUse($command->getMail());
            return;
        }

        $newsletter = new Newsletter(
            $command->getMail(),
            1,
            null
        );

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($newsletter->getMail())
            ->subject('Newsletter completed')
            ->text('Dear user. Thank you for joining our newsletter family :)');

        $mailer->send($email);

        $this->newsletters->add($newsletter);

        try{
            $this->transaction->commit();
        } catch (\throwable $e) {
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->JoinNewsletter($newsletter);
    }
}