<?php

namespace App\Controller\newsletters;

use App\Adapter\Newsletter\Newsletters;
use App\Adapter\User\Users;
use App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserJoinController extends AbstractController
{
    private $newsletters;

    public function __construct(
        Newsletters $newsletters
    ){
        $this->newsletters = $newsletters;
    }

    /**
     * @throws \Throwable
     * @Route("/newsletter/join/user", name="user_join")
     */
    public function Join(UserJoinNewsletter $userJoinNewsletter, Users $users, MailerInterface $mailer) {

        if(!is_null($this->getUser())){

            $user = $users->findbyMail($this->getUser()->getMail());

            $command = new UserJoinNewsletter\Command($this->getUser()->getMail(), 1, $user);

            $userJoinNewsletter->execute($command, $mailer);

            return $this->redirectToRoute('homepage');
        }

        return $this->redirectToRoute('user_join');

    }
}