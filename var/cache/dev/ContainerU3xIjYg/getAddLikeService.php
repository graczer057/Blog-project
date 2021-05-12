<?php

namespace ContainerU3xIjYg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddLikeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Likes\UseCase\addLike' shared autowired service.
     *
     * @return \App\Entity\Likes\UseCase\addLike
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Likes\\UseCase\\addLike.php';

        return $container->services['App\\Entity\\Likes\\UseCase\\addLike'] = new \App\Entity\Likes\UseCase\addLike(($container->services['application_like'] ?? $container->load('getApplicationLikeService')), ($container->services['doctrine_application_transaction'] ?? $container->load('getDoctrineApplicationTransactionService')));
    }
}
