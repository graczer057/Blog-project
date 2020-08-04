<?php

namespace App\Entity\Newsletter\Newsletters\UseCase;

use App\Adapter\Newsletter\Newsletters;
use App\Adapter\Core\Transaction;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\SendingNewsletter\Command as NewsletterCommand;
use App\Entity\Posts\UseCase\CreatePost\Command as CreatePostCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SendingNewsletter extends AbstractController
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

    public function execute(Newsletter $newsletter, CreatePostCommand $createCommand, NewsletterCommand $command, MailerInterface $mailer) {
        $this->transaction->begin();

        $mails = $this->newsletters->getAll($newsletter);

        $url = $this->generateUrl('see', array('id' => $createCommand->getId()), UrlGenerator::ABSOLUTE_URL);

        $email = (new Email())
            ->from('bartlomiej.szyszkowski@yellows.eu')
            ->to($mails)
            ->subject('New post')
            ->text('Hello. New post on blog website is available, check it out! '.$url);

        $mailer->send($email);

        try {
            $this->transaction->commit();
        } catch (\Throwable $e) {
            $this->transaction->rollback();
            throw $e;
        }

        $command->getResponder()->SendNewsletter($newsletter);

    }
}