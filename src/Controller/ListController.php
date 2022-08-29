<?php

namespace App\Controller;

use App\Adapter\Like\Likes;
use App\Adapter\Like\LikesQuery;
use App\Entity\Comments\UseCase\CreateComment;
use App\Entity\Likes\UseCase\addLike;
use App\Entity\Likes\UseCase\unlike;
use App\Entity\Posts\Post;
use App\Entity\Users\User;
use App\Form\Comment\CommentType;
use App\Repository\CommentRepository;
use App\Repository\LikeRepository;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    private $PostRepository;
    private $commentRepository;
    private $likeRepository;
    private $entityManager;

    public function __construct(
        PostRepository $postRepository,
        CommentRepository $commentRepository,
        LikeRepository $likeRepository,
        EntityManagerInterface $entityManager,
    )
    {
        $this->PostRepository = $postRepository;
        $this->commentRepository = $commentRepository;
        $this->likeRepository = $likeRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="homepage", methods={"GET"})
     */
    public function HomePage()
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

        $like = $this->likeRepository->findOneBy(['user' => $user, 'post' => $id]);

        if(!$like){
            $command = new addLike\Command(
                $user,
                $id
            );

            $addLike->execute($command);

            return new JsonResponse([
                'status' => 'success',
                'statusMsg' => 'Polajkowałeś post',
            ], 200);
        }else{
            return new JsonResponse([
                'status' => 'error',
                'statusMsg' => 'Już polubiłeś ten post',
            ], 404);
        }
    }

    /**
     * @Route("/unlike/post/{id}", name="app_unlike")
     */
    public function unlike(Post $id){
        /** @var User $user */
        $user = $this->getUser();

        $like = $this->likeRepository->findOneBy(['user' => $user, 'post' => $id]);

        if($like){
            $this->entityManager->remove($like);
            $this->entityManager->flush();

            return new JsonResponse([
                'status' => 'success',
                'statusMsg' => 'Już nie lubisz tego postu',
            ], 200);
        }else{
            return new JsonResponse([
                'status' => 'error',
                'statusMsg' => 'Już usunąłeś polubienie',
            ], 404);
        }
    }

    /**
     * @Route("/create/comment/{id}", name="create_comment", methods={"POST"})
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
                'statusMsg' => 'Dodałeś komentarz',
            ], 200);
        }
        return new JsonResponse([
            'status' => 'error',
            'statusMsg' => 'Komentarz już został dodany',
        ], 400);
    }

    /**
     * @Route("/posts/{id}/show", name="see", methods={"GET", "POST"})
     */
    public function Post(Post $id, LikesQuery $likesQuery)
    {
        /** @var User $user */
        $user = $this->getUser();
        $form = $this->createForm(CommentType::class);

        $posts = $this->PostRepository->findOneBy(['id' => (int)$id->getId()]);

        $comments = $this->commentRepository->findBy([], [
            'post' => 'DESC'
        ]);

        $likes = $likesQuery->countLikesByPost($id);
        $like = $this->likeRepository->findOneBy(['user' => $user, 'post' => $id]);

        foreach($comments as $comment) {
            if($comment->getPost()->getId() == $id->getId()){
                $postWithId[] = $comment;
            }
        }

        return $this->render('post.html.twig', [
            'post' => $posts,
            'form' => $form->createView(),
            'comments' => $postWithId ?? null,
            'likes' => $likes ?? null,
            'like' => $like ?? null,
        ]);
    }
}