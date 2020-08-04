<?php

namespace App\Controller\newsletters;

use App\Adapter\Newsletter\Newsletters;
use App\Entity\Newsletter\Newsletter;
use App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter;
use App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter\Command;
use App\Form\Newsletter\AnonJoinType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Newsletter\Newsletters\UseCase\AnonJoinNewsletter\Responder as JoinResponder;

class NewsletterController extends AbstractController implements JoinResponder
{
    /**
     * @param Request $request
     * @param Newsletters $newsletter
     * @param AnonJoinNewsletter $anonJoinNewsletter
     * @param MailerInterface $mailer
     * @return Response
     * @throws \throwable
     * @Route ("anon/join/newsletter", name="anon_join", methods={"GET", "POST"})
     */
    public function Join(Request $request, AnonJoinNewsletter $anonJoinNewsletter, MailerInterface $mailer){
        $form = $this->createForm(AnonJoinType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $formData = $form->getData();

            $command = new Command($formData['mail'], 1);
            $command->setResponder($this);

            $anonJoinNewsletter->execute($command, $mailer);

            return $this->redirectToRoute('homepage');
        }
        return $this->render('Newsletter/JoinNewsletter.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function JoinNewsletter(Newsletter $newsletter)
    {
        $this->addFlash('success', 'Please check your email');
    }

    public function mailAlreadyInUse(string $mail)
    {
        $this->addFlash('error', 'This mail is already in use');
    }
}