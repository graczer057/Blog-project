<?php

namespace App\Controller;

use App\Adapter\Comment\CommentsQuery;
use App\Adapter\Post\PostsQuery;
use App\Entity\Comments\UseCase\CreateComment;
use App\Entity\Posts\Post;
use App\Form\Comment\CommentType;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ListController
 * @package App\Controller
 */

class ListController extends AbstractController
{
    private $PostRepository;
    private $commentRepository;
    private $PostsQuery;

    public function __construct(
        PostRepository $postRepository,
        CommentRepository $commentRepository,
        PostsQuery $postsQuery
    )
    {
        $this->PostRepository = $postRepository;
        $this->commentRepository = $commentRepository;
        $this->PostsQuery = $postsQuery;
    }

    /**
     * @return Response
     * @Route("/", name="homepage", methods={"GET"})
     */
    public function HomePage(): Response
    {
        $posts = $this->PostRepository->findBy([], [
            'info' => 'DESC'
        ]);

        return $this->render('homepage.html.twig', [
            'posts' => $posts
        ]);
    }

    /**
     * @Route("/posts/{id}/show", name="see")
     */
    public function Post(Post $id, PostsQuery $postsQuery, Request $request, CreateComment $createComment)
    {
        $form = $this->createForm(CommentType::class);
        $form->handleRequest($request);

        $user = $this->getUser();

        $posts = $postsQuery->getById((int)$id->getId());

        $comments = $this->commentRepository->findBy([], [
            'post' => 'DESC'
        ]);

        foreach($comments as $comment) {
            if($comment->getPost()->getId() == $id->getId()){
                $postWithId[] = $comment;
            }
        }

        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $date = new \DateTime("now");

            $command = new CreateComment\Command(
                $data['info'],
                $date,
                $user,
                $id
            );

            $createComment->execute($command);

            if($id == $comments){
                return $this->render('post.html.twig', [
                    'post' => $posts,
                    'form' => $form->createView(),
                    'comments' => $postWithId ?? null
                ]);
            }
        }

        return $this->render('post.html.twig', [
            'post' => $posts,
            'form' => $form->createView(),
            'comments' => $postWithId ?? null
        ]);
    }
}