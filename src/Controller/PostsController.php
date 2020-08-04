<?php

namespace App\Controller;

use App\Entity\Newsletter\Newsletter;
use App\Entity\Posts\Post;
use App\Entity\Posts\UseCase\CreatePost;
use App\Form\Posts\AddPostType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Posts\UseCase\CreatePost\Responder as CreateCategoryResponder;
use App\Entity\Newsletter\Newsletters\UseCase\SendingNewsletter\Command;

class PostsController extends AbstractController implements CreateCategoryResponder
{
    /**
     * @Route("/post/add", name="posts_add", methods={"GET"})
     * @Route("/post/create", name="posts_create", methods={"POST"})
     * @throws \Throwable
     */
    public function addAction(Command $command1, MailerInterface $mailer, Request $request, CreatePost $createPost){

        $form = $this->createForm(
            AddPostType::class,
            [],
            [
                'method' => 'POST',
                'action' => $this->generateUrl('posts_create',[])
            ]
        );

        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $data = $form->getData();

            $command = new CreatePost\Command(
                $data['info'],
                $data['title']
            );

            $createPost->execute($command1, $command, $mailer);

            return $this->redirectToRoute('homepage', []);
        }
        return $this->render('posts/add.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    public function postCreated(Post $post){
        $this->addFlash('success', 'Post'.$post->getInfo());
    }

    public function providedNameIsInUse(string $info){
        $this->addFlash('error', 'Post'.$info.'exist');
    }
}
