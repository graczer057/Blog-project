<?php

namespace App\Controller;

use App\Entity\Posts\Post;
use App\Entity\Posts\UseCase\CreatePost;
use App\Form\Posts\AddPostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Posts\UseCase\CreatePost\Responder as CreateCategoryResponder;

class PostsController extends AbstractController implements CreateCategoryResponder
{
    /**
     * @Route("/post/add", name="posts_add", methods={"GET"})
     * @Route("/post/create", name="posts_create", methods={"POST"})
     */
    public function addAction(MailerInterface $mailer, Request $request, CreatePost $createPost)
    {
        $form = $this->createForm(
            AddPostType::class,
            [],
            [
                'method' => 'POST',
                'action' => $this->generateUrl('posts_create',[])
            ]
        );

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $data = $form->getData();

            $command = new CreatePost\Command(
                $data['info'],
                $data['title']
            );

            $createPost->execute($command, $mailer);

            return $this->redirectToRoute('homepage', []);
        }
        return $this->render('posts/add.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    public function postCreated(Post $post){
        $this->addFlash('success', 'Post utworzony: '.$post->getInfo());
    }

    public function providedNameIsInUse(string $info){
        $this->addFlash('error', 'Post '.$info.' już istnieje.');
    }
}
