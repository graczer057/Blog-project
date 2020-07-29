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
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordChangeController extends AbstractController implements PasswordChangeResponder
{
    /**
     * @param Request $request
     * @param string $token
     * @param Users $User
     * @param PasswordChangeUser $passwordChangeUser
     * @param MailerInterface $mailer
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Throwable
     * @Route("/change/{token}", name="change", methods={"GET", "POST"})
     */

    public function change(UserPasswordEncoderInterface $passwordEncoder, Request $request, string $token, Users $User, PasswordChangeUser $passwordChangeUser, MailerInterface $mailer){
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $form=$this->createForm(ChangeType::class);
        $form->handleRequest($request);

        $user=$User->findbyToken($token);

        $date=new \DateTime("now");
        if($form->isSubmitted()&&$form->isValid()){
            $formData=$form->getData();
            if($user->getIsActive() == 0){
                if($user->getTokenExpire()->getTimestamp() > $date->getTimestamp()){
                    $command=new Command(
                        $user,
                        $form->get('plainPassword')->getData(),
                        1,
                        NULL,
                        NULL
                    );
                    dump($user);
                    $command->setResponder($this);

                    $passwordChangeUser->execute($command, $mailer);

                    return $this->redirectToRoute('homepage');
                }else{
                    $this->addFlash('error', 'Password is the same as the oldest. Please type your new password once again.');
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
        $this->addFlash('success', 'Now you have a new password dear: '.$user->getUsername());

    }
}