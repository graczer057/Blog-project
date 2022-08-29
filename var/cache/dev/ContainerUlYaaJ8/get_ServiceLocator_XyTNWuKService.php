<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XyTNWuKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xyTNWuK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xyTNWuK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'createUser' => ['services', 'App\\Entity\\Users\\UseCase\\CreateUser', 'getCreateUserService', true],
        ], [
            'createUser' => 'App\\Entity\\Users\\UseCase\\CreateUser',
        ]);
    }
}
