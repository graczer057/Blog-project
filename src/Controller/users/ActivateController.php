<?php


namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Adapter\Core\Transaction;
use App\Adapter\User\UsersQuery;
use App\Entity\Users\UseCase\ActivateUser;
use App\Entity\Users\UseCase\CreateUser;
use App\Entity\Users\UseCase\ActivateUser\Command;
use App\Entity\Users\UseCase\ActivateUser\Responder as Responder;
use App\Entity\Users\User;
use App\Entity\Users\UsersInterface;
use App\Form\Users\RegisterType;
use App\Repository\UserRepository;
use phpDocumentor\Reflection\Types\AbstractList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Mailer\MailerInterface;


class ActivateController extends AbstractController implements Responder
{
    /**
     * @param string $token
     * @throws \Exception
     * @Route("/activate/{token}", name="activate", methods={"GET", "POST"})
     */

    public function activate(string $token, Users $User, ActivateUser $activateUser, MailerInterface $mailer){
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }
        $user=$User->findByToken($token);

        $date=new \DateTime("now");

        if($user->getIsActive() == 0){
            if($user->getTokenExpire()->getTimestamp() > $date->getTimestamp()){
                $commandData=new Command(
                    $user,
                    true,
                    NULL,
                    NULL
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

}