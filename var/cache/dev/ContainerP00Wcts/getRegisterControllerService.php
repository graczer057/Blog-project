<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\users\RegisterController' shared autowired service.
     *
     * @return \App\Controller\users\RegisterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Users/UseCase/CreateUser/Responder.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/users/RegisterController.php';

        $container->services['App\\Controller\\users\\RegisterController'] = $instance = new \App\Controller\users\RegisterController();

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Controller\\users\\RegisterController', $container));

        return $instance;
    }
}
