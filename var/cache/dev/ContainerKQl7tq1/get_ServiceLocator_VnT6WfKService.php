<?php

namespace ContainerKQl7tq1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VnT6WfKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VnT6WfK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VnT6WfK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.VnT6WfK.App\\Entity\\Users\\User', NULL, 'Cannot autowire service ".service_locator.VnT6WfK": it references class "App\\Entity\\Users\\User" but no such service exists.'],
        ], [
            'user' => 'App\\Entity\\Users\\User',
        ]);
    }
}
