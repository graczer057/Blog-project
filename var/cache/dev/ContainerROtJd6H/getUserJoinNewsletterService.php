<?php

namespace ContainerROtJd6H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserJoinNewsletterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter' shared autowired service.
     *
     * @return \App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter.php';

        $container->services['App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter'] = $instance = new \App\Entity\Newsletter\Newsletters\UseCase\UserJoinNewsletter(($container->services['Users'] ?? $container->load('getUsers2Service')), ($container->services['application_Newsletter'] ?? $container->load('getApplicationNewsletterService')), ($container->services['doctrine_application_transaction'] ?? $container->load('getDoctrineApplicationTransactionService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Entity\\Newsletter\\Newsletters\\UseCase\\UserJoinNewsletter', $container));

        return $instance;
    }
}
