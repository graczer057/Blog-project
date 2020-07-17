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
    private $UserRepository;
    private $ActivateUser;

    public function __construct(
        UserRepository $UserRepository,
        ActivateUser $ActivateUser
    ){
        $this->UserRepository=$UserRepository;
        $this->ActivateUser=$ActivateUser;
    }

    /**
     * @Route("/activate/{token}", name="app_activate_active")
     * @throws \Throwable
     */
    public function activate(ActivateUser $activateUser, string $token, MailerInterface $mailer){
        $command = new ActivateUser\Command(
            $token
        );
        $activateUser->execute($command, $token, $mailer);

        return $this->redirectToRoute('homepage', []);
    }
    public function userCreated(User $user)
    {
        // TODO: Implement userCreated() method.
    }

    public function providedNameIsInUse(string $username)
    {
        // TODO: Implement providedNameIsInUse() method.
    }

    public function userActivated(User $user)
    {
        // TODO: Implement userActivated() method.
    }
}