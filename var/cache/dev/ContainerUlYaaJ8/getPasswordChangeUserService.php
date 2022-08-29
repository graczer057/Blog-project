<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordChangeUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Users\UseCase\PasswordChangeUser' shared autowired service.
     *
     * @return \App\Entity\Users\UseCase\PasswordChangeUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Users/UseCase/PasswordChangeUser.php';

        $container->services['App\\Entity\\Users\\UseCase\\PasswordChangeUser'] = $instance = new \App\Entity\Users\UseCase\PasswordChangeUser(($container->services['Users'] ?? $container->load('getUsers2Service')), ($container->services['doctrine_application_transaction'] ?? $container->load('getDoctrineApplicationTransactionService')));

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Entity\\Users\\UseCase\\PasswordChangeUser', $container));

        return $instance;
    }
}
