<?php

namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Entity\Users\UseCase\CreateUser;
use App\Entity\Users\UseCase\CreateUser\Responder as RegisterResponder;
use App\Entity\Users\User;
use App\Form\Users\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController implements RegisterResponder
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager=$entityManager;
    }

    /**
     * @param Request $request
     * @Route("/register/form", name="register", methods={"GET"})
     * @Route("/register/create", name="register_create", methods={"POST"})
     * @throws \Throwable
     */

    public function register(Request $request, Users $User, CreateUser $createUser)
    {
        if($this->getUser()){
            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(
            RegisterType::class,
            [],
            [
                'method' => 'POST',
                'action' => $this->generateUrl('register_create', [])
            ]
        );
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $command = new CreateUser\Command(
                $data['username'],
                $data['mail'],
                $form->get('password')->getData()
            );
            $command->setResponder($this);
            $createUser->execute($command);
            $createUser=$User->findbyMail($data['mail']);
            if($createUser != null){
                if($createUser->getUsername() == $data['username'] && ($createUser->getMail() == $data['mail'])){
                    //newsletter
                    dump($createUser);
                }
            }

            return $this->redirectToRoute('homepage', []);
        }
        return $this->render('users/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function userCreated(User $user)
    {
        $this->addFlash('success', 'Registration complete check your mail');
    }

    public function providedNameIsInUse(string $username)
    {
        $this->addFlash('error', 'Account exists');
    }
}