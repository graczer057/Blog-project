<?php


namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ListController
 * @package App\Controller
 */

class ListController extends AbstractController
{
    private $PostRepository;

    public function __construct(
        PostRepository $postRepository
    ){
        $this->PostRepository = $postRepository;
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
}