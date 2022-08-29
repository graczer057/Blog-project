<?php

namespace ContainerP00Wcts;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActivateUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Users\UseCase\ActivateUser' shared autowired service.
     *
     * @return \App\Entity\Users\UseCase\ActivateUser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Entity/Users/UseCase/ActivateUser.php';

        $container->services['App\\Entity\\Users\\UseCase\\ActivateUser'] = $instance = new \App\Entity\Users\UseCase\ActivateUser(($container->services['Users'] ?? $container->load('getUsers2Service')), ($container->services['application_Newsletter'] ?? $container->load('getApplicationNewsletterService')), ($container->services['doctrine_application_transaction'] ?? $container->load('getDoctrineApplicationTransactionService')), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));

        $instance->setContainer(($container->privates['.service_locator.0QcI221'] ?? $container->load('get_ServiceLocator_0QcI221Service'))->withContext('App\\Entity\\Users\\UseCase\\ActivateUser', $container));

        return $instance;
    }
}
