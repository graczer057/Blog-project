<?php

namespace ContainerUlYaaJ8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Users\UseCase\CreateUser' shared autowired service.
     *
     * @return \App\Entity\Users\UseCase\CreateUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Entity/Users/UseCase/CreateUser.php';

        return $container->services['App\\Entity\\Users\\UseCase\\CreateUser'] = new \App\Entity\Users\UseCase\CreateUser(($container->services['Users'] ?? $container->load('getUsers2Service')), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['router'] ?? $container->getRouterService()), ($container->services['doctrine_application_transaction'] ?? $container->load('getDoctrineApplicationTransactionService')));
    }
}
