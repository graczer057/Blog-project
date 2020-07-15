<?php

namespace App\Controller;

use App\Adapter\Post\Posts;
use App\Adapter\Post\PostsQuery;
use App\Adapter\Core\Transaction;
use App\Entity\Posts\Post;
use App\Entity\Posts\UseCase\CreatePost;
use App\Form\Posts\AddPostType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Posts\UseCase\CreatePost\Responder as CreateCategoryResponder;


/**
 * Class PostsController
 * @package App\Controller
 */

class PostsController extends AbstractController implements CreateCategoryResponder
{
    private $PostRepository;

    public function __construct(
        PostRepository $PostRepository
    ){
        $this->PostRepository = $PostRepository;
    }

    /**
     * @Route("/posts", name="posts_index", methods={"GET"})
     */

    public function indexAction(PostsQuery $postsQuery){
        return $this->render('posts\index.html.twig',[
           'posts' => $postsQuery->getAll("1"),
        ]);
    }

    /**
     * @Route("/post/add", name="posts_add", methods={"GET"})
     * @Route("/post/create", name="posts_create", methods={"POST"})
     * @param string $info
     * @param string $title
     * @param bool $is_active
     * @param \DateTime $add_date
     * @param Request $request
     * @param PostsQuery $postsQuery
     * @param CreatePost $createPost
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Throwable
     */
    public function addAction(Request $request, PostsQuery $postsQuery, CreatePost $createPost){

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

            $createPost->execute($command);

            return $this->redirectToRoute('homepage',[]);
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
