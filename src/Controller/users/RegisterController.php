<?php

namespace App\Controller\users;

use App\Entity\Users\UseCase\CreateUser;
use App\Entity\Users\UseCase\CreateUser\Responder as RegisterResponder;
use App\Entity\Users\User;
use App\Form\Users\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController implements RegisterResponder
{
    /**
     * @Route("/register/form", name="register", methods={"GET"})
     * @Route("/register/create", name="register_create", methods={"POST"})
     */

    public function register(Request $request, CreateUser $createUser)
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
                $form->get('plainPassword')->getData()
            );
            $command->setResponder($this);

            $createUser->execute($command);

            return $this->redirectToRoute('homepage', []);
        }
        return $this->render('users/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function userCreated(User $user)
    {
        $this->addFlash('success', 'Rejestracja zakończona, proszę sprawdzić swoją skrzynkę pocztową.');
    }

    public function providedNameIsInUse(string $username)
    {
        $this->addFlash('error', 'Konto już istnieje');
    }
}