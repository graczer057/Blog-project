<?php


namespace App\Entity\Newsletter\Newsletters\UseCase;

use App\Adapter\User\Users;
use App\Adapter\Newsletter\Newsletters;
use App\Adapter\Core\Transaction;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter\Command;
use App\Entity\Users\User;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UserDeleteNewsletter extends AbstractController
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

    public function exeute(User $user, Command $command, MailerInterface $mailer){
        $this->transaction->begin();

        $this->newsletters->delete($command->getNewsletter());


        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($user->getMail())
            ->subject('Newsletter delete')
            ->text('Dear user. You just delete your mail form our base of newsletter. If you want to go back to that list please hit button "newsletter"');

        $mailer->send($email);

        try {
            $this->transaction->commit();
        } catch (\Throwable $e) {
            $this->transaction->rollback();
            throw $e;
        }

    }
}