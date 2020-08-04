<?php

namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Users\UseCase\ActivateUser;
use App\Entity\Users\UseCase\ActivateUser\Command;
use App\Entity\Users\UseCase\ActivateUser\Responder as ActivateResponder;
use App\Entity\Users\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;

class ActivateController extends AbstractController implements ActivateResponder
{
    /**
     * @param string $token
     * @throws \Exception
     * @Route("/activate/{token}", name="activate", methods={"GET", "POST"})
     */

    public function activate(
        string $token,
        Users $User,
        ActivateUser $activateUser,
        MailerInterface $mailer
    )
    {
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $user = $User->findByToken($token);

        $date = new \DateTime("now");

        $isActive = true;

        $isNotActive = false;

        $tokenValue = null;

        if($user->getIsActive() == $isNotActive){
            if($user->getTokenExpire()->getTimestamp() > $date->getTimestamp()){

                $commandData = new Command(
                    $user,
                    $isActive,
                    $tokenValue,
                    $tokenValue
                );

                $commandData->setResponder($this);

                $activateUser->execute($commandData, $mailer);

                return $this->redirectToRoute('homepage');
            }else{
                return $this->redirectToRoute('token_expire');
            }
        }else{
            return $this->redirectToRoute('homepage');
        }
    }

    public function UserActivated(User $user){
        $this->addFlash('success', 'User '.$user->getUsername().' has been activated');
    }

    public function JoinNewsletter(Newsletter $newsletter)
    {
        $this->addFlash('success', 'User '.$newsletter->getMail().' has been added to newsletter list');
    }
}