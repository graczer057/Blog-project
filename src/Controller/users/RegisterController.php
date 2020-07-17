<?php


namespace App\Controller\users;

use App\Adapter\User\Users;
use App\Adapter\Core\Transaction;
use App\Adapter\User\UsersQuery;
use App\Entity\Posts\UseCase\CreatePost\Command;
use App\Entity\Users\UseCase\CreateUser;
use App\Entity\Users\UseCase\CreateUser\Responder as RegisterResponder;
use App\Entity\Users\User;
use App\Form\Users\RegisterType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Mailer\MailerInterface;

class RegisterController extends AbstractController implements RegisterResponder
{
    private $UserRepository;

    public function __construct(
        UserRepository $UserRepository
    ){
        $this->UserRepository = $UserRepository;
    }

    /**
     * @Route("/register/form", name="register", methods={"GET"})
     * @Route("/register/create", name="register_create", methods={"POST"})
     * @throws \Throwable
     */

    public function register(Request $request, UsersQuery $usersQuery, CreateUser $createUser, MailerInterface $mailer){
        $form = $this->createForm(
            RegisterType::class,
            [],
            [
                'method' => 'POST',
                'action' => $this->generateUrl('register_create',[])
            ]
        );

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $data=$form->getData();

            $command = new CreateUser\Command(
                $data['username'],
                $data['mail'],
                $data['password']
            );

            $url = $this->generateUrl('app_activate_active', array('token' => $command->getToken()), UrlGenerator::ABSOLUTE_URL);

            $email = (new Email())
                ->from('bartlomiej.szyszkowski@yellows.eu')
                ->to($command->getMail())
                ->subject('Activate your account')
                ->html($url);

            $mailer->send($email);

            $createUser->execute($command);

            return $this->redirectToRoute('homepage', []);
        }
        return $this->render('users/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function expire(){

        return $this->redirectToRoute('user_expire', ['token'=>CreateUser\Command::class]);
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