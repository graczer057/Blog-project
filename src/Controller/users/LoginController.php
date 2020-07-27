<?php

namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Entity\Users\UseCase\LoginUser;
use App\Entity\Users\UseCase\LoginUser\Responder as LoginResponder;
use App\Entity\Users\User;
use App\Form\Users\LoginType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController  implements LoginResponder
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager=$entityManager;
    }

    /**
     * @param Request $request
     * @Route("/login", name="app_login", methods={"GET"})
     * @throws \Throwable
     */
    public function login(Request $request, Users $User, LoginUser $loginUser){
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(LoginType::class, []);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $data=$form->getData();

            $command = new LoginUser\Command(
                $data['username'],
                $data['mail'],
                $data->get('password')->getData()
            );
            $command->setResponder($this);
            $loginUser->execute($command);
            $loginUser=$User->findbyMail('mail');
            if($loginUser != null){
                if(($loginUser->getPassword() == $data['password'])&&($loginUser->getUsername() == $data['username'])&&($loginUser->getMail()==$data['mail'])){
                    dump($loginUser);
                }
            }

            return $this->redirectToRoute('homepage', []);
        }
        return $this->render('users/login.html.twig', [
           'form' => $form->createView()
,        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    public function userLogged(User $user)
    {
        // TODO: Implement userLogged() method.
    }

    public function providedDataIsInUse(string $username, string $mail, string $password)
    {
        // TODO: Implement providedDataIsInUse() method.
    }
}
