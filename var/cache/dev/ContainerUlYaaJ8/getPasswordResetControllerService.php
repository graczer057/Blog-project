<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordResetControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\users\PasswordResetController' shared autowired service.
     *
     * @return \App\Controller\users\PasswordResetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Users/UseCase/PasswordResetUser/Responder.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/users/PasswordResetController.php';

        $container->services['App\\Controller\\users\\PasswordResetController'] = $instance = new \App\Controller\users\PasswordResetController();

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Controller\\users\\PasswordResetController', $container));

        return $instance;
    }
}