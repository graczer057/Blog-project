<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateCommentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Comments\UseCase\CreateComment' shared autowired service.
     *
     * @return \App\Entity\Comments\UseCase\CreateComment
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Comments/UseCase/CreateComment.php';

        $container->services['App\\Entity\\Comments\\UseCase\\CreateComment'] = $instance = new \App\Entity\Comments\UseCase\CreateComment(($container->services['application_comment'] ?? $container->load('getApplicationCommentService')), ($container->services['doctrine_application_transaction'] ?? $container->load('getDoctrineApplicationTransactionService')));

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Entity\\Comments\\UseCase\\CreateComment', $container));

        return $instance;
    }
}