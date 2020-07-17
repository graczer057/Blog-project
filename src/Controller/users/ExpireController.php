<?php


namespace App\Controller\users;
use App\Entity\Users\UseCase\ActivateUser;
use App\Entity\Users\UseCase\ExpireUser;
use App\Entity\Users\UseCase\ExpireUser\Responder as Responder;
use App\Entity\Users\User;
use App\Form\Users\ExpireFormType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Mailer\MailerInterface;

class ExpireController extends AbstractController implements Responder
{
    private $UserRepository;
    private $ExpireUser;
    public function __construct(
        UserRepository $UserRepository,
        ExpireUser $ExpireUser
    ){
        $this->UserRepository = $UserRepository;
        $this->ExpireUser = $ExpireUser;
    }

    /**
     * @Route("/expire/form/{token}", name="user_expire", methods={"GET|POST"})
     */
    public function expire(string $token, Request $request, ExpireUser $expireUser, MailerInterface $mailer){
        $form = $this->createForm(ExpireFormType::class, []);

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $data=$form->getData();

            $command = new ExpireUser\Command(
                $data['mail']
            );
            $command1 = new ActivateUser\Command(
                $token
            );

            $url = $this->generateUrl('app_activate_active', array('token' => $command1->getToken()), UrlGenerator::ABSOLUTE_URL);

            $email = (new Email())
                ->from('bartlomiej.szyszkowski@yellows.eu')
                ->to($command->getMail())
                ->subject('Your new link')
                ->html($url);

            $mailer->send($email);

            $expireUser->expire($command, $command->getMail(), $mailer);

            return $this->redirectToRoute('homepage', []);
        }
        return $this->render('users/expire.html.twig', [
             'form' => $form->createView(),
        ]);
    }

    public function userExpired(User $user)
    {
        // TODO: Implement userExpired() method.
    }

    public function providedMailIsInUse(string $mail)
    {
        $this->addFlash('error', 'Account exists');
    }
}