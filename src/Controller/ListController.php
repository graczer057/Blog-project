<?php

namespace App\Controller;

use App\Adapter\Like\Likes;
use App\Adapter\Like\LikesQuery;
use App\Adapter\Post\PostsQuery;
use App\Entity\Comments\UseCase\CreateComment;
use App\Entity\Likes\UseCase\addLike;
use App\Entity\Likes\UseCase\unlike;
use App\Entity\Posts\Post;
use App\Entity\Users\User;
use App\Form\Comment\CommentType;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @Route("/like/post/{id}", name="add_like")
     */
    public function addLike(Post $id, addLike $addLike){

        /** @var User $user */
        $user = $this->getUser();

        $command = new addLike\Command(
            $user,
            $id
        );

        $addLike->execute($command);

        return new JsonResponse([
            'status' => 'success',
            'statusMsg' => 'like has been added',
        ], 200);
    }

    /**
     * @Route("/unlike/post/{id}", name="app_unlike")
     * @throws \Throwable
     */
    public function unlike(Post $id, unlike $unlike, Likes $likes){

        $post = $likes->getByPost($id);

        /** @var User $user */
        $user = $this->getUser();

        if($user && $post){
            $command = new unlike\Command($id->getLikes());

            $unlike->execute($command);

            return new JsonResponse([
                'status' => 'success',
                'statusMsg' => 'like has been added',
            ], 200);
        }
    }

    /**
     * @Route("/create/comment/{id}", name="create_comment", methods={"POST"})
     * @throws \Throwable
     */
    public function Comment(Post $id, CreateComment $createComment, Request $request){
        $form = $this->createForm(CommentType::class);
        $form->handleRequest($request);

        /** @var User $user */
        $user = $this->getUser();

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

            return new JsonResponse([
                'status' => 'success',
                'statusMsg' => 'comment has been added',
            ], 200);
        }
        return new JsonResponse([
            'status' => 'error',
            'statusMsg' => 'comment has not been added',
        ], 400);
    }

    /**
     * @Route("/posts/{id}/show", name="see", methods={"GET", "POST"})
     */
    public function Post(Post $id, PostsQuery $postsQuery, LikesQuery $likesQuery)
    {
        $form = $this->createForm(CommentType::class);

        $posts = $postsQuery->getById((int)$id->getId());

        $comments = $this->commentRepository->findBy([], [
            'post' => 'DESC'
        ]);

        $likes = $likesQuery->countLikesByPost($id);

        foreach($comments as $comment) {
            if($comment->getPost()->getId() == $id->getId()){
                $postWithId[] = $comment;
            }
        }

        return $this->render('post.html.twig', [
            'post' => $posts[0],
            'form' => $form->createView(),
            'comments' => $postWithId ?? null,
            'likes' => $likes ?? null,
        ]);
    }
}