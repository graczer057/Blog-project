<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExpireControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\users\ExpireController' shared autowired service.
     *
     * @return \App\Controller\users\ExpireController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Users/UseCase/ExpireUser/Responder.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/users/ExpireController.php';

        $container->services['App\\Controller\\users\\ExpireController'] = $instance = new \App\Controller\users\ExpireController();

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Controller\\users\\ExpireController', $container));

        return $instance;
    }
}
