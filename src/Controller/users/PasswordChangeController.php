<?php

namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Entity\Users\UseCase\PasswordChangeUser;
use App\Entity\Users\UseCase\PasswordChangeUser\Command;
use App\Entity\Users\UseCase\PasswordChangeUser\Responder as PasswordChangeResponder;
use App\Entity\Users\User;
use App\Form\Users\ChangeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;

class PasswordChangeController extends AbstractController implements PasswordChangeResponder
{
    /**
     * @Route("/change/{token}", name="change", methods={"GET", "POST"})
     */

    public function change(Request $request, string $token, Users $User, PasswordChangeUser $passwordChangeUser, MailerInterface $mailer)
    {
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(ChangeType::class);
        $form->handleRequest($request);

        $user = $User->findbyToken($token);

        $date=new \DateTime("now");

        $isActive = true;

        $isNotActive = false;

        $token = null;

        $tokenExpire = null;

        if($form->isSubmitted()&&$form->isValid()){
            if($user->getIsActive() == $isNotActive){
                if($user->getTokenExpire()->getTimestamp() > $date->getTimestamp()){
                    $command = new Command(
                        $user,
                        $form->get('plainPassword')->getData(),
                        $isActive,
                        $token,
                        $tokenExpire
                    );

                    $command->setResponder($this);

                    $passwordChangeUser->execute($command, $mailer);

                    return $this->redirectToRoute('homepage');
                }else{
                    $this->addFlash('error', 'Hasło jest takie samo jak poprzednie, proszę o wprowadzenie nowego hasła.');

                    return $this->render('users/change.html.twig', [
                        'form' => $form->createView()
                    ]);
                }
            }
        }
        return $this->render('users/change.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function passwordChanged(User $user)
    {
        $this->addFlash('success', 'Twoje hasło zostało zmienione użytkowniku: '.$user->getUsername());

    }
}