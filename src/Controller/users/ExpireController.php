<?php

namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Entity\Users\UseCase\ExpireUser;
use App\Entity\Users\User;
use App\Entity\Users\UseCase\ExpireUser\Command;
use App\Form\Users\ExpireFormType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users\UseCase\ExpireUser\Responder as TokenExpireResponder;

class ExpireController extends AbstractController implements TokenExpireResponder
{
    /**
     * @param Request $request
     * @throws \Exception
     * @Route ("/token/expire", name="token_expire", methods={"GET", "POST"})
     */

    public function TokenExpire(
        Request $request,
        Users $User,
        ExpireUser $expireUser,
        MailerInterface $mailer
    )
    {
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(ExpireFormType::class);
        $form->handleRequest($request);

        $isActive = true;

        $isNotActive = false;

        $token = md5(uniqid(Time()));

        $date = new DateTime('+15 minutes');

        if($form->isSubmitted() && $form->isValid()){
            $formData = $form->getData();

            $user = $User->findbyMail($formData['mail']);

            if($user->getIsActive == $isNotActive){
                $commandData = new Command($user, $token, $date);
                $commandData->setResponder($this);

                $expireUser->execute($commandData, $mailer);

                return $this->redirectToRoute('homepage');
            }
        }
        return $this->render('users/expire.html.twig', [
           'form' => $form->createView(),
        ]);
    }

    public function UserTokenExpire(User $user){
        $this->addFlash('success', 'Please check your email: '.$user->getMail());
    }
}