<?php

namespace App\Controller\newsletters;

use App\Adapter\User\Users;
use App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserJoinController extends AbstractController
{
    /**
     * @Route("/newsletter/join/user", name="user_join")
     */
    public function Join(
        UserJoinNewsletter $userJoinNewsletter,
        Users $users,
        MailerInterface $mailer
    )
    {
        $bool = true;
        if(!is_null($this->getUser())){

            $user = $users->findbyMail($this->getUser()->getMail());

            $command = new UserJoinNewsletter\Command($this->getUser()->getMail(), $bool, $user);

            $userJoinNewsletter->execute($command, $mailer);

            return $this->redirectToRoute('homepage');
        }
        return $this->redirectToRoute('user_join');
    }
}