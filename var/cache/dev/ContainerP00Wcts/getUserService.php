<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.4bDkRdf.App\Entity\Users\User' shared service.
     *
     * @return \App\Entity\Users\User
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service ".service_locator.4bDkRdf": it references class "App\\Entity\\Users\\User" but no such service exists.');
    }
}