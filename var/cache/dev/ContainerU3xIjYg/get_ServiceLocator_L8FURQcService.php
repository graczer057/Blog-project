<?php

namespace ContainerU3xIjYg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L8FURQcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.L8FURQc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.L8FURQc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'newsletter' => ['privates', '.errored..service_locator.L8FURQc.App\\Entity\\Newsletter\\Newsletter', NULL, 'Cannot autowire service ".service_locator.L8FURQc": it references class "App\\Entity\\Newsletter\\Newsletter" but no such service exists.'],
        ], [
            'newsletter' => 'App\\Entity\\Newsletter\\Newsletter',
        ]);
    }
}
