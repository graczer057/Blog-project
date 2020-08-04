<?php


namespace App\Controller;

use App\Adapter\Post\PostsQuery;
use App\Entity\Posts\Post;
use App\Repository\PostRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGenerator;

/**
 * Class ListController
 * @package App\Controller
 */

class ListController extends AbstractController
{
    private $PostRepository;
    private $PostsQuery;

    public function __construct(
        PostRepository $postRepository,
        PostsQuery $postsQuery
    ){
        $this->PostRepository = $postRepository;
        $this->PostsQuery = $postsQuery;
    }

    /**
     * @return Response
     * @Route("/", name="homepage", methods={"GET"})
     */
    public function HomePage(): Response{
        $posts = $this->PostRepository->findBy([], [
            'info' => 'DESC'
        ]);

        return $this->render('homepage.html.twig', [
           'posts' => $posts
        ]);
    }

    /**
     * @param int $id
     * @param PostsQuery $postsQuery
     * @return Response
     * @Route("/posts/{id}/show", name="see", methods={"GET"})
     */
    public function Post(Post $id, PostsQuery $postsQuery){
        return $this->render('post.html.twig', [
            'post' => $postsQuery->getById((int) $id->getId())
        ]);
    }
}