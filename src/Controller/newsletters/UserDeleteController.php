<?php


namespace App\Controller\newsletters;

use App\Adapter\Newsletter\Newsletters;
use App\Adapter\User\Users;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\UserDeleteNewsletter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserDeleteController extends AbstractController
{
    private $Newsletters;

    public function __construct(
        Newsletters $newsletters
    ){
        $this->Newsletters = $newsletters;
    }

    /**
     * @throws \Throwable
     * @Route("/newsletter/delete", name="newsletter_delete")
     */
    public function Delete(UserDeleteNewsletter $userDeleteNewsletter, Users $users, MailerInterface $mailer) {

        if(!is_null($this->getUser())){

            $user = $users->findbyMail($this->getUser()->getMail());

            if($this->Newsletters->finOneByMail($user->getMail())){

                $command = new UserDeleteNewsletter\Command($this->Newsletters->finOneByMail($user->getMail()));

                $userDeleteNewsletter->exeute($user, $command, $mailer);

                return $this->redirectToRoute('homepage');
            }
        }

        return $this->redirectToRoute('newsletter_delete');

    }

    public function DeleteNewsletter(Newsletter $newsletter)
    {
        // TODO: Implement DeleteNewsletter() method.
    }
}