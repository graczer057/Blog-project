<?php

namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Entity\Users\UseCase\PasswordResetUser;
use App\Entity\Users\User;
use App\Entity\Users\UseCase\PasswordResetUser\Command;
use App\Form\Users\ResetType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users\UseCase\PasswordResetUser\Responder as PasswordResetResponder;

class PasswordResetController extends AbstractController implements  PasswordResetResponder
{
    /**
     * @Route ("/password/reset", name="password_reset", methods={"GET", "POST"})
     */
    public function PasswordReset(Request $request, Users $User, PasswordResetUser $passwordResetUser, MailerInterface $mailer)
    {
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(ResetType::class);
        $form->handleRequest($request);

        $isNotActive = false;

        $token = md5(uniqid());

        $tokenExpire = new DateTime('+60 minutes');

        if($form->isSubmitted() && $form->isValid()){
            $formData = $form->getData();

            $user = $User->findbyMail($formData['mail']);

            $command = new Command($user, $formData['mail'], $token, $tokenExpire, $isNotActive);
            $command->setResponder($this);

            $passwordResetUser->execute($command, $mailer);

            return $this->redirectToRoute('homepage');
        }
        return $this->render('users/reset.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function UserPasswordReset(User $user)
    {
        $this->addFlash('success', 'Proszę sprawdzić swoją skrzynkę pocztową, użytkowniku: '.$user->getUsername());
    }
}