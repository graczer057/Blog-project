<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VkNSdodService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vkNSdod' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vkNSdod'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'id' => ['privates', '.errored..service_locator.vkNSdod.App\\Entity\\Posts\\Post', NULL, 'Cannot autowire service ".service_locator.vkNSdod": it references class "App\\Entity\\Posts\\Post" but no such service exists.'],
            'likesQuery' => ['services', 'App\\Adapter\\Like\\LikesQuery', 'getLikesQueryService', true],
        ], [
            'id' => 'App\\Entity\\Posts\\Post',
            'likesQuery' => 'App\\Adapter\\Like\\LikesQuery',
        ]);
    }
}
