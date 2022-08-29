<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6ZkFpRQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6ZkFpRQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6ZkFpRQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'id' => ['privates', '.errored..service_locator.6ZkFpRQ.App\\Entity\\Posts\\Post', NULL, 'Cannot autowire service ".service_locator.6ZkFpRQ": it references class "App\\Entity\\Posts\\Post" but no such service exists.'],
            'likes' => ['services', 'App\\Adapter\\Like\\Likes', 'getLikesService', true],
            'unlike' => ['services', 'App\\Entity\\Likes\\UseCase\\unlike', 'getUnlikeService', true],
        ], [
            'id' => 'App\\Entity\\Posts\\Post',
            'likes' => 'App\\Adapter\\Like\\Likes',
            'unlike' => 'App\\Entity\\Likes\\UseCase\\unlike',
        ]);
    }
}
